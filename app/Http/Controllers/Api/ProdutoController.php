<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Resources\ProdutoResource;
use App\Http\Resources\ProdutoCollection;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoStoreRequest;
use App\Http\Resources\ProdutoStoredResource;
use App\Http\Requests\ProdutoUpdateRequest;
use App\Http\Resources\ProdutoUpdatedResource;
use Exception;

class ProdutoController extends Controller
{

    public function index()
    {
        return new ProdutoCollection(Produto::all());
    }

    public function store(ProdutoStoreRequest $request)
    {
        try {
            return new ProdutoStoredResource(Produto::create($request->validated()));
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao criar novo produto!!", $error);
        }
    }

    public function show(Produto $produto)
    {
        return new ProdutoResource($produto);
    }

   public function update(ProdutoUpdateRequest $request, Produto $produto)
    {
        try {
            $produto->update($request->validated());
            return new ProdutoUpdatedResource($produto);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar o produto!!", $error);
        }
    }

    public function destroy(Produto $produto)
    {
        try {
            $produto->delete();
            return response()->json([
                'message' => 'Produto removido com sucesso!'
            ], 200);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover o produto!!", $error);
        }
    }
}
