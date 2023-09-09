<?php

namespace App\Http\Controllers;

use App\Models\Volnteer;
use App\Models\Category;
use App\Models\Volnteerdetail;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;


class VolnteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         
         
       $products = Volnteer::where('category_id', $id)
            ->orderBy('volunteer_name')
            ->paginate(6);
       

        $categories = Category::all();
        return view('pages.causes', [
            'categories' => $categories,
            'products' => $products

        ]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
   
        $categories = Category::all();
        $query = Volnteer::query();
        if (isset($request->title) && $request->title != null) {
            
            $query->where('volunteer_name', 'LIKE', '%' . $request->title . '%');

        }
        $products = $query->get();




        return view('pages.causes', ['products' => $products, 'categories' => $categories,]);
    // }
    }

    

    public function orderbyname($id)
    {
        $categories = Category::all();
         $products = Volnteer::select(['*'])
            ->orderBy('volunteer_name')
            ->paginate(6);
        return view('pages.causes', ['products' => $products, 'categories' => $categories]);
    }
    
   
    
}
