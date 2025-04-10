# Api.OrdersStatsItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offerName** | **String** | Название товара. | [optional] 
**marketSku** | **Number** | SKU на Маркете. | [optional] 
**shopSku** | **String** | Ваш SKU — идентификатор товара в вашей системе.  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields)  | [optional] 
**count** | **Number** | Количество единиц товара с учетом удаленных единиц.  Если из заказа удалены все единицы товара, он попадет только в список &#x60;initialItems&#x60;.  | [optional] 
**prices** | [**[OrdersStatsPriceDTO]**](OrdersStatsPriceDTO.md) | Цена или скидки на товар. | [optional] 
**warehouse** | [**OrdersStatsWarehouseDTO**](OrdersStatsWarehouseDTO.md) |  | [optional] 
**details** | [**[OrdersStatsDetailsDTO]**](OrdersStatsDetailsDTO.md) | Информация об удалении товара из заказа. | [optional] 
**cisList** | **[String]** | Список кодов идентификации товара в системе [«Честный ЗНАК»](https://честныйзнак.рф/) или [«ASL BELGISI»](https://aslbelgisi.uz) (для продавцов Market Yandex Go). | [optional] 
**initialCount** | **Number** | Первоначальное количество единиц товара. | [optional] 
**bidFee** | **Number** | Списанная ставка ближайшего конкурента.  Указывается в процентах от стоимости товара и умножается на 100. Например, ставка 5% обозначается как 500.  | [optional] 
**cofinanceThreshold** | **Number** | Порог для скидок с Маркетом на момент оформления заказа. [Что это такое?](https://yandex.ru/support/marketplace/marketing/smart-pricing.html#sponsored-discounts)  Точность — два знака после запятой.  | [optional] 
**cofinanceValue** | **Number** | Скидка с Маркетом. [Что это такое?](https://yandex.ru/support/marketplace/marketing/smart-pricing.html#sponsored-discounts)  Точность — два знака после запятой.  | [optional] 


