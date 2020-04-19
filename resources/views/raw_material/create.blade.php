@extends('layout')

@section('header-section')
<h1>Agregar ingrediente</h1>
@endsection

@section('content')
<form>
    <div class="form-group col-md-12">
        <a class="btn btn-success btn-md" style="float:right;"
            href="{{ url('raw_material/index') }}"><b>Volver</b></a><br><br><br>
    </div>
    @include('raw_material.form')
    <div class="form-group col-md-10">
        <button type="submit" class="btn btn-success" style="float:right; margin-top:15px;">guardar</button>
    </div>
</form>
@endsection