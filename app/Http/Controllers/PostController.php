<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
    {
    	$data_post = \App\Post::all();
    	return view ('post.index' , ['data_post'=>$data_post]);
    }
   public function create(Request $request)
    {
    	\App\Post::create($request->all());
    	return redirect('/post')->with('sukses','Data Berhasil diinput');
    }
    public function edit ($id)
    {
    	$post = \App\Post::find($id);
    	return view('/post/edit', ['post' => $post]);
    }

    public function update (Request $request, $id)
    {
        $post = \App\Post::find($id);
        $post->update($request->all());
        return redirect('/post')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id)
    {
        $post = \App\Post::find($id);
        $post->delete($post);
        return redirect('/post')->with('sukses','Data Berhasil dihapus');
    }
}
