<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ClienteStoredResource extends ClienteResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201, 'Cliente Criado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Cliente criado com sucesso!',
        ];
    }
}