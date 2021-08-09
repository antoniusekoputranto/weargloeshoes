<?php

namespace App\Http\Controllers;

use App\Models\feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('admin')) {


            $feeds = feed::get();
            return view('admin.feed.show_feed', ['feeds' => $feeds]);

        //pilih  salah satu ats atau bwh// 

            // $data['feeds'] =  feed::get();
            // return view('admin.feed.show_feed', $data);


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
            return view('admin.feed.add_feed');
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
  
            $file = $request->file('image_feed');
            $tujuan_upload = 'images/feed';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);
    
            feed::insert([
    
                'image_feed' => $namafoto,
                'link' => $request->link,
                'active' => $request->active,
                'created_at' =>  now(),
            ]);
    
            return redirect('/admin/show_feed');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(feed $feed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function edit(feed $feed, $id)
    {
        if (session('admin')) {
  
            $feeds = feed::where('id', $id)->first();
            return view('admin.feed.update_feed', ['feeds' => $feeds]);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feed $feed, $id)
    {
        if (session('admin')) {
  
            if ($request->hasFile('image_feed')) {
                
                $file = $request->file('image_feed');
                $tujuan_upload = 'images/feed';
                $namafoto = time() . '.' . $file->getClientOriginalExtension();
                $file->move($tujuan_upload, $namafoto);
    
                feed::find($id)->update([
    
                    'image_feed' => $namafoto,
                    'link' => $request->link,
                    'active' => $request->active,
                ]);
            }
            else {
                feed::find($id)->update([
                    'link' => $request->link,
                    'active' => $request->active,
                ]);
            }
    
            return redirect('/admin/show_feed');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy(feed $feed, $id)
    {
        if (session('admin')) {
            feed::find($id)->delete();
            return redirect('/admin/show_feed');
        } else {
            return redirect('admin-login');
        }
    }
}
