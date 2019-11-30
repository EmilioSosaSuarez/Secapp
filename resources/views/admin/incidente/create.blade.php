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
	@section('content')
  	<!-- /page content -->
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
                    <h2>Nuevo Registro de Accidente / Incidente:</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                        <form method="POST" action="{{ route('admin.incidente.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf
                                <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3 ">Tipo de Suceso: <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                 <select class="form-control col-md-7 col-xs-12" type="text" id="tiposuceso" name="tiposuceso" required="required">
                                    <option disabled selected>Selecciona una opción</option>
                                    <option>Acto inseguro</option>
                                    <option>Incidente</option>
                                    <option>Condicion insegura</option>
                                    <option>Accidente</option>
                                </select>
                             </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">1.lugar y fecha del suceso:</label>
                                 <div class="col-md-6 col-sm-6 col-xs-12"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sector <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="string" id="sector" name="sector" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha del suceso  <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <fieldset>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" name="fecha"  id="single_cal1" placeholder="" aria-describedby="inputSuccess2Status">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span><span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Turno: <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control col-md-7 col-xs-12" type="text" id="turno" name="turno" required="required">
                                            <option disabled selected>Selecciona una opción</option>
                                            <option>Mañana</option>
                                            <option>Tarde</option>
                                            <option>Noche</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Horario: <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control col-md-7 col-xs-12" type="text" id="horario" name="horario" required="required">
                                            <option disabled selected>Selecciona una opción</option>
                                            <option>Normal</option>
                                            <option>Extra</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nacionalidad">Hora del suceso <span class="required">*</span></label>
                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                        <input type="time" id="hsSuceso" name="hsSuceso" required="required" class="form-control col-md-3 col-xs-3">
                                    </div>
                            </div>
                             <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Persona Afectada: <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control col-md-7 col-xs-12" type="text" id="personaId" name="personaId" required="required">
                                            <option disabled selected>Selecciona una opción</option>
                                                 @foreach ($personas as $persona)
                                            <option value="{{ $persona->nombre }}" {{ old('personaId') == $persona->id ? 'selected' : ''}}>{{ $persona->apellido }}</option>
                                                 @endforeach
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tarea habitual <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="tareaHabitual" class="btn-group" data-toggle="buttons">
                                            <p>
                                                SI:  <input type="radio" class="flat" name="tareaHabitual" id="si" value="Si" checked="" required />&nbsp;
                                                &nbsp; NO: <input type="radio" class="flat" name="tareaHabitual" id="no" value="No" />
                                            </p>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Capacitacion Previa: <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control col-md-7 col-xs-12" type="text" id="capacitacion" name="capacitacion" required="required">
                                            <option disabled selected>Selecciona una opción</option>
                                            <option >SI</option>
                                            <option >No</option>
                                            {{--  Este deve ser el for que traiga las capacitaciones  --}}
                                    <!--
                                            @foreach ($personas as $persona)
                                            <option value="{{ $persona->nombre }}" {{ old('personaId') == $persona->id ? 'selected' : ''}}>{{ $persona->nombre }}</option>
                                            @endforeach
                                    -->
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Permiso de Trabajo: <span class="required">*</span></label>
                                     <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control col-md-7 col-xs-12" type="text" id="permiso" name="permiso" required="required">
                                            <option disabled selected>Selecciona una opción</option>
                                            <option>Frio</option>
                                            <option>Caliente</option>
                                            <option>Electrico</option>
                                            <option>Espacio Confinado</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">2. Descripcion del suceso <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" rows="3" type="text" id="descripcion" name="descripcion"placeholder="Descripcion del suceso"></textarea>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">3. Clasificación: <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control col-md-7 col-xs-12" type="text" id="clasificacion" name="clasificacion" required="required">
                                            <option disabled selected>Selecciona una opción</option>
                                            <option>Perdida de materiales medio</option>
                                            <option>Trabajo restringido</option>
                                            <option>Tratamiento médico</option>
                                            <option>Primeros auxilios</option>
                                            <option>Perdida de días</option>
                                            <option>In itinere</option>
                                            <option>Emergencia</option>
                                            <option>Incidente</option>
                                            <option>Reclamo</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">4.Causas:</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        ¿Que actos, condiciones inseguras, factores laborales causaron o pudieron causar el suceso?
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Causas inmediatas <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" type="text" rows="3" placeholder="Causas inmediatas" id="causasInmediatas" name="causasInmediatas" required="required"></textarea>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Causas básicas <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" type="text" rows="3" placeholder="Causas básicas" id="causasBasicas" name="causasBasicas" required="required"></textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">5. Acciones correctivas / preventivas:</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        ¿que se ha hecho o debería hacerse para controlar las causas del suceso?
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" type="text" rows="2" placeholder="Acciones correctivas" id="accionesCorrectivas" name="accionesCorrectivas" required="required"></textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Accion remedial <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="accionRemedial" name="accionRemedial" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Plazo <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="integer" id="plazo" name="plazo" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="button" class="btn btn-primary">Cancelar</button>
                                    <button type="reset" class="btn btn-primary">Borrar</button>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>

      <!-- jQuery -->

      <!-- bootstrap-progressbar -->

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

      <!-- PNotify -->
      <script src="theme/vendors/pnotify/dist/pnotify.js"></script>
      <script src="theme/vendors/pnotify/dist/pnotify.buttons.js"></script>
      <script src="theme/vendors/pnotify/dist/pnotify.nonblock.js"></script>



	   @endsection
    </body>
</html>


