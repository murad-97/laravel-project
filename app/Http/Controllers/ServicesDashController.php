<?php

namespace App\Http\Controllers;

use App\Models\Volnteer;


use Illuminate\Http\Request;

class ServicesDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sercvvolnteer= Volnteer::where('category_id', 1)->get();
        return view('Dash.services', compact('sercvvolnteer'));

        $equipment= Volnteer::where('category_id', 2)->get();
        return view('Dash.services', compact('equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dash.addservice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Volnteer::create([
            'volunteer_name' => $request->volunteer_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'description' => $request->description,
            'main_picture'=>'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg'
        ]);

        return redirect()->route('services.index')->with(['success' => 'created successfully
        ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volnteer $volnteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $ser = Volnteer::select('*')->find($id); 

        // return redirect()->route('services.editserv',['data'=>$ser]);
        $data =Volnteer::find($id);
        return view('Dash.editserv', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteer  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['volunteer_name'] = $request->name;
        $data['description'] = $request->description;
        $data['price'] = $request->price;

        Volnteer::where(['id' => $id])->update($data);
        return redirect()->route('services.index')->with(['success' => 'Updated successfully
        ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Volnteer::destroy($id);
        return redirect()->route('services.index')->with(['success' => 'Deleted successfully
        ']);
    }
}
