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
        Schema::create('anotaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('calificador_id')->unsigned();
            $table->integer('anotacion_tipo_id')->unsigned();
            $table->date('fecha_anotacion');
            $table->text('anotacion');
            $table->integer('estado_id')->unsigned();
            $table->integer('solicitado_por')->unsigned();
            // Foreign keys
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('calificador_id')->references('id')->on('usuarios');
            $table->foreign('solicitado_por')->references('id')->on('usuarios');
            $table->foreign('estado_id')->references('id')->on('anotaciones_estados');
            $table->foreign('anotacion_tipo_id')->references('id')->on('anotaciones_tipos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anotaciones');
    }
};
