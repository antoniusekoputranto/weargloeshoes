<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        if (session('admin')) {
   
            $data['title'] = 'Data Post';
            $data['q'] = $request->q;
            $data['rows'] = Post::where('post_title', 'like', '%' . $request->q . '%')->get();
            return view('/admin/post/index', $data);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (session('admin')) {
   
            $data['title'] = 'Tambah Post';
           
            return view('/admin/post/create', $data);
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
   
            $request->validate([
                'post_title' => 'required',
            ]);
    
            $post = new Post();
            $post->post_title = $request->post_title;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = rand(1000, 9999) . $image->getClientOriginalName();
                $image->move('images/post', $name);
                $post->image = $name;
            }
            $post->content = $request->content;
            $post->save();
            return redirect('/admin/post')->with('success', 'Tambah Data Berhasil');
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if (session('admin')) {
   
            $data['title'] = 'Ubah Post';
            $data['row'] = $post;
            return view('/admin/post/edit', $data);
        } else {
            return redirect('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (session('admin')) {
   
            $request->validate([
                'post_title' => 'required',
                
            ]);
    
            $post->post_title = $request->post_title;
            if ($request->hasFile('image')) {
                $post->delete_image();
                $image = $request->file('image');
                $name = rand(1000, 9999) . $image->getClientOriginalName();
                $image->move('images/post', $name);
                $post->image = $name;
            }
            $post->content = $request->content;
            $post->save();
            return redirect('/admin/post')->with('success', 'Ubah Data Berhasil');
        } else {
            return redirect('admin-login');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (session('admin')) {
   
            $post->delete_image();
            $post->delete();
            return redirect('/admin/post')->with('success', 'Hapus Data Berhasil');
        } else {
            return redirect('admin-login');
        }
    }
}