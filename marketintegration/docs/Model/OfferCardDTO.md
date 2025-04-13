# # OfferCardDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) |
**mapping** | [**\OpenAPI\Client\Model\GetMappingDTO**](GetMappingDTO.md) |  | [optional]
**parameter_values** | [**\OpenAPI\Client\Model\ParameterValueDTO[]**](ParameterValueDTO.md) | Список характеристик с их значениями. | [optional]
**card_status** | [**\OpenAPI\Client\Model\OfferCardStatusType**](OfferCardStatusType.md) |  | [optional]
**content_rating** | **int** | Рейтинг карточки. | [optional]
**average_content_rating** | **int** | Средний рейтинг карточки у товаров той категории, которая указана в &#x60;marketCategoryId&#x60;. | [optional]
**content_rating_status** | [**\OpenAPI\Client\Model\OfferCardContentStatusType**](OfferCardContentStatusType.md) |  | [optional]
**recommendations** | [**\OpenAPI\Client\Model\OfferCardRecommendationDTO[]**](OfferCardRecommendationDTO.md) | Список рекомендаций к заполнению карточки.  Рекомендации Маркета помогают заполнять карточку так, чтобы покупателям было проще найти ваш товар и решиться на покупку. | [optional]
**errors** | [**\OpenAPI\Client\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Ошибки в контенте, препятствующие размещению товара на витрине. | [optional]
**warnings** | [**\OpenAPI\Client\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Связанные с контентом предупреждения, не препятствующие размещению товара на витрине. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
