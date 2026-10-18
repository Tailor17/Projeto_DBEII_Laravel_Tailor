<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Http\Resources\PedidoResource;
use App\Http\Resources\PedidoCollection;
use Illuminate\Http\Request;
use App\Http\Requests\PedidoStoreRequest;
use App\Http\Resources\PedidoStoredResource;
use App\Http\Requests\PedidoUpdateRequest;
use App\Http\Resources\PedidoUpdatedResource;

class PedidoController extends Controller
{
    public function index()
    { 
        return new PedidoCollection(Pedido::all());
    }

    public function store(PedidoStoreRequest $request)
    {
        try {
            $pedido = Pedido::create($request->validated());
            return new PedidoStoredResource($pedido);
        } catch (\Exception $error) {
            return $this->errorHandler("Erro ao criar novo pedido!!", $error);
        }
    }

    public function show(Pedido $pedido)
    {
        return new PedidoResource($pedido);
    }

    public function update(PedidoUpdateRequest $request, Pedido $pedido)
    {
        try {
            $pedido->update($request->validated());
            return new PedidoUpdatedResource($pedido);
        } catch (\Exception $error) {
            return $this->errorHandler("Erro ao atualizar pedido!!", $error);
        }
    }

    public function destroy(Pedido $pedido)
    {
        try {
            $pedido->delete();
            return (new PedidoResource($pedido))->additional(["message" => "Pedido removido com sucesso!"]);
        } catch (\Exception $error) {
            return $this->errorHandler("Erro ao remover pedido!!", $error);
        }
    }

}
