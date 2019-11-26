@extends('escritorioLayout')

@section('content')
  <!-- page content -->
    <h1>Principal Capacitaciones</h1><br>
    <h3>Se muestra el modulo de Capacitaciones</h3>
    <li><a href="{{ route('capacitaciones.calendario.index') }}">Calendario</a></li>
  <!-- /page content -->
@endsection