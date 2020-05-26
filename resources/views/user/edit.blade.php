@extends('layout')

@section('header-section')
<h1>Editar Producto</h1>
@endsection

@section('content')
<form action="{{ url('/user/'.$user->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-row">
        <div class="form-group col-md-12 col-lg-12">
            <a class="btn btn-success btn-md" style="float:right;"
                href="{{ url('user') }}"><b>Volver</b></a><br><br><br>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="user_name">Nombre</label><br>
        <input class="form-control" type="text" name="user_name" id="user_name" style="width:100%;" value="{{ $user->name }}">
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="user_email">Correo</label><br>
            <input class="form-control" type="email" name="user_email" id="user_email" style="width:100%;" value="{{ $user->email }}">
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="user_passsword">Contraseña</label><br>
            <input class="form-control" type="password" name="user_passsword" id="user_passsword" style="width:100%;" value="{{ $user->pasword }}">
        </div>
        <div class="form-group col-md-10 col-lg-12">
            <button type="submit" class="btn btn-success" style="float:right; margin-top:15px;">Guardar</button>
        </div>
    </div>
</form>
@endsection
