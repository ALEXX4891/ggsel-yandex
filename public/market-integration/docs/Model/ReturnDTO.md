# # ReturnDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор невыкупа или возврата. |
**order_id** | **int** | Номер заказа. |
**creation_date** | **\DateTime** | Дата создания невыкупа или возврата клиентом.  Формат даты: ISO 8601 со смещением относительно UTC. | [optional]
**update_date** | **\DateTime** | Дата обновления невыкупа или возврата.  Формат даты: ISO 8601 со смещением относительно UTC. | [optional]
**refund_status** | [**\OpenAPI\Client\Model\RefundStatusType**](RefundStatusType.md) |  | [optional]
**logistic_pickup_point** | [**\OpenAPI\Client\Model\LogisticPickupPointDTO**](LogisticPickupPointDTO.md) |  | [optional]
**shipment_recipient_type** | [**\OpenAPI\Client\Model\RecipientType**](RecipientType.md) |  | [optional]
**shipment_status** | [**\OpenAPI\Client\Model\ReturnShipmentStatusType**](ReturnShipmentStatusType.md) |  | [optional]
**refund_amount** | **int** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте &#x60;amount&#x60;.  {% endnote %}  Сумма возврата в копейках. | [optional]
**amount** | [**\OpenAPI\Client\Model\CurrencyValueDTO**](CurrencyValueDTO.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\ReturnItemDTO[]**](ReturnItemDTO.md) | Список товаров в невыкупе или возврате. |
**return_type** | [**\OpenAPI\Client\Model\ReturnType**](ReturnType.md) |  |
**fast_return** | **bool** | Используется ли опция **Быстрый возврат денег за дешевый брак**.  Актуально только для &#x60;returnType&#x3D;RETURN&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
