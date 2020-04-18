@extends('/layout')

@section('adminlte_css')
<meta name="csrf-token"=content="{{ csrf_token() }}">
@stop

@section('header-section')

    <h2>Lista de materiales</h2>

@endsection

@section('content')

<div class="row">
    <div class="col col-md-12">
    <a class="btn btn-success btn-md" style="float: right;" href="{{ url('raw_material/create') }}"><b>Agregar Nuevo</b></a><br><br><br>
    </div>
    <div class="col-md-12">
        <div class="box-body">
            <h1>Crear productos</h1>
        </div>
    </div>
</div>

@endsection

@section('adminlte_js')

@stop