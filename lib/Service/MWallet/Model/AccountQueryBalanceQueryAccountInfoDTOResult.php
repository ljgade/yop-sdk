<?php
/**
 * AccountQueryBalanceQueryAccountInfoDTOResult
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
 * AccountQueryBalanceQueryAccountInfoDTOResult Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountQueryBalanceQueryAccountInfoDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountQueryBalanceQueryAccountInfoDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'elecAccount' => 'string',
        'accountStatus' => 'string',
        'balance' => 'float',
        'bankAccountNo' => 'string',
        'bankAccountLevel' => 'string',
        'mobile' => 'string',
        'accountType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'elecAccount' => null,
        'accountStatus' => null,
        'balance' => null,
        'bankAccountNo' => null,
        'bankAccountLevel' => null,
        'mobile' => null,
        'accountType' => null
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
        'elecAccount' => 'elecAccount',
        'accountStatus' => 'accountStatus',
        'balance' => 'balance',
        'bankAccountNo' => 'bankAccountNo',
        'bankAccountLevel' => 'bankAccountLevel',
        'mobile' => 'mobile',
        'accountType' => 'accountType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'elecAccount' => 'setElecAccount',
        'accountStatus' => 'setAccountStatus',
        'balance' => 'setBalance',
        'bankAccountNo' => 'setBankAccountNo',
        'bankAccountLevel' => 'setBankAccountLevel',
        'mobile' => 'setMobile',
        'accountType' => 'setAccountType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'elecAccount' => 'getElecAccount',
        'accountStatus' => 'getAccountStatus',
        'balance' => 'getBalance',
        'bankAccountNo' => 'getBankAccountNo',
        'bankAccountLevel' => 'getBankAccountLevel',
        'mobile' => 'getMobile',
        'accountType' => 'getAccountType'
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
        $this->container['elecAccount'] = isset($data['elecAccount']) ? $data['elecAccount'] : null;
        $this->container['accountStatus'] = isset($data['accountStatus']) ? $data['accountStatus'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['bankAccountNo'] = isset($data['bankAccountNo']) ? $data['bankAccountNo'] : null;
        $this->container['bankAccountLevel'] = isset($data['bankAccountLevel']) ? $data['bankAccountLevel'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
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
     * Gets elecAccount
     *
     * @return string
     */
    public function getElecAccount()
    {
        return $this->container['elecAccount'];
    }

    /**
     * Sets elecAccount
     *
     * @param string $elecAccount 账户账号
     *
     * @return $this
     */
    public function setElecAccount($elecAccount)
    {
        $this->container['elecAccount'] = $elecAccount;

        return $this;
    }

    /**
     * Gets accountStatus
     *
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->container['accountStatus'];
    }

    /**
     * Sets accountStatus
     *
     * @param string $accountStatus 账户状态
     *
     * @return $this
     */
    public function setAccountStatus($accountStatus)
    {
        $this->container['accountStatus'] = $accountStatus;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance 账户余额
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets bankAccountNo
     *
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->container['bankAccountNo'];
    }

    /**
     * Sets bankAccountNo
     *
     * @param string $bankAccountNo 银行绑定的一类卡号
     *
     * @return $this
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->container['bankAccountNo'] = $bankAccountNo;

        return $this;
    }

    /**
     * Gets bankAccountLevel
     *
     * @return string
     */
    public function getBankAccountLevel()
    {
        return $this->container['bankAccountLevel'];
    }

    /**
     * Sets bankAccountLevel
     *
     * @param string $bankAccountLevel 账户等级（一类户，二类户，三类户)
     *
     * @return $this
     */
    public function setBankAccountLevel($bankAccountLevel)
    {
        $this->container['bankAccountLevel'] = $bankAccountLevel;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile 手机号
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     *
     * @param string $accountType 账户类型
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

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


