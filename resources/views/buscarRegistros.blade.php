@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>CRUD SEAZ</h1>
  </div>
</div>

<form action="{{ url('mostrarponumero') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="form-group">
     <label for="exampleInputEmail1">Numero</label>
     <input type="text" class="form-control" name="numero" placeholder="ingrese el numero">
    </div> 
    <br>
<button type="submit" class="btn btn-primary" id="Buscar">Buscar</button>
<a href="{{ url('registro') }}"><input type="button" value="Regresar" class="btn-danger"></a>
</form>
        
@endsection
