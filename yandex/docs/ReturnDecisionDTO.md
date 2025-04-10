# Api.ReturnDecisionDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnItemId** | **Number** | Идентификатор товара в возврате. | [optional] 
**count** | **Number** | Количество единиц товара. | [optional] 
**comment** | **String** | Комментарий. | [optional] 
**reasonType** | [**ReturnDecisionReasonType**](ReturnDecisionReasonType.md) |  | [optional] 
**subreasonType** | [**ReturnDecisionSubreasonType**](ReturnDecisionSubreasonType.md) |  | [optional] 
**decisionType** | [**ReturnDecisionType**](ReturnDecisionType.md) |  | [optional] 
**refundAmount** | **Number** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте &#x60;amount&#x60;.  {% endnote %}  Сумма возврата в копейках.  | [optional] 
**amount** | [**CurrencyValueDTO**](CurrencyValueDTO.md) |  | [optional] 
**partnerCompensation** | **Number** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте &#x60;partnerCompensationAmount&#x60;.  {% endnote %}  Компенсация за обратную доставку в копейках.  | [optional] 
**partnerCompensationAmount** | [**CurrencyValueDTO**](CurrencyValueDTO.md) |  | [optional] 
**images** | **[String]** | Список хеш-кодов фотографий товара от покупателя. | [optional] 


