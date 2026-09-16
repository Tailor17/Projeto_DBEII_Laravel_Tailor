<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - TDY</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    
    <a href="{{ route('clientes.create') }}">Cadastrar Novo Cliente</a>
    
    <hr>

    <ul>
        @foreach($clientes as $cliente)
            <li>
                <strong>{{ $cliente->nome }}</strong> - {{ $cliente->email }} 
                
                <a href="{{ route('clientes.edit', $cliente->id) }}">[Editar]</a>
                
                <a href="{{ route('clientes.show', $cliente->id) }}">[Ver Detalhes]</a>
                
                <button onclick="document.getElementById('modal-excluir-{{ $cliente->id }}').showModal()" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline;">
                    [Excluir]
                </button>

                <dialog id="modal-excluir-{{ $cliente->id }}" style="border: 2px solid red; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                    <h3>Atenção!</h3>
                    <p>Deseja mesmo excluir o cliente <strong>{{ $cliente->nome }}</strong>?</p>
                    
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" style="background-color: red; color: white; padding: 5px 10px; cursor: pointer;">
                            Sim, Excluir
                        </button>
                    </form>
                    
                    <button onclick="document.getElementById('modal-excluir-{{ $cliente->id }}').close()" style="padding: 5px 10px; cursor: pointer;">
                        Cancelar
                    </button>
                </dialog>
            </li>
        @endforeach

        <a href="{{ route('produtos.index') }}">Voltar para Produtos</a>
        <a href="{{ route('pedidos.index') }}">Voltar para Pedidos</a>
       
    </ul>
    
</body>
</html>