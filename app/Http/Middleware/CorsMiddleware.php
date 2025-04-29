<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class CorsMiddleware
// {
//     public function handle(Request $request, Closure $next): Response
//     {
//         $response = $next($request);

//         // Allow all origins (change * to a specific domain if needed)
//         $response->headers->set('Access-Control-Allow-Origin', '*');

//         // Allowed HTTP methods
//         $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

//         // Allowed headers
//         $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

//         // Handle preflight requests
//         if ($request->isMethod('OPTIONS')) {
//             return response('', 200, $response->headers->all());
//         }

//         return $response;
//     }
// }
