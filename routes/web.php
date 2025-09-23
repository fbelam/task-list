<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// Mostra todos os dados
Route::get('/tasks', [TaskController::class, 'index']);

// Exibi o formulario
Route::get('/tasks/create', [TaskController::class, 'create']);

// Salva os dados
Route::post('/tasks', [TaskController::class, 'store']);
