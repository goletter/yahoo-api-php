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
        'amazon_order_id' => 'string',
        'seller_order_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amazon_order_id' => null,
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
        'amazon_order_id' => 'AmazonOrderId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
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

    const ORDER_STATUS_PENDING = 'Pending';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS_PENDING,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getFulfillmentChannelAllowableValues()
    {
        return [];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getOrderTypeAllowableValues()
    {
        return [];
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
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['amazon_order_id']) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
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
     * Gets amazon_order_id.
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param string $amazon_order_id an Amazon-defined order identifier, in 3-7-7 format
     *
     * @return $this
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets seller_order_id.
     *
     * @return string
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param string $seller_order_id a seller-defined order identifier
     *
     * @return $this
     */
    public function setSellerOrderId($seller_order_id)
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets purchase_date.
     *
     * @return string
     */
    public function getPurchaseDate()
    {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date.
     *
     * @param string $purchase_date the date when the order was created
     *
     * @return $this
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }

    /**
     * Gets last_update_date.
     *
     * @return string
     */
    public function getLastUpdateDate()
    {
        return $this->container['last_update_date'];
    }

    /**
     * Sets last_update_date.
     *
     * @param string $last_update_date The date when the order was last updated.  Note: LastUpdateDate is returned with an incorrect date for orders that were last updated before 2009-04-01.
     *
     * @return $this
     */
    public function setLastUpdateDate($last_update_date)
    {
        $this->container['last_update_date'] = $last_update_date;

        return $this;
    }

    /**
     * Gets order_status.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status.
     *
     * @param string $order_status the current order status
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!in_array($order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'order_status', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets fulfillment_channel.
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel.
     *
     * @param string $fulfillment_channel whether the order was fulfilled by Amazon (AFN) or by the seller (MFN)
     *
     * @return $this
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $allowedValues = $this->getFulfillmentChannelAllowableValues();
        if (!is_null($fulfillment_channel) && !in_array($fulfillment_channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'fulfillment_channel', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets sales_channel.
     *
     * @return string
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel.
     *
     * @param string $sales_channel the sales channel of the first item in the order
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets order_channel.
     *
     * @return string
     */
    public function getOrderChannel()
    {
        return $this->container['order_channel'];
    }

    /**
     * Sets order_channel.
     *
     * @param string $order_channel the order channel of the first item in the order
     *
     * @return $this
     */
    public function setOrderChannel($order_channel)
    {
        $this->container['order_channel'] = $order_channel;

        return $this;
    }

    /**
     * Gets ship_service_level.
     *
     * @return string
     */
    public function getShipServiceLevel()
    {
        return $this->container['ship_service_level'];
    }

    /**
     * Sets ship_service_level.
     *
     * @param string $ship_service_level the shipment service level of the order
     *
     * @return $this
     */
    public function setShipServiceLevel($ship_service_level)
    {
        $this->container['ship_service_level'] = $ship_service_level;

        return $this;
    }

    /**
     * Gets order_total.
     *
     * @return \Goletter\AmazonSellingPartnerAPI\Models\Orders\Money
     */
    public function getOrderTotal()
    {
        return $this->container['order_total'];
    }

    /**
     * Sets order_total.
     *
     * @param \Goletter\AmazonSellingPartnerAPI\Models\Orders\Money $order_total order_total
     *
     * @return $this
     */
    public function setOrderTotal($order_total)
    {
        $this->container['order_total'] = $order_total;

        return $this;
    }

    /**
     * Gets number_of_items_shipped.
     *
     * @return int
     */
    public function getNumberOfItemsShipped()
    {
        return $this->container['number_of_items_shipped'];
    }

    /**
     * Sets number_of_items_shipped.
     *
     * @param int $number_of_items_shipped the number of items shipped
     *
     * @return $this
     */
    public function setNumberOfItemsShipped($number_of_items_shipped)
    {
        $this->container['number_of_items_shipped'] = $number_of_items_shipped;

        return $this;
    }

    /**
     * Gets number_of_items_unshipped.
     *
     * @return int
     */
    public function getNumberOfItemsUnshipped()
    {
        return $this->container['number_of_items_unshipped'];
    }

    /**
     * Sets number_of_items_unshipped.
     *
     * @param int $number_of_items_unshipped the number of items unshipped
     *
     * @return $this
     */
    public function setNumberOfItemsUnshipped($number_of_items_unshipped)
    {
        $this->container['number_of_items_unshipped'] = $number_of_items_unshipped;

        return $this;
    }

    /**
     * Gets payment_execution_detail.
     *
     * @return \Goletter\AmazonSellingPartnerAPI\Models\Orders\PaymentExecutionDetailItemList
     */
    public function getPaymentExecutionDetail()
    {
        return $this->container['payment_execution_detail'];
    }

    /**
     * Sets payment_execution_detail.
     *
     * @param \Goletter\AmazonSellingPartnerAPI\Models\Orders\PaymentExecutionDetailItemList $payment_execution_detail payment_execution_detail
     *
     * @return $this
     */
    public function setPaymentExecutionDetail($payment_execution_detail)
    {
        $this->container['payment_execution_detail'] = $payment_execution_detail;

        return $this;
    }

    /**
     * Gets payment_method.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method.
     *
     * @param string $payment_method The payment method for the order. This property is limited to Cash On Delivery (COD) and Convenience Store (CVS) payment methods. Unless you need the specific COD payment information provided by the PaymentExecutionDetailItem object, we recommend using the PaymentMethodDetails property to get payment method information.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'payment_method', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_details.
     *
     * @return \Goletter\AmazonSellingPartnerAPI\Models\Orders\PaymentMethodDetailItemList
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details.
     *
     * @param \Goletter\AmazonSellingPartnerAPI\Models\Orders\PaymentMethodDetailItemList $payment_method_details payment_method_details
     *
     * @return $this
     */
    public function setPaymentMethodDetails($payment_method_details)
    {
        $this->container['payment_method_details'] = $payment_method_details;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the identifier for the marketplace where the order was placed
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets shipment_service_level_category.
     *
     * @return string
     */
    public function getShipmentServiceLevelCategory()
    {
        return $this->container['shipment_service_level_category'];
    }

    /**
     * Sets shipment_service_level_category.
     *
     * @param string $shipment_service_level_category The shipment service level category of the order.  Possible values: Expedited, FreeEconomy, NextDay, SameDay, SecondDay, Scheduled, Standard.
     *
     * @return $this
     */
    public function setShipmentServiceLevelCategory($shipment_service_level_category)
    {
        $this->container['shipment_service_level_category'] = $shipment_service_level_category;

        return $this;
    }

    /**
     * Gets easy_ship_shipment_status.
     *
     * @return string
     */
    public function getEasyShipShipmentStatus()
    {
        return $this->container['easy_ship_shipment_status'];
    }

    /**
     * Sets easy_ship_shipment_status.
     *
     * @param string $easy_ship_shipment_status The status of the Amazon Easy Ship order. This property is included only for Amazon Easy Ship orders.  Possible values: PendingPickUp, LabelCanceled, PickedUp, OutForDelivery, Damaged, Delivered, RejectedByBuyer, Undeliverable, ReturnedToSeller, ReturningToSeller.
     *
     * @return $this
     */
    public function setEasyShipShipmentStatus($easy_ship_shipment_status)
    {
        $this->container['easy_ship_shipment_status'] = $easy_ship_shipment_status;

        return $this;
    }

    /**
     * Gets cba_displayable_shipping_label.
     *
     * @return string
     */
    public function getCbaDisplayableShippingLabel()
    {
        return $this->container['cba_displayable_shipping_label'];
    }

    /**
     * Sets cba_displayable_shipping_label.
     *
     * @param string $cba_displayable_shipping_label custom ship label for Checkout by Amazon (CBA)
     *
     * @return $this
     */
    public function setCbaDisplayableShippingLabel($cba_displayable_shipping_label)
    {
        $this->container['cba_displayable_shipping_label'] = $cba_displayable_shipping_label;

        return $this;
    }

    /**
     * Gets order_type.
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type.
     *
     * @param string $order_type the type of the order
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($order_type) && !in_array($order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'order_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets earliest_ship_date.
     *
     * @return string
     */
    public function getEarliestShipDate()
    {
        return $this->container['earliest_ship_date'];
    }

    /**
     * Sets earliest_ship_date.
     *
     * @param string $earliest_ship_date The start of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.  Note: EarliestShipDate might not be returned for orders placed before February 1, 2013.
     *
     * @return $this
     */
    public function setEarliestShipDate($earliest_ship_date)
    {
        $this->container['earliest_ship_date'] = $earliest_ship_date;

        return $this;
    }

    /**
     * Gets latest_ship_date.
     *
     * @return string
     */
    public function getLatestShipDate()
    {
        return $this->container['latest_ship_date'];
    }

    /**
     * Sets latest_ship_date.
     *
     * @param string $latest_ship_date The end of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.  Note: LatestShipDate might not be returned for orders placed before February 1, 2013.
     *
     * @return $this
     */
    public function setLatestShipDate($latest_ship_date)
    {
        $this->container['latest_ship_date'] = $latest_ship_date;

        return $this;
    }

    /**
     * Gets earliest_delivery_date.
     *
     * @return string
     */
    public function getEarliestDeliveryDate()
    {
        return $this->container['earliest_delivery_date'];
    }

    /**
     * Sets earliest_delivery_date.
     *
     * @param string $earliest_delivery_date The start of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.
     *
     * @return $this
     */
    public function setEarliestDeliveryDate($earliest_delivery_date)
    {
        $this->container['earliest_delivery_date'] = $earliest_delivery_date;

        return $this;
    }

    /**
     * Gets latest_delivery_date.
     *
     * @return string
     */
    public function getLatestDeliveryDate()
    {
        return $this->container['latest_delivery_date'];
    }

    /**
     * Sets latest_delivery_date.
     *
     * @param string $latest_delivery_date The end of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders that do not have a PendingAvailability, Pending, or Canceled status.
     *
     * @return $this
     */
    public function setLatestDeliveryDate($latest_delivery_date)
    {
        $this->container['latest_delivery_date'] = $latest_delivery_date;

        return $this;
    }

    /**
     * Gets is_business_order.
     *
     * @return bool
     */
    public function getIsBusinessOrder()
    {
        return $this->container['is_business_order'];
    }

    /**
     * Sets is_business_order.
     *
     * @param bool $is_business_order When true, the order is an Amazon Business order. An Amazon Business order is an order where the buyer is a Verified Business Buyer.
     *
     * @return $this
     */
    public function setIsBusinessOrder($is_business_order)
    {
        $this->container['is_business_order'] = $is_business_order;

        return $this;
    }

    /**
     * Gets is_prime.
     *
     * @return bool
     */
    public function getIsPrime()
    {
        return $this->container['is_prime'];
    }

    /**
     * Sets is_prime.
     *
     * @param bool $is_prime when true, the order is a seller-fulfilled Amazon Prime order
     *
     * @return $this
     */
    public function setIsPrime($is_prime)
    {
        $this->container['is_prime'] = $is_prime;

        return $this;
    }

    /**
     * Gets is_premium_order.
     *
     * @return bool
     */
    public function getIsPremiumOrder()
    {
        return $this->container['is_premium_order'];
    }

    /**
     * Sets is_premium_order.
     *
     * @param bool $is_premium_order When true, the order has a Premium Shipping Service Level Agreement. For more information about Premium Shipping orders, see \"Premium Shipping Options\" in the Seller Central Help for your marketplace.
     *
     * @return $this
     */
    public function setIsPremiumOrder($is_premium_order)
    {
        $this->container['is_premium_order'] = $is_premium_order;

        return $this;
    }

    /**
     * Gets is_global_express_enabled.
     *
     * @return bool
     */
    public function getIsGlobalExpressEnabled()
    {
        return $this->container['is_global_express_enabled'];
    }

    /**
     * Sets is_global_express_enabled.
     *
     * @param bool $is_global_express_enabled when true, the order is a GlobalExpress order
     *
     * @return $this
     */
    public function setIsGlobalExpressEnabled($is_global_express_enabled)
    {
        $this->container['is_global_express_enabled'] = $is_global_express_enabled;

        return $this;
    }

    /**
     * Gets replaced_order_id.
     *
     * @return string
     */
    public function getReplacedOrderId()
    {
        return $this->container['replaced_order_id'];
    }

    /**
     * Sets replaced_order_id.
     *
     * @param string $replaced_order_id The order ID value for the order that is being replaced. Returned only if IsReplacementOrder = true.
     *
     * @return $this
     */
    public function setReplacedOrderId($replaced_order_id)
    {
        $this->container['replaced_order_id'] = $replaced_order_id;

        return $this;
    }

    /**
     * Gets is_replacement_order.
     *
     * @return bool
     */
    public function getIsReplacementOrder()
    {
        return $this->container['is_replacement_order'];
    }

    /**
     * Sets is_replacement_order.
     *
     * @param bool $is_replacement_order when true, this is a replacement order
     *
     * @return $this
     */
    public function setIsReplacementOrder($is_replacement_order)
    {
        $this->container['is_replacement_order'] = $is_replacement_order;

        return $this;
    }

    /**
     * Gets promise_response_due_date.
     *
     * @return string
     */
    public function getPromiseResponseDueDate()
    {
        return $this->container['promise_response_due_date'];
    }

    /**
     * Sets promise_response_due_date.
     *
     * @param string $promise_response_due_date Indicates the date by which the seller must respond to the buyer with an estimated ship date. Returned only for Sourcing on Demand orders.
     *
     * @return $this
     */
    public function setPromiseResponseDueDate($promise_response_due_date)
    {
        $this->container['promise_response_due_date'] = $promise_response_due_date;

        return $this;
    }

    /**
     * Gets is_estimated_ship_date_set.
     *
     * @return bool
     */
    public function getIsEstimatedShipDateSet()
    {
        return $this->container['is_estimated_ship_date_set'];
    }

    /**
     * Sets is_estimated_ship_date_set.
     *
     * @param bool $is_estimated_ship_date_set When true, the estimated ship date is set for the order. Returned only for Sourcing on Demand orders.
     *
     * @return $this
     */
    public function setIsEstimatedShipDateSet($is_estimated_ship_date_set)
    {
        $this->container['is_estimated_ship_date_set'] = $is_estimated_ship_date_set;

        return $this;
    }

    /**
     * Gets is_sold_by_ab.
     *
     * @return bool
     */
    public function getIsSoldByAb()
    {
        return $this->container['is_sold_by_ab'];
    }

    /**
     * Sets is_sold_by_ab.
     *
     * @param bool $is_sold_by_ab When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller.
     *
     * @return $this
     */
    public function setIsSoldByAb($is_sold_by_ab)
    {
        $this->container['is_sold_by_ab'] = $is_sold_by_ab;

        return $this;
    }

    /**
     * Gets assigned_ship_from_location_address.
     *
     * @return \Goletter\AmazonSellingPartnerAPI\Models\Orders\Address
     */
    public function getAssignedShipFromLocationAddress()
    {
        return $this->container['assigned_ship_from_location_address'];
    }

    /**
     * Sets assigned_ship_from_location_address.
     *
     * @param \Goletter\AmazonSellingPartnerAPI\Models\Orders\Address $assigned_ship_from_location_address assigned_ship_from_location_address
     *
     * @return $this
     */
    public function setAssignedShipFromLocationAddress($assigned_ship_from_location_address)
    {
        $this->container['assigned_ship_from_location_address'] = $assigned_ship_from_location_address;

        return $this;
    }

    /**
     * Gets fulfillment_instruction.
     *
     * @return \Goletter\AmazonSellingPartnerAPI\Models\Orders\FulfillmentInstruction
     */
    public function getFulfillmentInstruction()
    {
        return $this->container['fulfillment_instruction'];
    }

    /**
     * Sets fulfillment_instruction.
     *
     * @param \Goletter\AmazonSellingPartnerAPI\Models\Orders\FulfillmentInstruction $fulfillment_instruction fulfillment_instruction
     *
     * @return $this
     */
    public function setFulfillmentInstruction($fulfillment_instruction)
    {
        $this->container['fulfillment_instruction'] = $fulfillment_instruction;

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