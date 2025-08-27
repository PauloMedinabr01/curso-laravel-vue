<?php

use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Fornecedor\FornecedorController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Produto\ProdutoController;
use Illuminate\Support\Facades\Route;

// ===============================
// Index (página inicial)
// ===============================
Route::get('/', [IndexController::class, 'index'])
    ->name('index.index');

Route::prefix('/app')->group(function () {

    // ===============================
    // Grupo de Produtos
    // ===============================
    Route::prefix('produtos')->group(function () {
        Route::get('/', [ProdutoController::class, 'index'])
            ->name('produtos.index');

        Route::get('/create', [ProdutoController::class, 'create'])
            ->name('produtos.create');

        Route::post('/', [ProdutoController::class, 'store'])
            ->name('produtos.store');

        Route::get('/{id}', [ProdutoController::class, 'show'])
            ->where('id', '[0-9]+')
            ->name('produtos.show');

        Route::get('/{id}/edit', [ProdutoController::class, 'edit'])
            ->where('id', '[0-9]+')
            ->name('produtos.edit');

        Route::put('/{id}', [ProdutoController::class, 'update'])
            ->where('id', '[0-9]+')
            ->name('produtos.update');

        Route::delete('/{id}', [ProdutoController::class, 'destroy'])
            ->where('id', '[0-9]+')
            ->name('produtos.destroy');
    });


    // ===============================
    // Grupo de Fornecedores
    // ===============================
    Route::prefix('fornecedores')->group(function () {
        Route::get('/', [FornecedorController::class, 'index'])
            ->name('fornecedores.index');

        Route::get('/create', [FornecedorController::class, 'create'])
            ->name('fornecedores.create');

        Route::post('/', [FornecedorController::class, 'store'])
            ->name('fornecedores.store');

        Route::get('/{id}', [FornecedorController::class, 'show'])
            ->where('id', '[0-9]+')
            ->name('fornecedores.show');

        Route::get('/{id}/edit', [FornecedorController::class, 'edit'])
            ->where('id', '[0-9]+')
            ->name('fornecedores.edit');

        Route::put('/{id}', [FornecedorController::class, 'update'])
            ->where('id', '[0-9]+')
            ->name('fornecedores.update');

        Route::delete('/{id}', [FornecedorController::class, 'destroy'])
            ->where('id', '[0-9]+')
            ->name('fornecedores.destroy');
    });


    // ===============================
    // Grupo de Clientes
    // ===============================
    Route::prefix('clientes')->group(function () {
        Route::get('/', [ClienteController::class, 'index'])
            ->name('clientes.index');

        Route::get('/create', [ClienteController::class, 'create'])
            ->name('clientes.create');

        Route::post('/', [ClienteController::class, 'store'])
            ->name('clientes.store');

        Route::get('/{id}', [ClienteController::class, 'show'])
            ->where('id', '[0-9]+')
            ->name('clientes.show');

        Route::get('/{id}/edit', [ClienteController::class, 'edit'])
            ->where('id', '[0-9]+')
            ->name('clientes.edit');

        Route::put('/{id}', [ClienteController::class, 'update'])
            ->where('id', '[0-9]+')
            ->name('clientes.update');

        Route::delete('/{id}', [ClienteController::class, 'destroy'])
            ->where('id', '[0-9]+')
            ->name('clientes.destroy');
    });
});
