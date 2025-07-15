<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
        Route::resource('usuarios',UsuarioController::class);
});
