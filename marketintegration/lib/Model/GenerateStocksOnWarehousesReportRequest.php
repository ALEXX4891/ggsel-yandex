<?php
/**
 * GenerateStocksOnWarehousesReportRequest
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
 * GenerateStocksOnWarehousesReportRequest Class Doc Comment
 *
 * @category Class
 * @description Данные, необходимые для генерации отчета.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GenerateStocksOnWarehousesReportRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GenerateStocksOnWarehousesReportRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaign_id' => 'int',
        'warehouse_ids' => 'int[]',
        'report_date' => '\DateTime',
        'category_ids' => 'int[]',
        'has_stocks' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campaign_id' => 'int64',
        'warehouse_ids' => 'int64',
        'report_date' => 'date',
        'category_ids' => 'int64',
        'has_stocks' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'campaign_id' => false,
        'warehouse_ids' => true,
        'report_date' => false,
        'category_ids' => true,
        'has_stocks' => false
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
        'campaign_id' => 'campaignId',
        'warehouse_ids' => 'warehouseIds',
        'report_date' => 'reportDate',
        'category_ids' => 'categoryIds',
        'has_stocks' => 'hasStocks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_id' => 'setCampaignId',
        'warehouse_ids' => 'setWarehouseIds',
        'report_date' => 'setReportDate',
        'category_ids' => 'setCategoryIds',
        'has_stocks' => 'setHasStocks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_id' => 'getCampaignId',
        'warehouse_ids' => 'getWarehouseIds',
        'report_date' => 'getReportDate',
        'category_ids' => 'getCategoryIds',
        'has_stocks' => 'getHasStocks'
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
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('warehouse_ids', $data ?? [], null);
        $this->setIfExists('report_date', $data ?? [], null);
        $this->setIfExists('category_ids', $data ?? [], null);
        $this->setIfExists('has_stocks', $data ?? [], null);
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

        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if (!is_null($this->container['warehouse_ids']) && (count($this->container['warehouse_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'warehouse_ids', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['category_ids']) && (count($this->container['category_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'category_ids', number of items must be greater than or equal to 1.";
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
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id Идентификатор магазина.
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            throw new \InvalidArgumentException('non-nullable campaign_id cannot be null');
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets warehouse_ids
     *
     * @return int[]|null
     */
    public function getWarehouseIds()
    {
        return $this->container['warehouse_ids'];
    }

    /**
     * Sets warehouse_ids
     *
     * @param int[]|null $warehouse_ids Фильтр по идентификаторам складов (только модель FBY). Чтобы узнать идентификатор, воспользуйтесь запросом [GET warehouses](../../reference/warehouses/getFulfillmentWarehouses.md).
     *
     * @return self
     */
    public function setWarehouseIds($warehouse_ids)
    {
        if (is_null($warehouse_ids)) {
            array_push($this->openAPINullablesSetToNull, 'warehouse_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('warehouse_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($warehouse_ids) && (count($warehouse_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $warehouse_ids when calling GenerateStocksOnWarehousesReportRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['warehouse_ids'] = $warehouse_ids;

        return $this;
    }

    /**
     * Gets report_date
     *
     * @return \DateTime|null
     */
    public function getReportDate()
    {
        return $this->container['report_date'];
    }

    /**
     * Sets report_date
     *
     * @param \DateTime|null $report_date Фильтр по дате (для модели FBY). В отчет попадут данные за **предшествующий** дате день.
     *
     * @return self
     */
    public function setReportDate($report_date)
    {
        if (is_null($report_date)) {
            throw new \InvalidArgumentException('non-nullable report_date cannot be null');
        }
        $this->container['report_date'] = $report_date;

        return $this;
    }

    /**
     * Gets category_ids
     *
     * @return int[]|null
     */
    public function getCategoryIds()
    {
        return $this->container['category_ids'];
    }

    /**
     * Sets category_ids
     *
     * @param int[]|null $category_ids Фильтр по категориям на Маркете (кроме модели FBY).
     *
     * @return self
     */
    public function setCategoryIds($category_ids)
    {
        if (is_null($category_ids)) {
            array_push($this->openAPINullablesSetToNull, 'category_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($category_ids) && (count($category_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $category_ids when calling GenerateStocksOnWarehousesReportRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['category_ids'] = $category_ids;

        return $this;
    }

    /**
     * Gets has_stocks
     *
     * @return bool|null
     */
    public function getHasStocks()
    {
        return $this->container['has_stocks'];
    }

    /**
     * Sets has_stocks
     *
     * @param bool|null $has_stocks Фильтр по наличию остатков (кроме модели FBY).
     *
     * @return self
     */
    public function setHasStocks($has_stocks)
    {
        if (is_null($has_stocks)) {
            throw new \InvalidArgumentException('non-nullable has_stocks cannot be null');
        }
        $this->container['has_stocks'] = $has_stocks;

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


