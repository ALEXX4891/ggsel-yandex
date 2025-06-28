<?php

namespace App\Services;

use App\Models\YandexOrder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class YandexOrderService
{
    // protected string $apiUrl;
    // protected string $apiKey;

    // public function __construct()
    // {
    //     $this->apiUrl = config('services.yandex.api_url');
    //     $this->apiKey = config('services.yandex.api_key');
    // }

    protected string $clientId;
    protected string $businessId;
    protected string $campaignId;
    protected string $apiKey;
    protected string $apiUrl;

    public function __construct()
    {
        $this->clientId = config('services.yandex_market.client_id') ??
            throw new InvalidArgumentException('Yandex Market client ID is not configured');

        $this->businessId = config('services.yandex_market.business_id') ??
            throw new InvalidArgumentException('Yandex Market business ID is not configured');

        $this->campaignId = config('services.yandex_market.campaign_id') ??
            throw new InvalidArgumentException('Yandex Market campaign ID is not configured');

        $this->apiKey = config('services.yandex_market.api_key') ??
            throw new InvalidArgumentException('Yandex Market api_key is not configured');

        $this->apiUrl = config('services.yandex_market.api_url') ??
            throw new InvalidArgumentException('Yandex Market api_url is not configured');
    }

    public function fetchOrder(int $orderId): ?array
    {

        // $response = Http::withHeaders([
        //     'Api-Key' => $this->generateAuthHeader(),
        //     'Accept' => 'application/json',
        //     'Content-Type' => 'application/json',
        // ])->get("{$this->apiUrl}/orders/{$orderId}");

        // if ($response->successful()) {
        //     return $response->json();
        // }
        // return null;

        try {

            logger()->info("Fetching order from Yandex API", ['order_id' => $orderId]);

            $response = Http::withHeaders([
                'Api-Key' => $this->apiKey,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            // ])->get($this->getOrderUrl($orderId));
            ])->get("{$this->apiUrl}/orders/{$orderId}");

            logger()->debug("Yandex API response", [
                'status' => $response->status(),
                'body' => $response->body()
            ]);


            return $this->handleResponse($response);
        } catch (\Exception $e) {
            Log::error('YandexMarket API Error: ' . $e->getMessage());

            return [$e->getMessage()];
        }
    }

    public function saveOrderFromApi(int $orderId): ?YandexOrder
    {
        $data = $this->fetchOrder($orderId);

        if (!$data || !isset($data['order'])) {
            return null;
        }

        $orderData = $data['order'];

        return YandexOrder::updateOrCreate(
            ['order_id' => $orderData['id']],
            $this->transformOrderData($orderData)
        );
    }

    protected function transformOrderData(array $orderData): array
    {
        return [
            'order_id' => $orderData['id'],
            'status' => $orderData['status'],
            'substatus' => $orderData['substatus'] ?? null,
            'creation_date' => $orderData['creationDate'],
            'updated_at' => $orderData['updatedAt'],
            'currency' => $orderData['currency'],
            'items_total' => $orderData['itemsTotal'],
            'delivery_total' => $orderData['deliveryTotal'],
            'buyer_items_total' => $orderData['buyerItemsTotal'],
            'buyer_total' => $orderData['buyerTotal'],
            'buyer_items_total_before_discount' => $orderData['buyerItemsTotalBeforeDiscount'],
            'buyer_total_before_discount' => $orderData['buyerTotalBeforeDiscount'],
            'payment_type' => $orderData['paymentType'],
            'payment_method' => $orderData['paymentMethod'],
            'fake' => $orderData['fake'],
            'items' => $orderData['items'] ?? null,
            'subsidies' => $orderData['subsidies'] ?? null,
            'delivery' => $orderData['delivery'] ?? null,
            'buyer' => $orderData['buyer'] ?? null,
            'notes' => $orderData['notes'] ?? null,
            'tax_system' => $orderData['taxSystem'] ?? null,
            'cancel_requested' => $orderData['cancelRequested'] ?? false,
            'expiry_date' => $orderData['expiryDate'] ?? null,
        ];
    }

    // protected function generateAuthHeader(): string
    // {
    //     return $this->apiKey;
    // }

    // protected function getOrderUrl(string $orderId): string
    // {
    //     return "https://api.partner.market.yandex.ru/v2/campaigns/{$this->campaignId}/orders/{$orderId}";
    // }

    protected function handleResponse($response): ?array
    {
        if ($response->successful()) {
            return $response->json();
        }

        Log::error('YandexMarket API Failed: ', [
            'status' => $response->status(),
            'response' => $response->body(),
        ]);
        return null;
    }
}
