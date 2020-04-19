@extends('layout')

@section('header-section')
    <h1>Agregar ingrediente</h1>
@endsection

@section('content')
    <div class="col-md-12">
        <button type="submit" class="btn btn-success" style="float:right;">volver</button>
    </div>
    @include('raw_material.form')
    <div class="col-md-10">
        <button type="submit" class="btn btn-success" style="float:right; margin-top:15px;">guardar</button>
    </div>
@endsection

