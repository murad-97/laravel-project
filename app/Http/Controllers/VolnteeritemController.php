<?php

namespace App\Http\Controllers;

use App\Models\Volnteeritem;
use App\Models\Volnteer;
use Illuminate\Http\Request;

class VolnteeritemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $volnteer = Volnteer::find($id);
       

        return view("pages.item volunteer")->with("volnteer",$volnteer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number' => ['required', 'regex:/^07\d{8}$/'],
            'location' => ['required'],
            'qty' => ['required', 'numeric'],

        ]);
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function show(Volnteeritem $volnteeritem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function edit(Volnteeritem $volnteeritem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volnteeritem $volnteeritem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volnteeritem $volnteeritem)
    {
        //
    }
}
