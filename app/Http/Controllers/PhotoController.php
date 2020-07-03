<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
    	$data_photo = \App\Photo::all();
    	return view ('photo.index' , ['data_photo'=>$data_photo]);
    }
   public function create(Request $request)
    {
    	\App\Photo::create($request->all());
    	return redirect('/photo')->with('sukses','Data Berhasil diinput');
    }
    public function edit ($id)
    {
    	$photo = \App\Photo::find($id);
    	return view('/photo/edit', ['photo' => $photo]);
    }

    public function update (Request $request, $id)
    {
        $photo = \App\Photo::find($id);
        $photo->update($request->all());
        return redirect('/photo')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id)
    {
        $photo = \App\Photo::find($id);
        $photo->delete($photo);
        return redirect('/photo')->with('sukses','Data Berhasil dihapus');
    }
}
