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

Route::get('/', function () {
    return view('inicio');
});

Route::view('/escritorio','escritorioPrincipal')->name('escritorioPrincipal');

// Vista CONTRATO

Route::get('/contrato','ContratoController@index')->name('contrato.index');


//ADMINISTRADOR
Route::get('/AltaDePersona','PersonaController@create')->name('admin.persona.create');
Route::post('/AltaDePersona','PersonaController@store')->name('admin.persona.store');
Route::get('/BusquedaDePersonas','PersonaController@index')->name('admin.persona.busquedaIndex');
Route::post('/BusquedaDePersonas','PersonaController@show')->name('admin.persona.busquedaResultado');


