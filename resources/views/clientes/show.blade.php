<x-app-layout>
        <header>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </header>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ">
            {{ __('Cliente')}}
        </h2>

        <section class="details">
            <div class="content">
                <div class="meta">
                    <span class="label dark:text-gray-200">ID:</span>
                    <span class="info dark:text-gray-200">{{ $cliente->id}}</span>
                </div>

                <div class="meta">
                    <span class="label dark:text-gray-200">Nome:</span>
                    <span class="info dark:text-gray-200">{{ $cliente->nome}}</span>
                </div>

                <div class="meta">
                    <span class="label dark:text-gray-200">E-mail:</span>
                    <span class="info dark:text-gray-200">{{ $cliente->email}}</span>
                </div>

                <div class="meta">
                    <span class="label dark:text-gray-200">Telefone:</span>
                    <span class="info dark:text-gray-200">{{ $cliente->telefone}}</span>
                </div>

                <div class="meta">
                    <span class="label dark:text-gray-200">Endereço:</span>
                    <span class="info dark:text-gray-200">{{ $cliente->endereco}}</span>
                </div>

                <div class="meta">
                    <span class="label dark:text-gray-200">Cpf:</span>
                    <span class="info dark:text-gray-200">{{ $cliente->cpf}}</span>
                </div>
                <br>
            </div>
            <a href="{{ route('clientes.index')}}" class="btn btn-secondary">Voltar</a>
        </section>
</x-app-layout>