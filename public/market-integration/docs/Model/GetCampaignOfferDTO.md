# # GetCampaignOfferDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) |
**quantum** | [**\OpenAPI\Client\Model\QuantumDTO**](QuantumDTO.md) |  | [optional]
**available** | **bool** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте методы скрытия товаров с витрины:  * [GET campaigns/{campaignId}/hidden-offers](../../reference/assortment/getHiddenOffers.md) — просмотр скрытых товаров; * [POST campaigns/{campaignId}/hidden-offers](../../reference/assortment/addHiddenOffers.md) — скрытие товаров; * [POST campaigns/{campaignId}/hidden-offers/delete](../../reference/assortment/deleteHiddenOffers.md) — возобновление показа.  {% endnote %}  Есть ли товар в продаже. | [optional]
**basic_price** | [**\OpenAPI\Client\Model\GetPriceWithDiscountDTO**](GetPriceWithDiscountDTO.md) |  | [optional]
**campaign_price** | [**\OpenAPI\Client\Model\GetPriceWithVatDTO**](GetPriceWithVatDTO.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\OfferCampaignStatusType**](OfferCampaignStatusType.md) |  | [optional]
**errors** | [**\OpenAPI\Client\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Ошибки, препятствующие размещению товара на витрине. | [optional]
**warnings** | [**\OpenAPI\Client\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Предупреждения, не препятствующие размещению товара на витрине. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
