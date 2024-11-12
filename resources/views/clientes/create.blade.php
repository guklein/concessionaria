<x-app-layout>
    <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    <body>
        <div class="mb-3">
            <h1 >Novo Cliente</h1>
                <form action="{{ route('clientes.store') }}" method="POST">
                    <!-- Token CSRF para proteção contra ataques CSRF -->
                        @csrf
                    <div class="form-label">
                        <label for="nome">Nome:</label>
                        <input class="form-control form-control-lg" type="text" name="nome">
                    </div>
                    <div class="form-label">
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" class="form-control form-control-lg" placeholder="nome@mail.com" name="email">
                    </div>
                    <div class="form-label">
                        <label  class="form-label" for="telefone">telefone:</label>
                        <input class="form-control form-control-lg" type="text" name="telefone">
                    </div>
                    <div class="form-label">
                        <label for="endereco">Endereço:</label>
                        <input class="form-control form-control-lg" type="text" name="endereco">
                    </div>
                    <div class="form-label">
                        <label for="cpf">Cpf:</label>
                        <input class="form-control form-control-lg" type="text" name="cpf">
                    </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
        </div>
    </body>
</x-app-layout>