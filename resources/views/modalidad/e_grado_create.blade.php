@extends('template')
@section('style')

@endsection
@section('title')
<h2>Modalidad</h2>
@endsection
@section('content')
<div class="row">
               <div class="col">
                  <!-- START card-->
                  <div class="card card-default">
                     <div class="card-header">
                         <h3>Examen de grado</h3>
                     </div>
                     <div class="card-body">
                        <form method="POST" action="{{route('modalidad.store')}}">
                            @csrf
                            <div class="form-group">
                               <label>Año de ingreso</label>
                               <input name="anio" class="form-control" type="number" placeholder="Año de ingreso" required>
                            </div>
                            <div class="form-group">
                               <label>Semestre</label>
                               <input name="semestre" class="form-control" type="number" placeholder="Semestre de ingreso" required>
                            </div>

                            <div class="form-group">
                               <label>Año de postulación</label>
                               <input name="nombre" class="form-control" type="text" placeholder="Año de postulación" required>
                            </div>

                            <div class="form-group">
                               <label>Estudiante</label>
                               <select name="user_id" class="form-control" required>
                                   <option value="">Elija el estudiante</option>
                                   @foreach($estudiantes as $est)
                                       <option value="{{$est->id}}">{{$est->nombre.' '.$est->apellidos}}</option>
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

                            <input name="tipo" type="hidden" value="2">

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