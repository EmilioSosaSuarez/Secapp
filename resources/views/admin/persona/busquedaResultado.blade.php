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
          <th>DNI</th>
          <th>Apellido</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Celular</th>
          <th>Fecha Alta</th>
          <th>Fecha Baja</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        @foreach($personas as $persona)
            <tr>
              <td>{{ $persona->dni }}</td>
              <td>{{ $persona->apellido }}</td>
              <td>{{ $persona->nombre }}</td>
              <td>{{ $persona->email }}</td>
              <td>{{ $persona->celular }}</td>
              <td>{{ $persona->fechaAlta }}</td>
              <td>
                  @if($persona->fechaBaja === NULL) <!-- Si la "fecha de baja" es NULL -->
                        <input type="date" class="form-control has-feedback-left" id='{{ $persona->dni }}' placeholder="Fecha Baja" aria-describedby="inputSuccess2Status">
                  @else <!-- Si la "fecha de baja" NO es NULL entonces le doy formato al valor fecha-->
                        <input value= '{{ date('Y-m-d', strtotime($persona->fechaBaja)) }}'
                        type="date" class="form-control has-feedback-left" id='{{ $persona->dni }}' placeholder="Fecha Baja" aria-describedby="inputSuccess2Status">
                  @endif
              </td>
              <td>
                <a href="{{ route('admin.persona.ver', $persona->id) }}" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                <a href="{{ route('admin.persona.edit', $persona->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                <form method="POST" action="{{ route('admin.persona.destroy', $persona->id) }}" style="display: inline;">
                @csrf @method('DELETE')
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </button>
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