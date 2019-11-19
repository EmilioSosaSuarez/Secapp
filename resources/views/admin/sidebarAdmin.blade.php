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
      <li><a href="projects.html"><i class="fa fa-files-o"></i> Contratos </a>
      </li>
    </ul>
  </div>
@endsection