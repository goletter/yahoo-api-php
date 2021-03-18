<?php
namespace Goletter\YahooAPI\Api;

use Goletter\YahooAPI\Configuration;
use Goletter\YahooAPI\HeaderSelector;
use Goletter\YahooAPI\Helpers\YahooApiRequest;
use Goletter\YahooAPI\Models\Orders\GetOrdersResponse;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

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

    public function getOrders($order_statuses)
    {
        list($response) = $this->getOrdersWithHttpInfo($order_statuses);

        return $response;
    }

    public function getOrdersWithHttpInfo($order_statuses)
    {
        $request = $this->getOrdersRequest($order_statuses);

        return $this->sendRequest($request, GetOrdersResponse::class);
    }

    protected function getOrdersRequest($order_statuses)
    {
        $resourcePath = '/orderList';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}