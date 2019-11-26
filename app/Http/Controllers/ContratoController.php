<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Persona;
use App\AsignacionRC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contrato/contratoPrincipal');

/*        return view('contrato.index',[
            'projects' => Project::latest()->paginate()
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin/contrato/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Contrato::create( $request ->all() );
      $message="El alta del contrato se realizó satisfactoriamente";
      return redirect()->route('admin.contrato.create')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contrato = Contrato::find($id);

        return view('contratoshow', compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(contrato $contrato)
    {
        return view('admin.contrato.edit', ['contrato' => $contrato]);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(contrato $contrato)
    {
        $contrato->update(request()->all());

        return redirect()->route('admin.contrato.lista');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(contrato $contrato)
    {
        $contrato->delete();

        return redirect()->route('admin.contrato.lista');
    }

    public function lista()
    {
      $contratos = Contrato::all();

      return view('admin/contrato/lista')->with('contratos', $contratos);

    }

    public function recursos()
    {
      $contratos = Contrato::all();
      $personas = Persona::all();
      $recursos = AsignacionRC::all();

      return view('listarecursos')->with('recursos', $recursos)->with('contratos', $contratos)->with('personas', $personas);

    }

    public function asignar(Request $request)
    {
       // $recursos = new AsignacionRC;
       // $recursos->id_contrato = Input::get('id_contrato');
       // $recursos->id_persona = Input::get('id_persona');
       // $recursos->save();


      AsignacionRC::create( $request ->all() );
      $message="Vinculacion Satisfactoria";
      return redirect()->route('listarecursos')->with('message',$message);
    }

    public function desasignar(recursos $recursos)
    {
        $recursos->delete();

        return redirect()->route('listarecursos');
    }


}
