<?php
/**
 * TutelagePrePayWrapPrePayOrderResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 聚合支付
 *
 * <p>提供聚合支付相关服务（支付下单、公众号配置等功能</p>
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

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * TutelagePrePayWrapPrePayOrderResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TutelagePrePayWrapPrePayOrderResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TutelagePrePayWrapPrePayOrderResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'orderId' => 'string',
        'uniqueOrderNo' => 'string',
        'prePayTn' => 'string',
        'appId' => 'string',
        'miniProgramPath' => 'string',
        'miniProgramOrgId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'orderId' => null,
        'uniqueOrderNo' => null,
        'prePayTn' => null,
        'appId' => null,
        'miniProgramPath' => null,
        'miniProgramOrgId' => null
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
        'orderId' => 'orderId',
        'uniqueOrderNo' => 'uniqueOrderNo',
        'prePayTn' => 'prePayTn',
        'appId' => 'appId',
        'miniProgramPath' => 'miniProgramPath',
        'miniProgramOrgId' => 'miniProgramOrgId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'orderId' => 'setOrderId',
        'uniqueOrderNo' => 'setUniqueOrderNo',
        'prePayTn' => 'setPrePayTn',
        'appId' => 'setAppId',
        'miniProgramPath' => 'setMiniProgramPath',
        'miniProgramOrgId' => 'setMiniProgramOrgId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'orderId' => 'getOrderId',
        'uniqueOrderNo' => 'getUniqueOrderNo',
        'prePayTn' => 'getPrePayTn',
        'appId' => 'getAppId',
        'miniProgramPath' => 'getMiniProgramPath',
        'miniProgramOrgId' => 'getMiniProgramOrgId'
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['uniqueOrderNo'] = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['prePayTn'] = isset($data['prePayTn']) ? $data['prePayTn'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['miniProgramPath'] = isset($data['miniProgramPath']) ? $data['miniProgramPath'] : null;
        $this->container['miniProgramOrgId'] = isset($data['miniProgramOrgId']) ? $data['miniProgramOrgId'] : null;
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
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId 商户收款请求号
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

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
     * @param string $uniqueOrderNo 易宝收款订单号
     *
     * @return $this
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->container['uniqueOrderNo'] = $uniqueOrderNo;

        return $this;
    }

    /**
     * Gets prePayTn
     *
     * @return string
     */
    public function getPrePayTn()
    {
        return $this->container['prePayTn'];
    }

    /**
     * Sets prePayTn
     *
     * @param string $prePayTn 预支付标识信息
     *
     * @return $this
     */
    public function setPrePayTn($prePayTn)
    {
        $this->container['prePayTn'] = $prePayTn;

        return $this;
    }

    /**
     * Gets appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
     * Sets appId
     *
     * @param string $appId 小程序appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;

        return $this;
    }

    /**
     * Gets miniProgramPath
     *
     * @return string
     */
    public function getMiniProgramPath()
    {
        return $this->container['miniProgramPath'];
    }

    /**
     * Sets miniProgramPath
     *
     * @param string $miniProgramPath 跳转小程序的路径
     *
     * @return $this
     */
    public function setMiniProgramPath($miniProgramPath)
    {
        $this->container['miniProgramPath'] = $miniProgramPath;

        return $this;
    }

    /**
     * Gets miniProgramOrgId
     *
     * @return string
     */
    public function getMiniProgramOrgId()
    {
        return $this->container['miniProgramOrgId'];
    }

    /**
     * Sets miniProgramOrgId
     *
     * @param string $miniProgramOrgId 小程序原始id
     *
     * @return $this
     */
    public function setMiniProgramOrgId($miniProgramOrgId)
    {
        $this->container['miniProgramOrgId'] = $miniProgramOrgId;

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


