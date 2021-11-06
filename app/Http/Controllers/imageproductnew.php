<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imageproduct;
use App\Models\product;

class imageproductnew extends Controller
{
    public function index($id)
    {
        if (session('admin')) {

            $image=  imageproduct::where('product', $id)->first();
            return response()->json([
                'image'=> $image
            ]);
        }
    }
}
