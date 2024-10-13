<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');

Route::get('/usuario/creado', action:[UsuarioController::class,'create'])->name('user.create');
Route::post('/usuario/creado', action:[UsuarioController::class,'store'])->name('user.store');

Route::get('/usuarios/list',[UsuarioController::class,'list'])->name('user.list');

Route::get('/usuarios/update/{id}',[UsuarioController::class,'edit'])->name('user.update');
Route::post('/usuario/update', [UsuarioController::class,'update'])->name('user.update.data');


Route::get('/usuarios/delete/{id}',[UsuarioController::class,'destroy'])->name('user.destroy');

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/home', function(){
    return view('home');
})->name('home');