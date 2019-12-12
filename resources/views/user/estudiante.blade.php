@extends('template')
@section('style')

@endsection
@section('title')
<h2>Registro de estudiante</h2>
@endsection
@section('content')
<div class="row">
    <div class="col">
        <!-- START card-->
        <div class="card card-default">
            <div class="card-header">Registro de estudiante</div>
            <div class="card-body">
            <form method="POST" action="{{route('user.store')}}">
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" class="form-control" type="text" placeholder="Ingrese el nombre">
                </div>

                <div class="form-group">
                    <label>Apellido</label>
                    <input name="apellidos" class="form-control" type="text" placeholder="Ingrese el apellido">
                </div>
                
                <div class="form-group">
                    <label>Genero</label>
                    <select name="genero" id=""  class="form-control">
                        <option value="">Elija el genero</option>
                        <option value="m">Masculino</option>
                        <option value="f">Femenino</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control" type="email" placeholder="Ingrese el correo">
                </div>

                <div class="form-group">
                    <label>Contraseña</label>
                    <input name="password" class="form-control" type="text" placeholder="Ingrese su contraseña">
                </div>

                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input name="fecha_nac" class="form-control" type="date" placeholder="Fecha de nacimiento">
                </div>

                <div class="form-group">
                    <label>Registro</label>
                    <input name="registro" class="form-control" type="number" placeholder="codigo de docente">
                </div>
                <input name="tipo" class="form-control" type="hidden" value="1">
                <div class="form-group">
                    <label>Nombre del rol</label>
                    <select name="role_id" id=""  class="form-control">
                        <option value="">Elija el rol</option>
                        @foreach($roles as $rol)
                            <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
            </div>
        </div><!-- END card-->
    </div>
</div><!-- END row-->
@endsection
@section('script')

@endsection