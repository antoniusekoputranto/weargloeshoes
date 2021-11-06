<?php

namespace App\Http\Controllers;

use App\Models\imageproduct;
use App\Models\product;
use Illuminate\Http\Request;

class ImageproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('admin')) {

            $data['imageproducts'] =  imageproduct::get();
            return view('admin.product.imageproduct.show_imageproduct', $data);

        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session('admin')) {
            return view('admin.product.imageproduct.add_imageproduct');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session('admin')) {
            $tujuan_upload = 'images/product/imageproduct';
  
            $file = $request->file('image_product_1');
            $namafoto1 = time() . '.' . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namafoto1);

            if ($request->hasFile('image_product_2')) {

    
            $file = $request->file('image_product_2');
            $namafoto2 = time() . '.' . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namafoto2);

            };

            if ($request->hasFile('image_product_3')) {


            $file = $request->file('image_product_3');
            $namafoto3 = time() . '.' . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namafoto3);

            };
            $request->products;
            $id= product::orderBy('created_at','desc')->first()->id;
            // dd($id);
            imageproduct::insert([
                'product' => $id,
                'image_product_1' => $namafoto1,
                'image_product_2' => $namafoto2??null,
                'image_product_3' => $namafoto3??null,
                'created_at' =>  now(),
            ]);
            return redirect('/admin/show_imageproduct');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imageproduct  $imageproduct
     * @return \Illuminate\Http\Response
     */
    public function show(imageproduct $imageproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imageproduct  $imageproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(imageproduct $imageproduct, $id)
    {
        if (session('admin')) {
  
            $data['imageproducts'] = imageproduct::where('id', $id)->first();
            if ($data['imageproducts'] == null) {
                # code...
                return view('admin.product.imageproduct.add_imageproduct',compact('id'));

            } else {
                # code...
                return view('admin.product.imageproduct.update_imageproduct', $data);

            }
            
            return view('admin.product.imageproduct.update_imageproduct', $data);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imageproduct  $imageproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imageproduct $imageproduct, $id)
    {
        if (session('admin')) {
            $tujuan_upload = 'images/product/imageproduct';

            if ($request->hasFile('image_product_1')) {
  
            $file = $request->file('image_product_1');
            $namafoto1 = time() . '.' . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namafoto1);

            imageproduct::find($id)->update([
    
                'image_product_1' => $namafoto1,
               
            ]);

            };

            if ($request->hasFile('image_product_2')) {

    
            $file = $request->file('image_product_2');
            $namafoto2 = time() . '.' . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namafoto2);

            imageproduct::find($id)->update([
    
                'image_product_2' => $namafoto2,
               
            ]);

            };

            if ($request->hasFile('image_product_3')) {


            $file = $request->file('image_product_3');
            $namafoto3 = time() . '.' . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namafoto3);

            imageproduct::find($id)->update([
    
                'image_product_3' => $namafoto3,
               
            ]);

            };

    
    
            return redirect('/admin/show_imageproduct');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imageproduct  $imageproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(imageproduct $imageproduct, $id, $imagenumber)
    {
        if (session('admin')) {
            imageproduct::find($id)->update([
    
                $imagenumber => null,
               
            ]);
            return redirect('/admin/show_imageproduct');
        } else {
            return redirect('admin-login');
        }
    }
}
