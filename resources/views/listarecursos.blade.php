<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('theme/production/images/tipci.ico') }}" type="image/ico" />

    <title>Secapp</title>

    <!-- Bootstrap -->
    <link href="{{ asset('theme/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('theme/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('theme/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('theme/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('theme/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('theme/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('theme/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('theme/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('theme/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom theme Style -->
    <link href="{{ asset('theme/build/css/custom.min.css') }}" rel="stylesheet">

    <!-- PNotify -->
    <link href="{{ asset('theme/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
</head>

	@extends('escritorioLayout')

	@section('sidebarAdmin')
	  @include('admin/sidebarAdmin')
	@endsection

{{-- Si tiene un mensaje es porque se actualizo correctamente, viene del store de Contrato --}}
  @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <div class="ui-pnotify-icon"><span class="glyphicon glyphicon-ok-sign"></span></div>
      <strong >OK! </strong> {{ Session::get('message') }}
    </div>
  @endif

	@section('content')
  		<!-- page content -->
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Recursos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a  class="btn btn-primary">Asignar Nuevo Recurso</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />


                    <?php if ($recursos->isNotEmpty()): ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Nacionalidad</th>
                            <th scope="col">CUIL/CUIT</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Cuidad</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Estado Laboral</th>
                            <th scope="col">Fecha de Alta</th>
                            <th scope="col">Fecha de Baja</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($recursos->$personas as $info): ?>
                            <tr>
                              <th scope="row">{{ $info->id }}</th>
                              <td>{{ $info->apellido }}</td>
                              <td>{{ $info->nombre }}</td>
                              <td>{{ $info->dni }}</td>
                              <td>{{ $info->sexo }}</td>
                              <td>{{ $info->fechaNacimiento }}</td>
                              <td>{{ $info->nacionalidad }}</td>
                              <td>{{ $info->cuilCuit }}</td>
                              <td>{{ $info->provincia }}</td>
                              <td>{{ $info->ciudad }}</td>
                              <td>{{ $info->direccion }}</td>
                              <td>{{ $info->email }}</td>
                              <td>{{ $info->celular }}</td>
                              <td>{{ $info->telefono }}</td>
                              <td>{{ $info->estadoLaboral }}</td>
                              <td>{{ $info->fechaAlta }}</td>
                              <td>{{ $info->fechaBaja }}</td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>

                  <?php else: ?>
                      <p>No hay recursos registrados.</p>
                  <?php endif; ?>

                  </div>
                </div>
              </div>
            </div>
  		<!-- /page content -->

		<!-- jQuery -->
	    <script src="theme/vendors/jquery/dist/jquery.min.js"></script>
	    <!-- Bootstrap -->
	    <script src="theme/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- FastClick -->
	    <script src="theme/vendors/fastclick/lib/fastclick.js"></script>
	    <!-- NProgress -->
	    <script src="theme/vendors/nprogress/nprogress.js"></script>
	    <!-- bootstrap-progressbar -->
	    <script src="theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	    <!-- iCheck -->
	    <script src="theme/vendors/iCheck/icheck.min.js"></script>
	    <!-- bootstrap-daterangepicker -->
	    <script src="theme/vendors/moment/min/moment.min.js"></script>
	    <script src="theme/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	    <!-- bootstrap-wysiwyg -->
	    <script src="theme/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	    <script src="theme/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	    <script src="theme/vendors/google-code-prettify/src/prettify.js"></script>
	    <!-- jQuery Tags Input -->
	    <script src="theme/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	    <!-- Switchery -->
	    <script src="theme/vendors/switchery/dist/switchery.min.js"></script>
	    <!-- Select2 -->
	    <script src="theme/vendors/select2/dist/js/select2.full.min.js"></script>
	    <!-- Parsley -->
	    <script src="theme/vendors/parsleyjs/dist/parsley.min.js"></script>
	    <!-- Autosize -->
	    <script src="theme/vendors/autosize/dist/autosize.min.js"></script>
	    <!-- jQuery autocomplete -->
	    <script src="theme/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	    <!-- starrr -->
	    <script src="theme/vendors/starrr/dist/starrr.js"></script>
	    <!-- Custom Theme Scripts -->
	    <script src="theme/build/js/custom.min.js"></script>
      <!-- PNotify -->
      <script src="theme/vendors/pnotify/dist/pnotify.js"></script>
      <script src="theme/vendors/pnotify/dist/pnotify.buttons.js"></script>
      <script src="theme/vendors/pnotify/dist/pnotify.nonblock.js"></script>

	@endsection

</body>
</html>
