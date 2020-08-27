<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('registro', 'RegistroController@index');
Route::post('guardarregistro', 'RegistroController@guardar');
Route::get('buscarregis', 'RegistroController@buscarre');
Route::post('mostrarponumero', 'RegistroController@buscarnumero');
Route::get('buscarfechas', 'RegistroController@buscarfecha');
Route::post('mostrarporfecha', 'RegistroController@mostraporfechas');
Route::get('/', function () {
    return view('welcome');
});
