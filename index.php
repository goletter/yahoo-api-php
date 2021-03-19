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


/*
$provider = new \Goletter\YahooAPI\YahooOAuth([
    'clientId'     => 'dj0zaiZpPVhZelYyR241eGtjcCZzPWNvbnN1bWVyc2VjcmV0Jng9MzM-',
    'clientSecret' => 'd03975ea9b36deb36282774c87e999e7d13cb084',
    'redirectUri'  => 'http://oms.nimaso.co.jp/callback',
]);

$token = $provider->getAccessToken('authorization_code', [
    'code' => '1213213'
]);
exit;

if (empty($_GET['code'])) {
    $provider->getAccessToken();
    exit;
} else {
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);
} */


