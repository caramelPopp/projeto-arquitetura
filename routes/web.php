<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

// Página inicial
Route::get('/', function () {
    return redirect('/login');
});

// Área protegida (precisa estar logado)
Route::middleware(['employee'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD de Usuários
    Route::resource('usuarios', UsuarioController::class);
});

// Rotas padrão do Breeze
require __DIR__.'/auth.php';
