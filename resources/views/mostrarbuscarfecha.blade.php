@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>REGISTRO SEAZ</h1>
  </div>
</div>

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
       @foreach($registro as $datos)
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
<a href="{{ url('registro') }}"><input type="button" value="Regresar" class="btn-danger"></a>
<a href="{{ url('buscarfechas') }}"><input type="button" value="Buscar otro" class="btn-danger"></a>
@endsection