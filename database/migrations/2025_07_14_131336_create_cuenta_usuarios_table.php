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
        Schema::create('cuenta_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('banco_id')->unsigned();
            $table->integer('banco_cuenta_tipo_id')->unsigned();
            $table->string('numero_cuenta');
            // Foreign keys
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('banco_id')->references('id')->on('bancos');
            $table->foreign('banco_cuenta_tipo_id')->references('id')->on('banco_cuentas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuenta_usuarios');
    }
};
