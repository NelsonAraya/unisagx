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
        Schema::create('capacitacion_cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('capacitacion_id')->unsigned();
            $table->integer('curso_entidad_id')->unsigned();
            $table->double('nota');
            $table->enum('aplica_nota', ['S', 'N'])->default('N');
            $table->enum('notario', ['S', 'N'])->default('N');
            $table->double('puntaje')->nullable();
            // Foreign keys
            $table->foreign('capacitacion_id')->references('id')->on('capacitacions');
            $table->foreign('curso_entidad_id')->references('id')->on('capacitacion_curso_entidads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacitacion_cursos');
    }
};
