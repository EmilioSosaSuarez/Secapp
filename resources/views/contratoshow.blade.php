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
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('theme/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('theme/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- Custom theme Style -->
    <link href="{{ asset('theme/build/css/custom.min.css') }}" rel="stylesheet">

    <!-- PNotify -->
    <link href="{{ asset('theme/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
</head>

<body>

	@extends('escritorioLayout')

	@section('sidebarAdmin')
	  @include('admin/sidebarAdmin')
	@endsection

{{-- Si tiene un mensaje es porque se actualizo en la base correctamente (luego del update Persona) --}}
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
                <h2>{{ $contrato->nombre }}</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />



                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: </label>
                    <div >
                      {{ $contrato->nombre }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numero">Numero: </label>
                    <div >
                      {{ $contrato->numero }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cliente" class="control-label col-md-3 col-sm-3 col-xs-12">Cliente: </label>
                    <div >
                      {{ $contrato->cliente }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="descripcion" class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion: </label>
                    <div >
                      {{ $contrato->descripcion }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Creacion: </label>
                    <div >
                      {{ $contrato->fechaCreacion }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Vencimiento </label>
                    <div >
                      {{ $contrato->fechaVencimiento }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado: </label>
                    <div >
                      {{ $contrato->estado }}
                    </div>
                  </div>

                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <a href="{{ route('listarecursos', $contrato) }}" class="btn btn-primary">Recursos</a>

                    </div>
                  </div>

              </div>
            </div>
          </div>
        </div>

  		<!-- /page content -->

		<!-- jQuery -->
	    <script src="{{ asset('theme/vendors/jquery/dist/jquery.min.js') }}"></script>
	    <!-- Bootstrap -->
	    <script src="{{ asset('theme/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	    <!-- FastClick -->
	    <script src="{{ asset('theme/vendors/fastclick/lib/fastclick.js') }}"></script>
	    <!-- NProgress -->
	    <script src="{{ asset('theme/vendors/nprogress/nprogress.js') }}"></script>
	    <!-- bootstrap-progressbar -->
	    <script src="{{ asset('theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
	    <!-- iCheck -->
	    <script src="{{ asset('theme/vendors/iCheck/icheck.min.js') }}"></script>
	    <!-- bootstrap-daterangepicker -->
	    <script src="{{ asset('theme/vendors/moment/min/moment.min.js') }}"></script>
	    <script src="{{ asset('theme/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	    <!-- bootstrap-wysiwyg -->
	    <script src="{{ asset('theme/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
	    <script src="{{ asset('theme/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
	    <script src="{{ asset('theme/vendors/google-code-prettify/src/prettify.js') }}"></script>
	    <!-- jQuery Tags Input -->
	    <script src="{{ asset('theme/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
	    <!-- Switchery -->
	    <script src="{{ asset('theme/vendors/switchery/dist/switchery.min.js') }}"></script>
	    <!-- Select2 -->
	    <script src="{{ asset('theme/vendors/select2/dist/js/select2.full.min.js') }}"></script>
	    <!-- Parsley -->
	    <script src="{{ asset('theme/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
	    <!-- Autosize -->
	    <script src="{{ asset('theme/vendors/autosize/dist/autosize.min.js') }}"></script>
	    <!-- jQuery autocomplete -->
	    <script src="{{ asset('theme/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
	    <!-- starrr -->
	    <script src="{{ asset('theme/vendors/starrr/dist/starrr.js') }}"></script>
      <!-- Chart.js -->
      <script src="{{ asset('theme/vendors/Chart.js/dist/Chart.min.js') }}"></script>
      <!-- gauge.js -->
      <script src="{{ asset('theme/vendors/gauge.js/dist/gauge.min.js') }}"></script>

      <!-- Skycons -->
      <script src="{{ asset('theme/vendors/skycons/skycons.js') }}"></script>
      <!-- Flot -->
      <script src="{{ asset('theme/vendors/Flot/jquery.flot.js') }}"></script>
      <script src="{{ asset('theme/vendors/Flot/jquery.flot.pie.js') }}"></script>
      <script src="{{ asset('theme/vendors/Flot/jquery.flot.time.js') }}"></script>
      <script src="{{ asset('theme/vendors/Flot/jquery.flot.stack.js') }}"></script>
      <script src="{{ asset('theme/vendors/Flot/jquery.flot.resize.js') }}"></script>
      <!-- Flot plugins -->
      <script src="{{ asset('theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
      <script src="{{ asset('theme/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
      <script src="{{ asset('theme/vendors/flot.curvedlines/curvedLines.js') }}"></script>
      <!-- DateJS -->
      <script src="{{ asset('theme/vendors/DateJS/build/date.js') }}"></script>
      <!-- JQVMap -->
      <script src="{{ asset('theme/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
      <script src="{{ asset('theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
      <script src="{{ asset('theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
	    <!-- Custom theme Scripts -->
	    <script src="{{ asset('theme/build/js/custom.min.js') }}"></script>
      <!-- PNotify -->
      <script src="{{ asset('theme/vendors/pnotify/dist/pnotify.js') }}"></script>
      <script src="{{ asset('theme/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
      <script src="{{ asset('theme/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>

	@endsection

</body>
</html>
