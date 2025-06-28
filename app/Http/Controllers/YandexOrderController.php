<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreYandexOrderRequest;
use App\Models\YandexOrder;
use App\Services\YandexOrderService;
use Illuminate\Http\JsonResponse;

class YandexOrderController extends Controller
{
    //Внедряется зависимость YandexOrderService, которая сохраняется в свойстве $orderService:
    protected YandexOrderService $orderService;

    public function __construct(YandexOrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function store(StoreYandexOrderRequest $request): JsonResponse
    {
        $orderId = $request->validated('order_id');

        $order = $this->orderService->saveOrderFromApi($orderId);

        if (!$order) {
            return response()->json([
                'message' => 'Failed to fetch or save order from Yandex API'
            ], 500);
        }

        return response()->json([
            'message' => 'Order saved successfully',
            'data' => $order
        ]);
    }

    public function show(YandexOrder $yandexOrder): JsonResponse
    {
        return response()->json([
            'data' => $yandexOrder
        ]);
    }

    public function sync(YandexOrder $yandexOrder): JsonResponse
    {
        $updatedOrder = $this->orderService->saveOrderFromApi($yandexOrder->order_id);

        if (!$updatedOrder) {
            return response()->json([
                'message' => 'Failed to sync order with Yandex API'
            ], 500);
        }

        return response()->json([
            'message' => 'Order synced successfully',
            'data' => $updatedOrder
        ]);
    }
}
