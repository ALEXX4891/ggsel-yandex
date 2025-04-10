# Api.GenerateUnitedReturnsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**businessId** | **Number** | Идентификатор кабинета. | 
**dateFrom** | **Date** | Начало периода, включительно. | 
**dateTo** | **Date** | Конец периода, включительно. | 
**campaignIds** | **[Number]** | Список магазинов, которые нужны в отчете. | [optional] 
**returnType** | [**ReturnType**](ReturnType.md) |  | [optional] 
**returnStatusTypes** | [**[ReturnShipmentStatusType]**](ReturnShipmentStatusType.md) | Статусы передачи возвратов, которые нужны в отчете.  Если их не указать, вернется информация по всем возвратам.  | [optional] 


