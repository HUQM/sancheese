@extends('layout')

@section('header-section')
<h1>Editar productos en almacén</h1>
@endsection

@section('content')
<form action="{{ url('/store/'.$storeProduct->id) }}" method="POST">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    <div class="form-row">
        <div class="form-group col-md-12 col-lg-12">
            <a class="btn btn-success btn-md" style="float:right;"
                href="{{ url('store') }}"><b>Volver</b></a><br><br><br>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="product_store">Producto</label><br>
        <input class="form-control" type="number" name="product_store" id="product_store" style="width:100%;" value="{{ $storeProduct->product_id }}" required>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="store_amount">Cantidad</label><br>
            <input class="form-control" type="number" name="store_amount" id="store_amount" style="width:100%;"
            value="{{ $storeProduct->amount }}" required>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="store_create">Creación</label><br>
            <input class="form-control" type="date" name="store_create" id="store_create" style="width:100%;" value="{{ $storeProduct->elaboration }}" required>
        </div>       
        <div class="form-group col-md-6 col-lg-6">
            <label for="store_expiration">Caducidad</label><br>
            <input class="form-control" type="date" name="store_expiration" id="store_expiration" style="width:100%;"
            value="{{ $storeProduct->expiration }}" required>
        </div>
        
        <div class="form-group col-md-10 col-lg-12">
            <button type="submit" class="btn btn-success" style="float:right; margin-top:15px;">Guardar</button>
        </div>
    </div>
</form>
@endsection