# # ReturnDecisionDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_item_id** | **int** | Идентификатор товара в возврате. | [optional]
**count** | **int** | Количество единиц товара. | [optional]
**comment** | **string** | Комментарий. | [optional]
**reason_type** | [**\OpenAPI\Client\Model\ReturnDecisionReasonType**](ReturnDecisionReasonType.md) |  | [optional]
**subreason_type** | [**\OpenAPI\Client\Model\ReturnDecisionSubreasonType**](ReturnDecisionSubreasonType.md) |  | [optional]
**decision_type** | [**\OpenAPI\Client\Model\ReturnDecisionType**](ReturnDecisionType.md) |  | [optional]
**refund_amount** | **int** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте &#x60;amount&#x60;.  {% endnote %}  Сумма возврата в копейках. | [optional]
**amount** | [**\OpenAPI\Client\Model\CurrencyValueDTO**](CurrencyValueDTO.md) |  | [optional]
**partner_compensation** | **int** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Вместо него используйте &#x60;partnerCompensationAmount&#x60;.  {% endnote %}  Компенсация за обратную доставку в копейках. | [optional]
**partner_compensation_amount** | [**\OpenAPI\Client\Model\CurrencyValueDTO**](CurrencyValueDTO.md) |  | [optional]
**images** | **string[]** | Список хеш-кодов фотографий товара от покупателя. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
