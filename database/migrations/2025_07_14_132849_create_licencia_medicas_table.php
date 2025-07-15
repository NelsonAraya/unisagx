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
        Schema::create('licencia_medicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->unsignedBigInteger('folio');
            $table->date('fecha_emision');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('estado_id')->unsigned()->nullable();
            $table->integer('usuario_crea_id')->unsigned()->nullable();
            $table->integer('medico');
            $table->integer('licencia_tipo_id')->unsigned()->nullable();
            $table->integer('licencia_tipo_reposo_id')->unsigned();
            $table->integer('licencia_lugar_reposo_id')->unsigned();
            // Foreign keys
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('estado_id')->references('id')->on('licencia_medica_estados');
            $table->foreign('usuario_crea_id')->references('id')->on('usuarios');
            $table->foreign('licencia_tipo_id')->references('id')->on('licencia_medica_tipos');
            $table->foreign('licencia_tipo_reposo_id')->references('id')->on('licencia_medica_reposos');
            $table->foreign('licencia_lugar_reposo_id')->references('id')->on('licencia_medica_lugar_reposos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licencia_medicas');
    }
};
