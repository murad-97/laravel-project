<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
       if (session()->has("adminid")) {
       return view("Dash.Home");
       }else{
        return view("Admin.auth.adminlodin");
       }
    }

    // Handle the login request
    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if ($admin) {
            if ($request->password == $admin->password) {
                $request->session()->put('adminid', $admin->id);
                return redirect('/dash');
            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }

    }

    // Add a logout action if needed
    public function logout()
    {
       session()->pull("adminid");

        return redirect('/dash'); // You can customize the redirection
    }
}
