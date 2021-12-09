<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\feed;
use App\Models\event;
use App\Models\account;
use App\Models\Post;
use App\Models\article;


use Illuminate\Http\Request;

class homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['featured'] =  product::where('featured', 'Y')->orderBy('created_at','desc')->where('active', 1)->first();
        $data['new_arrivals'] =  product::orderBy('created_at','desc')->where('active', 1)->take(4)->get();
        $data['featureds'] =  product::where('featured', 'Y')->orderBy('created_at','desc')->where('active', 1)->take(3)->get();
        $data['feeds'] =  feed::orderBy('created_at','desc')->where('active', 1)->take(8)->get();
        $data['events'] =  event::where('active', 1)->take(5)->get();
        $data['accounts'] =  account::first();
        $data['ktgr']= Post::take(3)->get();
        $data['articles']= article::where('active', 1)->take(4)->get();
        return view('pages.home', $data);
        
    }

    public function aboutus()
    {
        $data['accounts'] =  account::first();
        return view('aboutus', $data);


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
