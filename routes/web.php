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
        Route::post('usuarios/{usu}/licencia',[UsuarioController::class,'setLicenciaMedica'])->name('usuarios.licencia');
        Route::post('usuarios/{usu}/anotacion',[UsuarioController::class,'setAnotacion'])->name('usuarios.anotacion');
        Route::post('usuarios/{usu}/cuenta',[UsuarioController::class,'setCuentaBancaria'])->name('usuarios.cbancaria');
        Route::post('usuarios/{usu}/ot',[UsuarioController::class,'setOrdenTrabajo'])->name('usuarios.ot');
        Route::post('usuarios/asistencia',[UsuarioController::class,'getAsistencia'])->name('usuarios.asistencia');
        Route::resource('usuarios',UsuarioController::class);
});
