<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessYandexOrderNotification;
use App\Jobs\ProcessTestNotification;

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
        if ($this->isValidOrderNotification($request)) {
            ProcessYandexOrderNotification::dispatch(
                $request->input('order_id'),
                $request->all()
            )->onQueue('notifications');

            // Log::info('Received notification:', $request->all());
            // $service = new YandexMarketService();
            // $order = $service->getOrder(
            //     $request->input('order_id')
            // );
            // return response()->json($order);
        }

        if ($this->isValidPingNotification($request)) {
            // ProcessTestNotification::dispatch(
            //     $request->input('notificationType'),
            //     $request->all()
            // )->onQueue('notifications');


            $data = $request->all();
            $data['notificationType'] = 'PONG';
            $data['time'] = now()->toDateTimeString();
            $data['name'] = 'NinjaGang';
            $data['version'] = 1.0;
            return response()->json($data
            , 200);
        }

        if ($this->isValidTestNotification($request)) {
            ProcessTestNotification::dispatch(
                $request->input('notificationType'),
                $request->all()
            )->onQueue('test');
            // return response()->json(['status' => 'queued']);
            // $data = $request->all();
            // $data['time'] = now()->toDateTimeString();
            // $data['name'] = 'NinjaGang';
            // $data['version'] = 1.0;
            // return response()->json($data
            // , 200);
        }


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
            $request->input('notificationType') === 'ORDER_CREATED';
    }

    protected function isValidPingNotification(Request $request): bool
    {
        return $request->has('notificationType') &&
            $request->input('notificationType') === 'PING';
    }

    protected function isValidTestNotification(Request $request): bool
    {
        return $request->has('test') &&
            $request->input('test') === 'TEST';
    }
}
