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
        Schema::create('feriado_legals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->date('fecha_ingreso');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('cantidad_dias');
            $table->integer('dias_progresivos')->nullable();
            $table->integer('dias_adicionales')->nullable();
            $table->enum('fuera_ciudad', ['S', 'N'])->default('N');
            $table->string('observacion')->nullable();
            $table->integer('estado_id')->unsigned();
            $table->string('motivo_rechazo')->nullable();
            $table->integer('autoriza_id')->unsigned()->nullable();
            $table->integer('sege_id')->unsigned()->nullable();
            // Foreign keys
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('autoriza_id')->references('id')->on('usuarios');
            $table->foreign('sege_id')->references('id')->on('usuarios');
            $table->foreign('estado_id')->references('id')->on('feriado_legal_estados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feriado_legals');
    }
};
