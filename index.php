<?php
require_once './vendor/autoload.php';

$accessToken = '';
$config = \Goletter\YahooAPI\Configuration::getDefaultConfiguration();
$config->setAccessToken($accessToken);
$config->setSellerId('nimaso');
$config->setCertPath('/cart/nimaso.crt');
$config->setKeyPath('/cart/nimaso.key');

$orderTimeFrom = 20210315000000;
$orderTimeTo = 20210317000000;
$apiInstance = new \Goletter\YahooAPI\Api\OrdersApi($config);
$result = $apiInstance->getOrder('xx');
$orders = $result->getPayload();
print_r($orders);exit;


