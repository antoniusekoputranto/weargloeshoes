<?php

namespace App\Http\Controllers;

use App\Models\sizecartinfo;
use App\Models\sizecart;
use Illuminate\Http\Request;

class SizecartinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sizecartinfos'] =  sizecartinfo::first();
        $data['sizecarts'] =  sizecart::get();
        if (empty(  $data['sizecartinfos'])) {
            # code...
            return view('admin.sizecartinfo.add_sizecartinfo');
        } else {
            # code...
            $sizecartinfos = sizecartinfo::first();
            return view('admin.sizecartinfo.update_sizecartinfo', $data);
        }
        
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
        if (session('admin')) {

            $file = $request->file('image');
            $tujuan_upload = 'images/sizecartinfo';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);
    
            sizecartinfo::insert([
    
                'image' => $namafoto,
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
     * @param  \App\Models\sizecartinfo  $sizecartinfo
     * @return \Illuminate\Http\Response
     */
    public function show(sizecartinfo $sizecartinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sizecartinfo  $sizecartinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(sizecartinfo $sizecartinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sizecartinfo  $sizecartinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sizecartinfo $sizecartinfo)
    {
        if (session('admin')) {

            $file = $request->file('image');
            $tujuan_upload = 'images/sizecartinfo';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);

            sizecartinfo::first()->update([
    
                'image' => $namafoto,

            ]);
            return redirect('/admin/sizecartinfo');

        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sizecartinfo  $sizecartinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(sizecartinfo $sizecartinfo)
    {
        //
    }
}
