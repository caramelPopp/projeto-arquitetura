<x-app-layout>

    <div class="max-w-lg mx-auto py-10">

        <h1 class="text-2xl font-bold mb-6">Detalhes do Funcionário</h1>

        {{-- Card com informações --}}
        <div class="bg-white shadow p-6 rounded space-y-3">

            {{-- Comentários explicativos --}}
            <p><strong>ID:</strong> {{ $usuario->id }}</p>

            <p><strong>Nome:</strong> {{ $usuario->name }}</p>

            <p><strong>Email:</strong> {{ $usuario->email }}</p>

            <p><strong>Criado em:</strong> {{ $usuario->created_at->format('d/m/Y H:i') }}</p>

        </div>

        {{-- Botões --}}
        <div class="mt-6 flex gap-4">

            <a href="{{ route('usuarios.index') }}"
               class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
                Voltar
            </a>

            <a href="{{ route('usuarios.edit', $usuario->id) }}"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Editar
            </a>

        </div>

    </div>

</x-app-layout>
