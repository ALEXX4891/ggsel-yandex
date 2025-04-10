# Api.GetCampaignOfferDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offerId** | **String** | Ваш SKU — идентификатор товара в вашей системе.  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields)  | 
**quantum** | [**QuantumDTO**](QuantumDTO.md) |  | [optional] 
**available** | **Boolean** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте методы скрытия товаров с витрины:  * [GET campaigns/{campaignId}/hidden-offers](../../reference/assortment/getHiddenOffers.md) — просмотр скрытых товаров; * [POST campaigns/{campaignId}/hidden-offers](../../reference/assortment/addHiddenOffers.md) — скрытие товаров; * [POST campaigns/{campaignId}/hidden-offers/delete](../../reference/assortment/deleteHiddenOffers.md) — возобновление показа.  {% endnote %}  Есть ли товар в продаже.  | [optional] 
**basicPrice** | [**GetPriceWithDiscountDTO**](GetPriceWithDiscountDTO.md) |  | [optional] 
**campaignPrice** | [**GetPriceWithVatDTO**](GetPriceWithVatDTO.md) |  | [optional] 
**status** | [**OfferCampaignStatusType**](OfferCampaignStatusType.md) |  | [optional] 
**errors** | [**[OfferErrorDTO]**](OfferErrorDTO.md) | Ошибки, препятствующие размещению товара на витрине.  | [optional] 
**warnings** | [**[OfferErrorDTO]**](OfferErrorDTO.md) | Предупреждения, не препятствующие размещению товара на витрине.  | [optional] 


