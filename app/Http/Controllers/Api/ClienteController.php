<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Http\Resources\ClienteResource;
use App\Http\Resources\ClienteCollection;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteStoreRequest;
use App\Http\Resources\ClienteStoredResource;
use App\Http\Requests\ClienteUpdateRequest;
use App\Http\Resources\ClienteUpdatedResource;

class ClienteController extends Controller
{
    public function index()
    {
        return new ClienteCollection(Cliente::all());
    }

public function store(ClienteStoreRequest $request)
    {
        try {
            $cliente = Cliente::create($request->validated());
            return new ClienteStoredResource($cliente);
        } catch (\Exception $error) {
            return $this->errorHandler("Erro ao criar novo cliente!!", $error);
        }
    }

    public function update(ClienteUpdateRequest $request, Cliente $cliente)
    {
        try {
            $cliente->update($request->validated());
            return new ClienteUpdatedResource($cliente);
        } catch (\Exception $error) {
            return $this->errorHandler("Erro ao atualizar cliente!!", $error);
        }
    }

    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();
            return (new ClienteResource($cliente))->additional(["message" => "Cliente removido com sucesso!"]);
        } catch (\Exception $error) {
            return $this->errorHandler("Erro ao remover o cliente!!", $error);
        }
    }
}