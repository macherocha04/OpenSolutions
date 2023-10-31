<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('ID_estado'); // Clave primaria autoincremental
            $table->string('Nombre'); // Nombre del estado
            // Puedes agregar más campos si es necesario
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
        Schema::dropIfExists('estados');
    }
};
