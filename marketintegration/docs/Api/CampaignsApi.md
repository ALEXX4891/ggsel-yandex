# OpenAPI\Client\CampaignsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCampaign()**](CampaignsApi.md#getCampaign) | **GET** /campaigns/{campaignId} | Информация о магазине |
| [**getCampaignRegion()**](CampaignsApi.md#getCampaignRegion) | **GET** /campaigns/{campaignId}/region | Регион магазина |
| [**getCampaignSettings()**](CampaignsApi.md#getCampaignSettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина |
| [**getCampaigns()**](CampaignsApi.md#getCampaigns) | **GET** /campaigns | Список магазинов пользователя |


## `getCampaign()`

```php
getCampaign($campaign_id): \OpenAPI\Client\Model\GetCampaignResponse
```

Информация о магазине

{% include notitle [access](../../_auto/method_scopes/getCampaign.md) %}  Возвращает информацию о магазине. |**⚙️ Лимит:** 1000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |

### Return type

[**\OpenAPI\Client\Model\GetCampaignResponse**](../Model/GetCampaignResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignRegion()`

```php
getCampaignRegion($campaign_id): \OpenAPI\Client\Model\GetCampaignRegionResponse
```

Регион магазина

{% include notitle [access](../../_auto/method_scopes/getCampaignRegion.md) %}  {% note warning \"Этот метод устарел\" %}  Вместо него используйте [GET campaigns/{campaignId}/settings](../../reference/campaigns/getCampaignSettings.md).  {% endnote %}  Возвращает регион, в котором находится магазин. |**⚙️ Лимит:** 5 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)

try {
    $result = $apiInstance->getCampaignRegion($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaignRegion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |

### Return type

[**\OpenAPI\Client\Model\GetCampaignRegionResponse**](../Model/GetCampaignRegionResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignSettings()`

```php
getCampaignSettings($campaign_id): \OpenAPI\Client\Model\GetCampaignSettingsResponse
```

Настройки магазина

{% include notitle [access](../../_auto/method_scopes/getCampaignSettings.md) %}  Возвращает информацию о настройках магазина, идентификатор которого указан в запросе. |**⚙️ Лимит:** 1000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)

try {
    $result = $apiInstance->getCampaignSettings($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaignSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |

### Return type

[**\OpenAPI\Client\Model\GetCampaignSettingsResponse**](../Model/GetCampaignSettingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($page, $page_size): \OpenAPI\Client\Model\GetCampaignsResponse
```

Список магазинов пользователя

{% include notitle [access](../../_auto/method_scopes/getCampaigns.md) %}  **Для Api-Key-токена:** возвращает список магазинов в кабинете, для которого выдан токен. Нельзя получить список только подагентских магазинов.  **Для OAuth-токена:** возвращает список магазинов, к которым имеет доступ пользователь — владелец авторизационного токена, использованного в запросе. Для агентских пользователей список состоит из подагентских магазинов.  |**⚙️ Лимит:** 1000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | {% note warning \"Если в методе есть `page_token`\" %}  Используйте его вместо параметра `page`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром `page_size`.  `page_number` игнорируется, если задан `page_token` или `limit`.
$page_size = 56; // int | Размер страницы.  Используется вместе с параметром `page_number`.  `page_size` игнорируется, если задан `page_token` или `limit`.

try {
    $result = $apiInstance->getCampaigns($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| {% note warning \&quot;Если в методе есть &#x60;page_token&#x60;\&quot; %}  Используйте его вместо параметра &#x60;page&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром &#x60;page_size&#x60;.  &#x60;page_number&#x60; игнорируется, если задан &#x60;page_token&#x60; или &#x60;limit&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Размер страницы.  Используется вместе с параметром &#x60;page_number&#x60;.  &#x60;page_size&#x60; игнорируется, если задан &#x60;page_token&#x60; или &#x60;limit&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
