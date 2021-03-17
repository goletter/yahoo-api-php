<?php
namespace Goletter\YahooAPI;

use GuzzleHttp\Client;

class YahooOAuth {
    /**
     * @param $clientId
     * @param $redirectUri
     * @throws \Exception
     */
    public function getAuthorizationUrl($clientId, $redirectUri)
    {
        $state = bin2hex(random_bytes(32 / 2));
        $params = [
            'response_type' => 'code',
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
            'scope' => 'openid+profile',
            'bail' => 1,
            'state' => $state
        ];

        $authorizationUrl = 'https://auth.login.yahoo.co.jp/yconnect/v1/authorization';
        $url = urldecode($authorizationUrl . '?' . http_build_query($params));
        header('Location: ' . $url);
        exit;
    }

    /**
     * @param $clientId
     * @param $clientSecret
     * @param $code
     * @param $redirectUri
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccessToken($clientId, $clientSecret, $code, $redirectUri)
    {
        $client = new Client();
        $params = [
            'grant_type' => 'authorization_code',
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'code' => $code,
            'redirect_uri' => $redirectUri,
        ];
        $options = array_merge([
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($clientId . ':' . $clientSecret)
            ],
        ], $params);
        $response = $client->request('POST', 'https://auth.login.yahoo.co.jp/yconnect/v1/token', $options);
        $body = $response->getBody()->getContents();
        $bodyAsJson = json_decode($body, true);
        if (isset($bodyAsJson['error_description'])) {
            // throw new YahooOAuthException($bodyAsJson['error_description'], $bodyAsJson['error']);
        }

        return $bodyAsJson['refresh_token'];
    }

    /**
     * @param $clientId
     * @param $clientSecret
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRefreshToken($clientId, $clientSecret)
    {
        $client = new Client();
        $params = [
            'grant_type' => 'refresh_token',
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
        ];
        $options = array_merge([
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($clientId . ':' . $clientSecret)
            ],
        ], $params);
        $response = $client->request('POST', 'https://auth.login.yahoo.co.jp/yconnect/v1/token', $options);
        $body = $response->getBody()->getContents();

        $bodyAsJson = json_decode($body, true);
        if (isset($bodyAsJson['error_description'])) {
            // throw new YahooOAuthException($bodyAsJson['error_description'], $bodyAsJson['error']);
        }

        return $bodyAsJson['access_token'];
    }
}