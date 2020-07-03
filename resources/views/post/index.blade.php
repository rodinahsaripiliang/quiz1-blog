@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
		<div class="row">
<div class="col-2"></div>
<h1>Data Pemesanan</h1>

			<div class="col-2"></div>
			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Pemesanan
</button>


</div>

			
<table class="table table-striped">
	
	<tr>
    <td>ID PELANGGAN</td>
		<td>TANGGAL BOOKING</td>
		<td>ATAS NAMA</td>
    <td>PEMBAYARAN</td>
		<td>AKSI</td>
	</tr>

@foreach($data_post as $post)
	<tr>
    <td>{{$post->id}}</td>
		<td>{{$post->tanggal_post}}</td>
		<td>{{$post->atas_nama}}</td>
    <td>{{$post->pembayaran}}</td>
		<td><a href="/post/{{$post->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
    <td><a href="/post/{{$post->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Pemesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="/post/create" method="POST">
      	{{csrf_field()}}
	<div class="form-group">
    <label for="exampleInputEmail1">TANGGAL BOOKING</label>
    <input name="tanggal_post" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Booking">
  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">ATAS NAMA</label>
    <input name="atas_nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Atas Nama">

      </div>


   <div class="form-group">
    <label for="exampleInputEmail1">PEMBAYARAN</label>
    <input name="pembayaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pembayaran">

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </div>
    </div>
<p class="font-weight-bold">Tanggal Booking</p>
     <p class="text-left">Format: xx/xx/xxxx </p>
             
        <p class="font-weight-bold">Pembayaran</p>
        <p class="text-left">Tunai</p>
        <p class="text-left">Non Tunai (ATM, DEBIT, KREDIT)</p>
        <p class="text-left">Cicilan 2x</p>
      
     </form>
 

@endsection