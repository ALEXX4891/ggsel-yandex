# # GenerateUnitedReturnsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_id** | **int** | Идентификатор кабинета. |
**date_from** | **\DateTime** | Начало периода, включительно. |
**date_to** | **\DateTime** | Конец периода, включительно. |
**campaign_ids** | **int[]** | Список магазинов, которые нужны в отчете. | [optional]
**return_type** | [**\OpenAPI\Client\Model\ReturnType**](ReturnType.md) |  | [optional]
**return_status_types** | [**\OpenAPI\Client\Model\ReturnShipmentStatusType[]**](ReturnShipmentStatusType.md) | Статусы передачи возвратов, которые нужны в отчете.  Если их не указать, вернется информация по всем возвратам. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
