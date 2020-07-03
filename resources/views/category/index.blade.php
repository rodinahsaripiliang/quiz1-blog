@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
		<div class="row">
<div class="col-2"></div>
<h1>Data Category</h1>

			<div class="col-2"></div>
			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Category
</button>


</div>

			
<table class="table table-striped">
	
	<tr>
    <td>ID CATEGORY</td>
		<td>CATEGORY PHOTO</td>
		<td>PAKET PHOTO</td>
		<td>AKSI</td>
	</tr>

@foreach($data_category as $category)
	<tr>
    <td>{{$category->id}}</td>
		<td>{{$category->nama_category}}</td>
		<td>{{$category->paket_category}}</td>
		<td><a href="/category/{{$category->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
    <td><a href="/category/{{$category->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>
	</tr>
@endforeach
</table>
</div>
	</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="/category/create" method="POST">
      	{{csrf_field()}}
	<div class="form-group">
    <label for="exampleInputEmail1">CATEGORY PHOTO</label>
    <input name="nama_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Category">
  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">PAKET PHOTO</label>
    <input name="paket_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Paket Category">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
          </div>
     <p class="font-weight-bold">Category Photo</p>
     <p class="text-left">1. Prewedding</p>
      <p class="text-left">2. Wedding</p>
      <p class="text-left"> 3. Bridesmaid</p>
             
        <p class="font-weight-bold">Paket Photo</p>
        <p class="text-left">Paket 1 -> Cetak 10 Photo + 5 Softcopy = Rp. 500.000</p>
        <p class="text-left">Paket 2 -> Cetak 5 Photo + 3 Softcopy = Rp. 250.000</p>

     
    </form>

 

@endsection