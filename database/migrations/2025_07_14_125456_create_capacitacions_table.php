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
        Schema::create('capacitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->date('fecha');
            $table->string('observacion',150)->nullable();
            $table->integer('usuario_anulacion_id')->unsigned()->nullable();
            $table->string('motivo_anulacion',150)->nullable();
            // Foreign keys
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('usuario_anulacion_id')->references('id')->on('usuarios');
            $table->foreign('estado_id')->references('id')->on('capacitacion_estados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacitacions');
    }
};
