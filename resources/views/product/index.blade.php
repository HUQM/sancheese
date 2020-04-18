@extends('layout')

@section('header-section')

    <h2>Lista de productos</h2>

@endsection

@section('content')

<div class="row">
    <div class="col col-md-12">
    <a class="btn btn-success btn-md" style="float: right;" href="{{ url('product/create') }}"><b>Agregar Nuevo</b></a><br><br><br>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <table id="" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Caducidad</th>
                        <th width="120px">Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection

@section('adminlte_js')

@stop