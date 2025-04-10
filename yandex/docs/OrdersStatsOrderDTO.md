# Api.OrdersStatsOrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** | Идентификатор заказа. | [optional] 
**creationDate** | **Date** | Дата создания заказа.  Формат даты: &#x60;ГГГГ-ММ-ДД&#x60;.  | [optional] 
**statusUpdateDate** | **Date** | Дата и время, когда статус заказа был изменен в последний раз.  Формат даты и времени: ISO 8601. Например, &#x60;2017-11-21T00:00:00&#x60;. Часовой пояс — UTC+03:00 (Москва).  | [optional] 
**status** | [**OrderStatsStatusType**](OrderStatsStatusType.md) |  | [optional] 
**partnerOrderId** | **String** | Идентификатор заказа в информационной системе магазина. | [optional] 
**paymentType** | [**OrdersStatsOrderPaymentType**](OrdersStatsOrderPaymentType.md) |  | [optional] 
**fake** | **Boolean** | Тип заказа:  * &#x60;false&#x60; — настоящий заказ покупателя.  * &#x60;true&#x60; — [тестовый](../../concepts/sandbox.md) заказ Маркета.  | [optional] 
**deliveryRegion** | [**OrdersStatsDeliveryRegionDTO**](OrdersStatsDeliveryRegionDTO.md) |  | [optional] 
**items** | [**[OrdersStatsItemDTO]**](OrdersStatsItemDTO.md) | Список товаров в заказе после возможных изменений.  Информация о доставке заказа добавляется отдельным элементом в массиве &#x60;items&#x60;— параметр &#x60;offerName&#x60; со значением &#x60;Доставка&#x60;.  | 
**initialItems** | [**[OrdersStatsItemDTO]**](OrdersStatsItemDTO.md) | Список товаров в заказе до изменений. | [optional] 
**payments** | [**[OrdersStatsPaymentDTO]**](OrdersStatsPaymentDTO.md) | Информация о денежных переводах по заказу.  Может вернуться пустым, если нет данных о переводах.  | 
**commissions** | [**[OrdersStatsCommissionDTO]**](OrdersStatsCommissionDTO.md) | Информация о стоимости услуг. | 
**subsidies** | [**[OrdersStatsSubsidyDTO]**](OrdersStatsSubsidyDTO.md) | Начисление баллов, которые используются для уменьшения стоимости размещения, и их списание в случае невыкупа или возврата. | [optional] 
**currency** | [**CurrencyType**](CurrencyType.md) |  | 


