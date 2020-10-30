<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo_fumigacion', 9);
            $table->date('fecha');
            $table->string('hora', 11);
            $table->boolean('cancelado')->dafult(0);
            $table->unsignedBigInteger('fumigation_type_id');
            $table->foreign('fumigation_type_id')->references('id')->on('fumigation__types');
            $table->unsignedBigInteger('establishments_id');
            $table->foreign('establishments_id')->references('id')->on('establishments');
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
        Schema::dropIfExists('appointments');
    }
}
