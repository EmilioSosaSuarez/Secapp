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

    <style>
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    </style>


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
                      <button id="myBtn" class="btn btn-primary">Asignar Nuevo Recurso</button>



                      <!-- The Modal -->
                      <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">

                              <span class="close">&times;</span>
                              <?php if ($personas->isNotEmpty()): ?>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Apellido</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">Vinculacion</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($personas as $persona): ?>
                                      <tr>

                                        <th>{{ $persona->id }}</th>
                                        <td>{{ $persona->apellido }}</td>
                                        <td>{{ $persona->nombre }}</td>
                                        <td>
                                  
                                        </td>
                                      </tr>
                                    <?php endforeach; ?>
                                  </tbody>
                                </table>

                            <?php else: ?>
                                <p>No hay personas disponibles.</p>
                            <?php endif; ?>
                          </form>
                        </div>

                      </div>
                      <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks the button, open the modal
                        btn.onclick = function() {
                          modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                          modal.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                          if (event.target == modal) {
                            modal.style.display = "none";
                          }
                        }
                      </script>


                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />


                    <?php if ($recursos->isNotEmpty()): ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID de Persona</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Nombre</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($recursos->$personas as $info): ?>
                            <tr>
                              <th scope="row">{{ $info->id }}</th>
                              <td>{{ $info->apellido }}</td>
                              <td>{{ $info->nombre }}</td>

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
