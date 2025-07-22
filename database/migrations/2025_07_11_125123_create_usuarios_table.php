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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->char('dv', 1);
            $table->string('nombres', 150);
            $table->string('apellidop', 150);
            $table->string('apellidom', 150);
            $table->date('fecha_nacimiento');
            $table->integer('telefono');
            $table->string('direccion', 200);
            $table->integer('sexo_id')->unsigned();
            $table->integer('profesion_id')->unsigned()->nullable();
            $table->integer('prevision_id')->unsigned()->nullable();
            $table->integer('afp_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned();
            $table->date('fecha_ingreso')->nullable();
            $table->integer('estado_civil_id')->unsigned()->nullable();
            $table->integer('nacionalidad_id')->unsigned()->nullable();
            $table->string('email', 150)->nullable();
            $table->string('email_institucional', 150)->nullable();
            $table->enum('encasillado', ['S', 'N'])->default('N');
            $table->tinyInteger('nivel');
            $table->string('password');
            // Foreign keys
            $table->foreign('sexo_id')->references('id')->on('sexos');
            $table->foreign('profesion_id')->references('id')->on('profesiones');
            $table->foreign('prevision_id')->references('id')->on('previsiones');
            $table->foreign('afp_id')->references('id')->on('afps');
            $table->foreign('estado_id')->references('id')->on('estado_usuarios');
            $table->foreign('estado_civil_id')->references('id')->on('estado_civiles');
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidads');
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
