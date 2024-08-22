<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ServicoController;

// Rota inicial da aplicação
Route::get('/', function () {
    return view('welcome');
});

// Grupo de Rotas para Administração de Clientes
Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});

// Grupo de Rotas para Administração de Produtos
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('create', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('{produto}', [ProdutoController::class, 'show'])->name('produtos.show');
    Route::get('{produto}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
});

// Grupo de Rotas para Registro de Vendas
Route::prefix('vendas')->group(function () {
    Route::get('/', [VendaController::class, 'index'])->name('vendas.index');
    Route::get('create', [VendaController::class, 'create'])->name('vendas.create');
    Route::post('/', [VendaController::class, 'store'])->name('vendas.store');
    Route::get('{venda}', [VendaController::class, 'show'])->name('vendas.show');
    Route::get('{venda}/edit', [VendaController::class, 'edit'])->name('vendas.edit');
    Route::put('{venda}', [VendaController::class, 'update'])->name('vendas.update');
    Route::delete('{venda}', [VendaController::class, 'destroy'])->name('vendas.destroy');
});

// Grupo de Rotas para Administração de Serviços
Route::prefix('servicos')->group(function () {
    Route::get('/', [ServicoController::class, 'index'])->name('servicos.index');
    Route::get('create', [ServicoController::class, 'create'])->name('servicos.create');
    Route::post('/', [ServicoController::class, 'store'])->name('servicos.store');
    Route::get('{servico}', [ServicoController::class, 'show'])->name('servicos.show');
    Route::get('{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
    Route::put('{servico}', [ServicoController::class, 'update'])->name('servicos.update');
    Route::delete('{servico}', [ServicoController::class, 'destroy'])->name('servicos.destroy');
});

// Rotas para clientes
Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');

// Rotas para produtos
Route::get('produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('produtos', [ProdutoController::class, 'store'])->name('produtos.store');

// Rotas para serviços
Route::get('servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
Route::post('servicos', [ServicoController::class, 'store'])->name('servicos.store');

// Rotas para vendas
Route::get('vendas/create', [VendaController::class, 'create'])->name('vendas.create');
Route::post('vendas', [VendaController::class, 'store'])->name('vendas.store');


