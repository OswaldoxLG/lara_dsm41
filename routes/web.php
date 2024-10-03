<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');

Route::get('/usuario/creado', action:[UsuarioController::class,'create'])->name('create');
Route::post('/usuario/creado', action:[UsuarioController::class,'store'])->name('user.store');

