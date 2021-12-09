<?php

namespace App\Http\Controllers;

use App\Models\customnote;
use App\Models\customtestimony;
use Illuminate\Http\Request;

class CustomnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('admin')) {
            $data['customnotes'] =  customnote::get();
            $data['customtestimonys'] =  customtestimony::get();
            return view('admin.custom.show_customnote', $data);

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
            return view('admin.custom.add_customnote');
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
            customnote::insert([
                'description_note' => $request->description_note,
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
     * @param  \App\Models\customnote  $customnote
     * @return \Illuminate\Http\Response
     */
    public function show(customnote $customnote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customnote  $customnote
     * @return \Illuminate\Http\Response
     */
    public function edit(customnote $customnote, $id)
    {
        if (session('admin')) {
            $data['customnotes'] = customnote::where('id', $id)->first();
            return view('admin.custom.update_customnote', $data);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customnote  $customnote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customnote $customnote, $id)
    {
        if (session('admin')) {
            customnote::find($id)->update([
                'description_note' => $request->description_note,
                'active' => $request->active,
            ]);
    
            return redirect('/admin/customnote/show_customnote');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customnote  $customnote
     * @return \Illuminate\Http\Response
     */
    public function destroy(customnote $customnote, $id)
    {
        if (session('admin')) {
            customnote::find($id)->delete();
            return redirect('/admin/customnote/show_customnote');
        } else {
            return redirect('admin-login');
        }
    }
}
