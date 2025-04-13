# # OrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор заказа. |
**status** | [**\OpenAPI\Client\Model\OrderStatusType**](OrderStatusType.md) |  |
**substatus** | [**\OpenAPI\Client\Model\OrderSubstatusType**](OrderSubstatusType.md) |  |
**creation_date** | **string** |  |
**updated_at** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyType**](CurrencyType.md) |  |
**items_total** | **float** | Платеж покупателя. |
**delivery_total** | **float** | Стоимость доставки. |
**buyer_items_total** | **float** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя после применения скидок и без учета стоимости доставки. | [optional]
**buyer_total** | **float** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя после применения скидок и с учетом стоимости доставки. | [optional]
**buyer_items_total_before_discount** | **float** | Стоимость всех товаров в заказе в валюте покупателя без учета стоимости доставки и до применения скидок по:  * акциям; * купонам; * промокодам. |
**buyer_total_before_discount** | **float** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя до применения скидок и с учетом стоимости доставки (&#x60;buyerItemsTotalBeforeDiscount&#x60; + стоимость доставки). | [optional]
**payment_type** | [**\OpenAPI\Client\Model\OrderPaymentType**](OrderPaymentType.md) |  |
**payment_method** | [**\OpenAPI\Client\Model\OrderPaymentMethodType**](OrderPaymentMethodType.md) |  |
**fake** | **bool** | Тип заказа:  * &#x60;false&#x60; — настоящий заказ покупателя.  * &#x60;true&#x60; — [тестовый](../../concepts/sandbox.md) заказ Маркета. |
**items** | [**\OpenAPI\Client\Model\OrderItemDTO[]**](OrderItemDTO.md) | Список товаров в заказе. |
**subsidies** | [**\OpenAPI\Client\Model\OrderSubsidyDTO[]**](OrderSubsidyDTO.md) | Список субсидий по типам. | [optional]
**delivery** | [**\OpenAPI\Client\Model\OrderDeliveryDTO**](OrderDeliveryDTO.md) |  |
**buyer** | [**\OpenAPI\Client\Model\OrderBuyerDTO**](OrderBuyerDTO.md) |  |
**notes** | **string** | Комментарий к заказу. | [optional]
**tax_system** | [**\OpenAPI\Client\Model\OrderTaxSystemType**](OrderTaxSystemType.md) |  |
**cancel_requested** | **bool** | **Только для модели DBS**  Запрошена ли отмена. | [optional]
**expiry_date** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
