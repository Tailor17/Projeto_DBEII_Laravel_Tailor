<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ClienteUpdatedResource extends ClienteResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201, 'Cliente Atualizado!');
    }

    public function with(Request $request): array
    { 
        return[
            'message'=>'Cliente atualizado com sucesso!',
        ];
    }
}
