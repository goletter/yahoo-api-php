<?php

require_once './vendor/autoload.php';

$provider = new Goletter\YahooAPI\YahooOAuth([
    'clientId'     => '{Yahoo-app-id}',
    'clientSecret' => '{Yahoo-app-secret}',
    'redirectUri'  => 'https://example.com/callback-url',
]);

if (empty($_GET['code'])) {
    $provider->authorize();
    exit;
} else {
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);
}


