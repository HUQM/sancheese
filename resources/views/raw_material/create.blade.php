@extends('layout')

@section('adminlte_css')
<meta name="csrf-token"=content="{{ csrf_token() }}">
@stop

@section('header-section')

    <h2>Lista de materiales</h2>

@endsection

{{-- @section('content')
      <h2>Lista de materiales</h2>

      <a class="btn btn-success btn-md addNew" style="float: right;" href=""><b>Agregar Nuevo</b></a><br><br>

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
@endsection --}}

@section('content')

<div class="row">
    
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