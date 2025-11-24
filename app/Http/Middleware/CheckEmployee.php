<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

/**
 * Middleware.
 * Verifica se o usuário está autenticado.
 * Caso não esteja, redireciona para a tela de login com
 * mensagem de erro personalizada.
 */
class CheckEmployee
{
    public function handle(Request $request, Closure $next)
    {
        // Se o usuário não está logado → bloqueia acesso
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors([
                'email' => 'Credenciais inválidas'
            ]);
        }

        // Libera o acesso
        return $next($request);
    }
}
