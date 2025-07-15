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
        Schema::create('permiso_bloques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permiso_id')->unsigned();
            $table->date('fecha');
            $table->enum('bloque', ['MAÑANA', 'TARDE']);
            // Foreign keys
            $table->foreign('permiso_id')->references('id')->on('permisos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permiso_bloques');
    }
};
