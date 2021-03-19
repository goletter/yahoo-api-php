<?php
namespace Goletter\YahooAPI;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * Class YahooOAuth
 * @package Goletter\YahooAPI
 */
class YahooOAuth {

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
    }

    /**
     * @throws \Exception
     */
    public function getAuthorizationUrl()
    {
        $state = bin2hex(random_bytes(32 / 2));
        $params = [
            'response_type' => 'code',
            'client_id' => $this->config->getClientId(),
            'redirect_uri' => $this->config->getRedirectUri(),
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
     * @param $code
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccessToken($code)
    {
        $options = [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->config->getClientId() . ':' . $this->config->getClientSecret())
            ],
            'form_params' => [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => $this->config->getRedirectUri(),
            ],
            'curl' => [
                CURLOPT_SSLCERT => $this->config->getCertPath(),
                CURLOPT_SSLKEY => $this->config->getKeyPath()
            ]
        ];
        $response = $this->client->request('POST', 'https://auth.login.yahoo.co.jp/yconnect/v1/token', $options);
        $body = $response->getBody();
        $bodyAsJson = json_decode($body, true);
        if (isset($bodyAsJson['error_description'])) {
            // throw new YahooOAuthException($bodyAsJson['error_description'], $bodyAsJson['error']);
        }

        return $bodyAsJson;
    }

    /**
     * @param $refreshToken
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRefreshToken($refreshToken)
    {
        $client = new Client();
        $options = [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->config->getClientId() . ':' . $this->config->getClientSecret()),
            ],
            'form_params' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => $refreshToken,
            ],
            'curl' => [
                CURLOPT_SSLCERT => $this->config->getCertPath(),
                CURLOPT_SSLKEY => $this->config->getKeyPath()
            ]
        ];
        $response = $client->request('POST', 'https://auth.login.yahoo.co.jp/yconnect/v1/token', $options);
        $body = $response->getBody();

        $bodyAsJson = json_decode($body, true);
        if (isset($bodyAsJson['error_description'])) {
            // throw new YahooOAuthException($bodyAsJson['error_description'], $bodyAsJson['error']);
        }

        return $bodyAsJson['access_token'];
    }
}