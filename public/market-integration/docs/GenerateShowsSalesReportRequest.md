# Api.GenerateShowsSalesReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**businessId** | **Number** | Идентификатор кабинета.  Указывается, если нужно составить отчет по всем магазинам в кабинете. В запросе обязательно должен быть либо &#x60;businessID&#x60;, либо &#x60;campaignId&#x60;, но не оба сразу.  | [optional] 
**campaignId** | **Number** | Идентификатор кампании.  Указывается, если нужно составить отчет по конкретному магазину. В запросе обязательно должен быть либо &#x60;businessID&#x60;, либо &#x60;campaignId&#x60;, но не оба сразу.  | [optional] 
**dateFrom** | **Date** | Начало периода, включительно. | 
**dateTo** | **Date** | Конец периода, включительно. | 
**grouping** | [**ShowsSalesGroupingType**](ShowsSalesGroupingType.md) |  | 


