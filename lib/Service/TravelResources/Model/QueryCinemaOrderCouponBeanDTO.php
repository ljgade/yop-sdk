<?php
/**
 * QueryCinemaOrderCouponBeanDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 旅游资源
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

namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * QueryCinemaOrderCouponBeanDTO Class Doc Comment
 *
 * @category Class
 * @description 查询电影订单券信息
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueryCinemaOrderCouponBeanDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueryCinemaOrderCouponBeanDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'couponCodeId' => 'string',
        'couponCodeImageUrl' => 'string',
        'adjusted' => 'bool',
        'couponCode' => 'string',
        'validCode' => 'string',
        'seats' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'couponCodeId' => null,
        'couponCodeImageUrl' => null,
        'adjusted' => null,
        'couponCode' => null,
        'validCode' => null,
        'seats' => null
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
        'couponCodeId' => 'couponCodeId',
        'couponCodeImageUrl' => 'couponCodeImageUrl',
        'adjusted' => 'adjusted',
        'couponCode' => 'couponCode',
        'validCode' => 'validCode',
        'seats' => 'seats'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'couponCodeId' => 'setCouponCodeId',
        'couponCodeImageUrl' => 'setCouponCodeImageUrl',
        'adjusted' => 'setAdjusted',
        'couponCode' => 'setCouponCode',
        'validCode' => 'setValidCode',
        'seats' => 'setSeats'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'couponCodeId' => 'getCouponCodeId',
        'couponCodeImageUrl' => 'getCouponCodeImageUrl',
        'adjusted' => 'getAdjusted',
        'couponCode' => 'getCouponCode',
        'validCode' => 'getValidCode',
        'seats' => 'getSeats'
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
        $this->container['couponCodeId'] = isset($data['couponCodeId']) ? $data['couponCodeId'] : null;
        $this->container['couponCodeImageUrl'] = isset($data['couponCodeImageUrl']) ? $data['couponCodeImageUrl'] : null;
        $this->container['adjusted'] = isset($data['adjusted']) ? $data['adjusted'] : null;
        $this->container['couponCode'] = isset($data['couponCode']) ? $data['couponCode'] : null;
        $this->container['validCode'] = isset($data['validCode']) ? $data['validCode'] : null;
        $this->container['seats'] = isset($data['seats']) ? $data['seats'] : null;
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
     * Gets couponCodeId
     *
     * @return string
     */
    public function getCouponCodeId()
    {
        return $this->container['couponCodeId'];
    }

    /**
     * Sets couponCodeId
     *
     * @param string $couponCodeId <pre>券码id</pre>
     *
     * @return $this
     */
    public function setCouponCodeId($couponCodeId)
    {
        $this->container['couponCodeId'] = $couponCodeId;

        return $this;
    }

    /**
     * Gets couponCodeImageUrl
     *
     * @return string
     */
    public function getCouponCodeImageUrl()
    {
        return $this->container['couponCodeImageUrl'];
    }

    /**
     * Sets couponCodeImageUrl
     *
     * @param string $couponCodeImageUrl <pre>券码url</pre>
     *
     * @return $this
     */
    public function setCouponCodeImageUrl($couponCodeImageUrl)
    {
        $this->container['couponCodeImageUrl'] = $couponCodeImageUrl;

        return $this;
    }

    /**
     * Gets adjusted
     *
     * @return bool
     */
    public function getAdjusted()
    {
        return $this->container['adjusted'];
    }

    /**
     * Sets adjusted
     *
     * @param bool $adjusted <pre>是否已调座</pre>
     *
     * @return $this
     */
    public function setAdjusted($adjusted)
    {
        $this->container['adjusted'] = $adjusted;

        return $this;
    }

    /**
     * Gets couponCode
     *
     * @return string
     */
    public function getCouponCode()
    {
        return $this->container['couponCode'];
    }

    /**
     * Sets couponCode
     *
     * @param string $couponCode <p>券码</p>
     *
     * @return $this
     */
    public function setCouponCode($couponCode)
    {
        $this->container['couponCode'] = $couponCode;

        return $this;
    }

    /**
     * Gets validCode
     *
     * @return string
     */
    public function getValidCode()
    {
        return $this->container['validCode'];
    }

    /**
     * Sets validCode
     *
     * @param string $validCode <p>验证码</p>
     *
     * @return $this
     */
    public function setValidCode($validCode)
    {
        $this->container['validCode'] = $validCode;

        return $this;
    }

    /**
     * Gets seats
     *
     * @return string
     */
    public function getSeats()
    {
        return $this->container['seats'];
    }

    /**
     * Sets seats
     *
     * @param string $seats <p>出票的座位</p>
     *
     * @return $this
     */
    public function setSeats($seats)
    {
        $this->container['seats'] = $seats;

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


