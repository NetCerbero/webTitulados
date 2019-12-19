@extends('template')

@section('style')
@endsection

@section('title')
    <h2>Areas de Estudio</h2>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-default">
                    <div class="card-header">
                        <h3>Registrar nueva area de estudio</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <form method="POST" action="{{route('area-estudio.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre del área de estudio:</label>
                                    <input name="nombre" id="nombre" class="form-control" type="text"
                                           placeholder="Ej: Alta Gerencia">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción:</label>
                                    <input name="descripcion" id="descripcion" class="form-control" type="text"
                                           placeholder="Ej: Estudio de la administración, liderazgo y dirección en altos cargos estratégicos de la empresa">
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
