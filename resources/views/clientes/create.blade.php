<x-app-layout>
    <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    <body>
        <div class="mb-3">
            <h3 class="form dark:text-gray-200">Novo Cliente</h3>
                <form class="form-label dark:text-gray-200" action="{{ route('clientes.store') }}" method="POST">
                    <!-- Token CSRF para proteção contra ataques CSRF -->
                        @csrf
                    <div>
                        <label for="nome">Nome:</label>
                        <input class="form-control form-control-lg" type="text" name="nome">
                    </div>
                    <div>
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" class="form-control form-control-lg" placeholder="nome@mail.com" name="email">
                    </div>
                    <div>
                        <label  class="form-label" for="telefone">Telefone:</label>
                        <input class="form-control form-control-lg" type="text" placeholder="(xx)xxxxx-xxxx " name="telefone">
                    </div>
                    <div>
                        <label for="endereco">Endereço:</label>
                        <input class="form-control form-control-lg" type="text" name="endereco">
                    </div>
                    <div>
                        <label for="cpf">Cpf:</label>
                        <input placeholder="000.000.000-00" class="form-control form-control-lg" type="text" name="cpf">
                    </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
        </div>
    </body>
</x-app-layout>