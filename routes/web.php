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

Route::get('/AltaDeContrato','ContratoController@create')->name('admin.contrato.create');
Route::post('/AltaDeContrato','ContratoController@store')->name('admin.contrato.store');

Route::get('/ListaDeContrato','ContratoController@lista')->name('admin.contrato.lista');

Route::get('/ModContrato/{contrato}', 'ContratoController@edit')->name('admin.contrato.edit');
Route::put('/ModContrato/{contrato}', 'ContratoController@update')->name('admin.contrato.edit');

Route::delete('/contrato/{contrato}', 'ContratoController@destroy')->name('admin.contrato.destroy');  
