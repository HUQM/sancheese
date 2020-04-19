@extends('layout')

@section('header-section')
    <h1>Agregar Producto</h1>
@endsection

@section('content')
    <form>
        <div class="form-group col-md-12 col-lg-12">
            <a class="btn btn-success btn-md" style="float:right;" href="{{ url('product/index') }}"><b>Volver</b></a><br><br><br>
        </div>
        @include('product.partials.form')
        <div class="form-group col-md-10 col-lg-12">
            <button type="submit" class="btn btn-success" style="float:right; margin-top:15px;">Guardar</button>
        </div>
    </form>
@endsection
