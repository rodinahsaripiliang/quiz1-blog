@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
    
		<div class="row">
      <div class="col-2">
        <h3>Edit Data Pemesanan</h3>

      <div class="col-lg-12"> 
        </div>
<form action="/post/{{$post->id}}/update" method="POST">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">TANGGAL BOOKING</label>
    <input name="tanggal_post" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Booking" value="{{$post->tanggal_post}}">
  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">ATAS NAMA</label>
    <input name="atas_nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Atas Nama" value="{{$post->atas_nama}}">

      </div> 

      <div class="form-group">
    <label for="exampleInputEmail1">PEMBAYARAN</label>
    <input name="pembayaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pembayaran" value="{{$post->pembayaran}}">

      </div>

      <button type="submit" class="btn btn-warning">Update</button>
       
         </form>
       
</div>
</div>
	
@endsection