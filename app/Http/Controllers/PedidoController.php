<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $produtos = Produto::all();

        return view('pedidos.create', compact('clientes', 'produtos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $dados = $request->all();

        Pedido::create($dados);

        return redirect()->route('pedidos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        $pedido = Pedido::findOrFail($pedido->id);

        $clientes = Cliente::all();
        $produtos = Produto::all();

        return view('pedidos.show', compact('pedido', 'clientes', 'produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        $pedido = Pedido::findOrFail($pedido->id);

        $clientes = \App\Models\Cliente::all();
        $produtos = \App\Models\Produto::all();

        return view('pedidos.edit', compact('pedido', 'clientes', 'produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido = Pedido::findOrFail($pedido->id);
        $pedido->update($request->all());

        return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido = Pedido::findOrFail($pedido->id);
        $pedido->delete();

        return redirect()->route('pedidos.index');
    }
}
