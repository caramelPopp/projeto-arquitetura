<x-app-layout>

    <div class="max-w-lg mx-auto py-10">

        <h1 class="text-2xl font-bold mb-6">Cadastrar Funcionário</h1>

        {{-- Formulário de criação --}}
        <form action="{{ route('usuarios.store') }}" method="POST" class="space-y-4 bg-white p-6 shadow rounded">
            @csrf

            {{-- Campo nome --}}
            <div>
                <label class="block mb-1 font-medium">Nome</label>
                <input type="text" name="name" class="w-full border p-2 rounded" required>
            </div>

            {{-- Campo email --}}
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>

            {{-- Campo senha --}}
            <div>
                <label class="block mb-1 font-medium">Senha</label>
                <input type="password" name="password" class="w-full border p-2 rounded" required>
            </div>

            {{-- Botão para Cadastro --}}
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                Cadastrar
            </button>

        </form>

    </div>

</x-app-layout>
