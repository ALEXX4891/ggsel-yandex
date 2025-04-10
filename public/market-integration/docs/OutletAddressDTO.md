# Api.OutletAddressDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**regionId** | **Number** | Идентификатор региона.  Идентификатор можно получить c помощью запроса [GET regions](../../reference/regions/searchRegionsByName.md).  {% note alert \&quot;Типы регионов при создании и редактировании точек продаж\&quot; %}  Указывайте только регионы типов &#x60;TOWN&#x60; (город), &#x60;CITY&#x60; (крупный город) и &#x60;REPUBLIC_AREA&#x60; (район субъекта федерации). Тип региона указан в выходных параметрах &#x60;type&#x60; запросов [GET regions](../../reference/regions/searchRegionsByName.md) и [GET regions/{regionId}](../../reference/regions/searchRegionsById.md).  {% endnote %}  | 
**street** | **String** | Улица. | [optional] 
**number** | **String** | Номер дома. | [optional] 
**building** | **String** | Номер строения. | [optional] 
**estate** | **String** | Номер владения. | [optional] 
**block** | **String** | Номер корпуса. | [optional] 
**additional** | **String** | Дополнительная информация. | [optional] 
**km** | **Number** | Порядковый номер километра дороги, на котором располагается точка продаж, если отсутствует улица. | [optional] 
**city** | **String** | {% note warning \&quot;Этот параметр устарел\&quot; %}  Не используйте его.  В ответах города и населенные пункты возвращаются в параметре &#x60;regionId&#x60;.  {% endnote %}  | [optional] 


