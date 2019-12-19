@extends('template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-default">
                    <div class="card-header">
                        <h3>Registrar nuevo grado académico</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <form method="POST" action="{{route('grado-academico.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="grado">Nombre:</label>
                                    <input name="grado" id="grado" class="form-control" type="text" placeholder="Ej: Licenciado(a)"
                                           maxlength="50" required>
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
