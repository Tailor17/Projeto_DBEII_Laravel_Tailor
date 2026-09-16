<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nome:</label>
            <input type="text" name="nome" value="{{ $cliente->nome }}" required>
        </div>
        <br>

        <div>
            <label>Telefone:</label>
            <input type="text" name="telefone" value="{{ $cliente->telefone }}" required>
        </div>
        <br>

        <button type="submit">Atualizar Cliente</button>
    </form>

    <br>
    <a href="{{ route('clientes.index') }}">Voltar para a lista</a>
</body>
</html>