<x-app-layout>
    <div class="py-10 max-w-5xl mx-auto">

        {{-- Título --}}
        <h1 class="text-2xl font-bold mb-6">Painel do Funcionário</h1>

        {{-- Cards de Projetos --}}
        <h2 class="text-xl font-semibold mb-3">Próximos Projetos</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            {{-- Exemplo de card fixo --}}
            @foreach([
                ['empresa'=>'Museu de Arte Moderna', 'data'=>'2025-03-14', 'tipo'=>'Museu', 'responsavel'=>'Bárbara Fernandes'],
                ['empresa'=>'Escola Santo André', 'data'=>'2025-02-01', 'tipo'=>'Escola Primária', 'responsavel'=>'João Mendes'],
            ] as $proj)
                <div class="p-4 bg-white shadow-md rounded-lg border">
                    <p><strong>Empresa:</strong> {{ $proj['empresa'] }}</p>
                    <p><strong>Entrega:</strong> {{ $proj['data'] }}</p>
                    <p><strong>Tipo:</strong> {{ $proj['tipo'] }}</p>
                    <p><strong>Responsável:</strong> {{ $proj['responsavel'] }}</p>
                </div>
            @endforeach

        </div>

        {{-- Cards de Cursos --}}
        <h2 class="text-xl font-semibold mt-10 mb-3">Cursos Obrigatórios</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            @foreach([
                ['nome'=>'Gestão de Obras', 'plataforma'=>'Alura', 'tempo'=>'6h'],
                ['nome'=>'Estruturas Modernas', 'plataforma'=>'Udemy', 'tempo'=>'4h'],
            ] as $curso)
                <div class="p-4 bg-white shadow-md rounded-lg border">
                    <p><strong>Curso:</strong> {{ $curso['nome'] }}</p>
                    <p><strong>Plataforma:</strong> {{ $curso['plataforma'] }}</p>
                    <p><strong>Duração:</strong> {{ $curso['tempo'] }}</p>
                </div>
            @endforeach

        </div>

        {{-- Reunião --}}
        <div class="mt-10 p-4 bg-blue-100 rounded-lg">
            <p class="text-lg"><strong>Próxima reunião:</strong> 20/02/2025</p>
        </div>

    </div>
</x-app-layout>
