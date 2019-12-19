@extends('template')
@section('style')

@endsection
@section('title')
<h2>Modalidad de graduación</h2>
@endsection
@section('content')
<div class="row">
               <div class="col">
                  <!-- START card-->
                  <div class="card card-default">
                     <div class="card-header">
                         <h3>Trabajo final, tesis</h3>
                     </div>
                     <div class="card-body">
                        <form method="POST" action="{{route('modalidad.store')}}">
                            @csrf
                            <div class="form-group">
                               <label>Año de ingreso</label>
                               <input name="anio" class="form-control" type="number" placeholder="Año del ingreso" required>
                            </div>
                            <div class="form-group">
                               <label>Semestre</label>
                               <input name="semestre" class="form-control" type="number" placeholder="Semestre de ingreso" required min="1" max="3">
                            </div>

                            <div class="form-group">
                               <label>Año de postulación</label>
                               <input name="anio_postulacion" class="form-control" type="text" placeholder="Año que postulo a la modalidad" required>
                            </div>

                            <div class="form-group">
                               <label>Fecha de presentaciòn</label>
                               <input name="presentacion" class="form-control" type="date" placeholder="Presentación" required>
                            </div>

                            <div class="form-group">
                                <label>Fecha de conclusión</label>
                                <input name="conclusion" class="form-control" type="date" placeholder="Conclusión" required>
                            </div>

                            <div class="form-group">
                               <label>Título</label>
                               <input name="titulo" class="form-control" type="text" placeholder="Nombre del rol" required>
                            </div>
                           
                            <div class="form-group">
                               <label>Estudiante</label>
                               <select name="area_id" class="form-control">
                                   <option value="">Elija el estudiante</option>
                                   @foreach($estudiantes as $est)
                                       <option value="{{$est->id}}"> {{$est->nombre.' '.$est->apellidos}} </option>
                                    @endforeach
                               </select>
                            </div>

                            <div class="form-group">
                               <label>Area</label>
                               <select name="area_id" class="form-control" required>
                                   <option value="">Elija el área</option>
                                   <option value="1">Area 1</option>
                                   <option value="2">Area 2</option>
                                   <option value="3">Area 3</option>
                               </select>
                            </div>

                            <div class="form-group">
                               <label>Docente guía</label>
                               <select name="guia_id" class="form-control" required>
                                   <option value="">Elija al docente guía</option>
                                   @foreach($docentes as $doc)
                                       <option value="{{$doc->id}}"> {{$doc->nombre.' '.$doc->apellidos}} </option>
                                    @endforeach
                                   
                               </select>
                            </div>

                            <input name="tipo" type="hidden" value="1">

                            <div class="d-flex justify-content-end">
                                <input type="submit" class="btn btn-primary" value="Registrar">
                            </div>
                        </form>
                     </div>
                  </div><!-- END card-->
               </div>
            </div><!-- END row-->
@endsection
@section('script')

@endsection