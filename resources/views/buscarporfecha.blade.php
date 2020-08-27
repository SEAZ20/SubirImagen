@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>REGISTRO SEAZ</h1>
  </div>
</div>

<form action="{{ url('mostrarporfecha') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="exampleInputEmail1">fech_inicio</label>
        <input type="date" class="form-control" name="fech_inicio" placeholder="ingrese sus apellidos">
       </div> 
       <div class="form-group">
        <label for="exampleInputEmail1">fech_fin</label>
        <input type="date" class="form-control" name="fech_fin"  placeholder="ingrese sus apellidos">
       </div> 

       <button type="submit" class="btn btn-primary" id="insertar">Buscar</button>
       <a href="{{ url('registro') }}"><input type="button" value="Regresar" class="btn-danger"></a>

</form>
        
@endsection