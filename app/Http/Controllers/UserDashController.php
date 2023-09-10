<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDashController extends Controller
{
    //

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('Dash.user_dash', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        User::where(['id'=>$id])->delete();
        return redirect()->route('allusers')->with (['success'=>'job deleted successfully']);
        // return redirect('jobResource.job')->with (['success'=>'user deleted successfully']);
    }
}
