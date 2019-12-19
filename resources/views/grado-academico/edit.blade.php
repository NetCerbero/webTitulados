@extends('template')
@section('style')

@endsection
@section('title')
    <h2>Creación de rol</h2>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header">
                    <h3>Modificar grado académico</h3>
                    <hr>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('grado-academico.update', $grado->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input name="grado" id="grado" class="form-control" type="text"
                                   placeholder="Ej: Licenciatura" value="{{$grado->grado}}" maxlength="50" readonly>
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