<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class YandexMarketService
{

    protected string $clientId;
    protected string $businessId;
    protected string $campaignId;
    protected string $apiKey;

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
    }

    /**
     * Получает информацию о заказе.
     */
    public function getOrder(string $orderId): ?array
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => $this->generateAuthHeader(),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])->get($this->getOrderUrl($orderId));

            return $this->handleResponse($response);
        } catch (\Exception $e) {
            Log::error('YandexMarket API Error: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Генерирует заголовок авторизации.
     */
    protected function generateAuthHeader(): string
    {
        return "Api-Key: {$this->apiKey}";
        // return "OAuth oauth_api_key=\"{$this->apiKey}\", oauth_client_id=\"{$this->campaignId}\"";

    }

    /**
     * Формирует URL для запроса заказа.
     */
    protected function getOrderUrl(string $orderId): string
    {
        return "https://api.partner.market.yandex.ru/v2/campaigns/{$this->campaignId}/orders/{$orderId}";
    }

    /**
     * Обрабатывает ответ API.
     */
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
