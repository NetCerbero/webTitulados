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
                         <h3>Graduación estudiantes externos</h3>
                     </div>
                     <div class="card-body">
                        <form method="POST" action="{{route('modalidad.store')}}">
                            @csrf
                            <div class="form-group">
                               <label>Año de ingreso</label>
                               <input name="anio" class="form-control" type="number" placeholder="Nombre del rol">
                            </div>

                            <div class="form-group">
                               <label>Semestre</label>
                               <input name="semestre" class="form-control" type="number" placeholder="Nombre del rol">
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
                               <label>Año de titulación</label>
                               <input name="anio_titulacion" class="form-control" type="text" placeholder="Abreviación del cu">
                            </div>

                            <input name="tipo" type="hidden" value="4">

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