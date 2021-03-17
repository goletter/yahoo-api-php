<?php
namespace Goletter\YahooAPI\Helpers;

trait QueryBuilderTrait
{
    /**
     * Build a query string from an array.
     *
     * @param array $params
     *
     * @return string
     */
    protected function buildQueryString(array $params)
    {
        return urldecode(http_build_query($params));
    }
}