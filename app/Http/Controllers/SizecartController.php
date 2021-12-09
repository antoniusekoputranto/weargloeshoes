<?php

namespace App\Http\Controllers;

use App\Models\sizecart;
use Illuminate\Http\Request;

class SizecartController extends Controller
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
        if (session('admin')) {
            return view('admin.sizecartinfo.add_sizecart');
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
  
            sizecart::insert([
    
                'size' => $request->size,
                'foot_length' => $request->foot_length,
                'active' => $request->active,
                'created_at' =>  now(),
            ]);
    
            return redirect('/admin/sizecartinfo');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sizecart  $sizecart
     * @return \Illuminate\Http\Response
     */
    public function show(sizecart $sizecart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sizecart  $sizecart
     * @return \Illuminate\Http\Response
     */
    public function edit(sizecart $sizecart, $id)
    {
        if (session('admin')) {
            $data['sizecarts'] = sizecart::where('id', $id)->first();
            return view('admin.sizecartinfo.update_sizecart', $data);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sizecart  $sizecart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sizecart $sizecart, $id)
    {
        if (session('admin')) {

            sizecart::find($id)->update([

                'size' => $request->size,
                'foot_length' => $request->foot_length,
                'active' => $request->active,
            ]);
     
            return redirect('/admin/sizecartinfo');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sizecart  $sizecart
     * @return \Illuminate\Http\Response
     */
    public function destroy(sizecart $sizecart, $id)
    {
        if (session('admin')) {
            sizecart::find($id)->delete();
            return redirect('/admin/sizecartinfo');
        } else {
            return redirect('admin-login');
        }
    }
}
