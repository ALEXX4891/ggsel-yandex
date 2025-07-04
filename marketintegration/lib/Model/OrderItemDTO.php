<?php
/**
 * OrderItemDTO
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
 * OrderItemDTO Class Doc Comment
 *
 * @category Class
 * @description Список товаров в заказе.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderItemDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'offer_id' => 'string',
        'offer_name' => 'string',
        'price' => 'float',
        'buyer_price' => 'float',
        'buyer_price_before_discount' => 'float',
        'price_before_discount' => 'float',
        'count' => 'int',
        'vat' => '\OpenAPI\Client\Model\OrderVatType',
        'shop_sku' => 'string',
        'subsidy' => 'float',
        'partner_warehouse_id' => 'string',
        'promos' => '\OpenAPI\Client\Model\OrderItemPromoDTO[]',
        'instances' => '\OpenAPI\Client\Model\OrderItemInstanceDTO[]',
        'details' => '\OpenAPI\Client\Model\OrderItemDetailDTO[]',
        'subsidies' => '\OpenAPI\Client\Model\OrderItemSubsidyDTO[]',
        'required_instance_types' => '\OpenAPI\Client\Model\OrderItemInstanceType[]',
        'tags' => '\OpenAPI\Client\Model\OrderItemTagType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'offer_id' => null,
        'offer_name' => null,
        'price' => 'decimal',
        'buyer_price' => 'decimal',
        'buyer_price_before_discount' => 'decimal',
        'price_before_discount' => 'decimal',
        'count' => null,
        'vat' => null,
        'shop_sku' => null,
        'subsidy' => 'decimal',
        'partner_warehouse_id' => null,
        'promos' => null,
        'instances' => null,
        'details' => null,
        'subsidies' => null,
        'required_instance_types' => null,
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'offer_id' => false,
        'offer_name' => false,
        'price' => false,
        'buyer_price' => false,
        'buyer_price_before_discount' => false,
        'price_before_discount' => false,
        'count' => false,
        'vat' => false,
        'shop_sku' => false,
        'subsidy' => false,
        'partner_warehouse_id' => false,
        'promos' => true,
        'instances' => true,
        'details' => true,
        'subsidies' => true,
        'required_instance_types' => true,
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
        'id' => 'id',
        'offer_id' => 'offerId',
        'offer_name' => 'offerName',
        'price' => 'price',
        'buyer_price' => 'buyerPrice',
        'buyer_price_before_discount' => 'buyerPriceBeforeDiscount',
        'price_before_discount' => 'priceBeforeDiscount',
        'count' => 'count',
        'vat' => 'vat',
        'shop_sku' => 'shopSku',
        'subsidy' => 'subsidy',
        'partner_warehouse_id' => 'partnerWarehouseId',
        'promos' => 'promos',
        'instances' => 'instances',
        'details' => 'details',
        'subsidies' => 'subsidies',
        'required_instance_types' => 'requiredInstanceTypes',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'offer_id' => 'setOfferId',
        'offer_name' => 'setOfferName',
        'price' => 'setPrice',
        'buyer_price' => 'setBuyerPrice',
        'buyer_price_before_discount' => 'setBuyerPriceBeforeDiscount',
        'price_before_discount' => 'setPriceBeforeDiscount',
        'count' => 'setCount',
        'vat' => 'setVat',
        'shop_sku' => 'setShopSku',
        'subsidy' => 'setSubsidy',
        'partner_warehouse_id' => 'setPartnerWarehouseId',
        'promos' => 'setPromos',
        'instances' => 'setInstances',
        'details' => 'setDetails',
        'subsidies' => 'setSubsidies',
        'required_instance_types' => 'setRequiredInstanceTypes',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'offer_id' => 'getOfferId',
        'offer_name' => 'getOfferName',
        'price' => 'getPrice',
        'buyer_price' => 'getBuyerPrice',
        'buyer_price_before_discount' => 'getBuyerPriceBeforeDiscount',
        'price_before_discount' => 'getPriceBeforeDiscount',
        'count' => 'getCount',
        'vat' => 'getVat',
        'shop_sku' => 'getShopSku',
        'subsidy' => 'getSubsidy',
        'partner_warehouse_id' => 'getPartnerWarehouseId',
        'promos' => 'getPromos',
        'instances' => 'getInstances',
        'details' => 'getDetails',
        'subsidies' => 'getSubsidies',
        'required_instance_types' => 'getRequiredInstanceTypes',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('offer_id', $data ?? [], null);
        $this->setIfExists('offer_name', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('buyer_price', $data ?? [], null);
        $this->setIfExists('buyer_price_before_discount', $data ?? [], null);
        $this->setIfExists('price_before_discount', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('shop_sku', $data ?? [], null);
        $this->setIfExists('subsidy', $data ?? [], null);
        $this->setIfExists('partner_warehouse_id', $data ?? [], null);
        $this->setIfExists('promos', $data ?? [], null);
        $this->setIfExists('instances', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('subsidies', $data ?? [], null);
        $this->setIfExists('required_instance_types', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['offer_id'] === null) {
            $invalidProperties[] = "'offer_id' can't be null";
        }
        if ((mb_strlen($this->container['offer_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'offer_id', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['offer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'offer_id', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^(?=.*\\S.*)[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/", $this->container['offer_id'])) {
            $invalidProperties[] = "invalid value for 'offer_id', must be conform to the pattern /^(?=.*\\S.*)[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/.";
        }

        if ($this->container['offer_name'] === null) {
            $invalidProperties[] = "'offer_name' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['buyer_price'] === null) {
            $invalidProperties[] = "'buyer_price' can't be null";
        }
        if ($this->container['buyer_price_before_discount'] === null) {
            $invalidProperties[] = "'buyer_price_before_discount' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        if (!is_null($this->container['shop_sku']) && (mb_strlen($this->container['shop_sku']) > 255)) {
            $invalidProperties[] = "invalid value for 'shop_sku', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['shop_sku']) && (mb_strlen($this->container['shop_sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'shop_sku', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['shop_sku']) && !preg_match("/^(?=.*\\S.*)[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/", $this->container['shop_sku'])) {
            $invalidProperties[] = "invalid value for 'shop_sku', must be conform to the pattern /^(?=.*\\S.*)[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/.";
        }

        if (!is_null($this->container['promos']) && (count($this->container['promos']) < 1)) {
            $invalidProperties[] = "invalid value for 'promos', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['instances']) && (count($this->container['instances']) < 1)) {
            $invalidProperties[] = "invalid value for 'instances', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['details']) && (count($this->container['details']) < 1)) {
            $invalidProperties[] = "invalid value for 'details', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['subsidies']) && (count($this->container['subsidies']) < 1)) {
            $invalidProperties[] = "invalid value for 'subsidies', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['required_instance_types']) && (count($this->container['required_instance_types']) < 1)) {
            $invalidProperties[] = "invalid value for 'required_instance_types', number of items must be greater than or equal to 1.";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Идентификатор товара в заказе.  Позволяет идентифицировать товар в рамках данного заказа.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return string
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string $offer_id Ваш SKU — идентификатор товара в вашей системе.  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields)
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        if (is_null($offer_id)) {
            throw new \InvalidArgumentException('non-nullable offer_id cannot be null');
        }
        if ((mb_strlen($offer_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $offer_id when calling OrderItemDTO., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($offer_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $offer_id when calling OrderItemDTO., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^(?=.*\\S.*)[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/", ObjectSerializer::toString($offer_id)))) {
            throw new \InvalidArgumentException("invalid value for \$offer_id when calling OrderItemDTO., must conform to the pattern /^(?=.*\\S.*)[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/.");
        }

        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets offer_name
     *
     * @return string
     */
    public function getOfferName()
    {
        return $this->container['offer_name'];
    }

    /**
     * Sets offer_name
     *
     * @param string $offer_name Название товара.
     *
     * @return self
     */
    public function setOfferName($offer_name)
    {
        if (is_null($offer_name)) {
            throw new \InvalidArgumentException('non-nullable offer_name cannot be null');
        }
        $this->container['offer_name'] = $offer_name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price Цена на товар в валюте заказа без учета вознаграждения партнеру за скидки по промокодам, купонам и акциям (параметр `subsidies`).
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets buyer_price
     *
     * @return float
     */
    public function getBuyerPrice()
    {
        return $this->container['buyer_price'];
    }

    /**
     * Sets buyer_price
     *
     * @param float $buyer_price Цена на товар в валюте покупателя. В цене уже учтены скидки по:  * акциям; * купонам; * промокодам.
     *
     * @return self
     */
    public function setBuyerPrice($buyer_price)
    {
        if (is_null($buyer_price)) {
            throw new \InvalidArgumentException('non-nullable buyer_price cannot be null');
        }
        $this->container['buyer_price'] = $buyer_price;

        return $this;
    }

    /**
     * Gets buyer_price_before_discount
     *
     * @return float
     */
    public function getBuyerPriceBeforeDiscount()
    {
        return $this->container['buyer_price_before_discount'];
    }

    /**
     * Sets buyer_price_before_discount
     *
     * @param float $buyer_price_before_discount Стоимость товара в валюте покупателя до применения скидок по:  * акциям; * купонам; * промокодам.
     *
     * @return self
     */
    public function setBuyerPriceBeforeDiscount($buyer_price_before_discount)
    {
        if (is_null($buyer_price_before_discount)) {
            throw new \InvalidArgumentException('non-nullable buyer_price_before_discount cannot be null');
        }
        $this->container['buyer_price_before_discount'] = $buyer_price_before_discount;

        return $this;
    }

    /**
     * Gets price_before_discount
     *
     * @return float|null
     * @deprecated
     */
    public function getPriceBeforeDiscount()
    {
        return $this->container['price_before_discount'];
    }

    /**
     * Sets price_before_discount
     *
     * @param float|null $price_before_discount {% note warning \"Этот параметр устарел\" %}  Не используйте его.  {% endnote %}  Стоимость товара в валюте магазина до применения скидок.
     *
     * @return self
     * @deprecated
     */
    public function setPriceBeforeDiscount($price_before_discount)
    {
        if (is_null($price_before_discount)) {
            throw new \InvalidArgumentException('non-nullable price_before_discount cannot be null');
        }
        $this->container['price_before_discount'] = $price_before_discount;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count Количество единиц товара.
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \OpenAPI\Client\Model\OrderVatType
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \OpenAPI\Client\Model\OrderVatType $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets shop_sku
     *
     * @return string|null
     */
    public function getShopSku()
    {
        return $this->container['shop_sku'];
    }

    /**
     * Sets shop_sku
     *
     * @param string|null $shop_sku Ваш SKU — идентификатор товара в вашей системе.  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields)
     *
     * @return self
     */
    public function setShopSku($shop_sku)
    {
        if (is_null($shop_sku)) {
            throw new \InvalidArgumentException('non-nullable shop_sku cannot be null');
        }
        if ((mb_strlen($shop_sku) > 255)) {
            throw new \InvalidArgumentException('invalid length for $shop_sku when calling OrderItemDTO., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($shop_sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shop_sku when calling OrderItemDTO., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^(?=.*\\S.*)[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/", ObjectSerializer::toString($shop_sku)))) {
            throw new \InvalidArgumentException("invalid value for \$shop_sku when calling OrderItemDTO., must conform to the pattern /^(?=.*\\S.*)[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/.");
        }

        $this->container['shop_sku'] = $shop_sku;

        return $this;
    }

    /**
     * Gets subsidy
     *
     * @return float|null
     * @deprecated
     */
    public function getSubsidy()
    {
        return $this->container['subsidy'];
    }

    /**
     * Sets subsidy
     *
     * @param float|null $subsidy {% note warning \"Этот параметр устарел\" %}  Вместо него используйте `subsidies`.  {% endnote %}  Общее вознаграждение партнеру за DBS-доставку и все скидки на товар:  * по промокодам; * по купонам; * по баллам Плюса; * по акциям.
     *
     * @return self
     * @deprecated
     */
    public function setSubsidy($subsidy)
    {
        if (is_null($subsidy)) {
            throw new \InvalidArgumentException('non-nullable subsidy cannot be null');
        }
        $this->container['subsidy'] = $subsidy;

        return $this;
    }

    /**
     * Gets partner_warehouse_id
     *
     * @return string|null
     * @deprecated
     */
    public function getPartnerWarehouseId()
    {
        return $this->container['partner_warehouse_id'];
    }

    /**
     * Sets partner_warehouse_id
     *
     * @param string|null $partner_warehouse_id {% note warning \"Этот параметр устарел\" %}  Не используйте его.  {% endnote %}  Идентификатор склада в системе партнера, на который сформирован заказ.
     *
     * @return self
     * @deprecated
     */
    public function setPartnerWarehouseId($partner_warehouse_id)
    {
        if (is_null($partner_warehouse_id)) {
            throw new \InvalidArgumentException('non-nullable partner_warehouse_id cannot be null');
        }
        $this->container['partner_warehouse_id'] = $partner_warehouse_id;

        return $this;
    }

    /**
     * Gets promos
     *
     * @return \OpenAPI\Client\Model\OrderItemPromoDTO[]|null
     */
    public function getPromos()
    {
        return $this->container['promos'];
    }

    /**
     * Sets promos
     *
     * @param \OpenAPI\Client\Model\OrderItemPromoDTO[]|null $promos Информация о вознаграждениях партнеру за скидки на товар по промокодам, купонам и акциям.
     *
     * @return self
     */
    public function setPromos($promos)
    {
        if (is_null($promos)) {
            array_push($this->openAPINullablesSetToNull, 'promos');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('promos', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($promos) && (count($promos) < 1)) {
            throw new \InvalidArgumentException('invalid length for $promos when calling OrderItemDTO., number of items must be greater than or equal to 1.');
        }
        $this->container['promos'] = $promos;

        return $this;
    }

    /**
     * Gets instances
     *
     * @return \OpenAPI\Client\Model\OrderItemInstanceDTO[]|null
     */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
     * Sets instances
     *
     * @param \OpenAPI\Client\Model\OrderItemInstanceDTO[]|null $instances Информация о маркировке единиц товара.  Возвращаются данные для маркировки, переданные в запросе [PUT campaigns/{campaignId}/orders/{orderId}/identifiers](../../reference/orders/provideOrderItemIdentifiers.md).  Если магазин еще не передавал коды для этого заказа, `instances` отсутствует.
     *
     * @return self
     */
    public function setInstances($instances)
    {
        if (is_null($instances)) {
            array_push($this->openAPINullablesSetToNull, 'instances');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('instances', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($instances) && (count($instances) < 1)) {
            throw new \InvalidArgumentException('invalid length for $instances when calling OrderItemDTO., number of items must be greater than or equal to 1.');
        }
        $this->container['instances'] = $instances;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \OpenAPI\Client\Model\OrderItemDetailDTO[]|null
     * @deprecated
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \OpenAPI\Client\Model\OrderItemDetailDTO[]|null $details {% note warning \"Этот параметр устарел\" %}  Для получения информации о невыкупах и возвратах используйте [GET campaigns/{campaignId}/returns](../../reference/orders/getReturns.md).  {% endnote %}  Информация о невыкупленных или возвращенных товарах в заказе.
     *
     * @return self
     * @deprecated
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            array_push($this->openAPINullablesSetToNull, 'details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('details', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($details) && (count($details) < 1)) {
            throw new \InvalidArgumentException('invalid length for $details when calling OrderItemDTO., number of items must be greater than or equal to 1.');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets subsidies
     *
     * @return \OpenAPI\Client\Model\OrderItemSubsidyDTO[]|null
     */
    public function getSubsidies()
    {
        return $this->container['subsidies'];
    }

    /**
     * Sets subsidies
     *
     * @param \OpenAPI\Client\Model\OrderItemSubsidyDTO[]|null $subsidies Список субсидий по типам.
     *
     * @return self
     */
    public function setSubsidies($subsidies)
    {
        if (is_null($subsidies)) {
            array_push($this->openAPINullablesSetToNull, 'subsidies');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subsidies', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($subsidies) && (count($subsidies) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subsidies when calling OrderItemDTO., number of items must be greater than or equal to 1.');
        }
        $this->container['subsidies'] = $subsidies;

        return $this;
    }

    /**
     * Gets required_instance_types
     *
     * @return \OpenAPI\Client\Model\OrderItemInstanceType[]|null
     */
    public function getRequiredInstanceTypes()
    {
        return $this->container['required_instance_types'];
    }

    /**
     * Sets required_instance_types
     *
     * @param \OpenAPI\Client\Model\OrderItemInstanceType[]|null $required_instance_types Список необходимых маркировок товара.
     *
     * @return self
     */
    public function setRequiredInstanceTypes($required_instance_types)
    {
        if (is_null($required_instance_types)) {
            array_push($this->openAPINullablesSetToNull, 'required_instance_types');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('required_instance_types', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($required_instance_types) && (count($required_instance_types) < 1)) {
            throw new \InvalidArgumentException('invalid length for $required_instance_types when calling OrderItemDTO., number of items must be greater than or equal to 1.');
        }
        $this->container['required_instance_types'] = $required_instance_types;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \OpenAPI\Client\Model\OrderItemTagType[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\Client\Model\OrderItemTagType[]|null $tags Признаки товара.
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
            throw new \InvalidArgumentException('invalid length for $tags when calling OrderItemDTO., number of items must be greater than or equal to 1.');
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


