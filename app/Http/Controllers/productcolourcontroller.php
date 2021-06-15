<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productcolour;
use App\Models\productcolourimage;
use App\Http\Requests\productcolourrequest;

class productcolourcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $productcolours = product::find($id)->productcolours;
        return view ('admin/detailproduct',compact('productcolours'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin/detailcolourproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productcolourrequest $request,$id)
    {
        // $productcolour = new productcolour();
        $file = [
            "name" => Request()->name,
            "price" => Request()->price,
            "size" => Request()->size,
            "colour" => Request()->colour,
            "heel_height" => Request()->heel_height,
	        "size_chart" => Request()->size_chart,
            "image" => 'eko.jpg'
        ];

        // $productcolour = $file;
        // $product->productcolours->save($productcolour)

        $product = product::find($id)->productcolours()->create($file);

        return redirect("admin/products/detail/$id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$idcolour)
    {
        $productcolours = product::find($id)->productcolours->find($idcolour);
        // dd($productcolours);
        return view ('admin/detailcolourproductupdate',compact('productcolours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$idcolour)
    {
        // $productcolour = new productcolour();
        $file = [
            "name" => Request()->name,
            "price" => Request()->price,
            "size" => Request()->size,
            "colour" => Request()->colour,
            "heel_height" => Request()->heel_height,
            "size_chart" => Request()->size_chart,
            "image" => 'eko.jpg'
        ];

        // $productcolour = $file;
        // $product->productcolours->save($productcolour)

        $product = product::find($id)->productcolours()->find($idcolour)->update($file);

        return redirect("admin/products/detail/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$idcolour)
    {
        product::find($id)->productcolours()->find($idcolour)->delete();

        return redirect("admin/products/detail/$id");
    }
}
