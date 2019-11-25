@extends('escritorioLayout')

@section('content')
  <!-- page content -->
    <h1>Principal Contrato 1</h1><br>
    <h3>Se muestran todos los accesos de los módulos del contrato seleccionado</h3><br>
	<li><a href="{{ route('capacitaciones.index') }}">Capacitaciones</a></li>
  <!-- /page content -->
@endsection