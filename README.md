# Yahoo API PHP 

This is an API Binding in PHP for the new Yahoo API.
# Requirements

- PHP >= 7.3
- cURL Extension
- JSON Extension
- MBString Extension

# Installation

Just require this package via composer:

```
composer require goletter/yahoo-api-php
```

## Yahoo

For when you entered the in your developer profile:

```php
<?php

require_once './vendor/autoload.php';

$accessToken = '';
$config = \Goletter\YahooAPI\Configuration::getDefaultConfiguration();
$config->setClientId('xxxx');
$config->setClientSecret('xxxx');
$config->setRedirectUri('http://www.xxx.com');
$config->setAccessToken($accessToken);
$config->setSellerId('nimaso');
$config->setCertPath('/cart/nimaso.crt');
$config->setKeyPath('/cart/nimaso.key');

$orderTimeFrom = 20210315000000;
$orderTimeTo = 20210317000000;
$apiInstance = new \Goletter\YahooAPI\Api\OrdersApi($config);
$result = $apiInstance->getOrders($orderTimeFrom, $orderTimeTo);
$orders = $result->getPayload();
```