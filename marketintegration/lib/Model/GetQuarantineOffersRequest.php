<?php
/**
 * GetQuarantineOffersRequest
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
 * GetQuarantineOffersRequest Class Doc Comment
 *
 * @category Class
 * @description Фильтрации товаров  В запросе можно указать либо фильтр offerIds, либо любые другие фильтры товаров. Совместное использование фильтра offerIds с другими фильтрациями приведет к ошибке.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetQuarantineOffersRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetQuarantineOffersRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_ids' => 'string[]',
        'card_statuses' => '\OpenAPI\Client\Model\OfferCardStatusType[]',
        'category_ids' => 'int[]',
        'vendor_names' => 'string[]',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_ids' => null,
        'card_statuses' => null,
        'category_ids' => null,
        'vendor_names' => null,
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offer_ids' => true,
        'card_statuses' => true,
        'category_ids' => true,
        'vendor_names' => true,
        'tags' => true
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
        'offer_ids' => 'offerIds',
        'card_statuses' => 'cardStatuses',
        'category_ids' => 'categoryIds',
        'vendor_names' => 'vendorNames',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_ids' => 'setOfferIds',
        'card_statuses' => 'setCardStatuses',
        'category_ids' => 'setCategoryIds',
        'vendor_names' => 'setVendorNames',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_ids' => 'getOfferIds',
        'card_statuses' => 'getCardStatuses',
        'category_ids' => 'getCategoryIds',
        'vendor_names' => 'getVendorNames',
        'tags' => 'getTags'
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
        $this->setIfExists('offer_ids', $data ?? [], null);
        $this->setIfExists('card_statuses', $data ?? [], null);
        $this->setIfExists('category_ids', $data ?? [], null);
        $this->setIfExists('vendor_names', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
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

        if (!is_null($this->container['offer_ids']) && (count($this->container['offer_ids']) > 500)) {
            $invalidProperties[] = "invalid value for 'offer_ids', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['offer_ids']) && (count($this->container['offer_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'offer_ids', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['card_statuses']) && (count($this->container['card_statuses']) < 1)) {
            $invalidProperties[] = "invalid value for 'card_statuses', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['category_ids']) && (count($this->container['category_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'category_ids', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['vendor_names']) && (count($this->container['vendor_names']) < 1)) {
            $invalidProperties[] = "invalid value for 'vendor_names', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['tags']) && (count($this->container['tags']) < 1)) {
            $invalidProperties[] = "invalid value for 'tags', number of items must be greater than or equal to 1.";
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
     * Gets offer_ids
     *
     * @return string[]|null
     */
    public function getOfferIds()
    {
        return $this->container['offer_ids'];
    }

    /**
     * Sets offer_ids
     *
     * @param string[]|null $offer_ids Идентификаторы товаров, информация о которых нужна. <br><br> ⚠️ Не используйте это поле одновременно с фильтрами по статусам карточек, категориям, брендам или тегам. Если вы хотите воспользоваться фильтрами, оставьте поле пустым.
     *
     * @return self
     */
    public function setOfferIds($offer_ids)
    {
        if (is_null($offer_ids)) {
            array_push($this->openAPINullablesSetToNull, 'offer_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('offer_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($offer_ids) && (count($offer_ids) > 500)) {
            throw new \InvalidArgumentException('invalid value for $offer_ids when calling GetQuarantineOffersRequest., number of items must be less than or equal to 500.');
        }
        if (!is_null($offer_ids) && (count($offer_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $offer_ids when calling GetQuarantineOffersRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['offer_ids'] = $offer_ids;

        return $this;
    }

    /**
     * Gets card_statuses
     *
     * @return \OpenAPI\Client\Model\OfferCardStatusType[]|null
     */
    public function getCardStatuses()
    {
        return $this->container['card_statuses'];
    }

    /**
     * Sets card_statuses
     *
     * @param \OpenAPI\Client\Model\OfferCardStatusType[]|null $card_statuses Фильтр по статусам карточек.  [Что такое карточка товара](https://yandex.ru/support/marketplace/assortment/content/index.html)
     *
     * @return self
     */
    public function setCardStatuses($card_statuses)
    {
        if (is_null($card_statuses)) {
            array_push($this->openAPINullablesSetToNull, 'card_statuses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_statuses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($card_statuses) && (count($card_statuses) < 1)) {
            throw new \InvalidArgumentException('invalid length for $card_statuses when calling GetQuarantineOffersRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['card_statuses'] = $card_statuses;

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
     * @param int[]|null $category_ids Фильтр по категориям на Маркете.
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
            throw new \InvalidArgumentException('invalid length for $category_ids when calling GetQuarantineOffersRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['category_ids'] = $category_ids;

        return $this;
    }

    /**
     * Gets vendor_names
     *
     * @return string[]|null
     */
    public function getVendorNames()
    {
        return $this->container['vendor_names'];
    }

    /**
     * Sets vendor_names
     *
     * @param string[]|null $vendor_names Фильтр по брендам.
     *
     * @return self
     */
    public function setVendorNames($vendor_names)
    {
        if (is_null($vendor_names)) {
            array_push($this->openAPINullablesSetToNull, 'vendor_names');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vendor_names', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($vendor_names) && (count($vendor_names) < 1)) {
            throw new \InvalidArgumentException('invalid length for $vendor_names when calling GetQuarantineOffersRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['vendor_names'] = $vendor_names;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Фильтр по тегам.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($tags) && (count($tags) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tags when calling GetQuarantineOffersRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['tags'] = $tags;

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


