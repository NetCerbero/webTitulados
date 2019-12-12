@extends('template')
@section('style')

@endsection
@section('title')

@endsection
@section('content')
<div class="row">
               <div class="col">
                  <!-- START card-->
                  <div class="card card-default">
                     <div class="card-header">Lista de roles</div>
                     <div class="card-body">
                        <!-- START table-responsive-->
                        <div class="table-responsive">
                           <table class="table table-striped table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Rol</th>
                                    <th>Abreviatura</th>
                                    <th>Acciones</th>
                                 </tr>
                              </thead>
                              <tbody>
                                    @foreach($roles as $rol)
                                        <tr>
                                            <td>{{$rol->id}}</td>
                                            <td>{{$rol->nombre}}</td>
                                            <td>{{$rol->abreviacion}}</td>
                                            <td>
                                                <a href="{{route('adm.edit',$rol->id)}}"> editar </a>
                                            </td>
                                        </tr>
                                    @endforeach
                              </tbody>
                           </table>
                        </div><!-- END table-responsive-->
                     </div>
                  </div><!-- END card-->
               </div>
            </div>
@endsection
@section('script')

@endsection