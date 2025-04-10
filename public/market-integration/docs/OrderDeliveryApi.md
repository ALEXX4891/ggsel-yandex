# Api.OrderDeliveryApi

All URIs are relative to *https://api.partner.market.yandex.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderBuyerInfo**](OrderDeliveryApi.md#getOrderBuyerInfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе — физическом лице
[**setOrderDeliveryDate**](OrderDeliveryApi.md#setOrderDeliveryDate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
[**setOrderDeliveryTrackCode**](OrderDeliveryApi.md#setOrderDeliveryTrackCode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
[**updateOrderStorageLimit**](OrderDeliveryApi.md#updateOrderStorageLimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
[**verifyOrderEac**](OrderDeliveryApi.md#verifyOrderEac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода подтверждения



## getOrderBuyerInfo

> GetOrderBuyerInfoResponse getOrderBuyerInfo(campaignId, orderId)

Информация о покупателе — физическом лице

{% include notitle [access](../../_auto/method_scopes/getOrderBuyerInfo.md) %}  Возвращает информацию о покупателе по идентификатору заказа.  {% note info \&quot;Как получить информацию о покупателе, который является юридическим лицом\&quot; %}  Воспользуйтесь запросом [POST campaigns/{campaignId}/orders/{orderId}/business-buyer](../../reference/order-business-information/getOrderBusinessBuyerInfo.md).  {% endnote %}  Получить данные можно, только если заказ находится в статусе &#x60;PROCESSING&#x60;, &#x60;DELIVERY&#x60; или &#x60;PICKUP&#x60;.  |**⚙️ Лимит:** 3 000 запросов в час| |-| 

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

let apiInstance = new Api.OrderDeliveryApi();
let campaignId = 789; // Number | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) 
let orderId = 789; // Number | Идентификатор заказа.
apiInstance.getOrderBuyerInfo(campaignId, orderId, (error, data, response) => {
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
 **orderId** | **Number**| Идентификатор заказа. | 

### Return type

[**GetOrderBuyerInfoResponse**](GetOrderBuyerInfoResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## setOrderDeliveryDate

> EmptyApiResponse setOrderDeliveryDate(campaignId, orderId, setOrderDeliveryDateRequest)

Изменение даты доставки заказа

{% include notitle [access](../../_auto/method_scopes/setOrderDeliveryDate.md) %}  Метод изменяет дату доставки заказа в статусе &#x60;PROCESSING&#x60; или &#x60;DELIVERY&#x60;. Для заказов с другими статусами дату доставки изменить нельзя.  |**⚙️ Лимит:** 100 000 запросов в час| |-| 

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

let apiInstance = new Api.OrderDeliveryApi();
let campaignId = 789; // Number | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) 
let orderId = 789; // Number | Идентификатор заказа.
let setOrderDeliveryDateRequest = new Api.SetOrderDeliveryDateRequest(); // SetOrderDeliveryDateRequest | 
apiInstance.setOrderDeliveryDate(campaignId, orderId, setOrderDeliveryDateRequest, (error, data, response) => {
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
 **orderId** | **Number**| Идентификатор заказа. | 
 **setOrderDeliveryDateRequest** | [**SetOrderDeliveryDateRequest**](SetOrderDeliveryDateRequest.md)|  | 

### Return type

[**EmptyApiResponse**](EmptyApiResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## setOrderDeliveryTrackCode

> EmptyApiResponse setOrderDeliveryTrackCode(campaignId, orderId, setOrderDeliveryTrackCodeRequest)

Передача трек‑номера посылки

{% include notitle [access](../../_auto/method_scopes/setOrderDeliveryTrackCode.md) %}  Передает Маркету трек‑номер, по которому покупатель может отследить посылку со своим заказом через службу доставки. Если покупатели смогут узнать, на каком этапе доставки находятся их заказы, доверие покупателей к вашему магазину может возрасти.  Передать трек‑номер можно, только если заказ находится в статусе &#x60;PROCESSING&#x60;, &#x60;DELIVERY&#x60; или &#x60;PICKUP&#x60;.  |**⚙️ Лимит:** 100 000 запросов в час| |-| 

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

let apiInstance = new Api.OrderDeliveryApi();
let campaignId = 789; // Number | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) 
let orderId = 789; // Number | Идентификатор заказа.
let setOrderDeliveryTrackCodeRequest = new Api.SetOrderDeliveryTrackCodeRequest(); // SetOrderDeliveryTrackCodeRequest | 
apiInstance.setOrderDeliveryTrackCode(campaignId, orderId, setOrderDeliveryTrackCodeRequest, (error, data, response) => {
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
 **orderId** | **Number**| Идентификатор заказа. | 
 **setOrderDeliveryTrackCodeRequest** | [**SetOrderDeliveryTrackCodeRequest**](SetOrderDeliveryTrackCodeRequest.md)|  | 

### Return type

[**EmptyApiResponse**](EmptyApiResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## updateOrderStorageLimit

> EmptyApiResponse updateOrderStorageLimit(campaignId, orderId, updateOrderStorageLimitRequest)

Продление срока хранения заказа

{% include notitle [access](../../_auto/method_scopes/updateOrderStorageLimit.md) %}  Продлевает срок хранения заказа в пункте выдачи продавца.  Заказ должен быть в статусе &#x60;PICKUP&#x60;. Продлить срок можно только один раз, не больше чем на 30 дней.  Новый срок хранения можно получить в параметре &#x60;outletStorageLimitDate&#x60; запроса [GET campaigns/{campaignId}/orders/{orderId}](../../reference/orders/getOrder.md).  |**⚙️ Лимит:** 100 000 запросов в час| |-| 

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

let apiInstance = new Api.OrderDeliveryApi();
let campaignId = 789; // Number | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) 
let orderId = 789; // Number | Идентификатор заказа.
let updateOrderStorageLimitRequest = new Api.UpdateOrderStorageLimitRequest(); // UpdateOrderStorageLimitRequest | 
apiInstance.updateOrderStorageLimit(campaignId, orderId, updateOrderStorageLimitRequest, (error, data, response) => {
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
 **orderId** | **Number**| Идентификатор заказа. | 
 **updateOrderStorageLimitRequest** | [**UpdateOrderStorageLimitRequest**](UpdateOrderStorageLimitRequest.md)|  | 

### Return type

[**EmptyApiResponse**](EmptyApiResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## verifyOrderEac

> VerifyOrderEacResponse verifyOrderEac(campaignId, orderId, verifyOrderEacRequest)

Передача кода подтверждения

{% include notitle [access](../../_auto/method_scopes/verifyOrderEac.md) %}  Отправляет Маркету код подтверждения для его проверки.  **Если у магазина настроена работа с кодами подтверждения:**    В запросах [GET campaigns/{campaignId}/orders/{orderId}](../../reference/orders/getOrder.md), [GET campaigns/{campaignId}/orders](../../reference/orders/getOrders.md), [PUT campaigns/{campaignId}/orders/{orderId}/status](../../reference/orders/updateOrderStatus.md) в параметре &#x60;delivery&#x60;, вложенном в &#x60;order&#x60;, возвращается параметр &#x60;eacType&#x60; с типом &#x60;Enum&#x60; — тип кода подтверждения для передачи заказа.    Возможные значения:    * &#x60;MERCHANT_TO_COURIER&#x60; (временно не возвращается) — продавец передает код курьеру для получения невыкупа;   * &#x60;COURIER_TO_MERCHANT&#x60; — курьер передает код продавцу для получения заказа.    Параметр &#x60;eacType&#x60; возвращается при статусах заказа &#x60;COURIER_FOUND&#x60;, &#x60;COURIER_ARRIVED_TO_SENDER&#x60; и &#x60;DELIVERY_SERVICE_UNDELIVERED&#x60;. Если заказ в других статусах, параметр может отсутствовать.  |**⚙️ Лимит:** 100 000 запросов в час| |-| 

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

let apiInstance = new Api.OrderDeliveryApi();
let campaignId = 789; // Number | Идентификатор магазина в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) 
let orderId = 789; // Number | Идентификатор заказа.
let verifyOrderEacRequest = new Api.VerifyOrderEacRequest(); // VerifyOrderEacRequest | 
apiInstance.verifyOrderEac(campaignId, orderId, verifyOrderEacRequest, (error, data, response) => {
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
 **orderId** | **Number**| Идентификатор заказа. | 
 **verifyOrderEacRequest** | [**VerifyOrderEacRequest**](VerifyOrderEacRequest.md)|  | 

### Return type

[**VerifyOrderEacResponse**](VerifyOrderEacResponse.md)

### Authorization

[ApiKey](../README.md#ApiKey), [OAuth](../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

