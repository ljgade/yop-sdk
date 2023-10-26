<?php
/**
 * BindCardInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 会员钱包
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

namespace Yeepay\Yop\Sdk\Service\MWallet\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * BindCardInfo Class Doc Comment
 *
 * @category Class
 * @description BindCardInfo
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BindCardInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BindCardInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bankCode' => 'string',
        'disable' => 'bool',
        'cardId' => 'string',
        'cardType' => 'string',
        'bankName' => 'string',
        'cardNo' => 'string',
        'bindId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bankCode' => null,
        'disable' => null,
        'cardId' => null,
        'cardType' => null,
        'bankName' => null,
        'cardNo' => null,
        'bindId' => 'int64'
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
        'bankCode' => 'bankCode',
        'disable' => 'disable',
        'cardId' => 'cardId',
        'cardType' => 'cardType',
        'bankName' => 'bankName',
        'cardNo' => 'cardNo',
        'bindId' => 'bindId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankCode' => 'setBankCode',
        'disable' => 'setDisable',
        'cardId' => 'setCardId',
        'cardType' => 'setCardType',
        'bankName' => 'setBankName',
        'cardNo' => 'setCardNo',
        'bindId' => 'setBindId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankCode' => 'getBankCode',
        'disable' => 'getDisable',
        'cardId' => 'getCardId',
        'cardType' => 'getCardType',
        'bankName' => 'getBankName',
        'cardNo' => 'getCardNo',
        'bindId' => 'getBindId'
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
        $this->container['bankCode'] = isset($data['bankCode']) ? $data['bankCode'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['cardId'] = isset($data['cardId']) ? $data['cardId'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
        $this->container['bankName'] = isset($data['bankName']) ? $data['bankName'] : null;
        $this->container['cardNo'] = isset($data['cardNo']) ? $data['cardNo'] : null;
        $this->container['bindId'] = isset($data['bindId']) ? $data['bindId'] : null;
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
     * @param string $bankCode bankCode
     *
     * @return $this
     */
    public function setBankCode($bankCode)
    {
        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets disable
     *
     * @return bool
     */
    public function getDisable()
    {
        return $this->container['disable'];
    }

    /**
     * Sets disable
     *
     * @param bool $disable disable
     *
     * @return $this
     */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;

        return $this;
    }

    /**
     * Gets cardId
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->container['cardId'];
    }

    /**
     * Sets cardId
     *
     * @param string $cardId cardId
     *
     * @return $this
     */
    public function setCardId($cardId)
    {
        $this->container['cardId'] = $cardId;

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
     * @param string $cardType cardType
     *
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->container['cardType'] = $cardType;

        return $this;
    }

    /**
     * Gets bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
     * Sets bankName
     *
     * @param string $bankName bankName
     *
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;

        return $this;
    }

    /**
     * Gets cardNo
     *
     * @return string
     */
    public function getCardNo()
    {
        return $this->container['cardNo'];
    }

    /**
     * Sets cardNo
     *
     * @param string $cardNo cardNo
     *
     * @return $this
     */
    public function setCardNo($cardNo)
    {
        $this->container['cardNo'] = $cardNo;

        return $this;
    }

    /**
     * Gets bindId
     *
     * @return int
     */
    public function getBindId()
    {
        return $this->container['bindId'];
    }

    /**
     * Sets bindId
     *
     * @param int $bindId bindId
     *
     * @return $this
     */
    public function setBindId($bindId)
    {
        $this->container['bindId'] = $bindId;

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

