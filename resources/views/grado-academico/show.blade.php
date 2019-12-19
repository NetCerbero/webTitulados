@extends('template')
@section('style')

@endsection
@section('title')
    <h2>Grados Académicos</h2>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header">
                    <h3>Viendo grado: {{$grado->grado}}</h3>
                    <hr>
                    <a href="{{ route('grado-academico.edit',$grado->id)}}" class="btn btn-primary">
                        Modificar
                    </a>
                    <a href="{{ route('grado-academico.destroy',$grado->id)}}" class="btn btn-danger">
                        Eliminar
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td><b>Nombre</b></td>
                                <td>{{ $grado->grado }}</td>
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