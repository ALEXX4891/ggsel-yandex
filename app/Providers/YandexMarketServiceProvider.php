<?php

namespace App\Providers;

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
    }
}
