<?php
namespace Goletter\YahooAPI;

use Goletter\YahooAPI\Helpers\AbstractProvider;
use Psr\Http\Message\ResponseInterface;

class YahooOAuth extends AbstractProvider {
    protected function getDefaultScopes()
    {
        return 'openid+profile';
    }

    public function getBaseAuthorizationUrl()
    {
        return 'https://auth.login.yahoo.co.jp/yconnect/v1/authorization';
    }

    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://auth.login.yahoo.co.jp/yconnect/v1/token';
    }

    protected function checkResponse(ResponseInterface $response, $data)
    {
        // TODO: Implement checkResponse() method.
    }
}