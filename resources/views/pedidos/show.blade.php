<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Pedido - TDY Morangos</title>
</head>
<body>
    <h1>Detalhes do Pedido #{{ $pedido->id }}</h1>
    
    <div style="border: 1px solid #ccc; padding: 20px; width: 400px; border-radius: 8px;">
        <h2>Informações do Pedido</h2>
        
        <ul>
            <li><strong>ID do Cliente:</strong> {{ $pedido->cliente_id }}</li>
            <li><strong>ID do Produto:</strong> {{ $pedido->produto_id }}</li>
            <li><strong>Quantidade:</strong> {{ $pedido->quantidade }}</li>
            <li><strong>Status:</strong> {{ $pedido->status ?? 'Pendente' }}</li>
            <li><strong>Data do Pedido:</strong> {{ $pedido->created_at->format('d/m/Y H:i') }}</li>
            <li><strong>Última Atualização:</strong> {{ $pedido->updated_at->format('d/m/Y H:i') }}</li>
        </ul>
    </div>

    <br>
    <a href="{{ route('pedidos.index') }}">Voltar para a lista</a>

</body>
</html>