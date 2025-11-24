<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
    * Lida com a tentativa de login do usuário.
    * Exibe mensagem de erro personalizada caso as credenciais estejam incorretas.
    */
    public function store(Request $request): RedirectResponse
    {
        // Validação dos campos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tenta autenticar o usuário
        if (!Auth::attempt($request->only('email', 'password'))) {

            // Se falhar → retorna para o login com mensagem de erro
            return back()->withErrors([
                'email' => 'Credenciais inválidas. Verifique seus dados e tente novamente.'
            ])->onlyInput('email');
        }

        // Regenera sessão após login
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
