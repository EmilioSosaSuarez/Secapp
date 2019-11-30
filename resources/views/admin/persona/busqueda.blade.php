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
    <link href="theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="theme/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="theme/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="theme/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="theme/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="theme/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="theme/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="theme/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="theme/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="theme/build/css/custom.min.css" rel="stylesheet">

    <!-- PNotify -->
    <link href="theme/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="theme/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="theme/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
</head>

<body>

	@extends('escritorioLayout')

	@section('sidebarAdmin')
	  @include('admin/sidebarAdmin')
	@endsection

{{-- Si tiene un mensaje es porque se actualizo correctamente, viene del store de Persona
  @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <div class="ui-pnotify-icon"><span class="glyphicon glyphicon-ok-sign"></span></div>
      <strong >OK! </strong> {{ Session::get('message') }}
    </div>
  @endif
--}}
	@section('content')
  		<!-- page content -->
          <div class="">
            <div class="row">

            <!-- page búsqueda -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Búsqueda de Persona</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form method="POST" action="{{ route('admin.persona.busquedaResultado') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf
                      <div class="col-md-8 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Laboral <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <div id="estadoLaboral" class="btn-group" data-toggle="buttons">
                            <p>
                            &nbsp; Todos:  <input type="radio" class="flat" name="estadoLaboral" id="todos" value="todos" checked="" required />&nbsp;
                            &nbsp; Activos:  <input type="radio" class="flat" name="estadoLaboral" id="activo" value="activo" />&nbsp;
                            &nbsp; Inactivos: <input type="radio" class="flat" name="estadoLaboral" id="inactivo" value="inactivo" />
                          </p>
                          </div>
                        </div>
                      </div>

                      <br><br><br>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Apellido/s </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="apellido" name="apellido" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre/s </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label for="dni" class="control-label col-md-3 col-sm-3 col-xs-12">DNI
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="dni" class="form-control col-md-7 col-xs-12" type="text" name="dni">
                        </div>
                      </div>

 					            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contrato">Contrato </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="contrato" name="contrato" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

 					            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="curso">Curso </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="curso" name="curso" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

 					            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="capacitacion">Capacitación </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="capacitacion" name="capacitacion" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                     <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Apto Médico </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat" checked="checked"> SI
                            </label>
                            <label>
                              <input type="checkbox" class="flat"> NO
                            </label>
                          </div>
                        </div>
                      </div>

                     <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Licencia de Conducir </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat" checked="checked"> SI
                            </label>
                            <label>
                              <input type="checkbox" class="flat"> NO
                            </label>
                          </div>
                         </div>
                      </div>

                      <br><br><br><br><br><br><br><br><br><br><br>
                      <div class="ln_solid"></div>
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						              <button onclick="location.href='{{ route('admin.persona.busquedaIndex') }}'" class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Iniciar Búsqueda</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

              @if (!empty($personas))
                @yield('busquedaResultado')
              @endif

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
      <!-- Datatables -->
      <script src="theme/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="theme/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="theme/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="theme/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
      <script src="theme/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="theme/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="theme/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="theme/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
      <script src="theme/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
      <script src="theme/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="theme/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
      <script src="theme/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
      <script src="theme/vendors/jszip/dist/jszip.min.js"></script>
      <script src="theme/vendors/pdfmake/build/pdfmake.min.js"></script>
      <script src="theme/vendors/pdfmake/build/vfs_fonts.js"></script>

	@endsection

</body>
</html>
