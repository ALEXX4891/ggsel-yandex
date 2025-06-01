<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessYandexOrderNotification;
use App\Services\YandexMarketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

// return response()->json([
    //     'version' => '1.0.0',
    //     'name' => request()->input('notificationType'),
//     'time' => request()->input('time'),
//     'ip' => request()->ip(),
// ], 200);

class WebNotificationController extends Controller
{

    public function __construct(
        protected YandexMarketService $marketService
    ) {}

    public function index(Request $request)
    {
        Log::info('Received notification:', $request->all());
        // if ($this->isValidOrderNotification($request)) {
        //     ProcessYandexOrderNotification::dispatch(
        //         $request->input('order_id'),
        //         $request->all()
        //     )->onQueue('notifications');
        // }
        $service = new YandexMarketService();
        $order = $service->getOrder(
            $request->input('order_id')
        );
        return response()->json($order);
        // ... остальной код
    }

    // public function index(Request $request)
    // {
    //     Log::info('Received notification:', $request->all());

    //     if ($this->isValidOrderNotification($request)) {
    //         ProcessYandexOrderNotification::dispatch(
    //             $request->input('order_id'),
    //             $request->all()
    //         )->onQueue('notifications');
    //     }

    //     return response()->json(['status' => 'queued']);
    // }

    protected function isValidOrderNotification(Request $request): bool
    {
        return $request->has('order_id') &&
            $request->input('event') === 'ORDER_CREATED';
    }
}
