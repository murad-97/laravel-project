<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;



class AdminDashhController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('Dash.admin', compact('admins'));
    }
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dash.add_admin');
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

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)// Hash the password
            
        ]);
      
        return redirect('admin')->with('flash_message', 'User Admin!');

   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->route('admin.index')->with(['success' => 'Deleted successfully
        ']);
    }
}
