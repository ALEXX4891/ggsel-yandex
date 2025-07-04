<?php
/**
 * OfferContentErrorType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OfferContentErrorType Class Doc Comment
 *
 * @category Class
 * @description Типы ошибок и предупреждений:  * &#x60;OFFER_NOT_FOUND&#x60; — такого товара нет в каталоге. * &#x60;UNKNOWN_CATEGORY&#x60; — указана неизвестная категория. * &#x60;INVALID_CATEGORY&#x60; — указана нелистовая категория. Укажите ту, которая не имеет дочерних категорий. * &#x60;UNKNOWN_PARAMETER&#x60; — передана характеристика, которой нет среди характеристик категории. * &#x60;UNEXPECTED_BOOLEAN_VALUE&#x60; — вместо boolean-значения передано что-то другое. * &#x60;NUMBER_FORMAT&#x60; — передана строка, не обозначающая число, вместо числа. * &#x60;INVALID_UNIT_ID&#x60; — передана единица измерения, недопустимая для характеристики. * &#x60;INVALID_GROUP_ID_LENGTH&#x60; — в названии превышено допустимое значение символов — 255. * &#x60;INVALID_GROUP_ID_CHARACTERS&#x60; — переданы [недопустимые символы](*ascii-code).  Проверить, какие категорийные характеристики доступны для заданной категории, и получить их настройки можно с помощью запроса [POST category/{categoryId}/parameters](../../reference/content/getCategoryContentParameters).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferContentErrorType
{
    /**
     * Possible values of this enum
     */
    public const OFFER_NOT_FOUND = 'OFFER_NOT_FOUND';

    public const UNKNOWN_CATEGORY = 'UNKNOWN_CATEGORY';

    public const INVALID_CATEGORY = 'INVALID_CATEGORY';

    public const UNKNOWN_PARAMETER = 'UNKNOWN_PARAMETER';

    public const UNEXPECTED_BOOLEAN_VALUE = 'UNEXPECTED_BOOLEAN_VALUE';

    public const NUMBER_FORMAT = 'NUMBER_FORMAT';

    public const INVALID_UNIT_ID = 'INVALID_UNIT_ID';

    public const INVALID_GROUP_ID_LENGTH = 'INVALID_GROUP_ID_LENGTH';

    public const INVALID_GROUP_ID_CHARACTERS = 'INVALID_GROUP_ID_CHARACTERS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OFFER_NOT_FOUND,
            self::UNKNOWN_CATEGORY,
            self::INVALID_CATEGORY,
            self::UNKNOWN_PARAMETER,
            self::UNEXPECTED_BOOLEAN_VALUE,
            self::NUMBER_FORMAT,
            self::INVALID_UNIT_ID,
            self::INVALID_GROUP_ID_LENGTH,
            self::INVALID_GROUP_ID_CHARACTERS
        ];
    }
}


