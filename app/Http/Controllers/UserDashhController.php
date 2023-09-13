<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserDashhController extends Controller
{

    public function index()
    {
        //
        $user = User::all();
        return view('Dash.user_dash', compact('user'));
    }


  
    

    // public function goToAddUser()
    // {
    //     $users = User::all();
    //     return view('Dash.add_user_dash', compact('users'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Dash.add_user_dash');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        // $request->validate([
        //     'name' => 'required |max:30',
        //     'email' => 'required|email|unique:users',           
        //     'password' => [
        //         'required',
        //         'min:8',
        //         'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
        //     ]
        // ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)// Hash the password
            
        ]);

        return redirect('user')->with('flash_message', 'User Added!');

        // $input = $request->all();
        // User::create($input);

        // return redirect()->route('user.index')
        //                 ->with('success','Category created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function show(User $volnteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function edit(User $volnteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $volnteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('user.index')->with(['success' => 'Deleted successfully
        ']);
}
}