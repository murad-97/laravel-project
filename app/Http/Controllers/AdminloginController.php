<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Volnteer;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
       if (session()->has("adminid")) {     
        $recordCount = User::count();
        $volunteercount = Volnteer::count();
        $items = Volnteer::select('users.name', 'users.email', 'volnteers.volunteer_name', 'volnteeritems.qty', 'volnteeritems.number', 'volnteeritems.location')
        ->join('volnteeritems', 'volnteers.id', '=', 'volnteeritems.volunteer_id')
        ->join('categories', 'volnteers.category_id', '=', 'categories.id')
        ->join('users', 'users.id', '=', 'volnteeritems.user_id')
        ->get();
        $mouny = Volnteer::select('users.name', 'users.email', 'volnteers.volunteer_name',
        'volnteerdetails.price')
       ->join('volnteerdetails', 'volnteers.id', '=', 'volnteerdetails.volunteer_id')
       ->join('categories', 'volnteers.category_id', '=', 'categories.id')
       ->join('users', 'users.id', '=', 'volnteerdetails.user_id')
       ->get();
        $count = $items->count();
        $totalPrice = $mouny->sum('price');
        

        return view('Dash.Home')->with([
            'recordCount' => $recordCount,
            'count' => $count,
            'totalPrice' => $totalPrice,
            'volunteercount' => $volunteercount
        ]);
        
        

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
