@extends("layouts.sitio")
@section("contenedor")
<h1>Listado de Establecimientos</h1>
<!--{{ $establecimientos }}-->

<a href="/establecimiento/create" class="btn btn-primary">Nuevo Establecimiento</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>NOMBRE</td>
            <td>DIRECCION</td>
            <td>TELEFONO</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
        @foreach($establecimientos as $est)
        <tr>
            <td>{{ $est->nombre }}</td>
            <td>{{ $est->direccion }}</td>
            <td>{{ $est->telefono }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection