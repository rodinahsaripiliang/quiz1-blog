@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
    
		<div class="row">
      <div class="col-2">
        <h3>Edit Data Photo</h3>

      <div class="col-lg-12"> 
        </div>
        
<form action="/photo/{{$photo->id}}/update" method="POST">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">TANGGAL PHOTO</label>
    <input name="tanggal_photo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pemesanan" value="{{$photo->tanggal_photo}}">
  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">TIPE PHOTO</label>
    <input name="tipe_photo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tipe Photo" value="{{$photo->tipe_photo}}">

      </div> 


      <button type="submit" class="btn btn-warning">Update</button>
       
         </form>
       
</div>
</div>
	
@endsection