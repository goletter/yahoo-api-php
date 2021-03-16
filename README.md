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

$provider = new Goletter\YahooAPI\YahooOAuth([
    'clientId'     => '{Yahoo-app-id}',
    'clientSecret' => '{Yahoo-app-secret}',
    'redirectUri'  => 'https://example.com/callback-url',
]);

$provider->authorize();
```