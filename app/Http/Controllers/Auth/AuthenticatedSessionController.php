<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        if (auth()->guard('admin')->check()) {
            return view("Admin.auth.adminlodin"); // Display admin login view if an admin is authenticated.
        } else {
             // Display user login view otherwise.
            Redirect::setIntendedUrl(url()->previous());
            return view('auth.login');
        }
    }
                                    
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            ],
        ]);

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        
      
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
     
        return redirect()->intended("/");
        
    }
}
