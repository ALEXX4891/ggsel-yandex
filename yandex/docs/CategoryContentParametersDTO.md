# Api.CategoryContentParametersDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categoryId** | **Number** | Идентификатор категории на Маркете.  При изменении категории убедитесь, что характеристики товара и их значения в параметре &#x60;parameterValues&#x60; вы передаете для новой категории.  Список категорий Маркета можно получить с помощью запроса  [POST categories/tree](../../reference/categories/getCategoriesTree.md).  | 
**parameters** | [**[CategoryParameterDTO]**](CategoryParameterDTO.md) | Список характеристик. | [optional] 


