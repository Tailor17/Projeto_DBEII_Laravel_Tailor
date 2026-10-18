<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PedidoUpdatedResource extends PedidoResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(200, 'Pedido Atualizado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Pedido atualizado com sucesso!',
        ];
    }
}