<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\imageproduct;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function get()
    {
        if (session('admin')) {
            $products = DB::table('products')->orderBy('created_at','desc')->paginate(10);
            return view('admin.products', ['products' => $products]);
        } else {
            return redirect('admin-login');
        }
    }

    public function create(Request $request)
    {
        $id = DB::table('products')->insertGetId([
            'product_name' => $request->product_name,
            'product_type' => $request->product_type,
            'featured' => $request->featured,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'colour' => $request->colour,
            'heel_height' => $request->heel_height,
            'active' => $request->active,
            'created_at' =>  now(),
        ]);
        $tujuan_upload = 'images/product/imageproduct';

        if ($request->hasFile('image_product_1')) {
  
            $file = $request->file('image_product_1');
            $namafoto1 = time() . '.' . $file->getClientOriginalName();
            $file->move($tujuan_upload, $namafoto1);

        };

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
            
            // dd($id);
            imageproduct::insert([
                'product' => $id,
                  

                'image_product_1' => $namafoto1??null,
                'image_product_2' => $namafoto2??null,
                'image_product_3' => $namafoto3??null,
                'thumbnail' => $request->thumbnail,
                'created_at' =>  now(),
            ]);

            $thumbnail = $request->thumbnail;

            switch ($thumbnail) {
                case "1":
                    $thumbnail = imageproduct::where('product',$id)->first()->image_product_1;
                  break;
                case "2":
                    $thumbnail = imageproduct::where('product',$id)->first()->image_product_2;
                  break;
                case "3":
                    $thumbnail = imageproduct::where('product',$id)->first()->image_product_3;
                  break;
                default:
                $image_preview=imageproduct::where('product',$id)->first();
                // $image_preview->image_product_1
                $thumbnail = $image_preview->image_product_1!=null?$image_preview->image_product_1:($image_preview->image_product_2!=null?$image_preview->image_product_2:($image_preview->image_product_3!=null?$image_preview->image_product_3:null));
              }

            // return redirect('/admin/show_imageproduct');
            // dd($thumbnail);

            DB::table('products')->where('id', $id)->update([
                'product_image' => $thumbnail]);

 

        // return redirect('/admin/create_imageproduct/');
        return redirect('/admin/products');

        
    }

    public function discount(Request $request)
    {
dd($request);

        DB::table('products')->where('id', $request->productid)->update([
            
            'discount' => $request->discount,
            
        ]);
        return redirect('/admin/products');

    }



    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        imageproduct::where('product', $id)->delete();
        return redirect('/admin/products');
    }

    public function edit($id)
    {
        $data['products'] = DB::table('products')->where('id', $id)->first();
        $data['image'] = imageproduct::where('product', $id)->first();
        $data['ktgr']= Post::get();
    //   dd($data);
        return view('admin.update', $data);
    }

    
    public function add()
    {
        $data['ktgr']= Post::get();
      
        return view('admin.add_product', $data);
    }

    public function update(Request $request)
    {

        // if ($request->hasFile('product_image')) {

        //     $file = $request->file('product_image');
        //     $tujuan_upload = 'images';
        //     $namafoto = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move($tujuan_upload, $namafoto);


            DB::table('products')->where('id', $request->id)->update([
                'product_name' => $request->product_name,
                'product_type' => $request->product_type,
                'featured' => $request->featured,
                'description' => $request->description,
                'price' => $request->price,
                'discount' => $request->discount,
                'colour' => $request->colour,
                'heel_height' => $request->heel_height,
                'active' => $request->active,
            ]);
        // }
        // else {
        //     DB::table('products')->where('id', $request->id)->update([
        //         'product_name' => $request->product_name,
        //         'product_type' => $request->product_type,
        //         'featured' => $request->featured,
        //         'description' => $request->description,
        //         'price' => $request->price,
        //         'colour' => $request->colour,
        //         'heel_height' => $request->heel_height,
        //     ]);
        // }

        $tujuan_upload = 'images/product/imageproduct';

        if ($request->hasFile('image_product_1')) {
  
            if ($request->image1==1) {
                # code...
                $file = $request->file('image_product_1');
                $namafoto1 = time() . '.' . $file->getClientOriginalName();
                $file->move($tujuan_upload, $namafoto1);
            }
   

        };

        if ($request->hasFile('image_product_2')) {

            if ($request->image2==1) {
                # code...
                $file = $request->file('image_product_2');
                $namafoto2 = time() . '.' . $file->getClientOriginalName();
                $file->move($tujuan_upload, $namafoto2);
            
            }
 
            

        };

        if ($request->hasFile('image_product_3')) {

            if ($request->image3==1) {
                # code...
                $file = $request->file('image_product_3');
                $namafoto3 = time() . '.' . $file->getClientOriginalName();
                $file->move($tujuan_upload, $namafoto3);
            } 
            
    
        };
        $old=imageproduct::where('product', $request->id)->first();
        
        imageproduct::where('product', $request->id)->update([
            'product' => $request->id,
            'image_product_1' => $request->image1==1?$namafoto1:($request->image1==0?null:$old->image_product_1),
            'image_product_2' => $request->image2==1?$namafoto2:($request->image2==0?null:$old->image_product_2),
            'image_product_3' => $request->image3==1?$namafoto3:($request->image3==0?null:$old->image_product_3),
            'thumbnail' => $request->thumbnail,
        ]);

        $id = $request->id;

        $thumbnail = $request->thumbnail;
        switch ($thumbnail) {
            case "1":
                $thumbnail = imageproduct::where('product',$id)->first()->image_product_1;
              break;
            case "2":
                $thumbnail = imageproduct::where('product',$id)->first()->image_product_2;
              break;
            case "3":
                $thumbnail = imageproduct::where('product',$id)->first()->image_product_3;
              break;
            default:
            $image_preview=imageproduct::where('product',$id)->first();
            // $image_preview->image_product_1
            $thumbnail = $image_preview->image_product_1!=null?$image_preview->image_product_1:($image_preview->image_product_2!=null?$image_preview->image_product_2:($image_preview->image_product_3!=null?$image_preview->image_product_3:null));
          }

          DB::table('products')->where('id', $id)->update([
            'product_image' => $thumbnail]);
        return redirect('/admin/products');
    }

    // public function discount_price(Request $request){
    //     $itemnew = DB::all()->toArray();
    //     $discountitem = array();
    //     for ($i=0; $i < sizeof($itemnew); $i++) {
    //         $temp = [
    //             'product_name'=>$itemnew[$i]['product_name'],
    //             'price'=>$itemnew[$i]['price'],
    //             'discount'=>$itemnew[$i]['discount'],
    //             'afterdiscount'=>$itemnew[$i]['price']-($itemnew[$i]['discount']*$itemnew[$i]['price']),
    //         ];
    //         array_push($temp);
    //     }
    
    //     $data=[
    //         'products'=>$discountitem
    //     ];
    
    //     return view('admin.products',$data);
    
    // }
}
