<?php

use App\Http\Controllers\Menu\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [MenuController::class, 'home'])->name('home');
Route::get('/login', [MenuController::class, 'login'])->name('login');
Route::get('/pessoa', [MenuController::class, 'pessoa']);
Route::get('/empresa', [MenuController::class, 'empresa']);
Route::get('/logradouro', [MenuController::class, 'logradouro']);
Route::get('/bairro', [MenuController::class, 'bairro']);
Route::get('/cidade', [MenuController::class, 'cidade']);
Route::get('/estado', [MenuController::class, 'estado']);
