<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Lenguajes permitidos.
        $langs = [
            'es',
            'en',
            'fr'
        ];

        // Validamos la existencia
        if (!in_array($request->language, $langs)) {
            \App::setLocale('es');
        }

        // Validamos si ese idioma ya esta seleccionado.
        if (!\App::isLocale($request->language)) {
            \App::setLocale($request->language);
        }
        
        return $next($request);
    }
}
