<?php
namespace Goletter\YahooAPI\Api;

use Goletter\YahooAPI\ObjectSerializer;
use Goletter\YahooAPI\Configuration;
use Goletter\YahooAPI\HeaderSelector;
use Goletter\YahooAPI\Helpers\YahooApiRequest;
use Goletter\YahooAPI\Models\Orders\GetOrdersResponse;
use Goletter\YahooAPI\Models\Orders\GetOrderResponse;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * Class OrdersApi
 * @package Goletter\YahooAPI\Api
 */
class OrdersApi
{
    use YahooApiRequest;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return mixed
     * @throws \Goletter\YahooAPI\ApiException
     */
    public function getOrders($orderTimeFrom, $orderTimeTo)
    {
        list($response) = $this->getOrdersWithHttpInfo($orderTimeFrom, $orderTimeTo);

        return $response;
    }

    /**
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return array
     * @throws \Goletter\YahooAPI\ApiException
     */
    public function getOrdersWithHttpInfo($orderTimeFrom, $orderTimeTo)
    {
        $request = $this->getOrdersRequest($orderTimeFrom, $orderTimeTo);

        return $this->sendRequest($request, GetOrdersResponse::class);
    }

    /**
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrdersRequest($orderTimeFrom, $orderTimeTo)
    {
        // verify the required parameter 'sellerId' is set
        $sellerId = $this->config->getSellerId();
        if (null === $sellerId) {
            throw new \InvalidArgumentException('Missing the required parameter $sellerId when calling getOrders');
        }

        // query params
        if (null !== $orderTimeFrom) {
            $queryParams['OrderTimeFrom'] = ObjectSerializer::toQueryValue($orderTimeFrom);
        }

        // query params
        if (null !== $orderTimeTo) {
            $queryParams['OrderTimeTo'] = ObjectSerializer::toQueryValue($orderTimeTo);
        }

        $resourcePath = '/orderList';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $httpBody = <<<EOD
          <Req>
              <SellerId>$sellerId</SellerId>
              <Search>
                   <Condition>
                        <!-- <ShipStatus>1</ShipStatus>
                        <PayStatus>1</PayStatus>
                        <OrderStatus>2</OrderStatus>
                        <IsSeen>true</IsSeen> -->
                        <OrderTimeFrom>$orderTimeFrom</OrderTimeFrom>
                        <OrderTimeTo>$orderTimeTo</OrderTimeTo>
                   </Condition>
                   <Field>OrderId,Version,OriginalOrderId,ParentOrderId,OrderTime,OrderStatus,PayStatus,SettleStatus,PayType,TotalPrice</Field>
                   <Result>2000</Result>
              </Search>
          </Req>
        EOD;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * @param $order_id
     * @return mixed
     */
    public function getOrder($order_id)
    {
        list($response) = $this->getOrderWithHttpInfo($order_id);

        return $response;
    }

    /**
     * @param $order_id
     * @return array
     * @throws \Goletter\YahooAPI\ApiException
     */
    public function getOrderWithHttpInfo($order_id)
    {
        $request = $this->getOrderRequest($order_id);

        return $this->sendRequest($request, GetOrderResponse::class);
    }

    /**
     * @param $order_id
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderRequest($order_id)
    {
        $sellerId = $this->config->getSellerId();
        if (null === $sellerId) {
            throw new \InvalidArgumentException('Missing the required parameter $sellerId when calling getOrders');
        }

        // verify the required parameter 'order_id' is set
        if (null === $order_id || (is_array($order_id) && 0 === count($order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrder');
        }

        $resourcePath = '/orderInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        $httpBody = <<<BODY
            <Req>
                <SellerId>$sellerId</SellerId>
                <Target>
                    <OrderId>$order_id</OrderId>
                    <Field>OrderId,ItemId,Title,SubCode,UnitPrice,Quantity,ShipZipCode,ShipFirstName,ShipLastName,ShipPrefecture,ShipCity,ShipAddress1,ShipAddress2,ShipPhoneNumber</Field>
                </Target>
            </Req>
            BODY;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}