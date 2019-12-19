@extends('template')
@section('style')

@endsection
@section('title')
<h2>Modalidad de gradución</h2>
@endsection
@section('content')
<div class="row">
    <div class="col">
        <!-- START card-->
        <div class="card card-default">
            <div class="card-header">Lista de modalidades</div>
            <div class="card-body">
            <!-- START table-responsive-->
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Año ingreso</th>
                        <th>Docente guia</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $mod)
                            <tr>
                                <td>{{$mod->id}}</td>
                                <td>{{$mod->anio}}</td>
                                <td>
                                    @if( $mod->user )
                                        {{$mod->user->nombre.' '.$mod->user->apellidos}}
                                    @else
                                        No tiene
                                    @endif
                                </td>
                                <td>
                                    @if($mod->tipo == 1)
                                        Tesis
                                    @elseif($mod->tipo == 2)
                                        Examen de grado
                                    @elseif($mod->tipo == 3)
                                        Graduación directa
                                    @elseif($mod->tipo == 4)
                                        Externo
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('modalidad.edit',$mod->id)}}"> editar </a>
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