<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chequeo_virtual', function (Blueprint $table) {
            $table->id();
            $table->integer('id_vehiculo');
            $table->datetime('fecha_hora');
            $table->double('latitud');
            $table->double('longitud');
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
        Schema::dropIfExists('chequeo_virtual');
    }
};
