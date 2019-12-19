@extends('template')

@section('style')
@endsection

@section('title')
    <h2>Sectores Industriales</h2>
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
                        <h3>Lista de Sectores Industriales</h3>
                        <hr>
                        <a href="{{route('sector.create')}}" class="btn btn-success">
                            <span class="oi oi-plus"></span> Registrar nuevo sector
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
                                @foreach($sectores as $sector)
                                <tr>
                                    <td>{{$sector->id}}</td>
                                    <td>{{$sector->nombre}}</td>
                                    <td>{{$sector->descripcion}}</td>
                                    <td>
                                        <a class="badge badge-info" href="{{route('sector.show', $sector->id)}}">
                                            Ver
                                        </a>
                                        |
                                        <a class="badge badge-warning" href="{{route('sector.edit', $sector->id)}}">
                                            Editar
                                        </a>
                                        |
                                        <a class="badge badge-danger" href="{{route('sector.destroy', $sector->id)}}">
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
