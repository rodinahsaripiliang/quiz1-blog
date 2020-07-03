@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
    
		<div class="row">
      <div class="col-2">
        <h3>Edit Data Category</h3>

      <div class="col-lg-12"> 
        </div>
<form action="/category/{{$category->id}}/update" method="POST">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">CATEGORY PHOTO</label>
    <input name="nama_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Category" value="{{$category->nama_category}}">
  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">PAKET PHOTO</label>
    <input name="paket_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Paket Category" value="{{$category->paket_category}}">

      </div> 
      <button type="submit" class="btn btn-warning">Update</button>
       
         </form>
       
</div>
</div>
	
@endsection