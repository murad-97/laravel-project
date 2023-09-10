<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;

use App\Models\User;



class ProfileController extends Controller
{

    public function index()
    {
       


      


            // [
            //     'volunteer_name' => $volunteer_name,
            //     'name' => $name,
            //     'qty'=> $qty,
            //     'price'=> $price,
            //     'main_picture'=> $main_picture

            // ]);
            
    }



    public function googleLogin()
    {
        return socialite::driver('google')->redirect();
    }
    public function googleHandle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();

            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->password = "123456mohammad";
                $findUser->save();

            }
            session()->put('id', $findUser->id);
            session()->put('type', $findUser->type);
            return redirect('/');

        } catch (Exception $e) {
            dd($e->getMessage());

        }
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $users = DB::select('SELECT 
        users.id,
        volnteers.volunteer_name,
        categories.name,
        volnteeritems.qty,
        volnteerdetails.price,
        volnteers.main_picture
        FROM volnteers
        JOIN volnteeritems 
                    ON volnteers.id = volnteeritems.volunteer_id
        JOIN volnteerdetails 
                     ON volnteers.id = volnteerdetails.volunteer_id
        JOIN categories 
                     ON volnteers.category_id = categories.id
        JOIN users 
                    ON volnteerdetails.user_id = users.id
                   AND volnteeritems.user_id = users.id 
                   where users.id = ?', [1]);
        // dd($users);
        return view('profile.edit', [
            'user' => $request->user(),
            "users"=>$users
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

}