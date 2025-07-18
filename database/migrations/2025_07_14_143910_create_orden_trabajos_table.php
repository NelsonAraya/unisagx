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
        Schema::create('orden_trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('tipo_orden_id')->unsigned();
            $table->tinyInteger('jornada');
            $table->integer('valor_semana')->nullable();
            $table->integer('valor_semana_extension')->nullable();
            $table->integer('valor_nocturno')->nullable();
            $table->integer('valor_finde_semana')->nullable();
            $table->integer('monto_contrato')->nullable();
            $table->integer('fondo_id')->unsigned()->nullable();
            $table->integer('profesion_id')->unsigned();
            $table->integer('prevision_id')->unsigned();
            $table->integer('afp_id')->unsigned();
            $table->string('direccion_ot', 150);
            $table->string('telefono_ot', 150);
            $table->integer('reemplazante_id')->unsigned()->nullable();
            $table->string('motivo_reemplazo', 150)->nullable();
            $table->integer('usuario_crea_id')->unsigned();
            $table->integer('departamento_id')->unsigned();
            $table->integer('centro_costo_id')->unsigned()->nullable();
            $table->tinyInteger('nivel')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned();
            // Foreign keys
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('tipo_orden_id')->references('id')->on('orden_trabajo_tipos');
            $table->foreign('profesion_id')->references('id')->on('profesiones');
            $table->foreign('prevision_id')->references('id')->on('previsiones');
            $table->foreign('afp_id')->references('id')->on('afps');
            $table->foreign('reemplazante_id')->references('id')->on('usuarios');
            $table->foreign('usuario_crea_id')->references('id')->on('usuarios');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('estado_id')->references('id')->on('orden_trabajo_estados');
            $table->foreign('centro_costo_id')->references('id')->on('centro_costos');
            $table->foreign('fondo_id')->references('id')->on('fondos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_trabajos');
    }
};
