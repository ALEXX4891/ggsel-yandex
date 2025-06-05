<?php

namespace App\Providers;

use App\Services\TestService;
use App\Services\YandexMarketService;
use Illuminate\Support\ServiceProvider;

class YandexMarketServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // $this->app->singleton(YandexMarketService::class, function () {
        //     return new YandexMarketService();
        // });

        $this->app->singleton(
            YandexMarketService::class,
            fn () => new YandexMarketService()
        );

        $this->app->singleton(
            TestService::class,
            fn () => new TestService()
        );
    }
}
