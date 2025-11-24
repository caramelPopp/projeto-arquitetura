<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
* Controller para o CRUD de Usuários / Funcionários.
*/
class UsuarioController extends Controller
{
    public function __construct()
    {
        // Middleware que impede o acesso de não autenticados
        $this->middleware('employee');
    }

    /**
    * Lista todos os usuários.
    */
    public function index()
    {
        $usuarios = User::all(); // Busca todos no banco
        return view('usuarios.index', compact('usuarios'));
    }

    /**
    * Mostra o formulário de criação de funcionário.
    */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
    * Armazena novo funcionário no banco.
    */
    public function store(Request $request)
    {
        // Validação obrigatória
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        // Criando usuário criptografando senha
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Funcionário cadastrado.');
    }

    /**
    * Exibe um usuário específico (Consulta).
    */
    public function show(User $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    /**
    * Formulário de edição.
    */
    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
    * Atualiza um funcionário existente.
    */
    public function update(Request $request, User $usuario)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => "required|email|unique:users,email,{$usuario->id}",
        ]);

        $usuario->update($data);

        return redirect()->route('usuarios.index')->with('success', 'Funcionário atualizado.');
    }

    /**
    * Exclui um funcionário.
    */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Funcionário removido.');
    }
}
