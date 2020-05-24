@extends('layout')

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

@section('header-section')
<h1>Producto a vender</h1>
@endsection

@section('content')
<form action="{{ url('/sales') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-12 col-lg-12">
            <a class="btn btn-success btn-md" style="float:right;"
                href="{{ url('sales') }}"><b>Volver</b></a><br><br><br>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="product_sale">Producto</label><br>
            <select class="form-control" type="number" name="product_sale" id="product_sale" style="width:100%;" required>
            @foreach ($listStores as $listStore)
            <option value="{{$listStore->id}}">{{$listStore->id}}</option>
            @endforeach
            </select>
            {{-- <input class="form-control" type="number" name="product_sale" id="product_sale" style="width:100%;" required> --}}
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="sale_amount">Cantidad</label><br>
            <input class="form-control" type="number" name="sale_amount" id="sale_amount" style="width:100%;"
                required>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="sale_date">Fecha</label><br>
            <input class="form-control" type="date" name="sale_date" id="sale_date" style="width:100%;"
                required>
        </div>
        <div class="form-group col-md-6 col-lg-6">
            <label for="sale_total">Total</label><br>
            <input class="form-control" type="float" name="sale_total" id="sale_total" style="width:100%;"
                required>
        </div>

        <div class="form-group col-md-10 col-lg-12">
            <button type="submit" class="btn btn-success" style="float:right; margin-top:15px;">Guardar</button>
        </div>
    </div>
</form>
@endsection
