<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PedidoStoredResource extends PedidoResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201, 'Pedido Criado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Pedido criado com sucesso!',
        ];
    }
}