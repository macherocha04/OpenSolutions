<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('ID_contrato'); // Clave primaria autoincremental
          
            $table->date('Fecha_inicio');
            $table->date('Fecha_final');
            $table->timestamps(); // Campos created_at y updated_at para el control de tiempo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
};
