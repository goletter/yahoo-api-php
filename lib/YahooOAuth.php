<?php
namespace Goletter\YahooAPI;

use Goletter\YahooAPI\Helpers\AbstractProvider;

class YahooOAuth extends AbstractProvider {

    public function getAccessToken($grant, array $options = [])
    {
        $params = [
            'client_id'     => $this->clientId,
            'client_secret' => $this->clientSecret,
            'redirect_uri'  => $this->redirectUri,
        ];

        echo 'token';
    }

    protected function getDefaultScopes()
    {
        return 'openid+profile';
    }

    public function getBaseAuthorizationUrl()
    {
        return 'https://auth.login.yahoo.co.jp/yconnect/v1/authorization';
    }
}