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
            'cliente_nome' => $this->cliente->nome ?? 'Excluído',
            'produto_id' => $this->produto_id,
            'produto_nome' => $this->produto->nome ?? 'Excluído',
            'quantidade' => $this->quantidade,
            'status' => $this->status,
        ];
    }
}
