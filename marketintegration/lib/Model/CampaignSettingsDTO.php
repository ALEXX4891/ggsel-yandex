<?php
/**
 * CampaignSettingsDTO
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
 * CampaignSettingsDTO Class Doc Comment
 *
 * @category Class
 * @description Настройки магазина.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignSettingsDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignSettingsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country_region' => 'int',
        'shop_name' => 'string',
        'show_in_context' => 'bool',
        'show_in_premium' => 'bool',
        'use_open_stat' => 'bool',
        'local_region' => '\OpenAPI\Client\Model\CampaignSettingsLocalRegionDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country_region' => 'int64',
        'shop_name' => null,
        'show_in_context' => null,
        'show_in_premium' => null,
        'use_open_stat' => null,
        'local_region' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country_region' => false,
        'shop_name' => false,
        'show_in_context' => false,
        'show_in_premium' => false,
        'use_open_stat' => false,
        'local_region' => false
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
        'country_region' => 'countryRegion',
        'shop_name' => 'shopName',
        'show_in_context' => 'showInContext',
        'show_in_premium' => 'showInPremium',
        'use_open_stat' => 'useOpenStat',
        'local_region' => 'localRegion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_region' => 'setCountryRegion',
        'shop_name' => 'setShopName',
        'show_in_context' => 'setShowInContext',
        'show_in_premium' => 'setShowInPremium',
        'use_open_stat' => 'setUseOpenStat',
        'local_region' => 'setLocalRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_region' => 'getCountryRegion',
        'shop_name' => 'getShopName',
        'show_in_context' => 'getShowInContext',
        'show_in_premium' => 'getShowInPremium',
        'use_open_stat' => 'getUseOpenStat',
        'local_region' => 'getLocalRegion'
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
        $this->setIfExists('country_region', $data ?? [], null);
        $this->setIfExists('shop_name', $data ?? [], null);
        $this->setIfExists('show_in_context', $data ?? [], null);
        $this->setIfExists('show_in_premium', $data ?? [], null);
        $this->setIfExists('use_open_stat', $data ?? [], null);
        $this->setIfExists('local_region', $data ?? [], null);
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
     * Gets country_region
     *
     * @return int|null
     */
    public function getCountryRegion()
    {
        return $this->container['country_region'];
    }

    /**
     * Sets country_region
     *
     * @param int|null $country_region Идентификатор региона, в котором находится магазин.
     *
     * @return self
     */
    public function setCountryRegion($country_region)
    {
        if (is_null($country_region)) {
            throw new \InvalidArgumentException('non-nullable country_region cannot be null');
        }
        $this->container['country_region'] = $country_region;

        return $this;
    }

    /**
     * Gets shop_name
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     *
     * @param string|null $shop_name Наименование магазина на Яндекс Маркете. Если наименование отсутствует, значение параметра выводится — `null`.
     *
     * @return self
     */
    public function setShopName($shop_name)
    {
        if (is_null($shop_name)) {
            throw new \InvalidArgumentException('non-nullable shop_name cannot be null');
        }
        $this->container['shop_name'] = $shop_name;

        return $this;
    }

    /**
     * Gets show_in_context
     *
     * @return bool|null
     */
    public function getShowInContext()
    {
        return $this->container['show_in_context'];
    }

    /**
     * Sets show_in_context
     *
     * @param bool|null $show_in_context Признак размещения магазина на сайтах партнеров Яндекс Дистрибуции. Возможные значения: * `false` — магазин не размещен на сайтах партнеров Яндекс Дистрибуции. * `true` — магазин размещен на сайтах партнеров Яндекс Дистрибуции.
     *
     * @return self
     */
    public function setShowInContext($show_in_context)
    {
        if (is_null($show_in_context)) {
            throw new \InvalidArgumentException('non-nullable show_in_context cannot be null');
        }
        $this->container['show_in_context'] = $show_in_context;

        return $this;
    }

    /**
     * Gets show_in_premium
     *
     * @return bool|null
     */
    public function getShowInPremium()
    {
        return $this->container['show_in_premium'];
    }

    /**
     * Sets show_in_premium
     *
     * @param bool|null $show_in_premium Признак показа предложений магазина в блоке над результатами поиска (cпецразмещение). Возможные значения: * `false` — предложения не показываются в блоке cпецразмещения. * `true` — предложения показываются в блоке cпецразмещения.
     *
     * @return self
     */
    public function setShowInPremium($show_in_premium)
    {
        if (is_null($show_in_premium)) {
            throw new \InvalidArgumentException('non-nullable show_in_premium cannot be null');
        }
        $this->container['show_in_premium'] = $show_in_premium;

        return $this;
    }

    /**
     * Gets use_open_stat
     *
     * @return bool|null
     */
    public function getUseOpenStat()
    {
        return $this->container['use_open_stat'];
    }

    /**
     * Sets use_open_stat
     *
     * @param bool|null $use_open_stat Признак использования внешней интернет-статистики. Возможные значения: * `false` — внешняя интернет-статистика не используется. * `true` — внешняя интернет-статистика используется.
     *
     * @return self
     */
    public function setUseOpenStat($use_open_stat)
    {
        if (is_null($use_open_stat)) {
            throw new \InvalidArgumentException('non-nullable use_open_stat cannot be null');
        }
        $this->container['use_open_stat'] = $use_open_stat;

        return $this;
    }

    /**
     * Gets local_region
     *
     * @return \OpenAPI\Client\Model\CampaignSettingsLocalRegionDTO|null
     */
    public function getLocalRegion()
    {
        return $this->container['local_region'];
    }

    /**
     * Sets local_region
     *
     * @param \OpenAPI\Client\Model\CampaignSettingsLocalRegionDTO|null $local_region local_region
     *
     * @return self
     */
    public function setLocalRegion($local_region)
    {
        if (is_null($local_region)) {
            throw new \InvalidArgumentException('non-nullable local_region cannot be null');
        }
        $this->container['local_region'] = $local_region;

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


