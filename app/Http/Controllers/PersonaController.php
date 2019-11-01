<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;


class PersonaController extends Controller
{

=======

class PersonaController extends Controller
{
>>>>>>> develop
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //dd($persona);
        return view('admin/persona/busquedaIndex');
=======
        //
>>>>>>> develop
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/persona/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Persona::create( $request ->all() );
        $message="El alta de la persona se realizó satisfactoriamente";
        return redirect()->route('admin.persona.create')->with('message',$message);

        /*return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show(Request $request)
    {
 /*       return view ('projects.show', [
            'project' => $project
        ]);*/

// Acá se le pasan los parámetros de búsqueda
        $apellido = $request->get('apellido');

        $personas = DB::table('personas')->where('apellido', $apellido)->get();
        $message="busqueda"; //Se le deberia pasar el request a la vista
        ///return redirect()->route('admin.persona.busquedaIndex')->with('message',$message);
        return view('admin/persona/busquedaIndexResultado', ['personas' => $personas])->with('message',$message);
        //return view('template2.productos.detalle', ['product' => $articulo]);
=======
    public function show($id)
    {
        //
>>>>>>> develop
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
}
