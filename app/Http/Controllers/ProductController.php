<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function get()
    {
        if (session('admin')) {
            $products = DB::table('products')->get();
            return view('admin.products', ['products' => $products]);
        } else {
            return redirect('admin-login');
        }
    }

    public function create(Request $request)
    {

        if ($request->hasFile('product_image')) {

            $file = $request->file('product_image');
            $tujuan_upload = 'images';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);
        }


        DB::table('products')->insert([
            'product_name' => $request->product_name,
            'product_type' => $request->product_type,
            'featured' => $request->featured,
            'description' => $request->description,
            'price' => $request->price,
            'colour' => $request->colour,
            'heel_height' => $request->heel_height,
            'product_image' => $namafoto,
            'created_at' =>  now(),
        ]);

        return redirect('/admin/products');
    }

    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('/admin/products');
    }

    public function edit($id)
    {
        $data['products'] = DB::table('products')->where('id', $id)->get();
        $data['ktgr']= Post::get();
      
        return view('admin.update', $data);
    }

    
    public function add()
    {
        $data['ktgr']= Post::get();
      
        return view('admin.add_product', $data);
    }

    public function update(Request $request)
    {

        if ($request->hasFile('product_image')) {

            $file = $request->file('product_image');
            $tujuan_upload = 'images';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);


            DB::table('products')->where('id', $request->id)->update([
                'product_name' => $request->product_name,
                'product_type' => $request->product_type,
                'featured' => $request->featured,
                'description' => $request->description,
                'price' => $request->price,
                'colour' => $request->colour,
                'heel_height' => $request->heel_height,
                'product_image' => $namafoto
            ]);
        }
        else {
            DB::table('products')->where('id', $request->id)->update([
                'product_name' => $request->product_name,
                'product_type' => $request->product_type,
                'featured' => $request->featured,
                'description' => $request->description,
                'price' => $request->price,
                'colour' => $request->colour,
                'heel_height' => $request->heel_height,
            ]);
        }

        

        return redirect('/admin/products');
    }
}
