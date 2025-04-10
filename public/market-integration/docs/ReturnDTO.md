# Api.ReturnDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** | Идентификатор невыкупа или возврата. | 
**orderId** | **Number** | Номер заказа. | 
**creationDate** | **Date** | Дата создания невыкупа или возврата клиентом.  Формат даты: ISO 8601 со смещением относительно UTC.  | [optional] 
**updateDate** | **Date** | Дата обновления невыкупа или возврата.  Формат даты: ISO 8601 со смещением относительно UTC.  | [optional] 
**refundStatus** | [**RefundStatusType**](RefundStatusType.md) |  | [optional] 
**logisticPickupPoint** | [**LogisticPickupPointDTO**](LogisticPickupPointDTO.md) |  | [optional] 
**shipmentRecipientType** | [**RecipientType**](RecipientType.md) |  | [optional] 
**shipmentStatus** | [**ReturnShipmentStatusType**](ReturnShipmentStatusType.md) |  | [optional] 
**refundAmount** | **Number** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте &#x60;amount&#x60;.  {% endnote %}  Сумма возврата в копейках.  | [optional] 
**amount** | [**CurrencyValueDTO**](CurrencyValueDTO.md) |  | [optional] 
**items** | [**[ReturnItemDTO]**](ReturnItemDTO.md) | Список товаров в невыкупе или возврате. | 
**returnType** | [**ReturnType**](ReturnType.md) |  | 
**fastReturn** | **Boolean** | Используется ли опция **Быстрый возврат денег за дешевый брак**.  Актуально только для &#x60;returnType&#x3D;RETURN&#x60;.  | [optional] 


