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
Route::get('/VerPersona-{id}','PersonaController@ver')->name('admin.persona.ver');
Route::get('/AltaDePersona','PersonaController@create')->name('admin.persona.create');
Route::post('/AltaDePersona','PersonaController@store')->name('admin.persona.store');
Route::get('/EditarPersona-{id}','PersonaController@edit')->name('admin.persona.edit');
Route::patch('/EditarPersona','PersonaController@update')->name('admin.persona.update');
Route::get('/BusquedaDePersonas','PersonaController@index')->name('admin.persona.busquedaIndex');
Route::post('/BusquedaDePersonas','PersonaController@show')->name('admin.persona.busquedaResultado');


//INCIDENTES ACCIDENTES
Route::get('/AltaIncidente','IncidenteController@create')->name('admin.incidente.create');
Route::post('/AltaIncidente','IncidenteController@store')->name('admin.incidente.store');


//CAPACITACIONES
Route::get('/Capacitaciones','CapacitacionesController@index')->name('capacitaciones.index');
Route::get('/AltaDeCapacitacion','CapacitacionesController@create')->name('admin.capacitaciones.create');
Route::post('/AltaDeCapacitacion','CapacitacionesController@store')->name('admin.capacitaciones.store');
Route::get('/BusquedaDeCapacitaciones','CapacitacionesController@index')->name('admin.capacitaciones.busquedaIndex');
Route::post('/BusquedaDeCapacitaciones','CapacitacionesController@show')->name('admin.capacitaciones.busquedaResultado');
Route::get('CalendarioDeCapacitaciones','CapacitacionesCalendarioController@index')->name('capacitaciones.calendario.index');