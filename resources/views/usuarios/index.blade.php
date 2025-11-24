<x-app-layout>

    <div class="max-w-5xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Lista de Funcionários</h1>

        {{-- Botão para criar novo usuário --}}
        <a href="{{ route('usuarios.create') }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Novo Funcionário
        </a>

        {{-- Tabela de usuários --}}
        <table class="w-full mt-6 bg-white shadow rounded">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Nome</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Ações</th>
                </tr>
            </thead>

            <tbody>
                {{-- Loop para listar todos os usuários e as atividades do CRUD --}}
                @foreach($usuarios as $usuario)
                    <tr class="border-b">
                        <td class="p-3">{{ $usuario->id }}</td>
                        <td class="p-3">{{ $usuario->name }}</td>
                        <td class="p-3">{{ $usuario->email }}</td>

                        <td class="p-3 flex gap-2">

                            {{-- Botão visualizar --}}
                            <a href="{{ route('usuarios.show', $usuario->id) }}"
                               class="text-blue-600 hover:underline">
                                Ver
                            </a>

                            {{-- Botão editar --}}
                            <a href="{{ route('usuarios.edit', $usuario->id) }}"
                               class="text-yellow-600 hover:underline">
                                Editar
                            </a>

                            {{-- Botão excluir --}}
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">
                                    Excluir
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</x-app-layout>
