<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::match(['get', 'post'], '/', [ProdutoController::class, 'index'])->name('home');

Route::match(['get', 'post'], '/categorias', [ProdutoController::class, 'categorias'])->name('categorias');

Route::match(['get', 'post'], '/{categoria}/categoria', [ProdutoController::class, 'categoriaProduto'])->name('categoria_por_id');

Route::match(['get', 'post'], '/{idproduto}/carrinho/adicionar', [ProdutoController::class, 'adicionarCarrinho'])->name('adicionar_carrinho');

Route::match(['get', 'post'], '/carrinho', [ProdutoController::class, 'verCarrinho'])->name('ver_carrinho');

Route::match(['get', 'post'], '/{indice}/excluircarrinho', [ProdutoController::class, 'excluirCarrinho'])->name('excluir_carrinho');

require __DIR__.'/auth.php';
