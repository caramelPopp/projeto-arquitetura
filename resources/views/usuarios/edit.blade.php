<x-app-layout>

    <div class="max-w-lg mx-auto py-10">

        <h1 class="text-2xl font-bold mb-6">Editar Funcionário</h1>

        {{-- Formulário para edição --}}
        <form action="{{ route('usuarios.update', $usuario->id) }}" 
              method="POST" 
              class="space-y-4 bg-white p-6 shadow rounded">
              
            @csrf
            @method('PUT')

            {{-- Nome --}}
            <div>
                <label class="block mb-1 font-medium">Nome</label>
                <input type="text" name="name" 
                       value="{{ $usuario->name }}" 
                       class="w-full border p-2 rounded" required>
            </div>

            {{-- Email --}}
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email"
                       value="{{ $usuario->email }}"
                       class="w-full border p-2 rounded" required>
            </div>

            {{-- Botão para Editar --}}
            <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">
                Atualizar
            </button>

        </form>

    </div>

</x-app-layout>
