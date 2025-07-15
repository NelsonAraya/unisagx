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
        Schema::create('asistencia_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario_id')->unsigned();
            $table->string('tipo_verificacion',50);
            $table->integer('asistencia_tipo_id')->unsigned();
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('reloj_id');
            $table->tinyInteger('real_marca')->unsigned();
            $table->enum('cambiado', ['S', 'N'])->default('N');
            $table->enum('contar', ['S', 'N'])->default('N');
            // Foreign keys
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('asistencia_tipo_id')->references('id')->on('asistencia_tipos');
            $table->foreign('reloj_id')->references('id')->on('asistencia_relojes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia_usuarios');
    }
};
