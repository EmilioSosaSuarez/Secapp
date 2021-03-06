@section('sidebarAdmin')
  <div class="menu_section">
    <h3> ADMINISTRADOR </h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-users"></i> Personas <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('admin.persona.create') }}">Alta Persona</a></li>
          <li><a href="{{ route('admin.persona.busquedaIndex') }}">Búsqueda / Edición</a></li>
        </ul>
      </li>
      <li><a href="{{ route('admin.contrato.lista') }}"><i class="fa fa-files-o"></i> Contratos </a>
      <!-- Incidentes -->
            <li><a><i class="fa fa-exclamation-triangle"></i> Incidentes <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('admin.incidente.create') }}">Alta Incidente</a></li>
          <li><a href="{{ route('admin.incidente.busquedaIndex') }}">Busqueda Incidente</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-files-o"></i> Capacitaciones <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            <li><a href="{{ route('admin.capacitaciones.create') }}">Alta Capacitación</a></li>
            <li><a href="{{ route('admin.capacitaciones.busquedaIndex') }}">Búsqueda</a></li>
        </ul>
      </li>
      <!-- /Fin Incidentes -->

      </li>
    </ul>
  </div>
@endsection
