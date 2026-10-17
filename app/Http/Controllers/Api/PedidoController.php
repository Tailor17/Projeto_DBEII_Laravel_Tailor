<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Http\Resources\PedidoResource;
use App\Http\Resources\PedidoCollection;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    { 
        return new PedidoCollection(Pedido::all());
    }

    public function store(Request $request){}

    public function show(Pedido $pedido)
    {
        return new PedidoResource($pedido);
    }

    public function update(Request $request, Pedido $pedido){}

    public function destroy(Pedido $pedido){}

}
