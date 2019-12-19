@extends('template')

@section('style')
@endsection

@section('title')
    <h2>Niveles de cargos laborales</h2>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header">
                    <h3>Modificar nivel</h3>
                    <hr>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('nivel-cargo.update', $nivel->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input name="nombre" id="nombre" class="form-control" type="text"
                                   placeholder="Ej: Alta Gerencia"
                                    value="{{$nivel->nombre}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input name="descripcion" id="descripcion" class="form-control" type="text"
                                   placeholder="Ej: Cargo en nivel estratégico de la empresa"
                                   value="{{$nivel->descripcion}}"
                            >
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-primary" value="Guardar Cambios">
                        </div>
                    </form>
                </div>
            </div><!-- END card-->
        </div>
    </div><!-- END row-->
@endsection
@section('script')

@endsection