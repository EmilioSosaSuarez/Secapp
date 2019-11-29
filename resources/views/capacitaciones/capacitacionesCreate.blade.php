<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

{{-- Si tiene un mensaje es porque se actualizo correctamente, viene del store de Persona --}}
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
                    <h2>Alta de Capacitaciones</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form method="POST" action="{{ route('admin.capacitaciones.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf

                      <div class="form-group"> {{-- cada uno de estos es un campo a completar, por ejemplo Apellido --}}
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="temario">Temario <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id=temario name="temario" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duracion">Duración <span class="required">*</span></label>
                          <div class="col-md-1 col-sm-1 col-xs-1">
                            <input type="time" id="duracion" name="duracion" required="required" class="form-control col-md-3 col-xs-3">
                          </div>
                      </div>
 					            <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="extra">Datos Extras</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="extra" name="extra" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Alta <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <fieldset>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" name="fechaAlta"  id="single_cal1" placeholder="" aria-describedby="inputSuccess2Status">
                                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" onclick="
                                  new PNotify({
                                  title: 'Regular Success',
                                  text: 'That thing that you were trying to do worked!',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });">Cancelar
                          </button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>

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