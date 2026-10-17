<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Http\Resources\ClienteResource;
use App\Http\Resources\ClienteCollection;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return new ClienteCollection(Cliente::all());
    }

    public function store(Request $request){}

    public function show(Cliente $cliente)
    {
        return new ClienteResource($cliente);
    }

    public function update(Request $request, Cliente $cliente){}

    public function destroy(Cliente $cliente){}
}
