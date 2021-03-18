<?php
namespace Goletter\YahooAPI;

class Configuration
{
    private static $defaultConfiguration;

    /**
     * Access token for OAuth.
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     *
     * @var string
     */
    protected $certPath = '';

    /**
     *
     * @var string
     */
    protected $keyPath = '';

    /**
     * The host.
     *
     * @var string
     */
    protected $host = 'https://circus.shopping.yahooapis.jp/ShoppingWebService/V1';

    /**
     * Debug switch (default set to false).
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default).
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Gets the default configuration instance.
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (null === self::$defaultConfiguration) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the access token for OAuth.
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Gets the access token for OAuth.
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param $certPath
     * @return $this
     */
    public function setCertPath($certPath)
    {
        $this->certPath = $certPath;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCertPath()
    {
        return $this->certPath;
    }

    /**
     * @param $certPath
     * @return $this
     */
    public function setKeyPath($keyPath)
    {
        $this->keyPath = $keyPath;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeyPath()
    {
        return $this->keyPath;
    }

    /**
     * Sets the host.
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Gets the host.
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets debug flag.
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Gets the debug flag.
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file.
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;

        return $this;
    }

    /**
     * Gets the debug file.
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }
}