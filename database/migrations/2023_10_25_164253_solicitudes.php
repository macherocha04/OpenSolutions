<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('ID_solicitud'); // Clave primaria autoincremental
            $table->date('Fecha_inicio');
            $table->date('Fecha_final');
            $table->unsignedInteger('Estado_id'); // Clave foránea
            $table->unsignedInteger('Solicitante_id'); // Clave foránea
            $table->timestamps(); // Campos created_at y updated_at para el control de tiempo

            // Definir las claves foráneas
            $table->foreign('Estado_id')->references('ID_estado')->on('estados');
            $table->foreign('Solicitante_id')->references('ID_solicitante')->on('solicitantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
};
