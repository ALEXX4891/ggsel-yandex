# # GenerateUnitedMarketplaceServicesReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_id** | **int** | Идентификатор кабинета. |
**date_time_from** | **\DateTime** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Начало периода, включительно. | [optional]
**date_time_to** | **\DateTime** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  {% endnote %}  Конец периода, включительно. Максимальный период — 3 месяца. | [optional]
**date_from** | **\DateTime** | Начало периода, включительно. | [optional]
**date_to** | **\DateTime** | Конец периода, включительно. Максимальный период — 3 месяца. | [optional]
**year_from** | **int** | Начальный год формирования акта. | [optional]
**month_from** | **int** | Начальный номер месяца формирования акта. | [optional]
**year_to** | **int** | Конечный год формирования акта. | [optional]
**month_to** | **int** | Конечный номер месяца формирования акта. | [optional]
**placement_programs** | [**\OpenAPI\Client\Model\PlacementType[]**](PlacementType.md) | Список моделей, которые нужны в отчете. | [optional]
**inns** | **string[]** | Список ИНН, которые нужны в отчете. | [optional]
**campaign_ids** | **int[]** | Список магазинов, которые нужны в отчете. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
