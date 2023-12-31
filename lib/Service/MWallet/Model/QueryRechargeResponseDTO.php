<?php
/**
 * QueryRechargeResponseDTO
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
 * QueryRechargeResponseDTO Class Doc Comment
 *
 * @category Class
 * @description 响应结果
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueryRechargeResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueryRechargeResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'requestNo' => 'string',
        'businessNo' => 'string',
        'amount' => 'float',
        'bindId' => 'string',
        'cardNo' => 'string',
        'bankName' => 'string',
        'bankCode' => 'string',
        'orderStatus' => 'string',
        'orderTime' => '\DateTime',
        'userFee' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'requestNo' => null,
        'businessNo' => null,
        'amount' => null,
        'bindId' => null,
        'cardNo' => null,
        'bankName' => null,
        'bankCode' => null,
        'orderStatus' => null,
        'orderTime' => 'date-time',
        'userFee' => null
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
        'requestNo' => 'requestNo',
        'businessNo' => 'businessNo',
        'amount' => 'amount',
        'bindId' => 'bindId',
        'cardNo' => 'cardNo',
        'bankName' => 'bankName',
        'bankCode' => 'bankCode',
        'orderStatus' => 'orderStatus',
        'orderTime' => 'orderTime',
        'userFee' => 'userFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'requestNo' => 'setRequestNo',
        'businessNo' => 'setBusinessNo',
        'amount' => 'setAmount',
        'bindId' => 'setBindId',
        'cardNo' => 'setCardNo',
        'bankName' => 'setBankName',
        'bankCode' => 'setBankCode',
        'orderStatus' => 'setOrderStatus',
        'orderTime' => 'setOrderTime',
        'userFee' => 'setUserFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'requestNo' => 'getRequestNo',
        'businessNo' => 'getBusinessNo',
        'amount' => 'getAmount',
        'bindId' => 'getBindId',
        'cardNo' => 'getCardNo',
        'bankName' => 'getBankName',
        'bankCode' => 'getBankCode',
        'orderStatus' => 'getOrderStatus',
        'orderTime' => 'getOrderTime',
        'userFee' => 'getUserFee'
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
        $this->container['requestNo'] = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['businessNo'] = isset($data['businessNo']) ? $data['businessNo'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['bindId'] = isset($data['bindId']) ? $data['bindId'] : null;
        $this->container['cardNo'] = isset($data['cardNo']) ? $data['cardNo'] : null;
        $this->container['bankName'] = isset($data['bankName']) ? $data['bankName'] : null;
        $this->container['bankCode'] = isset($data['bankCode']) ? $data['bankCode'] : null;
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['orderTime'] = isset($data['orderTime']) ? $data['orderTime'] : null;
        $this->container['userFee'] = isset($data['userFee']) ? $data['userFee'] : null;
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
     * @param string $message 返回消息<br>返回码的详细说明
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['requestNo'];
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo 商户请求号
     *
     * @return $this
     */
    public function setRequestNo($requestNo)
    {
        $this->container['requestNo'] = $requestNo;

        return $this;
    }

    /**
     * Gets businessNo
     *
     * @return string
     */
    public function getBusinessNo()
    {
        return $this->container['businessNo'];
    }

    /**
     * Sets businessNo
     *
     * @param string $businessNo 易宝订单号
     *
     * @return $this
     */
    public function setBusinessNo($businessNo)
    {
        $this->container['businessNo'] = $businessNo;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount 充值金额
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bindId
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->container['bindId'];
    }

    /**
     * Sets bindId
     *
     * @param string $bindId 绑卡ID
     *
     * @return $this
     */
    public function setBindId($bindId)
    {
        $this->container['bindId'] = $bindId;

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
     * @param string $cardNo 卡号<br>显示前6后4，中间为*
     *
     * @return $this
     */
    public function setCardNo($cardNo)
    {
        $this->container['cardNo'] = $cardNo;

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
     * @param string $bankName 银行名称
     *
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;

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
     * Gets orderStatus
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param string $orderStatus 订单状态<br>可选项如下:<br>SUCCESS:充值成功<br>FAIL:充值失败
     *
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets orderTime
     *
     * @return \DateTime
     */
    public function getOrderTime()
    {
        return $this->container['orderTime'];
    }

    /**
     * Sets orderTime
     *
     * @param \DateTime $orderTime 订单完成时间
     *
     * @return $this
     */
    public function setOrderTime($orderTime)
    {
        $this->container['orderTime'] = $orderTime;

        return $this;
    }

    /**
     * Gets userFee
     *
     * @return float
     */
    public function getUserFee()
    {
        return $this->container['userFee'];
    }

    /**
     * Sets userFee
     *
     * @param float $userFee 用户手续费<br>当手续费不是用户承担时该字段为空
     *
     * @return $this
     */
    public function setUserFee($userFee)
    {
        $this->container['userFee'] = $userFee;

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


