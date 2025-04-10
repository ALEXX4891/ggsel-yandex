# Api.OrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** | Идентификатор заказа. | 
**status** | [**OrderStatusType**](OrderStatusType.md) |  | 
**substatus** | [**OrderSubstatusType**](OrderSubstatusType.md) |  | 
**creationDate** | **String** |  | 
**updatedAt** | **String** |  | [optional] 
**currency** | [**CurrencyType**](CurrencyType.md) |  | 
**itemsTotal** | **Number** | Платеж покупателя.  | 
**deliveryTotal** | **Number** | Стоимость доставки.  | 
**buyerItemsTotal** | **Number** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя после применения скидок и без учета стоимости доставки.  | [optional] 
**buyerTotal** | **Number** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя после применения скидок и с учетом стоимости доставки.  | [optional] 
**buyerItemsTotalBeforeDiscount** | **Number** | Стоимость всех товаров в заказе в валюте покупателя без учета стоимости доставки и до применения скидок по:  * акциям; * купонам; * промокодам.  | 
**buyerTotalBeforeDiscount** | **Number** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя до применения скидок и с учетом стоимости доставки (&#x60;buyerItemsTotalBeforeDiscount&#x60; + стоимость доставки).  | [optional] 
**paymentType** | [**OrderPaymentType**](OrderPaymentType.md) |  | 
**paymentMethod** | [**OrderPaymentMethodType**](OrderPaymentMethodType.md) |  | 
**fake** | **Boolean** | Тип заказа:  * &#x60;false&#x60; — настоящий заказ покупателя.  * &#x60;true&#x60; — [тестовый](../../concepts/sandbox.md) заказ Маркета.  | 
**items** | [**[OrderItemDTO]**](OrderItemDTO.md) | Список товаров в заказе. | 
**subsidies** | [**[OrderSubsidyDTO]**](OrderSubsidyDTO.md) | Список субсидий по типам. | [optional] 
**delivery** | [**OrderDeliveryDTO**](OrderDeliveryDTO.md) |  | 
**buyer** | [**OrderBuyerDTO**](OrderBuyerDTO.md) |  | 
**notes** | **String** | Комментарий к заказу. | [optional] 
**taxSystem** | [**OrderTaxSystemType**](OrderTaxSystemType.md) |  | 
**cancelRequested** | **Boolean** | **Только для модели DBS**  Запрошена ли отмена.  | [optional] 
**expiryDate** | **String** |  | [optional] 


