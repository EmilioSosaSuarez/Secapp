@extends('escritorioLayout')

@section('content')
  <!-- page content -->
    <h1>CAPACITACIONES</h1>
    <br>
    <br>
	<h3><a href="{{ route('capacitaciones.calendario.index') }}" class="fa fa-calendar"> CALENDARIO DE CAPACITACIONES</a></h3>
	<h3><a href="{{ route('capacitaciones.dictado.create') }}" class="fa fa-file-text-o"> Nuevo Dictado</a></h3>
 	<br>
    <br>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ultimas Capacitaciones Dictadas</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
		    <table id="datatable-buttons" class="table table-striped table-bordered">
		      <thead>
		        <tr>
		          <th>Nombre</th>
		          <th>Capacitador</th>
		          <th>Temario</th>
		          <th>Fecha</th>
		          <th>Duración</th>
		          <th>Cantidad de Participantes</th>
		        </tr>
		      </thead>

		      <tbody>
		        <tr>
		          <td>Capacitación 1</td>
		          <td>Diego</td>
		          <td>Temario 1</td>
		          <td>20/05/2019</td>
		          <td>03:00</td>
		          <td>20</td>
		        </tr>
		        <tr>
		          <td>Capacitación 2</td>
		          <td>Diego</td>
		          <td>Temario 2</td>
		          <td>25/03/2019</td>
		          <td>02:00</td>
		          <td>15</td>
		        </tr>
		        <tr>
		          <td>Capacitación 3</td>
		          <td>Carlos</td>
		          <td>Temario 3</td>
		          <td>15/01/2019</td>
		          <td>01:00</td>
		          <td>25</td>
		        </tr>
		        <tr>
		          <td>Capacitación 1</td>
		          <td>Diego</td>
		          <td>Temario 1</td>
		          <td>20/12/2018</td>
		          <td>03:00</td>
		          <td>22</td>
		        </tr>
		        <tr>
		          <td>Capacitación 2</td>
		          <td>Diego</td>
		          <td>Temario 2</td>
		          <td>28/11/2018</td>
		          <td>02:00</td>
		          <td>5</td>
		        </tr>
		      </tbody>
		    </table>
          </div>
        </div>
      </div>

  <!-- /page content -->
@endsection

    <!-- jQuery -->
    <script src="theme/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="theme/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="theme/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="therme/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="theme/vendors/iCheck/icheck.min.js"></script>
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

    <!-- Custom Theme Scripts -->
    <script src="theme/build/js/custom.min.js"></script>