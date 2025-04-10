# Api.ShipmentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **Number** | Идентификатор отгрузки. | 
**planIntervalFrom** | **Date** | Начало планового интервала отгрузки.  Формат даты: ISO 8601 со смещением относительно UTC.  | 
**planIntervalTo** | **Date** | Конец планового интервала отгрузки.  Формат даты: ISO 8601 со смещением относительно UTC.  | 
**shipmentType** | [**ShipmentType**](ShipmentType.md) |  | [optional] 
**warehouse** | [**PartnerShipmentWarehouseDTO**](PartnerShipmentWarehouseDTO.md) |  | [optional] 
**warehouseTo** | [**PartnerShipmentWarehouseDTO**](PartnerShipmentWarehouseDTO.md) |  | [optional] 
**externalId** | **String** | Идентификатор отгрузки в вашей системе. Если вы еще не передавали идентификатор, вернется идентификатор из параметра &#x60;id&#x60;. | [optional] 
**deliveryService** | [**DeliveryServiceDTO**](DeliveryServiceDTO.md) |  | [optional] 
**palletsCount** | [**PalletsCountDTO**](PalletsCountDTO.md) |  | [optional] 
**orderIds** | **[Number]** | Идентификаторы заказов в отгрузке. | 
**draftCount** | **Number** | Количество заказов, которое Маркет запланировал к отгрузке. | 
**plannedCount** | **Number** | Количество заказов, которое Маркет подтвердил к отгрузке. | 
**factCount** | **Number** | Количество заказов, принятых в сортировочном центре или пункте приема. | 
**signature** | [**SignatureDTO**](SignatureDTO.md) |  | 
**currentStatus** | [**ShipmentStatusChangeDTO**](ShipmentStatusChangeDTO.md) |  | [optional] 
**availableActions** | [**[ShipmentActionType]**](ShipmentActionType.md) | Доступные действия над отгрузкой. | 


