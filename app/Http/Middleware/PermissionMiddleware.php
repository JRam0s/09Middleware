<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class PermissionMiddleware {

    private $level = 2;

    public function handle($request, Closure $next) {

        
        $route = $request->route()->getName();

        if($route == "home" || $route == "negado") {
            return $next($request);
        }
        // Nível Mínimo
        else if($this->level == 0) {
            return redirect()->route('negado');
        }
        // Nível Intermediário
        else if($this->level == 1) {
            $path = explode(".", $route);
            if($path[0] != "cursos" && $path[0] != "disciplinas")
                return redirect()->route('negado');
        }

        return $next($request);
    }
}