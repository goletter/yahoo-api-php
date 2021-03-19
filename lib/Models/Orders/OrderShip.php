<?php
namespace Goletter\YahooAPI\Models\Orders;

use ArrayAccess;
use Goletter\YahooAPI\Models\ModelInterface;
use Goletter\YahooAPI\ObjectSerializer;
/**
 * OrderShip Class Doc Comment.
 *

 * @description A list of orders.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OrderShip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderShip';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'ship_first_name' => 'string',
        'ship_last_name' => 'string',
        'ship_zip_code' => 'string',
        'ship_prefecture' => 'string',
        'ship_city' => 'string',
        'ship_address1' => 'string',
        // 'ship_address2' => 'string',
        'ship_phone_number' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'ship_first_name' => null,
        'ship_last_name' => null,
        'ship_zip_code' => null,
        'ship_prefecture' => null,
        'ship_city' => null,
        'ship_address1' => null,
        'ship_address2' => null,
        'ship_phone_number' => null,
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
        'ship_first_name' => 'ShipFirstName',
        'ship_last_name' => 'ShipLastName',
        'ship_zip_code' => 'ShipZipCode',
        'ship_prefecture' => 'ShipPrefecture',
        'ship_city' => 'ShipCity',
        'ship_address1' => 'ShipAddress1',
        'ship_address2' => 'ShipAddress2',
        'ship_phone_number' => 'ShipPhoneNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_first_name' => 'setShipFirstName',
        'ship_last_name' => 'setShipLastName',
        'ship_zip_code' => 'setShipZipCode',
        'ship_prefecture' => 'setShipPrefecture',
        'ship_city' => 'setShipCity',
        'ship_address1' => 'setShipAddress1',
        'ship_address2' => 'setShipAddress2',
        'ship_phone_number' => 'setShipPhoneNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_first_name' => 'getShipFirstName',
        'ship_last_name' => 'getShipLastName',
        'ship_zip_code' => 'getShipZipCode',
        'ship_prefecture' => 'getShipPrefecture',
        'ship_city' => 'getShipCity',
        'ship_address1' => 'getShipAddress1',
        'ship_address2' => 'getShipAddress2',
        'ship_phone_number' => 'getShipPhoneNumber',
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
        $this->container['ship_first_name'] = isset($data['ship_first_name']) ? $data['ship_first_name'] : null;
        $this->container['ship_last_name'] = isset($data['ship_last_name']) ? $data['ship_last_name'] : null;
        $this->container['ship_zip_code'] = isset($data['ship_zip_code']) ? $data['ship_zip_code'] : null;
        $this->container['ship_prefecture'] = isset($data['ship_prefecture']) ? $data['ship_prefecture'] : null;
        $this->container['ship_city'] = isset($data['ship_city']) ? $data['ship_city'] : null;
        $this->container['ship_address1'] = isset($data['ship_address1']) ? $data['ship_address1'] : null;
        // $this->container['ship_address2'] = isset($data['ship_address2']) ? $data['ship_address2'] : null;
        $this->container['ship_phone_number'] = isset($data['ship_phone_number']) ? $data['ship_phone_number'] : null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * @return mixed
     */
    public function getShipFirstName()
    {
        return $this->container['ship_first_name'];
    }

    /**
     * @param $ship_first_name
     * @return $this
     */
    public function setShipFirstName($ship_first_name)
    {
        $this->container['ship_first_name'] = $ship_first_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipLastName()
    {
        return $this->container['ship_last_name'];
    }

    /**
     * @param $ship_last_name
     * @return $this
     */
    public function setShipLastName($ship_last_name)
    {
        $this->container['ship_last_name'] = $ship_last_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipZipCode()
    {
        return $this->container['ship_zip_code'];
    }

    /**
     * @param $ship_zip_code
     * @return $this
     */
    public function setShipZipCode($ship_zip_code)
    {
        $this->container['ship_zip_code'] = $ship_zip_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipPrefecture()
    {
        return $this->container['ship_prefecture'];
    }

    /**
     * @param $ship_prefecture
     * @return $this
     */
    public function setShipPrefecture($ship_prefecture)
    {
        $this->container['ship_prefecture'] = $ship_prefecture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipCity()
    {
        return $this->container['ship_city'];
    }

    /**
     * @param $ship_city
     * @return $this
     */
    public function setShipCity($ship_city)
    {
        $this->container['ship_city'] = $ship_city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipAddress1()
    {
        return $this->container['ship_address1'];
    }

    /**
     * @param $ship_address1
     * @return $this
     */
    public function setShipAddress1($ship_address1)
    {
        $this->container['ship_address1'] = $ship_address1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipAddress2()
    {
        return $this->container['ship_address2'];
    }

    /**
     * @param $ship_address2
     * @return $this
     */
    public function setShipAddress2($ship_address2)
    {
        $this->container['ship_address2'] = $ship_address2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipPhoneNumber()
    {
        return $this->container['ship_phone_number'];
    }

    /**
     * @param $ship_phone_number
     * @return $this
     */
    public function setShipPhoneNumber($ship_phone_number)
    {
        $this->container['ship_phone_number'] = $ship_phone_number;

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