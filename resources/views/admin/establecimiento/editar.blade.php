@extends("layouts.admin")
@section("contenedor")

<h1>Editar Establecimiento</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{ $est }}
<form action="{{ route('establecimiento.update', $est->id) }}" method="post">
    @csrf
    @Method("PUT")
    <label for="">Ingrese Nombre de establecimiento</label>
    <input type="text" name="nombre" required class="form-control" value="{{ $est->nombre}}">

    <label for="">Ingrese Dirección de establecimiento</label>
    <input type="text" name="direccion" class="form-control" value="{{ $est->direccion}}">

    <label for="">Ingrese Telefono</label>
    <input type="text" name="telefono" required class="form-control" value="{{ $est->telefono}}">
    
    <input type="submit">
</form>

@endsection