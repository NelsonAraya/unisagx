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
        Schema::create('permisos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('permiso_tipo_id')->unsigned();
            $table->integer('permiso_estado_id')->unsigned();
            $table->timestamp('fecha_permiso')->useCurrent();
            $table->string('motivo',150);
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->string('motivo_rechazo',150)->nullable();
            $table->date('fecha_autorizacion')->nullable();
            $table->integer('usuario_autoriza_id')->unsigned()->nullable();
            $table->integer('sege_id')->unsigned()->nullable();
            // Foreign keys
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('permiso_tipo_id')->references('id')->on('permiso_tipos');
            $table->foreign('permiso_estado_id')->references('id')->on('permiso_estados');
            $table->foreign('usuario_autoriza_id')->references('id')->on('usuarios');
            $table->foreign('sege_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
