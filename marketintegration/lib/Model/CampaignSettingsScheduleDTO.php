<?php
/**
 * CampaignSettingsScheduleDTO
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
 * CampaignSettingsScheduleDTO Class Doc Comment
 *
 * @category Class
 * @description Расписание работы службы доставки в своем регионе.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignSettingsScheduleDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignSettingsScheduleDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_on_holidays' => 'bool',
        'custom_holidays' => 'string[]',
        'custom_working_days' => 'string[]',
        'period' => '\OpenAPI\Client\Model\CampaignSettingsTimePeriodDTO',
        'total_holidays' => 'string[]',
        'weekly_holidays' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available_on_holidays' => null,
        'custom_holidays' => 'date-dd-MM-yyyy',
        'custom_working_days' => 'date-dd-MM-yyyy',
        'period' => null,
        'total_holidays' => 'date-dd-MM-yyyy',
        'weekly_holidays' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available_on_holidays' => false,
        'custom_holidays' => false,
        'custom_working_days' => false,
        'period' => false,
        'total_holidays' => false,
        'weekly_holidays' => false
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
        'available_on_holidays' => 'availableOnHolidays',
        'custom_holidays' => 'customHolidays',
        'custom_working_days' => 'customWorkingDays',
        'period' => 'period',
        'total_holidays' => 'totalHolidays',
        'weekly_holidays' => 'weeklyHolidays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_on_holidays' => 'setAvailableOnHolidays',
        'custom_holidays' => 'setCustomHolidays',
        'custom_working_days' => 'setCustomWorkingDays',
        'period' => 'setPeriod',
        'total_holidays' => 'setTotalHolidays',
        'weekly_holidays' => 'setWeeklyHolidays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_on_holidays' => 'getAvailableOnHolidays',
        'custom_holidays' => 'getCustomHolidays',
        'custom_working_days' => 'getCustomWorkingDays',
        'period' => 'getPeriod',
        'total_holidays' => 'getTotalHolidays',
        'weekly_holidays' => 'getWeeklyHolidays'
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
        $this->setIfExists('available_on_holidays', $data ?? [], null);
        $this->setIfExists('custom_holidays', $data ?? [], null);
        $this->setIfExists('custom_working_days', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('total_holidays', $data ?? [], null);
        $this->setIfExists('weekly_holidays', $data ?? [], null);
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

        if ($this->container['custom_holidays'] === null) {
            $invalidProperties[] = "'custom_holidays' can't be null";
        }
        if ($this->container['custom_working_days'] === null) {
            $invalidProperties[] = "'custom_working_days' can't be null";
        }
        if ($this->container['total_holidays'] === null) {
            $invalidProperties[] = "'total_holidays' can't be null";
        }
        if ($this->container['weekly_holidays'] === null) {
            $invalidProperties[] = "'weekly_holidays' can't be null";
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
     * Gets available_on_holidays
     *
     * @return bool|null
     */
    public function getAvailableOnHolidays()
    {
        return $this->container['available_on_holidays'];
    }

    /**
     * Sets available_on_holidays
     *
     * @param bool|null $available_on_holidays Признак работы службы доставки в государственные праздники. Возможные значения. * `false` — служба доставки не работает в праздничные дни. * `true` — служба доставки работает в праздничные дни.
     *
     * @return self
     */
    public function setAvailableOnHolidays($available_on_holidays)
    {
        if (is_null($available_on_holidays)) {
            throw new \InvalidArgumentException('non-nullable available_on_holidays cannot be null');
        }
        $this->container['available_on_holidays'] = $available_on_holidays;

        return $this;
    }

    /**
     * Gets custom_holidays
     *
     * @return string[]
     */
    public function getCustomHolidays()
    {
        return $this->container['custom_holidays'];
    }

    /**
     * Sets custom_holidays
     *
     * @param string[] $custom_holidays Список дней, в которые служба доставки не работает. Дни магазин указал в кабинете продавца на Маркете.
     *
     * @return self
     */
    public function setCustomHolidays($custom_holidays)
    {
        if (is_null($custom_holidays)) {
            throw new \InvalidArgumentException('non-nullable custom_holidays cannot be null');
        }
        $this->container['custom_holidays'] = $custom_holidays;

        return $this;
    }

    /**
     * Gets custom_working_days
     *
     * @return string[]
     */
    public function getCustomWorkingDays()
    {
        return $this->container['custom_working_days'];
    }

    /**
     * Sets custom_working_days
     *
     * @param string[] $custom_working_days Список выходных и праздничных дней, в которые служба доставки работает. Дни магазин указал в кабинете продавца на Маркете.
     *
     * @return self
     */
    public function setCustomWorkingDays($custom_working_days)
    {
        if (is_null($custom_working_days)) {
            throw new \InvalidArgumentException('non-nullable custom_working_days cannot be null');
        }
        $this->container['custom_working_days'] = $custom_working_days;

        return $this;
    }

    /**
     * Gets period
     *
     * @return \OpenAPI\Client\Model\CampaignSettingsTimePeriodDTO|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param \OpenAPI\Client\Model\CampaignSettingsTimePeriodDTO|null $period period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            throw new \InvalidArgumentException('non-nullable period cannot be null');
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets total_holidays
     *
     * @return string[]
     */
    public function getTotalHolidays()
    {
        return $this->container['total_holidays'];
    }

    /**
     * Sets total_holidays
     *
     * @param string[] $total_holidays Итоговый список нерабочих дней службы доставки. Список рассчитывается с учетом выходных, нерабочих дней и государственных праздников. Информацию по ним магазин указывает в кабинете продавца на Маркете.
     *
     * @return self
     */
    public function setTotalHolidays($total_holidays)
    {
        if (is_null($total_holidays)) {
            throw new \InvalidArgumentException('non-nullable total_holidays cannot be null');
        }
        $this->container['total_holidays'] = $total_holidays;

        return $this;
    }

    /**
     * Gets weekly_holidays
     *
     * @return int[]
     */
    public function getWeeklyHolidays()
    {
        return $this->container['weekly_holidays'];
    }

    /**
     * Sets weekly_holidays
     *
     * @param int[] $weekly_holidays Список выходных дней недели и государственных праздников.
     *
     * @return self
     */
    public function setWeeklyHolidays($weekly_holidays)
    {
        if (is_null($weekly_holidays)) {
            throw new \InvalidArgumentException('non-nullable weekly_holidays cannot be null');
        }
        $this->container['weekly_holidays'] = $weekly_holidays;

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


