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
        Schema::create('capacitacion_curso_entidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entidad_id')->unsigned();
            $table->string('nombre',150);
            $table->smallInteger('horas');
            $table->date('fecha');
            $table->integer('tipo_hora_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
            // Foreign keys
            $table->foreign('entidad_id')->references('id')->on('capacitacion_entidads');
            $table->foreign('tipo_hora_id')->references('id')->on('capacitacion_curso_tipo_horas');
            $table->foreign('tipo_id')->references('id')->on('capacitacion_curso_tipos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacitacion_curso_entidads');
    }
};
