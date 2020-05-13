@extends('layout')

@section('header-section')
<h1>Editar Material</h1>
@endsection

@section('content')
<form action="{{ url('/raw_material/'.$rawMaterial->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-row">
        <div class="form-group col-md-12 col-lg-12">
            <a class="btn btn-success btn-md" style="float:right;"
                href="{{ url('raw_material') }}"><b>Volver</b></a><br><br><br>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="material_name">Ingrediente</label><br>
            <input class="form-control" type="text" name="material_name" id="material_name" style="width:100%;" required
            value="{{ $rawMaterial->name }}">
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="material_amount">Cantidad</label><br>
            <input class="form-control" type="number" name="material_amount" id="material_amount" style="width:100%;"
                required value="{{ $rawMaterial->amount }}">
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="material_price">Precio</label><br>
            <input class="form-control" type="float" name="material_price" id="material_price" style="width:100%;"
                required value="{{ $rawMaterial->price }}">
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="material_expiration">Caducidad</label><br>
            <input class="form-control" type="date" name="material_expiration" id="material_expiration" style="width:100%;"
                required value="{{ $rawMaterial->expiration }}">
        </div>
        {{-- @include('product.partials.form') --}}
        <div class="form-group col-md-10 col-lg-12">
            <button type="submit" class="btn btn-success" style="float:right; margin-top:15px;">Guardar</button>
        </div>
    </div>
</form>
@endsection
