<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto - TDY Morangos</title>
</head>
<body>
    <h1>Cadastrar Novo Produto</h1>
    
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf 
        
        <div>
            <label>Nome do Produto:</label>
            <input type="text" name="nome" required>
        </div>
        <br>
        
        <div>
            <label>Preço (R$):</label>
            <input type="number" step="0.01" name="preco" required>
        </div>
        <br>

        <div>
            <label>Quantidade em Estoque:</label>
            <input type="number" name="quantidade" required>
        </div>
        <br>

        <button type="submit">Salvar Produto</button>
    </form>

    <br>
    <a href="{{ route('produtos.index') }}">Voltar para a lista</a>

</body>
</html>