<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PersonaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($persona);
        return view('admin/persona/busquedaIndex');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {

    //$this->id= $id;

    //$persona = DB::table('personas')->where('id', $id)->get();
    $persona = Persona::find($id); //se trae la persona de la base que va a mostrar para actualizar después
    return view('admin/persona/edit', [ 'persona' => $persona ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        // $project->update([
        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' => request('description'),
        // ]);

        $persona = Persona::find($request->get('id')); //se trae la persona de la base que va a actualizar

        $persona->apellido = $request->get('apellido');
        $persona->nombre = $request->get('nombre');
        $persona->dni = $request->get('dni');
        $persona->sexo = $request->get('sexo');
        $persona->fechaNacimiento = $request->get('fechaNacimiento');
        $persona->nacionalidad = $request->get('nacionalidad');
        $persona->cuilCuit = $request->get('cuilCuit');
        $persona->provincia = $request->get('provincia');
        $persona->ciudad = $request->get('ciudad');
        $persona->direccion = $request->get('direccion');
        $persona->email = $request->get('email');
        $persona->celular = $request->get('celular');
        $persona->telefono = $request->get('telefono');
        $persona->estadoLaboral = $request->get('estadoLaboral');
        $persona->fechaAlta = $request->get('fechaAlta');

        $persona->save();

        $message="Los datos de la Persona fueron actualizados satisfactoriamente";
        return redirect()->route('admin.persona.edit', $persona->id)->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }


        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver(int $id)
    {
        //$persona = DB::table('personas')->where('id', $id)->get();
        $persona = Persona::find($id); //se trae la persona de la base que va a mostrar para actualizar después
        return view('admin/persona/show', [ 'persona' => $persona ]);
    }

}
