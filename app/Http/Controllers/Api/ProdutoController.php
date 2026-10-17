<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Resources\ProdutoResource;
use App\Http\Resources\ProdutoCollection;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
        return new ProdutoCollection(Produto::all());
    }

    public function store(Request $request){}

    public function show(Produto $produto)
    {
        return new ProdutoResource($produto);
    }

    public function update(Request $request, Produto $produto){}

    public function destroy(Produto $produto){}
}
