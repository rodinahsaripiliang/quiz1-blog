<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$data_category = \App\Category::all();
    	return view ('category.index' , ['data_category'=>$data_category]);
    }
   public function create(Request $request)
    {
    	\App\Category::create($request->all());
    	return redirect('/category')->with('sukses','Data Berhasil diinput');
    }
    public function edit ($id)
    {
    	$category = \App\Category::find($id);
    	return view('/category/edit', ['category' => $category]);
    }

    public function update (Request $request, $id)
    {
        $category = \App\Category::find($id);
        $category->update($request->all());
        return redirect('/category')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id)
    {
        $category = \App\Category::find($id);
        $category->delete($category);
        return redirect('/category')->with('sukses','Data Berhasil dihapus');
    }
    
}
