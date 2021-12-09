<?php

namespace App\Http\Controllers;

use App\Models\customtestimony;
use Illuminate\Http\Request;

class CustomtestimonyController extends Controller
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
            return view('admin.custom.add_customtestimony');
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
  
            $file = $request->file('image_testimony');
            $tujuan_upload = 'images/custom/customtestimony';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);
    
            customtestimony::insert([
    
                'image_testimony' => $namafoto,
                'active' => $request->active,
                'created_at' =>  now(),
            ]);
    
            return redirect('/admin/customnote/show_customnote');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customtestimony  $customtestimony
     * @return \Illuminate\Http\Response
     */
    public function show(customtestimony $customtestimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customtestimony  $customtestimony
     * @return \Illuminate\Http\Response
     */
    public function edit(customtestimony $customtestimony, $id)
    {
        if (session('admin')) {
  
            $data['customtestimonys'] = customtestimony::where('id', $id)->first();
            return view('admin.custom.update_customtestimony', $data);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customtestimony  $customtestimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customtestimony $customtestimony, $id)
    {
        if (session('admin')) {

            if ($request->hasFile('image_testimony')) {


                $file = $request->file('image_testimony');
                $tujuan_upload = 'images/custom/customtestimony';
                $namafoto = time() . '.' . $file->getClientOriginalExtension();
                $file->move($tujuan_upload, $namafoto);

                customtestimony::find($id)->update([

                'image_testimony' => $namafoto,
                'active' => $request->active,

                ]);

            }
            else {
                customtestimony::find($id)->update([

                'active' => $request->active,

                ]);
            }

    
            return redirect('/admin/customnote/show_customnote');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customtestimony  $customtestimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(customtestimony $customtestimony, $id)
    {
        if (session('admin')) {
            customtestimony::find($id)->delete();
            return redirect('/admin/customnote/show_customnote');
        } else {
            return redirect('admin-login');
        }
    }
}
