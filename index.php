<?php

require_once './vendor/autoload.php';

$accessToken = '333';
$config = \Goletter\YahooAPI\Configuration::getDefaultConfiguration();
$config->setAccessToken($accessToken);
$config->setCertPath('/cart/nimaso.crt');
$config->setKeyPath('/cart/nimaso.key');

$order_statuses = '';
$apiInstance = new \Goletter\YahooAPI\Api\OrdersApi($config);
$result = $apiInstance->getOrders($order_statuses);

/*
$options = [
    'client_id' => 'dj0zaiZpPVhZelYyR241eGtjcCZzPWNvbnN1bWVyc2VjcmV0Jng9MzM-',
    'client_secret' => '',
    'redirect_uri' => 'http://oms.nimaso.co.jp/callback'
];
$provider = new \Goletter\YahooAPI\YahooOAuth;
$provider->getAuthorizationUrl($options['client_id'], $options['redirect_uri']);

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


