@extends("layouts.sitio")
@section("contenedor")

<div class="container">
<h1>Lista de Productos</h1>
    <div class="row">
        @foreach($productos as $prod)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('/imagenes/angular.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $prod->nombre }}</h5>
                    <span class="btn btn-success btn-xs ">{{ $prod->precio }}</span>
                    <p class="card-text">{{ $prod->descripcion }}</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




@endsection