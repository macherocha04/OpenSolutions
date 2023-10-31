<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->increments('ID_solicitante'); // Clave primaria autoincremental
            $table->string('Nombre');
            $table->string('Cedula');
            $table->string('Telefono');
            $table->string('Correo');
            $table->string('Direccion');
            $table->unsignedInteger('Ocupacion_id'); // Clave foránea
            $table->unsignedInteger('Contrato_id'); // Clave foránea
            $table->timestamps(); // Campos created_at y updated_at para el control de tiempo

            // Definir las claves foráneas
            $table->foreign('Ocupacion_id')->references('ID_ocupacion')->on('ocupacion');
            $table->foreign('Contrato_id')->references('ID_contrato')->on('contrato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitantes');
    }

      
};
