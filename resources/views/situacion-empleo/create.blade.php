@extends('template')

@section('style')
@endsection

@section('title')
    <h2>Situación de Empleo</h2>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-default">
                    <div class="card-header">
                        <h3>Registrar nueva situación de empleo</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <form method="POST" action="{{route('situacion-empleo.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input name="nombre" id="nombre" class="form-control" type="text"
                                           placeholder="Ej: Empleado Dependiente" maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción:</label>
                                    <input name="descripcion" id="descripcion" class="form-control" type="text"
                                           placeholder="Ej: Persona que se encuentra trabajando para un empleador"
                                           maxlength="255">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Guardar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
