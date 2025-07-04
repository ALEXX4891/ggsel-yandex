<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->singleton(
        //     \App\Services\YandexMarketService::class,
        //     fn () => new \App\Services\YandexMarketService()
        // );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // защита от ddos
        RateLimiter::for('myApi', function(Request $request) {
            return Limit::perMinute(30)->by($request->user()?->id ?: $request->ip())->response(
                function (Request $request, array $headers){
                    return response()->json([
                        'message' => 'Too many attempts ',
                    ], 429);
                }
            );
        });
    }
}
