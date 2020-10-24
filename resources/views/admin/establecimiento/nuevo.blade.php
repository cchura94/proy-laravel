@extends("layouts.sitio")
@section("contenedor")

<h1>Nuevo Establecimiento</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('establecimiento.store') }}" method="post">
    @csrf
    <label for="">Ingrese Nombre de establecimiento</label>
    <input type="text" name="nombre" required>

    <label for="">Ingrese Dirección de establecimiento</label>
    <input type="text" name="direccion">

    <label for="">Ingrese Telefono</label>
    <input type="text" name="telefono" required>
    
    <input type="submit">
</form>

@endsection