<x-guest-layout>

    {{-- Container centralizado --}}
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-6">

        {{-- Card do formulário --}}
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">

            {{-- Título --}}
            <h1 class="text-2xl font-bold text-center mb-6">
                Login do Funcionário
            </h1>

            {{-- Mensagem de erro vinda do middleware ou do controller --}}
            @if($errors->any())
                <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
                    {{-- Exibe primeira mensagem de erro --}}
                    {{ $errors->first() }}
                </div>
            @endif

            {{-- Formulário de login --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Campo Email --}}
                <div class="mb-4">
                    <label class="block font-medium mb-1">Email:</label>
                    <input type="email" name="email"
                           class="w-full border p-2 rounded"
                           value="{{ old('email') }}"
                           required autofocus>
                </div>

                {{-- Campo Senha --}}
                <div class="mb-6">
                    <label class="block font-medium mb-1">Senha:</label>
                    <input type="password" name="password"
                           class="w-full border p-2 rounded"
                           required>
                </div>

                {{-- Botão para Logar --}}
                <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                    Entrar
                </button>

            </form>
        </div>

    </div>

</x-guest-layout>
