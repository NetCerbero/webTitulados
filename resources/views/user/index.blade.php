@extends('template')
@section('style')

@endsection
@section('title')
<h2>Gestión de usuarios</h2>
@endsection
@section('content')
<div class="d-flex justify-content-end mb-3">
    <a class="btn btn-primary" href="{{route('rol.create')}}">
        <i class="fa fa-book"></i> Registrar
    </a>
</div>
<div class="row">
    <div class="col">
        <!-- START card-->
        <div class="card card-default">
            <div class="card-header">Lista de usuarios</div>
            <div class="card-body">
            <!-- START table-responsive-->
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellidos}}</td>
                                <td>
                                    @if($user->tipo == 1)
                                        Estudiante
                                    @elseif($user->tipo == 2)
                                        Docente
                                    @elseif($user->tipo == 3)
                                        Externo
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user.edit',$user->id)}}"> editar </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- END table-responsive-->
            </div>
        </div><!-- END card-->
    </div>
</div><!-- END row-->

@endsection
@section('script')

@endsection