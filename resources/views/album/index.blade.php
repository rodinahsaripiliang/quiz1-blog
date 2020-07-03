@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
		<div class="row">
<div class="col-2"></div>
<h1>Data Album</h1>

			<div class="col-2"></div>
			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Album
</button>


</div>

			
<table class="table table-striped">
	
	<tr>
    <td>ID PENERIMA</td>
		<td>ALAMAT PENERIMA</td>
		<td>NO HP</td>
		<td>AKSI</td>
	</tr>

@foreach($data_album as $album)
	<tr>
    <td>{{$album->id}}</td>
		<td>{{$album->alamat_pengirim}}</td>
		<td>{{$album->no_hp}}</td>
		<td><a href="/album/{{$album->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
    <td><a href="/album/{{$album->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Album</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="/album/create" method="POST">
      	{{csrf_field()}}
	<div class="form-group">
    <label for="exampleInputEmail1">ALAMAT PENERIMA</label>
    <input name="alamat_pengirim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Penerima">
  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">NO HP</label>
    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Hp">

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
         
      </div>
    </div>
        
 </form>

@endsection