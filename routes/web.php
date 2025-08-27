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
        Route::get('/', 'index')->name('app.produtos.index');
        Route::get('/create', 'create')->name('app.produtos.create');
        Route::post('/', 'store')->name('app.produtos.store');
        Route::get('/{id}', 'show')->where('id', '[0-9]+')->name('app.produtos.show');
        Route::get('/{id}/edit', 'edit')->where('id', '[0-9]+')->name('app.produtos.edit');
        Route::put('/{id}', 'update')->where('id', '[0-9]+')->name('app.produtos.update');
        Route::delete('/{id}', 'destroy')->where('id', '[0-9]+')->name('app.produtos.destroy');
    });

    // ===============================
    // Fornecedores
    // ===============================
    Route::controller(FornecedorController::class)->prefix('fornecedores')->group(function () {
        Route::get('/', 'index')->name('app.fornecedores.index');
        Route::get('/create', 'create')->name('app.fornecedores.create');
        Route::post('/', 'store')->name('app.fornecedores.store');
        Route::get('/{id}', 'show')->where('id', '[0-9]+')->name('app.fornecedores.show');
        Route::get('/{id}/edit', 'edit')->where('id', '[0-9]+')->name('app.fornecedores.edit');
        Route::put('/{id}', 'update')->where('id', '[0-9]+')->name('app.fornecedores.update');
        Route::delete('/{id}', 'destroy')->where('id', '[0-9]+')->name('app.fornecedores.destroy');
    });

    // ===============================
    // Clientes
    // ===============================
    Route::controller(ClienteController::class)->prefix('clientes')->group(function () {
        Route::get('/', 'index')->name('app.clientes.index');
        Route::get('/create', 'create')->name('app.clientes.create');
        Route::post('/', 'store')->name('app.clientes.store');
        Route::get('/{id}', 'show')->where('id', '[0-9]+')->name('app.clientes.show');
        Route::get('/{id}/edit', 'edit')->where('id', '[0-9]+')->name('app.clientes.edit');
        Route::put('/{id}', 'update')->where('id', '[0-9]+')->name('app.clientes.update');
        Route::delete('/{id}', 'destroy')->where('id', '[0-9]+')->name('app.clientes.destroy');
    });
});
