<?php

namespace App\Http\Controllers;

use App\Models\Volnteerdetail;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function payment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config("paypal"));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route("paypal_success"),
                "cancel_url" => route("paypal_cancel")
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->price,
                    ]
                ]
            ]
        ]);
        // dd($response);
        if (isset($response["id"]) && $response["id"] != null) {
            foreach ($response["links"] as $link) {
                if ($link["rel"] === "approve") {
                    $volnteer = new Volnteerdetail;
                    $volnteer->user_id = 1;
                    $volnteer->volunteer_id = $request->id;
                    $volnteer->price = $request->price;
                    $volnteer->save();

                    return redirect()->away($link["href"]);
                }
            }
        } else {
            return redirect()->route("paypal_cancel");

        }

    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config("paypal"));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        if (isset($response["status"]) && $response["status"] == "COMPLETED") {





            return "paypal_complete";
        } else {
            return redirect()->route("paypal_cancel");

        }
    }
}