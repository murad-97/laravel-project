<?php

namespace App\Http\Controllers;

use App\Models\Volnteer;
use App\Models\Volnteerdetail;
use Illuminate\Http\Request;

class VolnteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $volnteer = Volnteer::find($id);
        $volnteerDetails = VolnteerDetail::where('volunteer_id', $id)->get();
        $price = 0;
        foreach($volnteerDetails as $volnteerDetail){
$price+=$volnteerDetail->price;
        }

        return view('pages.volunteer')->with("price",$price)->with("volnteer",$volnteer);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volnteer $volnteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volnteer $volnteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volnteer $volnteer)
    {
        //
    }
}
