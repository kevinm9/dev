<?php

// app/Http/Middleware/ForceJsonResponse.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // Importa JsonResponse si quieres usarlo explícitamente.


class ForceJsonResponse
{
    public function handle(Request $request, Closure $next)
    {

        //$response = $next($request);
        //$response->headers->set('token-kevin', '12345');
        //return $response;

        $token = $request->header('kevin');

        if (!$token || $token !== null) {
            return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
        
        }
}
