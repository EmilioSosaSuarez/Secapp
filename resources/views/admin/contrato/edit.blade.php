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
    <style>
    .radio-container {
        box-sizing: border-box;;
        line-height: 35px;
        margin: 0;
         outline: 0;
        overflow: hidden;
        padding: 0;
    }


    .radio-container input {
         box-sizing: border-box;
        margin: 0;
        outline: 0;
        padding: 0;
        position: relative;
        top: 9px;
        vertical-align: top;
     }
</style>
</head>

<body>

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
                    <h2>Modificacion de Contrato</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form method="POST" action="{{ url("ModContrato-{$contrato->id}") }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      {{ method_field('PUT') }}
                      @csrf

                      <div class="form-group"> {{-- cada uno de estos es un campo a completar, por ejemplo Apellido --}}
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('nombre', $contrato->nombre) }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numero">Numero <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="numero" name="numero" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('numero', $contrato->numero) }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cliente" class="control-label col-md-3 col-sm-3 col-xs-12">Cliente <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="cliente" class="form-control col-md-7 col-xs-12" type="text" name="cliente" value="{{ old('cliente', $contrato->cliente) }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="descripcion" class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="descripcion" class="form-control col-md-7 col-xs-12" type="text" name="descripcion" value="{{ old('descripcion', $contrato->descripcion) }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Creacion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
	                        <fieldset>
	                          <div class="control-group">
	                            <div class="controls">
	                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
	                                <input type="date" class="form-control has-feedback-left" name="fechaCreacion"  placeholder="Fecha Creacion" aria-describedby="inputSuccess2Status" value="{{ date('Y-m-d', strtotime($contrato->fechaCreacion)) }}">

	                              </div>
	                            </div>
	                          </div>
	                        </fieldset>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Vencimiento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                  <input type="date" class="form-control has-feedback-left" name="fechaVencimiento"  placeholder="Fecha Vencimiento" aria-describedby="inputSuccess2Status" value="{{ date('Y-m-d', strtotime($contrato->fechaVencimiento)) }}">

                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado <span class="required">*</span>
                        </label>
                        <div class="radio-container">
                          <div id="estado" class="btn-group" data-toggle="buttons">
                            <p>
                              Activo:  <input type="radio" class="flat" name="estado" id="activo" value="A" checked="" required />&nbsp;
                            &nbsp; Inactivo: <input type="radio" class="flat" name="estado" id="inactivo" value="I" />&nbsp;
                          &nbsp; Demorado: <input type="radio" class="flat" name="estado" id="demorado" value="D" />
                          </p>
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="{{ route('admin.contrato.lista') }}" class="btn btn-primary">Cancelar</a>
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
  	    <!-- Custom theme Scripts -->
  	    <script src="{{ asset('theme/build/js/custom.min.js') }}"></script>
        <!-- PNotify -->
        <script src="{{ asset('theme/vendors/pnotify/dist/pnotify.js') }}"></script>
        <script src="{{ asset('theme/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
        <script src="{{ asset('theme/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>

	@endsection

</body>
</html>
