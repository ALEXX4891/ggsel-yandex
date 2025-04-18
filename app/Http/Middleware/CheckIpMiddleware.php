<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIpMiddleware
{

    // Разрешенные IP-адреса
    protected $allowedIps = [
        explode(',', env('ALLOWED_IP_RANGES')),
        // '127.0.0.1',    // Для локального тестирования
    ];


    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Получаем IP-адрес клиента
        $clientIp = $request->ip();
        // Проверяем, разрешен ли IP-адрес
        if (!in_array($clientIp, $this->allowedIps)) {
            return response()->json(['error' => 'Access denied'], 403);
        }
        return $next($request);
    }
}
