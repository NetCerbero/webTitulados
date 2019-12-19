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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-header">
                        <h3>Lista de Areas de Estudio</h3>
                        <hr>
                        <a href="{{route('area-estudio.create')}}" class="btn btn-success">
                            <span class="oi oi-plus"></span> Registrar nueva area
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
                                @foreach($areas as $area)
                                <tr>
                                    <td>{{$area->id}}</td>
                                    <td>{{$area->nombre}}</td>
                                    <td>{{$area->descripcion}}</td>
                                    <td>
                                        <a class="badge badge-info" href="{{route('area-estudio.show', $area->id)}}">
                                            Ver
                                        </a>
                                        |
                                        <a class="badge badge-warning" href="{{route('area-estudio.edit', $area->id)}}">
                                            Editar
                                        </a>
                                        |
                                        <a class="badge badge-danger" href="{{route('area-estudio.destroy', $area->id)}}">
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
