@extends('layout')

@section('header-section')
<h1>Editar Producto</h1>
@endsection

@section('content')

@if (Session::has('message')){{
    Session::get('message');
}}
@endif

<form action="{{ url('/product/'.$producto->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-row">
        <div class="form-group col-md-12 col-lg-12">
            <a class="btn btn-success btn-md" style="float:right;"
                href="{{ url('product') }}"><b>Volver</b></a><br><br><br>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="product_name">Producto</label><br>
            <input class="form-control" type="text" name="product_name" id="product_name" style="width:100%;" required
                value="{{ $producto->name }}">
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="product_weight">Peso</label><br>
            <input class="form-control" type="number" name="product_weight" id="product_weight" style="width:100%;"
                required value="{{ $producto->weight }}">
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="product_price">Precio</label><br>
            <input class="form-control" type="float" name="product_price" id="product_price" style="width:100%;"
                required value="{{ $producto->price }}">
        </div>
        <div class="form-group col-md-10 col-lg-12">
            <button type="submit" class="btn btn-success" style="float:right; margin-top:15px;">Guardar</button>
        </div>
    </div>
</form>
@endsection