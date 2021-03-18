<?php
namespace Goletter\YahooAPI;

class Signature
{
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