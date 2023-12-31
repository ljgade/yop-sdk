<?php
/**
 * SettleWayModifyRatioSettleWayRatioDetailDtoParam
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 商户结算2.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * SettleWayModifyRatioSettleWayRatioDetailDtoParam Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettleWayModifyRatioSettleWayRatioDetailDtoParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SettleWayModifyRatioSettleWayRatioDetailDtoParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'settleWay' => 'string',
        'settleRatio' => 'float',
        'bankCardNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'settleWay' => null,
        'settleRatio' => null,
        'bankCardNo' => null
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
        'settleWay' => 'settleWay',
        'settleRatio' => 'settleRatio',
        'bankCardNo' => 'bankCardNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'settleWay' => 'setSettleWay',
        'settleRatio' => 'setSettleRatio',
        'bankCardNo' => 'setBankCardNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'settleWay' => 'getSettleWay',
        'settleRatio' => 'getSettleRatio',
        'bankCardNo' => 'getBankCardNo'
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
        $this->container['settleWay'] = isset($data['settleWay']) ? $data['settleWay'] : null;
        $this->container['settleRatio'] = isset($data['settleRatio']) ? $data['settleRatio'] : null;
        $this->container['bankCardNo'] = isset($data['bankCardNo']) ? $data['bankCardNo'] : null;
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
     * Gets settleWay
     *
     * @return string
     */
    public function getSettleWay()
    {
        return $this->container['settleWay'];
    }

    /**
     * Sets settleWay
     *
     * @param string $settleWay settleWay
     *
     * @return $this
     */
    public function setSettleWay($settleWay)
    {
        $this->container['settleWay'] = $settleWay;

        return $this;
    }

    /**
     * Gets settleRatio
     *
     * @return float
     */
    public function getSettleRatio()
    {
        return $this->container['settleRatio'];
    }

    /**
     * Sets settleRatio
     *
     * @param float $settleRatio settleRatio
     *
     * @return $this
     */
    public function setSettleRatio($settleRatio)
    {
        $this->container['settleRatio'] = $settleRatio;

        return $this;
    }

    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->container['bankCardNo'];
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo bankCardNo
     *
     * @return $this
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->container['bankCardNo'] = $bankCardNo;

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


