<?php

namespace App\Http\Controllers;

use App\Models\customerservice;
use Illuminate\Http\Request;

class CustomerserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('admin')) {

            $data['customerservices'] =  customerservice::get();
            return view('admin.customerservice.show_customerservice', $data);

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
            return view('admin.customerservice.add_customerservice');
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
  
            $file = $request->file('image');
            $tujuan_upload = 'images/customerservice';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);
    
            customerservice::insert([
    
                'image' => $namafoto,
                'description_customer_service' => $request->description_customer_service,
                'active' => $request->active,
                'created_at' =>  now(),
            ]);
    
            return redirect('/admin/show_customerservice');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customerservice  $customerservice
     * @return \Illuminate\Http\Response
     */
    public function show(customerservice $customerservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customerservice  $customerservice
     * @return \Illuminate\Http\Response
     */
    public function edit(customerservice $customerservice, $id)
    {
        if (session('admin')) {
  
            $data['customerservices'] = customerservice::where('id', $id)->first();
            return view('admin.customerservice.update_customerservice', $data);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customerservice  $customerservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customerservice $customerservice, $id)
    {
        if (session('admin')) {
  
            if ($request->hasFile('image')) {
                
                $file = $request->file('image');
                $tujuan_upload = 'images/customerservice';
                $namafoto = time() . '.' . $file->getClientOriginalExtension();
                $file->move($tujuan_upload, $namafoto);
    
                customerservice::find($id)->update([
    
                    'image' => $namafoto,
                    'description_customer_service' => $request->description_customer_service,
                    'active' => $request->active,

                ]);
            }
            else {
                customerservice::find($id)->update([
                    'description_customer_service' => $request->description_customer_service,
                    'active' => $request->active,

                ]);
            }
    
            return redirect('/admin/show_customerservice');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customerservice  $customerservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(customerservice $customerservice, $id)
    {
        if (session('admin')) {
            customerservice::find($id)->delete();
            return redirect('/admin/show_customerservice');
        } else {
            return redirect('admin-login');
        }
    }
}
