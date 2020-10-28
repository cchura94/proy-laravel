@extends("layouts.admin")

@section("contenedor")

<h1>Nombre: {{ $est->nombre }}</h1>
<h1>Direccion: {{ $est->direccion }}</h1>
<h1>telefono: {{ $est->telefono }}</h1>

<table class="table">
    <tr>
        <td>NOMBRE</td>
        <td>CANTIDAD</td>
        <td>PRECIO</td>
        <td>SUBTOTAL</td>
        <td></td>
    </tr>

    @foreach($est->productos as $prod)
    <tr>
        <td>{{ $prod->nombre }}</td>
        <td>{{ $prod->cantidad }}</td>
        <td>{{ $prod->precio }}</td>
        <td>{{ $prod->cantidad * $prod->precio }}</td>
        <td></td>
    </tr>

    @endforeach

</table>

@endsection