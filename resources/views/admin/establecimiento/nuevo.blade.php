@extends("layouts.admin")
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
    <input type="text" name="nombre" required class="form-control">

    <label for="">Ingrese Dirección de establecimiento</label>
    <input type="text" name="direccion" class="form-control">

    <label for="">Ingrese Telefono</label>
    <input type="text" name="telefono" required class="form-control">
    
    <input type="submit">
</form>

@endsection