<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Pedido - TDY Morangos</title>
</head>
<body>
    <h1>Lançar Novo Pedido</h1>
    
    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf 
        
        <div>
            <label>Selecione o Cliente:</label>
            <select name="cliente_id" required>
                <option value="">-- Escolha um cliente --</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        <br>
        
        <div>
            <label>Selecione o Produto:</label>
            <select name="produto_id" required>
                <option value="">-- Escolha um produto --</option>
                @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <br>

        <div>
            <label>Quantidade:</label>
            <input type="number" name="quantidade" required>
        </div>
        <br>

        <button type="submit">Salvar Pedido</button>
    </form>

    <br>
    <a href="{{ route('pedidos.index') }}">Voltar para a lista</a>
</body>
</html>