@extends('template')

@section('style')
@endsection

@section('title')
    <h2>Niveles de cargos laborales</h2>
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
                        <h3>Lista de Niveles de Cargos</h3>
                        <hr>
                        <a href="{{route('nivel-cargo.create')}}" class="btn btn-success">
                            <span class="oi oi-plus"></span> Registrar nuevo nivel
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
                                @foreach($niveles as $nivel)
                                <tr>
                                    <td>{{$nivel->id}}</td>
                                    <td>{{$nivel->nombre}}</td>
                                    <td>{{$nivel->descripcion}}</td>
                                    <td>
                                        <a class="badge badge-info" href="{{route('nivel-cargo.show', $nivel->id)}}">
                                            Ver
                                        </a>
                                        |
                                        <a class="badge badge-warning" href="{{route('nivel-cargo.edit', $nivel->id)}}">
                                            Editar
                                        </a>
                                        |
                                        <a class="badge badge-danger" href="{{route('nivel-cargo.destroy', $nivel->id)}}">
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
