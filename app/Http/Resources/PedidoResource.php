<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PedidoResource extends JsonResource
{

public function toArray(Request $request): array
{
    return [
        'id' => $this->id,
        'cliente_id' => $this->cliente_id,
        'produto_id' => $this->produto_id,
        'quantidade' => $this->quantidade,
        'status' => $this->status,
    ];
}
}
