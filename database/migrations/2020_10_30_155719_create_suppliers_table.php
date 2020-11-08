<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_types_id');
            $table->foreign('product_types_id')->references('id')->on('product_types');
            $table->string('nombre_proveedor', 50);
            $table->string('direccion_proveedor', 100);
            $table->string('telefono_proveedor', 9);
            $table->string('celular_proveedor', 9);
            $table->string('correo_proveedor', 30)->unique();
            $table->string('comentarios', 100);
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
        Schema::dropIfExists('suppliers');
    }
}
