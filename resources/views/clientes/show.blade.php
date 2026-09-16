<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Cliente</title>
</head>
<body>
    <h1>Detalhes do Cliente</h1>

    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>

    <br>
    <a href="{{ route('clientes.index') }}">Voltar para a lista</a>
</body>
</html>