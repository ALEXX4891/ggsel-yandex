<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Services\YandexMarketService;
// use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessYandexOrderNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        protected string $orderId,
        protected array $notificationData = []
    ) {}

    public function handle(YandexMarketService $service): void
    {
        Log::info('Processing Yandex.Market order', ['order_id' => $this->orderId]);

        $orderData = $service->getOrder($this->orderId);

        if ($orderData) {
            // Здесь можно сохранить заказ в БД или вызвать другие сервисы
            Log::info('Order data received:', $orderData);
        }
    }
}
