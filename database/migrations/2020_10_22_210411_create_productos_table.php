<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->integer("cantidad")->default(0);
            $table->decimal("precio", 8, 2)->nullable();
            $table->text("descripcion")->nullable();
            $table->bigInteger("establecimiento_id")->unsigned();
            $table->bigInteger("categoria_id")->unsigned();
            

            $table->foreign("establecimiento_id")->references("id")->on("establecimientos");
            $table->foreign("categoria_id")->references("id")->on("categorias");
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
