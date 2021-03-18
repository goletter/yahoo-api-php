<?php
namespace Goletter\YahooAPI\Api;

use Goletter\YahooAPI\ObjectSerializer;
use Goletter\YahooAPI\Configuration;
use Goletter\YahooAPI\HeaderSelector;
use Goletter\YahooAPI\Helpers\YahooApiRequest;
use Goletter\YahooAPI\Models\Orders\GetOrdersResponse;
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
     * @param $sellerId
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return mixed
     * @throws \Goletter\YahooAPI\ApiException
     */
    public function getOrders($sellerId, $orderTimeFrom, $orderTimeTo)
    {
        list($response) = $this->getOrdersWithHttpInfo($sellerId, $orderTimeFrom, $orderTimeTo);

        return $response;
    }

    /**
     * @param $sellerId
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return array
     * @throws \Goletter\YahooAPI\ApiException
     */
    public function getOrdersWithHttpInfo($sellerId, $orderTimeFrom, $orderTimeTo)
    {
        $request = $this->getOrdersRequest($sellerId, $orderTimeFrom, $orderTimeTo);

        return $this->sendRequest($request, GetOrdersResponse::class);
    }

    /**
     * @param $sellerId
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrdersRequest($sellerId, $orderTimeFrom, $orderTimeTo)
    {
        // verify the required parameter 'sellerId' is set
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
                   <Field>OrderId,OrderTime,TotalPrice</Field>
                   <Result>2000</Result>
              </Search>
          </Req>
        EOD;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}