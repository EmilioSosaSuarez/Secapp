<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('theme/production/images/tipci.ico') }}" type="image/ico" />

    <!-- Bootstrap -->
    <link href="theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="theme/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="theme/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="theme/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="theme/build/css/custom.min.css" rel="stylesheet">
</head>
<body>
@section('busquedaResultado')

<!-- page búsqueda resultado-->
	<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	<div class="x_content">

	<table id="datatable" class="table table-striped table-bordered">
	  <thead>
	    <tr>
	      <th>Fecha</th>
	      <th>Apellido</th>
	      <th>Clasificacion</th>
	      <th>Plazo</th>
	      <th></th>
	    </tr>
	  </thead>

	  <tbody>
		@foreach($incidentes as $incidente)
			<tr>
		      <td>{{ date('d-m-Y', strtotime($incidente->fecha)) }}</td>
		      <td>{{ $incidente->personaId }}</td>
		      <td>{{ $incidente->clasificacion }}</td>
		      <td>{{ $incidente->plazo }}</td>


		      <td>
                <a href="{{ route('admin.incidente.ver' , $incidente->id) }}" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                <a href="{{ route('admin.incidente.busquedaIndex') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                <form method="POST" action="{{ route('admin.incidente.busquedaIndex') }}" style="display: inline;">
                @csrf @method('DELETE')
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </button>
                <a href="{{ route('admin.incidente.pdf', $incidente->id) }}" class="btn btn-danger btn-xs "><i class="fa fa-file-pdf-o"></i> Exportar PDF</a>
                </form>
              </td>

			</tr>
		@endforeach
	  </tbody>
	</table>

	</div>
	</div>
	</div>
<!-- /page búsqueda resultado-->


	<!-- jQuery -->
    <script src="theme/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="theme/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="theme/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="theme/vendors/nprogress/nprogress.js"></script>
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

@endsection
</body>
</html>