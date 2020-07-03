@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
		<div class="row">
<div class="col-2"></div>
<h1>Data Photo</h1>

			<div class="col-2"></div>
			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Photo
</button>


</div>

			
<table class="table table-striped">
	
	<tr>
    <td>ID PHOTO</td>
		<td>TANGGAL PHOTO</td>
		<td>TIPE PHOTO</td>
		<td>AKSI</td>
	</tr>

@foreach($data_photo as $photo)
	<tr>
    <td>{{$photo->id}}</td>
		<td>{{$photo->tanggal_photo}}</td>
		<td>{{$photo->tipe_photo}}</td>
		<td><a href="/photo/{{$photo->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
    <td><a href="/photo/{{$photo->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="/photo/create" method="POST">
      	{{csrf_field()}}
	<div class="form-group">
    <label for="exampleInputEmail1">TANGGAL PHOTO</label>
    <input name="tanggal_photo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Photo">
  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">TIPE PHOTO</label>
    <input name="tipe_photo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tipe Photo">

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
         
      </div>
    </div>

    <p class="font-weight-bold">Tanggal Photo</p>
     <p class="text-left">Format: xx/xx/xxxx </p>
             
        <p class="font-weight-bold">Tipe Photo</p>
        <p class="text-left">Dengan Frame + Album</p>
        <p class="text-left">Dengan Frame</p>
        <p class="text-left">Dengan Album</p>
        <p class="text-left">Hanya SoftCopy</p>
        
 </form>

@endsection