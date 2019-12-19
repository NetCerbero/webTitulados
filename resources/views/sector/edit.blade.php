@extends('template')

@section('style')
@endsection

@section('title')
    <h2>Sectores Industriales</h2>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header">
                    <h3>Modificar sector</h3>
                    <hr>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('sector.update', $sector->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input name="nombre" id="nombre" class="form-control" type="text"
                                   placeholder="Ej: Hidrocarburos" value="{{$sector->nombre}}" maxlength="50" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input name="descripcion" id="descripcion" class="form-control" type="text"
                                   placeholder="Ej: Empresas dedicadas a la explotación de recursos naturales hidrocarburíferos"
                                   value="{{$sector->descripcion}}" maxlength="255">
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