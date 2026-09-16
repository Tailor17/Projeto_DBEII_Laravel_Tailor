<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos - TDY Morangos</title>
</head>
<body>
    <h1>Nossos Produtos</h1>
    
    <a href="{{ route('produtos.create') }}">Cadastrar Novo Produto</a>
    
    <hr>

    <ul>
           @foreach($produtos as $produto)
            <li>
                <strong>{{ $produto->nome }}</strong> - R$ {{ $produto->preco }} 
                Quantidade: {{ $produto->quantidade }}
                
                <a href="{{ route('produtos.edit', $produto->id) }}">[Editar]</a>
                
                
                <a href="{{ route('produtos.show', $produto->id) }}">[Ver Detalhes]</a>
                
                <button onclick="document.getElementById('modal-excluir-{{ $produto->id }}').showModal()" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline;">
                    [Excluir]
                </button>
              
                <dialog id="modal-excluir-{{ $produto->id }}" style="border: 2px solid red; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                    <h3>Atenção!</h3>
                    <p>Deseja mesmo excluir o produto <strong>{{ $produto->nome }}</strong>?</p>
                    
                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" style="background-color: red; color: white; padding: 5px 10px; cursor: pointer;">
                            Sim, Excluir
                        </button>
                    </form>
                    
                    <button onclick="document.getElementById('modal-excluir-{{ $produto->id }}').close()" style="padding: 5px 10px; cursor: pointer;">
                        Cancelar
                    </button>
                </dialog>
            </li>
        @endforeach
        
        <a href="{{ route('pedidos.index') }}">Voltar para Pedidos</a>
        <a href="{{ route('clientes.index') }}">Voltar para Clientes</a>

    </ul>

</body>
</html>