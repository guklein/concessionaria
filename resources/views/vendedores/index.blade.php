<x-app-layout> 
  <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    

    <table class="table table-striped">
        
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col"></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($vendedores as $vendedor)
            
                <tr>
                    <td class="colunas">{{$vendedor->id}}</td>
                    <td id="nome">{{$vendedor->nome}}</td>
                    <td id="telefone">{{$vendedor->telefone}}</td>
                    <td id="endereco">{{$vendedor->endereco}}</td>
                    <td>
                        <a href="{{ route('vendedores.show', $vendedor->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('vendedores.edit', $vendedor->id)}}" class="btn btn-info">Editar</a>
                        <form action="{{ route('vendedores.destroy', $vendedor->id)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div align="right">
        <a href="{{route('vendedores.create')}}" class="btn btn-primary">Novo Cliente</a>
    </div>
</x-app-layout>