# Api.OrderDeliveryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Идентификатор доставки, присвоенный магазином.  Указывается, только если магазин передал данный идентификатор в ответе на запрос методом &#x60;POST cart&#x60;.  | [optional] 
**type** | [**OrderDeliveryType**](OrderDeliveryType.md) |  | 
**serviceName** | **String** | Наименование службы доставки. | 
**price** | **Number** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Стоимость доставки смотрите в параметре &#x60;deliveryTotal&#x60;.  {% endnote %}  Стоимость доставки в валюте заказа.  | [optional] 
**deliveryPartnerType** | [**OrderDeliveryPartnerType**](OrderDeliveryPartnerType.md) |  | 
**courier** | [**OrderCourierDTO**](OrderCourierDTO.md) |  | [optional] 
**dates** | [**OrderDeliveryDatesDTO**](OrderDeliveryDatesDTO.md) |  | 
**region** | [**RegionDTO**](RegionDTO.md) |  | [optional] 
**address** | [**OrderDeliveryAddressDTO**](OrderDeliveryAddressDTO.md) |  | [optional] 
**vat** | [**OrderVatType**](OrderVatType.md) |  | [optional] 
**deliveryServiceId** | **Number** | Идентификатор службы доставки. | 
**liftType** | [**OrderLiftType**](OrderLiftType.md) |  | [optional] 
**liftPrice** | **Number** | Стоимость подъема на этаж. | [optional] 
**outletCode** | **String** | Идентификатор пункта самовывоза, присвоенный магазином. | [optional] 
**outletStorageLimitDate** | **String** | Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  | [optional] 
**dispatchType** | [**OrderDeliveryDispatchType**](OrderDeliveryDispatchType.md) |  | [optional] 
**tracks** | [**[OrderTrackDTO]**](OrderTrackDTO.md) | Информация для отслеживания перемещений посылки. | [optional] 
**shipments** | [**[OrderShipmentDTO]**](OrderShipmentDTO.md) | Информация о посылках. | [optional] 
**estimated** | **Boolean** | Приблизительная ли дата доставки. | [optional] 
**eacType** | [**OrderDeliveryEacType**](OrderDeliveryEacType.md) |  | [optional] 
**eacCode** | **String** | Код подтверждения ЭАПП (для типа &#x60;MERCHANT_TO_COURIER&#x60;).  | [optional] 


