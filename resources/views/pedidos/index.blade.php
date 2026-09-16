<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>

    <a href="{{ route('pedidos.create') }}">Criar Novo Pedido</a>

<ul>
        @foreach($pedidos as $pedido)
            <li>
                <strong>Pedido #{{ $pedido->id }}</strong> 
                Cliente: {{ $pedido->cliente->nome ?? 'Excluído' }} | Produto: {{ $pedido->produto->nome ?? 'Excluído' }}
                - Qtd: {{ $pedido->quantidade }}
                - Status: {{ $pedido->status ?? 'Pendente' }}
                
                <a href="{{ route('pedidos.edit', $pedido->id) }}">[Editar]</a>

                <a href="{{ route('pedidos.show', $pedido->id) }}">[Ver Detalhes]</a>
                
                <button onclick="document.getElementById('modal-excluir-{{ $pedido->id }}').showModal()" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline;">
                    [Excluir]
                </button>

                <dialog id="modal-excluir-{{ $pedido->id }}" style="border: 2px solid red; padding: 20px; border-radius: 8px;">
                    <h3>Atenção!</h3>
                    <p>Deseja mesmo excluir o pedido #{{ $pedido->id }}?</p>
                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" style="background-color: red; color: white; padding: 5px 10px; cursor: pointer;">
                            Sim, Excluir
                        </button>
                    </form>
                    <button onclick="document.getElementById('modal-excluir-{{ $pedido->id }}').close()" style="padding: 5px 10px; cursor: pointer;">
                        Cancelar
                    </button>
                </dialog>
            </li>
        @endforeach
        
        <a href="{{ route('produtos.index') }}">Voltar para Produtos</a>
        <a href="{{ route('clientes.index') }}">Voltar para Clientes</a>

    </ul>
</body>
</html>