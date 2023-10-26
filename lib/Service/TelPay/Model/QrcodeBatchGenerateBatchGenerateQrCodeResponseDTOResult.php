<?php
/**
 * QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 电信支付
 *
 * <p>电信行业线易宝通应用-支付服务</p>
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\TelPay\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'retCode' => 'string',
        'retMsg' => 'string',
        'qrCodeInfo' => '\Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeBatchGenerateQrCodeApiInfoResult[]',
        'requestId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'retCode' => null,
        'retMsg' => null,
        'qrCodeInfo' => null,
        'requestId' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'retCode' => 'retCode',
        'retMsg' => 'retMsg',
        'qrCodeInfo' => 'qrCodeInfo',
        'requestId' => 'requestId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'retCode' => 'setRetCode',
        'retMsg' => 'setRetMsg',
        'qrCodeInfo' => 'setQrCodeInfo',
        'requestId' => 'setRequestId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retCode' => 'getRetCode',
        'retMsg' => 'getRetMsg',
        'qrCodeInfo' => 'getQrCodeInfo',
        'requestId' => 'getRequestId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['retCode'] = isset($data['retCode']) ? $data['retCode'] : null;
        $this->container['retMsg'] = isset($data['retMsg']) ? $data['retMsg'] : null;
        $this->container['qrCodeInfo'] = isset($data['qrCodeInfo']) ? $data['qrCodeInfo'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets retCode
     *
     * @return string
     */
    public function getRetCode()
    {
        return $this->container['retCode'];
    }

    /**
     * Sets retCode
     *
     * @param string $retCode 返回码
     *
     * @return $this
     */
    public function setRetCode($retCode)
    {
        $this->container['retCode'] = $retCode;

        return $this;
    }

    /**
     * Gets retMsg
     *
     * @return string
     */
    public function getRetMsg()
    {
        return $this->container['retMsg'];
    }

    /**
     * Sets retMsg
     *
     * @param string $retMsg 返回信息
     *
     * @return $this
     */
    public function setRetMsg($retMsg)
    {
        $this->container['retMsg'] = $retMsg;

        return $this;
    }

    /**
     * Gets qrCodeInfo
     *
     * @return \Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeBatchGenerateQrCodeApiInfoResult[]
     */
    public function getQrCodeInfo()
    {
        return $this->container['qrCodeInfo'];
    }

    /**
     * Sets qrCodeInfo
     *
     * @param \Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeBatchGenerateQrCodeApiInfoResult[] $qrCodeInfo 二维码信息
     *
     * @return $this
     */
    public function setQrCodeInfo($qrCodeInfo)
    {
        $this->container['qrCodeInfo'] = $qrCodeInfo;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string $requestId 请求号
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


