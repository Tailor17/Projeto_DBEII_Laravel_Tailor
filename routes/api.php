<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\ProdutoController;
use App\Http\Controllers\Api\PedidoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ClienteController::class)->prefix('/clientes')->group(function (){
    Route::get('/', 'index')->name('api.clientes.index');
    Route::get('/{cliente}', 'show')->name('api.clientes.show');
});

Route::controller(ProdutoController::class)->prefix('/produtos')->group(function () {
    Route::get('/', 'index')->name('api.produtos.index');
    Route::get('/{produto}', 'show')->name('api.produtos.show');
});

Route::controller(PedidoController::class)->prefix('/pedidos')->group(function () {
    Route::get('/', 'index')->name('api.pedidos.index');
    Route::get('/{pedido}', 'show')->name('api.pedidos.show');
});
