@extends('template')

@section('style')
@endsection

@section('title')
    <h2>Regímenes Regulatorios</h2>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header">
                    <h3>Viendo regimen: {{$regimen->nombre}}</h3>
                    <hr>
                    <a href="{{ route('regimen.edit',$regimen->id)}}" class="btn btn-primary">
                        Modificar
                    </a>
                    <a href="{{ route('regimen.destroy',$regimen->id)}}" class="btn btn-danger">
                        Eliminar
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td><b>Identificador</b></td>
                                <td>{{ $regimen->id }}</td>
                            </tr>
                            <tr>
                                <td><b>Nombre</b></td>
                                <td>{{ $regimen->nombre }}</td>
                            </tr>
                            <tr>
                                <td><b>Descripción</b></td>
                                <td>{{ $regimen->descripcion }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div><!-- END card-->
        </div>
    </div><!-- END row-->
@endsection
@section('script')

@endsection