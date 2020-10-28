@extends("layouts.admin")
@section("contenedor")
<h1>Listado de Establecimientos</h1>
<!--{{ $establecimientos }}-->

<a href="{{ route('establecimiento.create') }}" class="btn btn-primary">Nuevo Establecimiento</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>NOMBRE</td>
            <td>DIRECCION</td>
            <td>TELEFONO</td>
            <td>PRODUCTO</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
        @foreach($establecimientos as $est)
        <tr>
            <td>{{ $est->nombre }}</td>
            <td>{{ $est->direccion }}</td>
            <td>{{ $est->telefono }}</td>
            <td>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#agregar{{$est->id}}">
  asignar producto
</button>

<!-- Modal -->
<div class="modal fade" id="agregar{{ $est->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NUEVO PRODUCTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('agregar_producto', $est->id) }}" method="post">
        @csrf
      <div class="modal-body">
        <h3>ESTABLECIMIENTO: {{ $est->nombre }}</h3>

        <label for="">Nombre:</label>
        <input type="text" name="nombre" class="form-control">

        <label for="">Precio:</label>
        <input type="number" step="0.01" name="precio" class="form-control">
        
        <label for="">Cantidad:</label>
        <input type="number" name="cantidad" class="form-control">

        <label for="">Descripcion:</label>
        <textarea name="descripcion" class="form-control"></textarea>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
            <input type="submit" value="Agregar Producto" class="btn btn-success">
              
      </div>
      </form>
    </div>
  </div>
</div>
            </td>
            <td>
            <a href="{{ route('establecimiento.show', $est->id) }}" class="btn btn-success btn-xs ">ver productos</a>
                
                <a href="{{ route('establecimiento.edit', $est->id) }}" class="btn btn-warning btn-xs ">editar</a>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal{{$est->id}}">
  eliminar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $est->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Establecimiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Esta seguro de eliminar el registro de establecimiento: {{ $est->nombre }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form action="{{ route('establecimiento.destroy', $est->id) }}" method="post">
                    @csrf
                    @Method("DELETE")
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                </form>
      </div>
    </div>
  </div>
</div>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $establecimientos->links() }}
@endsection