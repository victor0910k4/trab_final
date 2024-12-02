<?php

use App\Http\Controllers\ControllerCategorias;
use App\Http\Controllers\ControllerFuncionarios;
use App\Http\Controllers\ControllerProdutos;
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

Route::get('/funcionarios', [ControllerFuncionarios::class, 'index'])->name('funcionario.index');
Route::get('/funcionarios/create', [ControllerFuncionarios::class, 'create'])->name('funcionario.create');
Route::post('/funcionarios', [ControllerFuncionarios::class, 'store'])->name('funcionario.store');
Route::get('/funcionarios/{funcionario}', [ControllerFuncionarios::class, 'show'])->name('funcionario.show');
Route::get('/funcionario/{funcionario}/edit', [ControllerFuncionarios::class, 'edit'])->name('funcionario.edit');
Route::put('/funcionarios/{funcionario}', [ControllerFuncionarios::class, 'update'])->name('funcionario.update');
Route::delete('/funcionarios/{funcionario}', [ControllerFuncionarios::class, 'destroy'])->name('funcionario.destroy');

Route::get('/produtos', [ControllerProdutos::class, 'index'])->name('produto.index');
Route::get('/produtos/create', [ControllerProdutos::class, 'create'])->name('produto.create');
Route::post('/produtos', [ControllerProdutos::class, 'store'])->name('produto.store');
Route::get('/produtos/{produto}', [ControllerProdutos::class, 'show'])->name('produto.show');
Route::get('/produto/{produto}/edit', [ControllerProdutos::class, 'edit'])->name('produto.edit');
Route::put('/produtos/{produto}', [ControllerProdutos::class, 'update'])->name('produto.update');
Route::delete('/produtos/{produto}', [ControllerProdutos::class, 'destroy'])->name('produto.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
