<?php
namespace Goletter\YahooAPI\Models\Orders;

use ArrayAccess;
use Goletter\YahooAPI\Models\ModelInterface;
use Goletter\YahooAPI\ObjectSerializer;

class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Order';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'order_id' => 'string',
        'version' => 'string',
        'original_order_id' => 'string',
        'parent_order_id' => 'string',
        'order_time' => 'string',
        'order_status' => 'string',
        'pay_status' => 'string',
        'settle_status' => 'string',
        'pay_type' => 'string',
        'total_price' => '\Goletter\AmazonSellingPartnerAPI\Models\Orders\Money',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'order_id' => null,
        'version' => null,
        'original_order_id' => null,
        'parent_order_id' => null,
        'order_time' => null,
        'order_status' => null,
        'pay_status' => null,
        'settle_status' => null,
        'pay_type' => null,
        'total_price' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_id' => 'OrderId',
        'version' => 'Version',
        'original_order_id' => 'OriginalOrderId',
        'parent_order_id' => 'ParentOrderId',
        'order_time' => 'OrderTime',
        'order_status' => 'OrderStatus',
        'pay_status' => 'PayStatus',
        'settle_status' => 'SettleStatus',
        'pay_type' => 'PayType',
        'total_price' => 'TotalPrice',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'version' => 'setVersion',
        'original_order_id' => 'setOriginalOrderId',
        'parent_order_id' => 'setParentOrderId',
        'order_time' => 'setOrderTime',
        'order_status' => 'setOrderStatus',
        'pay_status' => 'setPayStatus',
        'settle_status' => 'setSettleStatus',
        'pay_type' => 'setPayType',
        'total_price' => 'setTotalPrice',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'version' => 'getVersion',
        'original_order_id' => 'getOriginalOrderId',
        'parent_order_id' => 'getParentOrderId',
        'order_time' => 'getOrderTime',
        'order_status' => 'getOrderStatus',
        'pay_status' => 'getPayStatus',
        'settle_status' => 'getSettleStatus',
        'pay_type' => 'getPayType',
        'total_price' => 'getTotalPrice',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['original_order_id'] = isset($data['original_order_id']) ? $data['original_order_id'] : null;
        $this->container['parent_order_id'] = isset($data['parent_order_id']) ? $data['parent_order_id'] : null;
        $this->container['order_time'] = isset($data['order_time']) ? $data['order_time'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['pay_status'] = isset($data['pay_status']) ? $data['pay_status'] : null;
        $this->container['settle_status'] = isset($data['settle_status']) ? $data['settle_status'] : null;
        $this->container['pay_type'] = isset($data['pay_type']) ? $data['pay_type'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['order_id']) {
            $invalidProperties[] = "'order_id' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets order_id.
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @param string $order_id an order identifier, in 3-7-7 format
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * @param $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginalOrderId()
    {
        return $this->container['original_order_id'];
    }

    /**
     * @param $original_order_id
     * @return $this
     */
    public function setOriginalOrderId($original_order_id)
    {
        $this->container['original_order_id'] = $original_order_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParentOrderId()
    {
        return $this->container['parent_order_id'];
    }

    /**
     * @param $parent_order_id
     * @return $this
     */
    public function setParentOrderId($parent_order_id)
    {
        $this->container['parent_order_id'] = $parent_order_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderTime()
    {
        return $this->container['order_time'];
    }

    /**
     * @param $order_time
     * @return $this
     */
    public function setOrderTime($order_time)
    {
        $this->container['order_time'] = $order_time;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * @param $order_status
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayStatus()
    {
        return $this->container['pay_status'];
    }

    /**
     * @param $pay_status
     * @return $this
     */
    public function setPayStatus($pay_status)
    {
        $this->container['pay_status'] = $pay_status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSettleStatus()
    {
        return $this->container['settle_status'];
    }

    /**
     * @param $settle_status
     * @return $this
     */
    public function setSettleStatus($settle_status)
    {
        $this->container['settle_status'] = $settle_status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayType()
    {
        return $this->container['pay_type'];
    }

    /**
     * @param $pay_type
     * @return $this
     */
    public function setPayType($pay_type)
    {
        $this->container['pay_type'] = $pay_type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * @param $total_price
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}