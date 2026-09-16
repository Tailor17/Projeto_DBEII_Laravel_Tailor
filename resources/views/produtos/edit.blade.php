<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto - TDY Morangos</title>
</head>
<body>
    <h1>Editar Produto</h1>
    

    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf 
        @method('PUT')
        
        <div>
            <label>Nome do Produto:</label>
            <input type="text" name="nome" value="{{ $produto->nome }}" required>
        </div>
        <br>
        
        <div>
            <label>Preço (R$):</label>
            <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}" required>
        </div>
        <br>

        <div>
            <label>Quantidade em Estoque:</label>
            <input type="number" name="quantidade" value="{{ $produto->quantidade }}" required>
        </div>
        <br>

        <button type="submit">Atualizar Produto</button>
    </form>

    <br>
    <a href="{{ route('produtos.index') }}">Cancelar e Voltar</a>

</body>
</html>