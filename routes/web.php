<?php

use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Fornecedor\FornecedorController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Produto\ProdutoController;
use Illuminate\Support\Facades\Route;

// ===============================
// Index (página inicial)
// ===============================
Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('index.index');
});

Route::prefix('/app')->group(function () {

    // ===============================
    // Produtos
    // ===============================
    Route::controller(ProdutoController::class)->prefix('produtos')->group(function () {
        Route::get('/', 'index')->name('produtos.index');
        Route::get('/create', 'create')->name('produtos.create');
        Route::post('/', 'store')->name('produtos.store');
        Route::get('/{id}', 'show')->where('id', '[0-9]+')->name('produtos.show');
        Route::get('/{id}/edit', 'edit')->where('id', '[0-9]+')->name('produtos.edit');
        Route::put('/{id}', 'update')->where('id', '[0-9]+')->name('produtos.update');
        Route::delete('/{id}', 'destroy')->where('id', '[0-9]+')->name('produtos.destroy');
    });

    // ===============================
    // Fornecedores
    // ===============================
    Route::controller(FornecedorController::class)->prefix('fornecedores')->group(function () {
        Route::get('/', 'index')->name('fornecedores.index');
        Route::get('/create', 'create')->name('fornecedores.create');
        Route::post('/', 'store')->name('fornecedores.store');
        Route::get('/{id}', 'show')->where('id', '[0-9]+')->name('fornecedores.show');
        Route::get('/{id}/edit', 'edit')->where('id', '[0-9]+')->name('fornecedores.edit');
        Route::put('/{id}', 'update')->where('id', '[0-9]+')->name('fornecedores.update');
        Route::delete('/{id}', 'destroy')->where('id', '[0-9]+')->name('fornecedores.destroy');
    });

    // ===============================
    // Clientes
    // ===============================
    Route::controller(ClienteController::class)->prefix('clientes')->group(function () {
        Route::get('/', 'index')->name('clientes.index');
        Route::get('/create', 'create')->name('clientes.create');
        Route::post('/', 'store')->name('clientes.store');
        Route::get('/{id}', 'show')->where('id', '[0-9]+')->name('clientes.show');
        Route::get('/{id}/edit', 'edit')->where('id', '[0-9]+')->name('clientes.edit');
        Route::put('/{id}', 'update')->where('id', '[0-9]+')->name('clientes.update');
        Route::delete('/{id}', 'destroy')->where('id', '[0-9]+')->name('clientes.destroy');
    });
});
