<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\RegistroDeIncidente;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class incidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('admin/incidente/busquedaIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        return view('admin/incidente/create', compact('personas'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RegistroDeIncidente::create( $request ->all() );
        $message="El Registro de Accidente / Incidente se creo satisfactoriamente";
        return redirect()->route('admin.incidente.create')->with('message',$message);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $apellido = $request->get('personaId');

        $incidentes = DB::table('registrosdeincidentes')->where('personaId','=', $apellido)->get();
        $message="busqueda"; //Se le deberia pasar el request a la vista'
        //dd($incidentes);
        return view('admin/incidente/busquedaIndexResultado', ['incidentes' => $incidentes])->with('message',$message);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

 public function pdf(int $id){
      $incidente = RegistroDeIncidente::find($id);
      //dd($incidentes);
      $fecha = Carbon::now();
      // return view('admin.pdf.report', compact('estacionamientos', 'fecha'));
      $pdf = PDF::loadView('admin.incidente.report', compact('incidente'));
      $nombreArchivo = 'Incidente_'. $fecha->format('H:m:s'). '.pdf';
      return $pdf->download($nombreArchivo);
    }

}


