@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>REGISTRO SEAZ</h1>
  </div>
</div>

<form action="{{ url('guardarregistro') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
     @foreach ($registro as $item)
     <div class="form-group">
        <label for="exampleInputEmail1">descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="{{$item->descripcion}}" placeholder="ingrese sus nombres">
    </div> 
    <div class="form-group">
        <label for="exampleInputEmail1">numero</label>
        <input type="text" class="form-control" name="descripcion" value="{{$item->numero}}" placeholder="ingrese sus nombres">
    </div> 
    <div class="form-group">
        <img src="Fotos/{{$item->imagen}}" alt="" width="100" height="100">
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">fech_inicio</label>
        <input type="date" class="form-control" name="fech_inicio" value="{{$item->fech_inicio}}" placeholder="ingrese sus apellidos">
       </div> 
       <div class="form-group">
        <label for="exampleInputEmail1">fech_fin</label>
        <input type="date" class="form-control" name="fech_fin" value="{{$item->fech_fin}}" placeholder="ingrese sus apellidos">
       </div> 

     @endforeach
       <a href="{{ url('registro') }}"><input type="button" value="Regresar" class="btn-danger"></a>
   <a href="{{ url('buscarregis') }}"><input type="button" value="Buscar por numero" class="btn-danger"></a>
</form>
        
@endsection