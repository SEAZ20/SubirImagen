<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registro;

class RegistroController extends Controller
{
    public function index()
    {
        $registros = registro::all();
        return view('pageingresar', compact('registros'));
    }
    public function guardar(Request $re)
    {
        if ($re->hasFile('imagen')) {
            $file = $re->file('imagen');
            $namefoto = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/Fotos/', $namefoto);
        }
        $registro = new registro;
        $registro->descripcion = $re->descripcion;
        $registro->numero = $re->numero;
        $registro->imagen = $namefoto;
        $registro->fech_inicio = $re->fech_inicio;
        $registro->fech_fin = $re->fech_fin;
        $registro->save();
        return redirect()->action('RegistroController@index');
    }
    public function buscarre()
    {
        return view('buscarRegistros');
    }
    public function buscarnumero(Request $request)
    {
        $registro = registro::WhereIn('numero', [$request->numero])->get();
        return view('mostrarpornumero', compact('registro'));
    }
    public function buscarfecha()
    {
        return view('buscarporfecha');
    }
    public function mostraporfechas(Request $request)
    {
        $registro = registro::whereDate('fech_inicio', '>=', $request->fech_inicio)->whereDate('fech_fin', '<=', $request->fech_fin)->get();
        return view('mostrarbuscarfecha', compact('registro'));
    }
}
