@extends('template')

@section('style')
@endsection

@section('title')
    <h2>Regímenes Regulatorios</h2>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-default">
                    <div class="card-header">
                        <h3>Registrar nuevo regimen regulatorio</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <form method="POST" action="{{route('regimen.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input name="nombre" id="nombre" class="form-control" type="text"
                                           placeholder="Ej: Privado" maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción:</label>
                                    <input name="descripcion" id="descripcion" class="form-control" type="text"
                                           placeholder="Ej: Empresas de capital privado con fines de lucro"
                                           maxlength="255" required>
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
