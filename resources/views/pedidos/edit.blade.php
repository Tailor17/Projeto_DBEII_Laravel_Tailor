<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedido</title>
</head>
<body>
    <h1>Editar Pedido</h1>

    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Cliente:</label>
            <select name="cliente_id" required>
                <option value="">Selecione um cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $pedido->cliente_id == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <br>

<div>
            <label>Selecione o Produto:</label>
            <select name="produto_id" required>
                @foreach($produtos as $produto)

                    <option value="{{ $produto->id }}" {{ $pedido->produto_id == $produto->id ? 'selected' : '' }}>
                        {{ $produto->nome }}
                    </option>
                    
                @endforeach
            </select>
        </div>
        <br>

        <div>
            <label>Quantidade:</label>
            <input type="number" name="quantidade" min="1" value="{{ $pedido->quantidade }}" required>
        </div>
        <br>

        <button type="submit">Atualizar Pedido</button>
    </form>

    <br>
    <a href="{{ route('pedidos.index') }}">Voltar para a lista</a>
</body>
</html>