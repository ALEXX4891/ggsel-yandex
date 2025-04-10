# Api.GoodsFeedbackDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feedbackId** | **Number** | Идентификатор отзыва.  | 
**createdAt** | **Date** | Дата и время создания отзыва. | 
**needReaction** | **Boolean** | Прочитан ли отзыв.  Принимает значение &#x60;false&#x60;, если магазин:  * Прочитал отзыв в кабинете продавца на Маркете. * Отметил отзыв прочитанным — метод [POST businesses/{businessId}/goods-feedback/skip-reaction](../../reference/goods-feedback/skipGoodsFeedbacksReaction.md). * Оставил комментарий к отзыву — метод [POST businesses/{businessId}/goods-feedback/comments/update](../../reference/goods-feedback/updateGoodsFeedbackComment.md).  | 
**identifiers** | [**GoodsFeedbackIdentifiersDTO**](GoodsFeedbackIdentifiersDTO.md) |  | 
**author** | **String** | Имя автора отзыва. | [optional] 
**description** | [**GoodsFeedbackDescriptionDTO**](GoodsFeedbackDescriptionDTO.md) |  | [optional] 
**media** | [**GoodsFeedbackMediaDTO**](GoodsFeedbackMediaDTO.md) |  | [optional] 
**statistics** | [**GoodsFeedbackStatisticsDTO**](GoodsFeedbackStatisticsDTO.md) |  | 


