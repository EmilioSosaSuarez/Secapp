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
                    <h2>Registro de Accidente / Incidente:</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                        <form method="POST" action="{{ route('admin.incidente.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf


                            <div class="form-group"> {{-- cada uno de estos es un campo a editar, por ejemplo Apellido --}}
                                    <label class="control-label col-md-3 col-sm-3 " for="apellido">Tipo de Suceso: </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="apellido" name="apellido" value="{{ old('tiposuceso', $incidente->tiposuceso) }}"readonly="true" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">1.lugar y fecha del suceso:</label>
                                 <div class="col-md-6 col-sm-6 col-xs-12"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sector <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="string" id="sector" name="sector" required="required" value="{{ old('sector', $incidente->sector) }}"readonly="true"class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha del suceso  <span class="required">*</span></label>

                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="string" id="fecha" name="fecha" required="required" value="{{ date('d-m-Y', strtotime($incidente->fecha)) }}"readonly="true"class="form-control col-md-7 col-xs-12">

                                    </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Turno: <span class="required">*</span></label>
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="string" id="turno" name="turno" required="required" value="{{ old('turno', $incidente->turno) }}"readonly="true"class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>



                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Horario: <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="string" id="horario" name="horario" required="required" value="{{ old('horario', $incidente->horario) }}"readonly="true"class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nacionalidad">Hora del suceso <span class="required">*</span></label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <input type="time" id="hsSuceso" name="hsSuceso"  value="{{ old('hsSuceso', $incidente->hsSuceso) }}"readonly="true"required="required" class="form-control col-md-3 col-xs-3">
                                    </div>
                            </div>


                             <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Persona Afectada: <span class="required">*</span></label>

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="string" id="personaId" name="personaId" required="required" value="{{ old('personaId', $incidente->personaId) }}"readonly="true"class="form-control col-md-7 col-xs-12">
                                        </div>

                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tarea habitual <span class="required">*</span></label>
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="string" id="tareaHabitual" name="tareaHabitual" required="required" value="{{ old('tareaHabitual', $incidente->tareaHabitual) }}"readonly="true"class="form-control col-md-7 col-xs-12">
                                        </div>
                            </div>



                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Capacitacion Previa: <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <input type="string" id="capacitacion" name="capacitacion" required="required" value="{{ old('capacitacion', $incidente->capacitacion) }}"readonly="true"class="form-control col-md-7 col-xs-12">

                                             <!--Este deve ser el for que traiga las capacitaciones -->

                                           {{--  @foreach ($personas as $persona)
                                            <option value="{{ $persona->nombre }}" {{ old('personaId') == $persona->id ? 'selected' : ''}}>{{ $persona->nombre }}</option>
                                            @endforeach --}}

                                    </div>

                            </div>



                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Permiso de Trabajo:</label>
                                    <div class="col-md-6 col-sm-6 ">
                                         <input type="string" id="permiso" name="permiso" required="required" value="{{ old('permiso', $incidente->permiso) }}"readonly="true"class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>



                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">2. Descripcion del suceso</label>

                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" rows="3" type="text" id="descripcion" name="descripcion" readonly="true" >{{ ($incidente->descripcion) }}</textarea>
                                    </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">3. Clasificación:</label>
                                     <div class="col-md-6 col-sm-6 ">
                                         <input type="string" id="clasificacion" name="clasificacion" required="required" value="{{ old('clasificacion', $incidente->clasificacion) }}"readonly="true"class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">4.Causas:</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        ¿Que actos, condiciones inseguras, factores laborales causaron o pudieron causar el suceso?
                                    </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Causas inmediatas</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" rows="3" type="text" id="causasInmediatas" name="causasInmediatas" readonly="true" >{{ ($incidente->causasInmediatas) }}</textarea>
                                    </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Causas básicas</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea class="form-control" rows="3" type="text" id="causasBasicas" name="causasBasicas" readonly="true" >{{ ($incidente->causasBasicas) }}</textarea>
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
                                        <textarea class="form-control" rows="3" type="text" id="accionesCorrectivas" name="accionesCorrectivas" readonly="true" >{{ ($incidente->accionesCorrectivas) }}</textarea>
                                    </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Accion remedial</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="form-control" rows="3" type="text" id="accionRemedial" name="accionRemedial" readonly="true" >{{ ($incidente->accionRemedial) }}</textarea>
                                    </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Plazo <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="integer" id="plazo" name="plazo" required="required" value="{{ old('sector', $incidente->plazo) }}"  readonly="true"class="form-control col-md-7 col-xs-12">
                                    </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:right;">
                                        <input class="btn btn-primary" style="margin-bottom: 15px;" type="button" onclick="window.close();" value="Cerrar [X]"/>
                                    </div>
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


