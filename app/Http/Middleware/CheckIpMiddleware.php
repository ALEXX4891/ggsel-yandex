<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\IpUtils;
use Symfony\Component\HttpFoundation\Response;

class CheckIpMiddleware
{


    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedRanges = [
            explode(',', env('ALLOWED_IP_RANGES')),
        ];
        // Получаем IP-адрес клиента
        $clientIp = $request->ip();
        // Проверяем, разрешен ли IP-адрес
        foreach ($allowedRanges as $range) {
            if (!IpUtils::checkIp($clientIp, $range)) {
                return response()->json(['ip' => $clientIp ,'error' => 'Access denied'], 403);
            }
        }
        return $next($request);
    }
}
