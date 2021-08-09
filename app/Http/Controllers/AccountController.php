<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= account::first();
        if (empty($data)) {
            # code...
            return view('admin.account.add_account');
        } else {
            # code...
            $accounts = account::first();
            return view('admin.account.update_account', ['accounts' => $accounts]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
   
            account::insert([
                'description_company' => $request->description_company,
                'link_whatsapp' => $request->link_whatsapp,
                'link_facebook' => $request->link_facebook,
                'link_instagram' => $request->link_instagram,
                'link_tokopedia' => $request->link_tokopedia,
                'link_shopee' => $request->link_shopee,
                'created_at' =>  now(),
            ]);
    
            return redirect('/admin/account');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(account $account)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, account $account)
    {
        if (session('admin')) {

            account::first()->update([
    
                'description_company' => $request->description_company,
                'link_whatsapp' => $request->link_whatsapp,
                'link_facebook' => $request->link_facebook,
                'link_instagram' => $request->link_instagram,
                'link_tokopedia' => $request->link_tokopedia,
                'link_shopee' => $request->link_shopee,
            ]);
            return redirect('/admin/account');

        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(account $account)
    {

    }
}
