<?php

namespace App\Http\Controllers;

use App\Mail\ValMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ValController extends Controller
{
    public function Val()
    {
        return view('pages.index');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'msg' => $request->msg

        ];

        Mail::to($request->email)->send(new ValMail($details));
        return back()->with('message_sent1','Your message has been sent successfully');

        // Mail::to('husam-odat@outlook.com')->send(new ValMail($details));
        // return back()->with('message_sent','Your message has been sent successfully');


    }
}
