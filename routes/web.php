<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Models\Establecimiento;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/saludo", function(){
    echo "Hola Mundo desde laravel";
});

Route::get("/saludo2", function(){
    return "Saludo 2";
});

Route::get("/nombre/{nom}", function($nombre){
    return "Hola " . $nombre;
});

Route::get("/nombre/{nom}/edad/{ed}", function($nombre, $edad){
    return "Hola " . $nombre  . " mi edad es: " . $edad;
});

// Rutas con vistas

//   /contacto
Route::get("/contacto", function(){
    return view("contactos");
});
//   /nosotros
Route::get("/nosotros", function(){
    return view("acercade");
});
//   /productos
Route::get("/productos", function(){
    return view("productos");
});
//   /servicios
Route::get("/servicios", function(){
    return view("servicios");
});
//   /galeria

Route::get("/galeria", function(){
    return view("galeria");
});

Route::prefix('admin')->group(function () {
    Route::post("/establecimiento/{id}/agregar_producto", [EstablecimientoController::class, "agregar_producto"])->name("agregar_producto");

    //Rutas con controladores (persona)
    Route::get("/persona", [PersonaController::class, "listar"])->name("lista_persona");
    Route::get("/persona/crear", [PersonaController::class, "crear"])->name("crear_persona");
    Route::post("/persona", [PersonaController::class, "guardar"])->name("guardar_persona");
    Route::get("/persona/{id}", [PersonaController::class, "mostrar"])->name("mostrar_persona");
    Route::get("/persona/{id}/editar", [PersonaController::class, "editar"])->name("editar_persona");
    Route::put("/persona/{id}", [PersonaController::class, "modificar"])->name("modificar_persona");
    Route::delete("/persona/{id}", [PersonaController::class, "eliminar"])->name("eliminar_persona");

    //Rutas con controladores (categoria)
    Route::get("/categoria", [CategoriaController::class, "index"])->name("categoria.index");
    Route::get("/categoria/create", [CategoriaController::class, "create"])->name("categoria.create");
    Route::post("/categoria", [CategoriaController::class, "store"])->name("categoria.store");
    Route::get("/categoria/{id}", [CategoriaController::class, "show"])->name("categoria.show");
    Route::get("/categoria/{id}/edit", [CategoriaController::class, "edit"])->name("categoria.edit");
    Route::put("/categoria/{id}", [CategoriaController::class, "update"])->name("categoria.update");
    Route::delete("/categoria/{id}", [CategoriaController::class, "destroy"])->name("categoria.destroy");


    //Rutas para controladores con recursos
    Route::resource("producto", ProductoController::class);
    Route::resource("establecimiento", EstablecimientoController::class);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
