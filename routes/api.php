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
    Route::post('/', 'store')->name('api.clientes.store');
    Route::get('/{cliente}', 'show')->name('api.clientes.show');
    Route::put('/{cliente}', 'update')->name('api.clientes.update');
    Route::delete('/{cliente}', 'destroy')->name('api.clientes.destroy');
});

Route::controller(ProdutoController::class)->prefix('/produtos')->group(function () {
    Route::get('/', 'index')->name('api.produtos.index');
    Route::post('/', 'store')->name('api.produtos.store');
    Route::get('/{produto}', 'show')->name('api.produtos.show');
    Route::put('/{produto}', 'update')->name('api.produtos.update');
    Route::delete('/{produto}', 'destroy')->name('api.produtos.destroy');
});

Route::controller(PedidoController::class)->prefix('/pedidos')->group(function () {
    Route::get('/', 'index')->name('api.pedidos.index');
    Route::post('/', 'store')->name('api.pedidos.store');
    Route::put('/{pedido}', 'update')->name('api.pedidos.update');
    Route::get('/{pedido}', 'show')->name('api.pedidos.show');
    Route::delete('/{pedido}', 'destroy')->name('api.pedidos.destroy');
});
