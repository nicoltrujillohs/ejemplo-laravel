<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id(); //primary key 
            $table->string('correo'); //maximo de 285 caracteres
            $table->text('comentario');
            $table->timestamps(); ///crea dos columnas una para cuando se crea el registro y otra de cuando se actualizan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
