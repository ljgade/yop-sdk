<?php
/**
 * OrderSdkPayOrderSdkOrderResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 网银支付
 *
 * <p>提供网银支付相关服务（支付下单等功能）</p>
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

namespace Yeepay\Yop\Sdk\Service\Netpay\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * OrderSdkPayOrderSdkOrderResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderSdkPayOrderSdkOrderResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderSdkPayOrderSdkOrderResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'uniqueOrderNo' => 'string',
        'requestParam' => 'string',
        'scene' => 'string',
        'payChannel' => 'string',
        'bankCode' => 'string',
        'bankAppName' => 'string',
        'cardType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'uniqueOrderNo' => null,
        'requestParam' => null,
        'scene' => null,
        'payChannel' => null,
        'bankCode' => null,
        'bankAppName' => null,
        'cardType' => null
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
        'code' => 'code',
        'message' => 'message',
        'uniqueOrderNo' => 'uniqueOrderNo',
        'requestParam' => 'requestParam',
        'scene' => 'scene',
        'payChannel' => 'payChannel',
        'bankCode' => 'bankCode',
        'bankAppName' => 'bankAppName',
        'cardType' => 'cardType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'uniqueOrderNo' => 'setUniqueOrderNo',
        'requestParam' => 'setRequestParam',
        'scene' => 'setScene',
        'payChannel' => 'setPayChannel',
        'bankCode' => 'setBankCode',
        'bankAppName' => 'setBankAppName',
        'cardType' => 'setCardType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'uniqueOrderNo' => 'getUniqueOrderNo',
        'requestParam' => 'getRequestParam',
        'scene' => 'getScene',
        'payChannel' => 'getPayChannel',
        'bankCode' => 'getBankCode',
        'bankAppName' => 'getBankAppName',
        'cardType' => 'getCardType'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['uniqueOrderNo'] = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['requestParam'] = isset($data['requestParam']) ? $data['requestParam'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['payChannel'] = isset($data['payChannel']) ? $data['payChannel'] : null;
        $this->container['bankCode'] = isset($data['bankCode']) ? $data['bankCode'] : null;
        $this->container['bankAppName'] = isset($data['bankAppName']) ? $data['bankAppName'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 返回信息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->container['uniqueOrderNo'];
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo 易宝唯一流水号
     *
     * @return $this
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->container['uniqueOrderNo'] = $uniqueOrderNo;

        return $this;
    }

    /**
     * Gets requestParam
     *
     * @return string
     */
    public function getRequestParam()
    {
        return $this->container['requestParam'];
    }

    /**
     * Sets requestParam
     *
     * @param string $requestParam 返回参数
     *
     * @return $this
     */
    public function setRequestParam($requestParam)
    {
        $this->container['requestParam'] = $requestParam;

        return $this;
    }

    /**
     * Gets scene
     *
     * @return string
     */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
     * Sets scene
     *
     * @param string $scene 场景类型
     *
     * @return $this
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

        return $this;
    }

    /**
     * Gets payChannel
     *
     * @return string
     */
    public function getPayChannel()
    {
        return $this->container['payChannel'];
    }

    /**
     * Sets payChannel
     *
     * @param string $payChannel 支付渠道
     *
     * @return $this
     */
    public function setPayChannel($payChannel)
    {
        $this->container['payChannel'] = $payChannel;

        return $this;
    }

    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->container['bankCode'];
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode 银行编码
     *
     * @return $this
     */
    public function setBankCode($bankCode)
    {
        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets bankAppName
     *
     * @return string
     */
    public function getBankAppName()
    {
        return $this->container['bankAppName'];
    }

    /**
     * Sets bankAppName
     *
     * @param string $bankAppName 银行标识
     *
     * @return $this
     */
    public function setBankAppName($bankAppName)
    {
        $this->container['bankAppName'] = $bankAppName;

        return $this;
    }

    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['cardType'];
    }

    /**
     * Sets cardType
     *
     * @param string $cardType 卡种类型
     *
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->container['cardType'] = $cardType;

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


