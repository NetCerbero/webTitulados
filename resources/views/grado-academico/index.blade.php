@extends('template')
@section('style')

@endsection
@section('title')
    <h2>Gestión de Grados Académicos</h2>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-header">
                        <h3>Lista de Grados Académicos</h3>
                        <hr>
                        <a href="{{route('grado-academico.create')}}" class="btn btn-success">
                            Registrar nuevo grado académico
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($grados as $grado)
                                <tr>
                                    <td>{{$grado->id}}</td>
                                    <td>{{$grado->grado}}</td>
                                    <td>
                                        <a class="badge badge-info" href="{{route('grado-academico.show', $grado->id)}}">
                                            Ver
                                        </a>
                                        |
                                        <a class="badge badge-warning" href="{{route('grado-academico.edit', $grado->id)}}">
                                            Editar
                                        </a>
                                        |
                                        <a class="badge badge-danger" href="{{route('grado-academico.destroy', $grado->id)}}">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- container -->
@endsection
