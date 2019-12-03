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
              <!-- Panel 1 - Datos Personales -->
              <div class="col-md-6 col-sm-6">
                <div class="x_panel" style="min-height: 1000px;">
                  <div class="x_title">
                    <h2>Datos Personales</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                  <form method="POST" action="{{ route('admin.persona.update', ['id' => $persona->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    @csrf @method('PATCH')

                    <!-- apellido -->
                    <div class="form-group"> {{-- cada uno de estos es un campo a editar, por ejemplo Apellido --}}
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Apellido/s <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="apellido" name="apellido" value="{{ old('apellido', $persona->apellido) }}"
                        readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /apellido -->
                    <!-- nombre -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre/s <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $persona->nombre) }}"
                        readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /nombre -->
                    <!-- DNI -->
                    <div class="form-group">
                      <label for="dni" class="control-label col-md-3 col-sm-3 col-xs-12">DNI <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="dni" class="form-control col-md-7 col-xs-12" type="text" name="dni"
                        value="{{ old('dni', $persona->dni) }}" readonly="true">
                      </div>
                    </div>
                    <!-- /DNI -->
                    <!-- sexo -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="sexo" class="btn-group" data-toggle="buttons">
                          @if($persona->sexo === 'F') <!-- Si la persona es femenino -->
    	                      <p>
    	                      	Femenino:  <input type="radio" class="flat" name="sexo" id="femenino" value="F" checked="" readonly="true" />&nbsp;
  	                        &nbsp; Masculino: <input type="radio" class="flat" name="sexo" id="masculino" value="M" readonly="true"/>
                          @else <!-- Si la persona es masculino -->
                            <p>
                              Femenino:  <input type="radio" class="flat" name="sexo" id="femenino" value="F" readonly="true"/>&nbsp;
                            &nbsp; Masculino: <input type="radio" class="flat" name="sexo" id="masculino" value="M" checked="" readonly="true"/>
                          @endif
	                      </p>
                        </div>
                      </div>
                    </div>
                    <!-- /sexo -->
                    <!-- fechaNacimiento -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-15 xdisplay_inputx form-group has-feedback">
                                <input type="date" class="form-control has-feedback-left" name="fechaNacimiento"
                                value='{{ date('Y-m-d', strtotime($persona->fechaNacimiento)) }}'
                                placeholder="Fecha Nacimiento" aria-describedby="inputSuccess2Status" readonly="true">
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <!-- /fechaNacimiento -->
                    <!-- nacionalidad -->
				            <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nacionalidad">Nacionalidad <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nacionalidad" name="nacionalidad" value="{{ old('nacionalidad', $persona->nacionalidad) }}" readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /nacionalidad -->
                    <!-- CUIL/CUIT -->
					          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuilCuit">CUIL/CUIT <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="cuilCuit" name="cuilCuit" value="{{ old('cuilCuit', $persona->cuilCuit) }}" readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- / CUIL/CUIT -->
                    <!-- provincia -->
					          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="provincia" name="provincia" value="{{ old('provincia', $persona->provincia) }}" readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /provincia -->
                    <!-- ciudad -->
				           	<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ciudad">Ciudad <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="ciudad" name="ciudad" value="{{ old('ciudad', $persona->ciudad) }}"
                        readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /ciudad -->
                    <!-- direccion -->
 					          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="direccion" name="direccion" value="{{ old('direccion', $persona->direccion) }}" readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /direccion -->
                    <!-- email -->
 					          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" name="email" value="{{ old('email', $persona->email) }}"
                        readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /email -->
                    <!-- celular -->
 					          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="celular">Celular <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="celular" name="celular" value="{{ old('celular', $persona->celular) }}"
                        readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /celular -->
                    <!-- telefono -->
 					          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Teléfono </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $persona->telefono) }}" readonly="true" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /telefono -->
                    <!-- estadoLaboral -->
 					          <div class="form-group" hidden="true">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="estadoLaboral" name="estadoLaboral" value="{{ old('estadoLaboral', $persona->estadoLaboral) }}" readonly="true" value="inactivo" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- /estadoLaboral -->
                    <!-- fechaAlta -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Alta <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-15 xdisplay_inputx form-group has-feedback">
                                <input type="date" class="form-control has-feedback-left" name="fechaAlta"
                                value='{{ date('Y-m-d', strtotime($persona->fechaAlta)) }}'
                                placeholder="Fecha Alta" aria-describedby="inputSuccess2Status2" readonly="true">
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <!-- /fechaAlta -->

                  </form>

                  </div>
                </div>
              </div>
              <!-- Panel 2 - Datos Laborales -->
              <div class="col-md-6 col-sm-6">
                <div class="x_panel" style="min-height: 1000px;">
                  <div class="x_title">
                    <h2>Datos Laborales</h2>
                    <div class="clearfix"></div>
                  </div>
                  <!-- Apto Médico -->
                  <div class="x_content">
                    <form method="GET" action="{{ route('admin.persona.ver', ['id' => $persona->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <br />
                      <!-- Apto Médico SI/NO-->
                      <div class="form-group row">
                        <p style="color:blue;font-size:16px;" class="col-form-label col-md-3 col-sm-3">Apto Médico</p>
                        <div id="sexo" class="col-md-9 col-sm-9 " data-toggle="buttons">
                          <p>
                            @if($persona->sexo === 'F') <!-- Si la persona es femenino -->

                                SI:  <input type="radio" class="flat" name="sexo" id="femenino" value="F" checked="" readonly="true" />&nbsp;
                              &nbsp; NO: <input type="radio" class="flat" name="sexo" id="masculino" value="M" readonly="true"/>
                            @else <!-- Si la persona es masculino -->

                                SI:  <input type="radio" class="flat" name="sexo" id="femenino" value="F" checked="" readonly="true"/>&nbsp;
                              &nbsp; NO: <input type="radio" class="flat" name="sexo" id="masculino" value="M" readonly="true"/>
                            @endif
                          </p>
                        </div>
                      </div>
                      <!-- /Apto Médico SI/NO-->
                      <!-- Fecha emisión médica -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Emisión
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-15 xdisplay_inputx form-group has-feedback">
                                  <input type="date" class="form-control has-feedback-left" name="fechaNacimiento"
                                  value="{{ date('Y-m-d', strtotime("2019-03-20")) }}" placeholder="Fecha Nacimiento" aria-describedby="inputSuccess2Status" readonly="true">
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <!-- /Fecha emisión médica -->
                      <!-- Fecha vencimiento médico -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Vencimiento
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-15 xdisplay_inputx form-group has-feedback">
                                  <input type="date" class="form-control has-feedback-left" name="fechaNacimiento"
                                  value="{{ date('Y-m-d', strtotime("2020-03-20")) }}"
                                  placeholder="Fecha Nacimiento" aria-describedby="inputSuccess2Status" readonly="true">
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <!-- /Fecha vencimiento médico -->
                    </form>
                  </div>
                  <!-- /Apto Médico -->
                  <!-- Licencia Conducir -->
                  <div class="x_content">
                    <form method="GET" action="{{ route('admin.persona.ver', ['id' => $persona->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <!-- Licencia COnducir SI/NO-->
                      <div class="form-group row">
                        <p style="color:blue;font-size:16px;" class="col-form-label col-md-5 col-sm-6" >Licencia de Conducir</p>
                        <div id="sexo" class="col-md-5 col-sm-6" data-toggle="buttons">
                          <p>
                            @if($persona->sexo === 'F') <!-- Si la persona es femenino -->

                                SI:  <input type="radio" class="flat" name="sexo" id="femenino" value="F" readonly="true"/>&nbsp;
                              &nbsp; NO: <input type="radio" class="flat" name="sexo" id="masculino" value="M" checked="" readonly="true"/>
                            @else <!-- Si la persona es masculino -->

                                SI:  <input type="radio" class="flat" name="sexo" id="femenino" value="F" readonly="true"/>&nbsp;
                              &nbsp; NO: <input type="radio" class="flat" name="sexo" id="masculino" value="M" checked="" readonly="true"/>
                            @endif
                          </p>
                        </div>
                      </div>
                      <!-- /Licencia Conducir SI/NO-->
                      <!-- Fecha de Emisión -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Emisión
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-15 xdisplay_inputx form-group has-feedback">
                                  <input type="date" class="form-control has-feedback-left" name="fechaNacimiento" value=''
                                  placeholder="Fecha Nacimiento" aria-describedby="inputSuccess2Status" readonly="true">
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <!-- /Fecha de Emisión -->
                      <!-- Fecha Vencimiento Licencia Conducir -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Vencimiento
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-15 xdisplay_inputx form-group has-feedback">
                                  <input type="date" class="form-control has-feedback-left" name="fechaNacimiento"
                                  value='' placeholder="Fecha Nacimiento" aria-describedby="inputSuccess2Status" readonly="true">
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <!-- /Fecha Vencimiento Licencia Conducir -->
                    </form>
                  </div>
                  <!-- Licencia Conducir -->
                  <!-- Contratos -->
                  <div class="x_content">
                    <form method="GET" action="{{ route('admin.persona.ver', ['id' => $persona->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#/Contratos" title="Ir a Contratos" style="color:blue;font-size:16px;"><i class="fa fa-external-link"></i> Contratos</a>
                      </div>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>Contrato</th>
                            <th>Fecha Alta</th>
                            <th>Fecha Vencimiento</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>Contrato 1</th>
                            <td>20/01/2019</td>
                            <td>09/06/2021</td>
                            <td>Activo</td>
                          </tr>
                          <tr>
                            <th>Contrato 2</th>
                            <td>20/11/2019</td>
                            <td>15/10/2021</td>
                            <td>Inactivo</td>
                          </tr>
                          <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </form>
                  </div>
                  <!-- /Contratos -->
                  <!-- Cursos -->
                  <div class="x_content">
                    <form method="GET" action="{{ route('admin.persona.ver', ['id' => $persona->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#/Contratos" title="Ir a Contratos" style="color:blue;font-size:16px;"><i class="fa fa-external-link"></i> Cursos</a>
                      </div>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>Curso</th>
                            <th>Fecha Alta</th>
                            <th>Fecha Vencimiento</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>Curso 1</th>
                            <td>20/01/2019</td>
                            <td>09/06/2021</td>
                          </tr>
                          <tr>
                            <th>Curso 2</th>
                            <td>20/11/2019</td>
                            <td>15/10/2021</td>
                          </tr>
                          <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </form>
                  </div>
                  <!-- /Cursos -->
                  <!-- Capacitaciones -->
                  <div class="x_content">
                    <form method="GET" action="{{ route('admin.persona.ver', ['id' => $persona->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="fa-hover col-md-6 col-sm-6 col-xs-12"><a href="#/Capacitaciones" title="Ir a Capacitaciones" style="color:blue;font-size:16px;"><i class="fa fa-external-link"></i> Capacitaciones</a>
                      </div>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>Capacitación</th>
                            <th>Fecha Alta</th>
                            <th>Fecha Vencimiento</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>Capacitación 1</th>
                            <td>20/01/2019</td>
                            <td>09/06/2021</td>
                          </tr>
                          <tr>
                            <th>Capacitación 2</th>
                            <td>09/03/2019</td>
                            <td>15/10/2021</td>
                          </tr>
                          <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </form>
                  </div>
                  <!-- /Capacitaciones -->
                </div>
              </div>
              <!-- BOTON CERRAR -->
              <div class="ln_solid"></div>
              <div class="center">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
                  <input class="btn btn-primary" style="margin-bottom: 15px;" type="button" onclick="window.close();"
                  value="Cerrar [X]"/>
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