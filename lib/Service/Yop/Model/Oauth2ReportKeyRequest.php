<?php


namespace Yeepay\Yop\Sdk\Service\Yop\Model;


class Oauth2ReportKeyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $keyType;
    /**
     * @var string
     */
    private $key;

    /**
     * Gets keyType
     *
     * @return string
     */
    public function getKeyType()
    {
        return $this->keyType;
    }

    /**
     * Sets keyType
     *
     * @param string $keyType
     * @return Oauth2ReportKeyRequest
     */
    public function setKeyType($keyType)
    {
        $this->keyType = $keyType;
        return $this;
    }
    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets key
     *
     * @param string $key
     * @return Oauth2ReportKeyRequest
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    public static function getOperationId()
    {
        return 'oauth2ReportKey';
    }


}
