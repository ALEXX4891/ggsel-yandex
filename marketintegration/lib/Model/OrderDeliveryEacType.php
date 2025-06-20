<?php
/**
 * OrderDeliveryEacType
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
 * OrderDeliveryEacType Class Doc Comment
 *
 * @category Class
 * @description Тип кода подтверждения ЭАПП:  * &#x60;MERCHANT_TO_COURIER&#x60; (временно не возвращается) — продавец передает код курьеру для получения невыкупа.  * &#x60;COURIER_TO_MERCHANT&#x60; — курьер передает код продавцу для получения заказа.  * &#x60;CHECKING_BY_MERCHANT&#x60; — продавец проверяет код на своей стороне.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderDeliveryEacType
{
    /**
     * Possible values of this enum
     */
    public const MERCHANT_TO_COURIER = 'MERCHANT_TO_COURIER';

    public const COURIER_TO_MERCHANT = 'COURIER_TO_MERCHANT';

    public const CHECKING_BY_MERCHANT = 'CHECKING_BY_MERCHANT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MERCHANT_TO_COURIER,
            self::COURIER_TO_MERCHANT,
            self::CHECKING_BY_MERCHANT
        ];
    }
}


