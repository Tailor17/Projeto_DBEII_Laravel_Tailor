<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Produto - TDY Morangos</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    
    <div style="border: 1px solid #ccc; padding: 20px; width: 400px; border-radius: 8px;">
        <h2>Informações do Cadastro</h2>
        
        <ul>
            <li><strong>Código (ID):</strong> {{ $produto->id }}</li>
            <li><strong>Nome:</strong> {{ $produto->nome }}</li>
            <li><strong>Preço:</strong> R$ {{ $produto->preco }}</li>
            <li><strong>Quantidade em estoque:</strong> {{ $produto->quantidade }}</li>
            <li><strong>Cadastrado em:</strong> {{ $produto->created_at->format('d/m/Y H:i') }}</li>
        </ul>
    </div>

    <br>
    <a href="{{ route('produtos.index') }}">Voltar para a lista</a>

</body>
</html>