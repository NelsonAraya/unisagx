<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
        Route::get('usuarios/all',[UsuarioController::class,'getUsuariosData'])->name('usuarios.all');
        Route::post('usuarios/permisos/{usu}',[UsuarioController::class,'setPermiso'])->name('usuarios.permiso');
        Route::post('usuarios/{usu}/feriado',[UsuarioController::class,'setFeriadoLegal'])->name('usuarios.feriado');
        Route::resource('usuarios',UsuarioController::class);
});
