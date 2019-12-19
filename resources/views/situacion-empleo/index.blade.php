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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-header">
                        <h3>Lista de Situaciones de Empleo</h3>
                        <hr>
                        <a href="{{route('situacion-empleo.create')}}" class="btn btn-success">
                            <span class="oi oi-plus"></span> Registrar nueva situación de empleo
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($situaciones as $situacion)
                                <tr>
                                    <td>{{$situacion->id}}</td>
                                    <td>{{$situacion->nombre}}</td>
                                    <td>{{$situacion->descripcion}}</td>
                                    <td>
                                        <a class="badge badge-info" href="{{route('situacion-empleo.show', $situacion->id)}}">
                                            Ver
                                        </a>
                                        |
                                        <a class="badge badge-warning" href="{{route('situacion-empleo.edit', $situacion->id)}}">
                                            Editar
                                        </a>
                                        |
                                        <a class="badge badge-danger" href="{{route('situacion-empleo.destroy', $situacion->id)}}">
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
