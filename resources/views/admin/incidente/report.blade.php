@extends('admin.incidente.templatePdf')

@section('content')
  <div class="row">

    <div class="col-12 table-responsive">
      <table class="table table-striped">
        <thead>

            <tr>
              <th>Tipo de Suceso</th>
              <th>Sector</th>
              <th>Fecha</th>
              <th>Turno</th>
            </tr>

        </thead>
        <tbody>

            <tr>
              <td>{{ $incidente->tiposuceso }}</td>
              <td>{{ $incidente->sector }}</td>
              <td>{{ $incidente->fecha }}</td>
              <td>{{ $incidente->turno }}</td>
            </tr>

        </tbody>
    </table>
    </div><br><br>

    <div class="col-12 table-responsive">
    <table class="table table-striped">
        <thead>

            <tr>
              <th>Horario</th>
              <th>Hora</th>
              <th>Apellido</th>
              <th>Tarea Habitual</th>
            </tr>

        </thead>
        <tbody>

            <tr>
              <td>{{ $incidente->horario }}</td>
              <td>{{ $incidente->hsSuceso }}</td>
              <td>{{ $incidente->personaId }}</td>
              <td>{{ $incidente->tareaHabitual }}</td>
            </tr>

        </tbody>
    </table>
    </div><br><br>

  <div class="col-12 table-responsive">
  <table class="table table-striped">
        <thead>

            <tr>
              <th>Capacitacion</th>
              <th>Permiso</th>
              <th>Descripcion</th>
              <th>Clasificacion</th>
            </tr>

        </thead>
        <tbody>

            <tr>
              <td>{{ $incidente->capacitacion }}</td>
              <td>{{ $incidente->permiso }}</td>
              <td>{{ $incidente->descripcion }}</td>
              <td>{{ $incidente->clasificacion }}</td>
            </tr>
  </table>
  </div><br><br>

  <div class="col-12 table-responsive">
  <table class="table table-striped">
        <thead>

            <tr>
              <th>Causas Inmediatas</th>
              <th>Causas Basicas</th>
              <th>Acciones Correctivas</th>
              <th>Accion Remedial</th>
              <th>Plazo de resolucion</th>
            </tr>
        </thead>

        <tbody>

            <tr>
              <td>{{ $incidente->causasInmediatas }}</td>
              <td>{{ $incidente->causasBasicas }}</td>
              <td>{{ $incidente->accionesCorrectivas }}</td>
              <td>{{ $incidente->accionRemedial }}</td>
              <td>{{ $incidente->plazo }}</td>
            </tr>

        </tbody>
  </table>
  </div>
  <!-- /.col -->
</div>
@stop


