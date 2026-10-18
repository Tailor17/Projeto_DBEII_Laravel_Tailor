<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PedidoUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "cliente_id" => "required|exists:clientes,id",
            "produto_id" => "required|exists:produtos,id",
            "quantidade" => "required|numeric|min:1",
            "status" => "required|in:pendente,aprovado,cancelado",
        ];
    }
}
