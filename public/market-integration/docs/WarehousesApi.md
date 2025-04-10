# Api.WarehousesApi

All URIs are relative to *https://api.partner.market.yandex.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFulfillmentWarehouses**](WarehousesApi.md#getFulfillmentWarehouses) | **GET** /warehouses | Идентификаторы складов Маркета (FBY)
[**getPagedWarehouses**](WarehousesApi.md#getPagedWarehouses) | **POST** /businesses/{businessId}/warehouses | Список складов
[**getWarehouses**](WarehousesApi.md#getWarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
[**updateWarehouseStatus**](WarehousesApi.md#updateWarehouseStatus) | **POST** /campaigns/{campaignId}/warehouse/status | Изменение статуса склада



## getFulfillmentWarehouses

> GetFulfillmentWarehousesResponse getFulfillmentWarehouses()

Идентификаторы складов Маркета (FBY)

{% include notitle [access](../../_auto/method_scopes/getFulfillmentWarehouses.md) %}  Возвращает список складов Маркета с их идентификаторами.  |**⚙️ Лимит:** 100 запросов в минуту| |-| 

### Example

```javascript
import Api from '_api_';
let defaultClient = Api.ApiClient.instance;
// Configure API key authorization: ApiKey
let ApiKey = defaultClient.authentications['ApiKey'];
ApiKey.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//ApiKey.apiKeyPrefix = 'Token';
// Configure OAuth2 access token for authorization: OAuth
let OAuth = defaultClient.authentications['OAuth'];
OAuth.accessToken = 'YOUR ACCESS TOKEN';

let apiInstance = new Api.WarehousesApi();
apiInstance.getFulfillmentWarehouses((error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**GetFulfillmentWarehousesResponse**](GetFulfillmentWarehousesResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## getPagedWarehouses

> GetPagedWarehousesResponse getPagedWarehouses(businessId, opts)

Список складов

{% include notitle [access](../../_auto/method_scopes/getPagedWarehouses.md) %}  Возвращает список складов и информацию о них.  {% note warning \&quot;Ограничение для параметра &#x60;limit&#x60;\&quot; %}  Не передавайте значение больше 25.  {% endnote %}  |**⚙️ Лимит:** 1000 запросов в час| |-| 

### Example

```javascript
import Api from '_api_';
let defaultClient = Api.ApiClient.instance;
// Configure API key authorization: ApiKey
let ApiKey = defaultClient.authentications['ApiKey'];
ApiKey.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//ApiKey.apiKeyPrefix = 'Token';
// Configure OAuth2 access token for authorization: OAuth
let OAuth = defaultClient.authentications['OAuth'];
OAuth.accessToken = 'YOUR ACCESS TOKEN';

let apiInstance = new Api.WarehousesApi();
let businessId = 789; // Number | Идентификатор кабинета. Чтобы узнать идентификатор, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md#businessdto).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) 
let opts = {
  'pageToken': "eyBuZXh0SWQ6IDIzNDIgfQ==", // String | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page_number` и `page_size`, они игнорируются. 
  'limit': 20, // Number | Количество значений на одной странице. 
  'getPagedWarehousesRequest': new Api.GetPagedWarehousesRequest() // GetPagedWarehousesRequest | 
};
apiInstance.getPagedWarehouses(businessId, opts, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessId** | **Number**| Идентификатор кабинета. Чтобы узнать идентификатор, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md#businessdto).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  | 
 **pageToken** | **String**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page_number&#x60; и &#x60;page_size&#x60;, они игнорируются.  | [optional] 
 **limit** | **Number**| Количество значений на одной странице.  | [optional] 
 **getPagedWarehousesRequest** | [**GetPagedWarehousesRequest**](GetPagedWarehousesRequest.md)|  | [optional] 

### Return type

[**GetPagedWarehousesResponse**](GetPagedWarehousesResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## getWarehouses

> GetWarehousesResponse getWarehouses(businessId)

Список складов и групп складов

{% include notitle [access](../../_auto/method_scopes/getWarehouses.md) %}  {% note warning \&quot;Этот метод устарел\&quot; %}  Вместо него используйте [POST businesses/{businessId}/warehouses](../../reference/warehouses/getPagedWarehouses.md).  {% endnote %}  Возвращает список складов и, если склады объединены, список групп складов. [Что такое группы складов и зачем они нужны](https://yandex.ru/support/marketplace/assortment/operations/stocks.html#unified-stocks)  Среди прочего запрос позволяет определить идентификатор, который нужно использовать при передаче остатков для группы складов.  |**⚙️ Лимит:** 100 запросов в минуту| |-| 

### Example

```javascript
import Api from '_api_';
let defaultClient = Api.ApiClient.instance;
// Configure API key authorization: ApiKey
let ApiKey = defaultClient.authentications['ApiKey'];
ApiKey.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//ApiKey.apiKeyPrefix = 'Token';
// Configure OAuth2 access token for authorization: OAuth
let OAuth = defaultClient.authentications['OAuth'];
OAuth.accessToken = 'YOUR ACCESS TOKEN';

let apiInstance = new Api.WarehousesApi();
let businessId = 789; // Number | Идентификатор кабинета. Чтобы узнать идентификатор, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md#businessdto).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) 
apiInstance.getWarehouses(businessId, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessId** | **Number**| Идентификатор кабинета. Чтобы узнать идентификатор, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md#businessdto).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  | 

### Return type

[**GetWarehousesResponse**](GetWarehousesResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## updateWarehouseStatus

> UpdateWarehouseStatusResponse updateWarehouseStatus(campaignId, updateWarehouseStatusRequest)

Изменение статуса склада

{% include notitle [access](../../_auto/method_scopes/updateWarehouseStatus.md) %}  Отключает или включает склад.  После отключения склада товары, которые находятся на нем, скрываются через 15 минут. После включения они возвращаются на витрину через 15 минут, а если склад был выключен 30 дней или дольше — через 4 часа.  |**⚙️ Лимит:** 100 запросов в час| |-| 

### Example

```javascript
import Api from '_api_';
let defaultClient = Api.ApiClient.instance;
// Configure API key authorization: ApiKey
let ApiKey = defaultClient.authentications['ApiKey'];
ApiKey.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//ApiKey.apiKeyPrefix = 'Token';
// Configure OAuth2 access token for authorization: OAuth
let OAuth = defaultClient.authentications['OAuth'];
OAuth.accessToken = 'YOUR ACCESS TOKEN';

let apiInstance = new Api.WarehousesApi();
let campaignId = 789; // Number | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) 
let updateWarehouseStatusRequest = new Api.UpdateWarehouseStatusRequest(); // UpdateWarehouseStatusRequest | 
apiInstance.updateWarehouseStatus(campaignId, updateWarehouseStatusRequest, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **Number**| Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  | 
 **updateWarehouseStatusRequest** | [**UpdateWarehouseStatusRequest**](UpdateWarehouseStatusRequest.md)|  | 

### Return type

[**UpdateWarehouseStatusResponse**](UpdateWarehouseStatusResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

