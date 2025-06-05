<?php

// namespace App\Jobs;

// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Foundation\Queue\Queueable;

// class ProcessTestNotification implements ShouldQueue
// {
//     use Queueable;

//     /**
//      * Create a new job instance.
//      */
//     public function __construct()
//     {
//         //
//     }

//     /**
//      * Execute the job.
//      */
//     public function handle(): void
//     {
//         //
//     }
// }



namespace App\Jobs;

use App\Services\TestService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
// use App\Services\YandexMarketService;
// use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessTestNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        protected string $notificationType,
        protected array $notificationData = []
    ) {}

    public function handle(TestService $service): void
    {
        Log::info('Processing TEST order', ['notificationType' => $this->notificationType]);

        $orderData = $service->getOrder($this->notificationType);

        if ($orderData) {
            // Здесь можно сохранить заказ в БД или вызвать другие сервисы
            Log::info('Order data received:', $orderData);
        }

    }
}
