<?php

use App\Http\Controllers\ControllerCategorias;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/categorias', [ControllerCategorias::class, 'index'])->name('categoria.index');
Route::get('/categorias/create', [ControllerCategorias::class, 'create'])->name('categoria.create');
Route::post('/categorias', [ControllerCategorias::class, 'store'])->name('categoria.store');
Route::get('/categorias/{categoria}', [ControllerCategorias::class, 'show'])->name('categoria.show');
Route::get('/categoria/{categoria}/edit', [ControllerCategorias::class, 'edit'])->name('categoria.edit');
Route::put('/categorias/{categoria}', [ControllerCategorias::class, 'update'])->name('categoria.update');
Route::delete('/categorias/{categoria}', [ControllerCategorias::class, 'destroy'])->name('categoria.destroy');
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
