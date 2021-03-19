<?php
namespace Goletter\YahooAPI;

class Signature
{
    /**
     * @param Configuration $config
     * @param string $host
     * @param string $method
     * @param string $uri
     * @param string $queryString
     * @param array $data
     * @return array
     */
    public static function calculateSignature(
        Configuration $config,
        string $host,
        string $method,
        $uri = '',
        $queryString = '',
        $data = []
    ) {
        return self::calculateSignatureForService(
            $host,
            $method,
            $uri,
            $queryString,
            $data,
            $config->getAccessToken()
        );
    }

    public static function calculateSignatureForService(
        string $host,
        string $method,
        $uri,
        $queryString,
        $data,
        $accessToken
    ){
        $canonicalHeaders = [
            // 'host' => $host,
        ];

        return array_merge($canonicalHeaders, [
            'Authorization' => 'Bearer ' . $accessToken,
        ]);
    }
}