@extends("layouts.admin")

@section("contenedor")
    <h1 class="text-center">Listado de Productos</h1>

    <table class="table table-striped table-hover">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>PRECIO</td>
            <td>CANTIDAD</td>
            <td>SUBTOTAL</td>
            <td>ACCIONES</td>
        </tr>
    @foreach($productos as $prod)
        <tr>
            <td>{{ $prod->id }}</td>
            <td>{{ $prod->nombre }}</td>
            <td>{{ $prod->precio }}</td>
            <td>{{ $prod->cantidad }}</td>
            <td>{{ $prod->precio * $prod->cantidad }}</td>
            <td>ACCIONES</td>
        </tr>
    @endforeach
    </table>
@endsection