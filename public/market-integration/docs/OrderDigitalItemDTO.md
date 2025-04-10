# Api.OrderDigitalItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** | Идентификатор товара в заказе.  Он приходит в ответе на запрос [GET campaigns/{campaignId}/orders/{orderId}](../../reference/orders/getOrder.md) — параметр &#x60;id&#x60; в &#x60;items&#x60;.  | 
**code** | **String** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте &#x60;codes&#x60;. Совместное использование обоих параметров приведет к ошибке.  {% endnote %}  Сам ключ.  | [optional] 
**codes** | **[String]** | Ключи, относящиеся к товару. | [optional] 
**slip** | **String** | Инструкция по активации. | 
**activateTill** | **Date** | Дата, до которой нужно активировать ключи. Если ключи действуют бессрочно, укажите любую дату в отдаленном будущем.  Формат даты: &#x60;ГГГГ-ММ-ДД&#x60;.  | 


