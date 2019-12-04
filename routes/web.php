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
Route::delete('/BusquedaDePersonas-{id}','PersonaController@destroy')->name('admin.persona.destroy');


//INCIDENTES ACCIDENTES
Route::get('/VerIncidente-{id}','IncidenteController@ver')->name('admin.incidente.ver');
Route::get('/AltaIncidente','IncidenteController@create')->name('admin.incidente.create');
Route::post('/AltaIncidente','IncidenteController@store')->name('admin.incidente.store');
Route::get('/BusquedaDeIncidente','IncidenteController@Index')->name('admin.incidente.busquedaIndex');
Route::post('/BusquedaDeIncidente','IncidenteController@show')->name('admin.incidente.busquedaResultado');
Route::get('/verPDF/IncidentePdf-{id}', 'IncidenteController@pdf')->name('admin.incidente.pdf');

//CONTRATOS
Route::get('/AltaDeContrato','ContratoController@create')->name('admin.contrato.create');
Route::post('/AltaDeContrato','ContratoController@store')->name('admin.contrato.store');
Route::get('/ListaDeContrato','ContratoController@lista')->name('admin.contrato.lista');
Route::get('/ModContrato-{contrato}', 'ContratoController@edit')->name('admin.contrato.edit');
Route::put('/ModContrato-{contrato}', 'ContratoController@update')->name('admin.contrato.edit');
Route::delete('/contrato/{contrato}', 'ContratoController@destroy')->name('admin.contrato.destroy');
Route::get('/Contrato-{contrato}', 'ContratoController@show')->name('contratoshow');
Route::get('/Contrato-{contrato}/recursos','ContratoController@recursos')->name('listarecursos');
Route::post('/Contrato-{contrato}/recursos','ContratoController@asignar')->name('listarecursos.asignar');
Route::delete('/Contrato-{contrato}/recursos','ContratoController@desasignar')->name('listarecursos.desasignar');

//CAPACITACIONES
Route::get('/Capacitaciones','CapacitacionesController@index')->name('capacitaciones.index');
Route::get('CalendarioDeCapacitaciones','CapacitacionesCalendarioController@index')->name('capacitaciones.calendario.index');
Route::get('/AltaDictadoCapacitacion','CapacitacionesDictadoController@create')->name('capacitaciones.dictado.create');
Route::post('/AltaDictadoCapacitacion','CapacitacionesDictadoController@store')->name('capacitaciones.dictado.store');

//CAPACITACIONES - ADMIN
Route::get('/AltaDeCapacitacion','CapacitacionesController@create')->name('admin.capacitaciones.create');
Route::post('/AltaDeCapacitacion','CapacitacionesController@store')->name('admin.capacitaciones.store');
Route::get('/EditarCapacitacion-{id}','CapacitacionController@edit')->name('admin.capacitaciones.edit');
Route::patch('/EditarCapacitacion','CapacitacionController@update')->name('admin.capacitaciones.update');
Route::get('/BusquedaDeCapacitaciones','CapacitacionesController@index')->name('admin.capacitaciones.busquedaIndex');
Route::post('/BusquedaDeCapacitaciones','CapacitacionesController@show')->name('admin.capacitaciones.busquedaResultado');
