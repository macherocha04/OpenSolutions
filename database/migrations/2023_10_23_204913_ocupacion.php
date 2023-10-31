<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ocupacion', function (Blueprint $table) {
            $table->increments('ID_ocupacion'); 
                     $table->string('Nombre');
          
            $table->timestamps(); 
            });
    }

    public function down()
    {
        Schema::dropIfExists('ocupacion');
    }
};
