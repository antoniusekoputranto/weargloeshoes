<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('admin')) {
            $events = event::get();
            return view('admin.event.show_event', ['events' => $events]);
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
            return view('admin.event.add_event');
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
  
            $file = $request->file('image_event');
            $tujuan_upload = 'images/event';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);
    
            event::insert([
    
                'image_event' => $namafoto,
                'link' => $request->link,
                'active' => $request->active,
                'created_at' =>  now(),
            ]);
    
            return redirect('/admin/show_event');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event, $id)
    {
        if (session('admin')) {
  
            $events = event::where('id', $id)->first();
            return view('admin.event.update_event', ['events' => $events]);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event, $id)
    {
        if (session('admin')) {
  
            if ($request->hasFile('image_event')) {
                
                $file = $request->file('image_event');
                $tujuan_upload = 'images/event';
                $namafoto = time() . '.' . $file->getClientOriginalExtension();
                $file->move($tujuan_upload, $namafoto);
    
                event::find($id)->update([
    
                    'image_event' => $namafoto,
                    'link' => $request->link,
                    'active' => $request->active,
                ]);
            }
            else {
                event::find($id)->update([
                    'link' => $request->link,
                    'active' => $request->active,
                ]);
            }
    
            return redirect('/admin/show_event');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event, $id)
    {
        if (session('admin')) {
            event::find($id)->delete();
            return redirect('/admin/show_event');
        } else {
            return redirect('admin-login');
        }
    }
}
