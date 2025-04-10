# Api.OrderItemInstanceModificationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** | Идентификатор товара в заказе.  Он приходит в ответе на запрос [GET campaigns/{campaignId}/orders/{orderId}](../../reference/orders/getOrder.md) — параметр &#x60;id&#x60; в &#x60;items&#x60;.  | 
**instances** | [**[BriefOrderItemInstanceDTO]**](BriefOrderItemInstanceDTO.md) | Список кодов маркировки единиц товара.  | 


