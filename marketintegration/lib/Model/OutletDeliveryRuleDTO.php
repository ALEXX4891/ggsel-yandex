<?php
/**
 * OutletDeliveryRuleDTO
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OutletDeliveryRuleDTO Class Doc Comment
 *
 * @category Class
 * @description Информация об условиях доставки для данной точки продаж.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OutletDeliveryRuleDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OutletDeliveryRuleDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'min_delivery_days' => 'int',
        'max_delivery_days' => 'int',
        'delivery_service_id' => 'int',
        'order_before' => 'int',
        'price_free_pickup' => 'float',
        'unspecified_delivery_interval' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'min_delivery_days' => 'int32',
        'max_delivery_days' => 'int32',
        'delivery_service_id' => 'int64',
        'order_before' => 'int32',
        'price_free_pickup' => null,
        'unspecified_delivery_interval' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'min_delivery_days' => false,
        'max_delivery_days' => false,
        'delivery_service_id' => false,
        'order_before' => false,
        'price_free_pickup' => false,
        'unspecified_delivery_interval' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'min_delivery_days' => 'minDeliveryDays',
        'max_delivery_days' => 'maxDeliveryDays',
        'delivery_service_id' => 'deliveryServiceId',
        'order_before' => 'orderBefore',
        'price_free_pickup' => 'priceFreePickup',
        'unspecified_delivery_interval' => 'unspecifiedDeliveryInterval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_delivery_days' => 'setMinDeliveryDays',
        'max_delivery_days' => 'setMaxDeliveryDays',
        'delivery_service_id' => 'setDeliveryServiceId',
        'order_before' => 'setOrderBefore',
        'price_free_pickup' => 'setPriceFreePickup',
        'unspecified_delivery_interval' => 'setUnspecifiedDeliveryInterval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_delivery_days' => 'getMinDeliveryDays',
        'max_delivery_days' => 'getMaxDeliveryDays',
        'delivery_service_id' => 'getDeliveryServiceId',
        'order_before' => 'getOrderBefore',
        'price_free_pickup' => 'getPriceFreePickup',
        'unspecified_delivery_interval' => 'getUnspecifiedDeliveryInterval'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('min_delivery_days', $data ?? [], null);
        $this->setIfExists('max_delivery_days', $data ?? [], null);
        $this->setIfExists('delivery_service_id', $data ?? [], null);
        $this->setIfExists('order_before', $data ?? [], null);
        $this->setIfExists('price_free_pickup', $data ?? [], null);
        $this->setIfExists('unspecified_delivery_interval', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['min_delivery_days']) && ($this->container['min_delivery_days'] > 60)) {
            $invalidProperties[] = "invalid value for 'min_delivery_days', must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['min_delivery_days']) && ($this->container['min_delivery_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'min_delivery_days', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['max_delivery_days']) && ($this->container['max_delivery_days'] > 60)) {
            $invalidProperties[] = "invalid value for 'max_delivery_days', must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['max_delivery_days']) && ($this->container['max_delivery_days'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_delivery_days', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['order_before']) && ($this->container['order_before'] > 24)) {
            $invalidProperties[] = "invalid value for 'order_before', must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['order_before']) && ($this->container['order_before'] < 0)) {
            $invalidProperties[] = "invalid value for 'order_before', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets min_delivery_days
     *
     * @return int|null
     */
    public function getMinDeliveryDays()
    {
        return $this->container['min_delivery_days'];
    }

    /**
     * Sets min_delivery_days
     *
     * @param int|null $min_delivery_days Минимальный срок доставки товаров в точку продаж. Указан в рабочих днях.  Минимальное значение: `0` — доставка в день заказа.  Максимальное значение: `60`.  Допустимые сроки доставки (разница между `minDeliveryDays` и `maxDeliveryDays`) зависят от региона.  Для доставки по своему региону разница не должна превышать двух дней. Например, если `minDeliveryDays` равно 1, то для `maxDeliveryDays` допускаются значения от 1 до 3.  Для доставки в другие регионы:  * Если `minDeliveryDays` до 18 дней, разница не должна превышать четырех дней. Например, если `minDeliveryDays` равно 10, то для `maxDeliveryDays` допускаются значения от 10 до 14. * Если `minDeliveryDays` больше 18 дней, разница должна быть не больше чем в два раза. Например, если `minDeliveryDays` равно 21, то для `maxDeliveryDays` допускаются значения от 21 до 42.  Обязательный параметр, если `type=\"DEPOT\"` или `type=\"MIXED\"`.  Взаимоисключающий с параметром `unspecifiedDeliveryInterval`.
     *
     * @return self
     */
    public function setMinDeliveryDays($min_delivery_days)
    {
        if (is_null($min_delivery_days)) {
            throw new \InvalidArgumentException('non-nullable min_delivery_days cannot be null');
        }

        if (($min_delivery_days > 60)) {
            throw new \InvalidArgumentException('invalid value for $min_delivery_days when calling OutletDeliveryRuleDTO., must be smaller than or equal to 60.');
        }
        if (($min_delivery_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $min_delivery_days when calling OutletDeliveryRuleDTO., must be bigger than or equal to 0.');
        }

        $this->container['min_delivery_days'] = $min_delivery_days;

        return $this;
    }

    /**
     * Gets max_delivery_days
     *
     * @return int|null
     */
    public function getMaxDeliveryDays()
    {
        return $this->container['max_delivery_days'];
    }

    /**
     * Sets max_delivery_days
     *
     * @param int|null $max_delivery_days Максимальный срок доставки товаров в точку продаж. Указан в рабочих днях.  Минимальное значение: `0` — доставка в день заказа.  Максимальное значение: `60`.  Допустимые сроки доставки (разница между `minDeliveryDays` и `maxDeliveryDays`) зависят от региона.  Для доставки по своему региону разница не должна превышать двух дней. Например, если `minDeliveryDays` равно 1, то для `maxDeliveryDays` допускаются значения от 1 до 3.  Для доставки в другие регионы:  * Если `minDeliveryDays` до 18 дней, разница не должна превышать четырех дней. Например, если `minDeliveryDays` равно 10, то для `maxDeliveryDays` допускаются значения от 10 до 14. * Если `minDeliveryDays` больше 18 дней, разница должна быть не больше чем в два раза. Например, если `minDeliveryDays` равно 21, то для `maxDeliveryDays` допускаются значения от 21 до 42.  Обязательный параметр, если `type=\"DEPOT\"` или `type=\"MIXED\"`.  Взаимоисключающий с параметром `unspecifiedDeliveryInterval`.
     *
     * @return self
     */
    public function setMaxDeliveryDays($max_delivery_days)
    {
        if (is_null($max_delivery_days)) {
            throw new \InvalidArgumentException('non-nullable max_delivery_days cannot be null');
        }

        if (($max_delivery_days > 60)) {
            throw new \InvalidArgumentException('invalid value for $max_delivery_days when calling OutletDeliveryRuleDTO., must be smaller than or equal to 60.');
        }
        if (($max_delivery_days < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_delivery_days when calling OutletDeliveryRuleDTO., must be bigger than or equal to 0.');
        }

        $this->container['max_delivery_days'] = $max_delivery_days;

        return $this;
    }

    /**
     * Gets delivery_service_id
     *
     * @return int|null
     */
    public function getDeliveryServiceId()
    {
        return $this->container['delivery_service_id'];
    }

    /**
     * Sets delivery_service_id
     *
     * @param int|null $delivery_service_id Идентификатор службы доставки товаров в точку продаж.  Информацию о службе доставки можно получить с помощью запроса [GET delivery/services](../../reference/orders/getDeliveryServices.md).
     *
     * @return self
     */
    public function setDeliveryServiceId($delivery_service_id)
    {
        if (is_null($delivery_service_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_service_id cannot be null');
        }
        $this->container['delivery_service_id'] = $delivery_service_id;

        return $this;
    }

    /**
     * Gets order_before
     *
     * @return int|null
     */
    public function getOrderBefore()
    {
        return $this->container['order_before'];
    }

    /**
     * Sets order_before
     *
     * @param int|null $order_before Час, до которого покупателю нужно сделать заказ, чтобы он был доставлен в точку продаж в сроки от `minDeliveryDays` до `maxDeliveryDays`.  Если покупатель оформит заказ после указанного часа, он будет доставлен в сроки от `minDeliveryDays` + 1 рабочий день до `maxDeliveryDays` + 1 рабочий день.  Значение по умолчанию: `24`.
     *
     * @return self
     */
    public function setOrderBefore($order_before)
    {
        if (is_null($order_before)) {
            throw new \InvalidArgumentException('non-nullable order_before cannot be null');
        }

        if (($order_before > 24)) {
            throw new \InvalidArgumentException('invalid value for $order_before when calling OutletDeliveryRuleDTO., must be smaller than or equal to 24.');
        }
        if (($order_before < 0)) {
            throw new \InvalidArgumentException('invalid value for $order_before when calling OutletDeliveryRuleDTO., must be bigger than or equal to 0.');
        }

        $this->container['order_before'] = $order_before;

        return $this;
    }

    /**
     * Gets price_free_pickup
     *
     * @return float|null
     */
    public function getPriceFreePickup()
    {
        return $this->container['price_free_pickup'];
    }

    /**
     * Sets price_free_pickup
     *
     * @param float|null $price_free_pickup Цена на товар, начиная с которой действует бесплатный самовывоз товара из точки продаж.
     *
     * @return self
     */
    public function setPriceFreePickup($price_free_pickup)
    {
        if (is_null($price_free_pickup)) {
            throw new \InvalidArgumentException('non-nullable price_free_pickup cannot be null');
        }
        $this->container['price_free_pickup'] = $price_free_pickup;

        return $this;
    }

    /**
     * Gets unspecified_delivery_interval
     *
     * @return bool|null
     */
    public function getUnspecifiedDeliveryInterval()
    {
        return $this->container['unspecified_delivery_interval'];
    }

    /**
     * Sets unspecified_delivery_interval
     *
     * @param bool|null $unspecified_delivery_interval Признак доставки товаров в точку продаж на заказ.  Признак выставлен, если:  * точный срок доставки в точку продаж заранее неизвестен (например, если магазин собирает несколько заказов для отправки в точку или населенный пункт); * все товары изготавливаются или поставляются на заказ.  Возможные значения: * `true` — товары доставляются в точку продаж на заказ.  Параметр указывается только со значением `true`.  Взаимоисключающий с параметрами `minDeliveryDays` и `maxDeliveryDays`.
     *
     * @return self
     */
    public function setUnspecifiedDeliveryInterval($unspecified_delivery_interval)
    {
        if (is_null($unspecified_delivery_interval)) {
            throw new \InvalidArgumentException('non-nullable unspecified_delivery_interval cannot be null');
        }
        $this->container['unspecified_delivery_interval'] = $unspecified_delivery_interval;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


