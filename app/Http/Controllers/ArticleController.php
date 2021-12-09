<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('admin')) {


            $data['articles'] =  article::get();
            return view('admin.article.show_article', $data);


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
            return view('admin.article.add_article');
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
  
            $file = $request->file('image_article');
            $tujuan_upload = 'images/article';
            $namafoto = time() . '.' . $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $namafoto);
    
            article::insert([
                'title' => $request->title,
                'image_article' => $namafoto,
                'contents' => $request->contents,
                'active' => $request->active,
                'created_at' =>  now(),
            ]);
    
            return redirect('/admin/show_article');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article, $id)
    {
        if (session('admin')) {
  
            $data['articles'] = article::where('id', $id)->first();
            return view('admin.article.update_article', $data);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article, $id)
    {
        if (session('admin')) {
  
            if ($request->hasFile('image_article')) {
                
                $file = $request->file('image_article');
                $tujuan_upload = 'images/article';
                $namafoto = time() . '.' . $file->getClientOriginalExtension();
                $file->move($tujuan_upload, $namafoto);
    
                article::find($id)->update([
    
                    'title' => $request->title,
                    'image_article' => $namafoto,
                    'contents' => $request->contents,
                    'active' => $request->active,
                ]);
            }
            else {
                article::find($id)->update([
                    'title' => $request->title,
                    'contents' => $request->contents,
                    'active' => $request->active,
                ]);
            }
    
            return redirect('/admin/show_article');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article, $id)
    {
        if (session('admin')) {
            article::find($id)->delete();
            return redirect('/admin/show_article');
        } else {
            return redirect('admin-login');
        }
    }
}
