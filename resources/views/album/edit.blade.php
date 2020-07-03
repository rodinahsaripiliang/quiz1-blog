@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
{{session('sukses')}}
</div>
@endif
    
		<div class="row">
      <div class="col-2">
        <h3>Edit Data Album</h3>

      <div class="col-lg-12"> 
        </div>
        
<form action="/album/{{$album->id}}/update" method="POST">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">ALAMAT PENERIMA</label>
    <input name="alamat_pengirim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Penerima" value="{{$album->alamat_pengirim}}">
  
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">NO HP</label>
    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Hp" value="{{$album->no_hp}}">

      </div> 


      <button type="submit" class="btn btn-warning">Update</button>
       
         </form>
       
</div>
</div>
	
@endsection