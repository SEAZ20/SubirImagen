@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>CRUD SEAZ</h1>
  </div>
</div>

<form action="{{ url('guardarregistro') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="form-group">
     <label for="exampleInputEmail1">descripcion</label>
     <input type="text" class="form-control" name="descripcion" placeholder="ingrese sus nombres">
    </div> 
     <div class="form-group">
     <label for="exampleInputEmail1">numero</label>
     <input type="text" class="form-control" name="numero" placeholder="ingrese sus apellidos">
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">Imagen</label>
        <input type="file"  name="imagen" >
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">fech_inicio</label>
        <input type="date" class="form-control" name="fech_inicio" placeholder="ingrese sus apellidos">
       </div> 
       <div class="form-group">
        <label for="exampleInputEmail1">fech_fin</label>
        <input type="date" class="form-control" name="fech_fin" placeholder="ingrese sus apellidos">
       </div> 
 
    <br>
<button type="submit" class="btn btn-primary" id="insertar">Guardar</button>
<a href="{{ url('buscarregis') }}"><input type="button" value="Buscar por numero" class="btn-danger"></a>
<a href="{{ url('buscarfechas') }}"><input type="button" value="Buscar por fechas" class="btn-danger"></a>
</form>
<br>
	<div class="box">
            <div class="box-header">
              <h3 style=" text-align: center" class="box-title"> REGISTRADAS</h3>
              <br>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Número</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Foto</th>
                  <th>Fecha Inicio</th>
                  <th>Fecha Fin</th>   
                </tr>
                </thead>
                <tbody>
               @foreach($registros as $datos)
                <tr>
                  <td style="vertical-align: middle; text-align: center">{{$datos->id}}</td>
                  <td style="vertical-align: middle; text-align: center">{{$datos->descripcion}}</td>
                  <td style="vertical-align: middle; text-align: center">{{$datos->numero}}</td>
                  <td style="vertical-align: middle; text-align: center"><img src="Fotos/{{$datos->imagen}}" alt="" width="100" height="100"></td>ç
                  <td style="vertical-align: middle; text-align: center">{{$datos->fech_inicio}}</td>
                  <td style="vertical-align: middle; text-align: center">{{$datos->fech_fin}}</td>
  
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Número</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Foto</th>
                    <th>Fecha Inicio</th>
                  <th>Fecha Fin</th>    
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
        
        
@endsection
