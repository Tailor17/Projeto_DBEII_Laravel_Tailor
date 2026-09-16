<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Novo Cliente</h1>
    
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf 
        
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <br>
        
        <div>
            <label>Telefone:</label>
            <input type="text" name="telefone" required>
        </div>
        <br>

        <button type="submit">Salvar Cliente</button>
    </form>

    <br>
    <a href="{{ route('clientes.index') }}">Voltar para a lista</a>
</body>
</html>