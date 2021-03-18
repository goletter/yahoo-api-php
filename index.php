<?php

require_once './vendor/autoload.php';


$accessToken = 'NWKWIWRquPWpNAAiOtyW24CnRMRjz7z0eBDRPph5L2Xeei3jMZHNWhPW5dBr2wKAv8LSyU0YJmG2uZNx1MoKTwl2LB.HiBQLRN6FI8xW2zcvFUEpW1Qt5m3iPDD1WMzdcvih9pkBifxA24OmgOVFcWbeLHu9I1.E03mNqzXTpUumUmEIEmHSZgXeXfE9DXcXCVhVibcJsiB9cMw09svwRlmK0JYJkbOeNxfKVpBLFr5moR98CIwpx4mgbk0Cae.ucmrfwNnd3RAMCHtKUzZjjTD9yw6enaw04izsrnFH2UN6DJala0fyHKVkLC6tfNkN3fdTWe7tlzNoVm51dokblyGzM7Fadx8jnDXUwpfqhjsRmQW3PPA5nJV797MuhmddvmnE6RwWieEJ0hesgznuWAhmG1SWA1Pxsuum7mVBgAFWn1D7dnxdpNUG7Gd0hjLaPOs0RlLZiizk21fJkBgxfdGR385V.LN.hLgIaJ4I9KCOyOpY2PinhOoR.fX.7peG4Js0PgB.gLEdeXFyJGoB2ZwIHLHkbARZm8al51AUFt_dkZrN1LtkeDW68X5HB0lmaGJrayFQfxy_TbWRmSDIt5aKGDEtHfagrm_srAcid_DTjWAXgS0rCpgVCC2jKvf.e31fT5NfzGE1z8UMbPNHllyG0flJUGAW3wOEZHD9nqDTqcH9Br_AZ1bNrWzXDukqy3hJlQgx2fgkIrG9J_dKyhoQLUT56n30sD950p9GvWxhnyUphvBf0SMnmksN73DxYx7DS3zHvxjdQct1_OrRX8d5KsqjpYZfw287L7U3aTFxIBCJ_WJOYwMTh7cgomfqiqRrCjPlPskamiB5XOQmqasmrUJMbzKa2KRVGnhkhsA8FLR9EsuKa8qtrvwylEMblpiQmhu_Lua9JyEPJ9Nv6v9diAtgNNE0FgNdufV64fHHIuXJs_efrHjYNiarCUV5v2RNG1aTNts0bZP9LfYSaMWqmXjbnZDmdkkjqxRD3av6zkweNztZYq5B6LZLY6JNWAUKcPgA0A2JhdjUqQ97GVndQ0hFbKWYrHODgFgoiNgeQaDDTdM_XrDZ2STxAlDEWMKloC79bsY_f3TnE3l.FSWzf3qHqk0WEOIZEcF2tmNI_6oF0J5bSyfFbnZbDOY35.AAqj02j4gWPJfhryxkwUEXgM1GprrBa6UWUr89pUlqKogP5L_raGw3.umwhg2j.eRWrWDHg3u7S9DhOrrF_scImG.uX4wJmdZprSfgY5HYkxzfWJzT1dh2OESrxbxTkGI.rP_80B12SMin.kyWG8xE9jCnCSmHJX9AeHIR_zg3duH7ZQ76NUG.WvmX57gYQxJBLGhm4L5DHvsbTkogcfJ2SQIwIheujTmXjxpRellXRB_K4US.z.i_20cNgLp9Xx7QkQ3LUVHEyshr39kfKkZu_XmMoS39owmitPN.681OzinrxLq0vleVGIBAVWhuccTMyiD0o5gQnqKPtRnRhBZt6GN9Rxb8XVPITG6gMruPohw6AaK2bDB2L.atBKfAH_1oHF1F7YS2E7WDgbeKJ9Ysx9QJf.KcVIM3tPbfLjYM75rC_2uruoYbPoESwp.6aIQeNm29z1SOzCwvya3kLXOegWeyCF4C4x67njPP7uQ_.oJHgNeK2Ecm5S_xwCXWO9xXlGkj8t2tbaeOd5Sb_ZkVDOAZhCZm4mvk6wSJvYj6FzLz94vqNjpJZpsBK.q_aGpSKteZPdyjuG9FvJSrY_ncSnDM0.Tm7bD60J2Z96W6e9K9hkvdQy2Vrk_VZ6psG82oeOYAmJX55Maii1L.1j1BJnQ.NJg90V_6_ph3KRiLUVal5KAto0Tp8aw.vl8P3jaDoF0Mqc.8tpwPYITfsQCz58KTuyPZ8uEhgWDYztgBMLC9vy7tPgrd1dZNid6DvjNN5osScgHkSKArdORdRCSmZJ5oIndPatc2fUrdO8WHkd4OkQLuWcOpsjkmNv7WYdaahHG8B54RNUsZGBUd7QummMEXaKtyEBayXKAEuhntZiqnlxGN.mCWLZitQNJhpTYQNCmLxqlh1ZgYI45pkc9IP0o8gwtwA8RkxzpgVi7xYWk9zlxxF0lGmio2LOVREH_TyGsdUgD.PnFpQVtWmz9U0hk0UDSqn3bFhfDxvjg6I_WmTkriF3P2vvPWfAfCPXvoiP.SrW519yyKdBbckY6g0FIy';
$config = \Goletter\YahooAPI\Configuration::getDefaultConfiguration();
$config->setAccessToken($accessToken);
$config->setDebug(true);
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


