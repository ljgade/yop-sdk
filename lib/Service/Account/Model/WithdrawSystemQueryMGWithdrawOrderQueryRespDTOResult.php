<?php
/**
 * WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 账户
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

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'returnCode' => 'string',
        'returnMsg' => 'string',
        'requestNo' => 'string',
        'orderNo' => 'string',
        'merchantNo' => 'string',
        'orderAmount' => 'float',
        'receiveAmount' => 'float',
        'debitAmount' => 'float',
        'orderTime' => 'string',
        'finishTime' => 'string',
        'status' => 'string',
        'failReason' => 'string',
        'feeUndertakerMerchantNo' => 'string',
        'fee' => 'float',
        'receiveType' => 'string',
        'accountName' => 'string',
        'accountNo' => 'string',
        'bankName' => 'string',
        'isReversed' => 'bool',
        'reverseTime' => 'string',
        'remark' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'returnCode' => null,
        'returnMsg' => null,
        'requestNo' => null,
        'orderNo' => null,
        'merchantNo' => null,
        'orderAmount' => null,
        'receiveAmount' => null,
        'debitAmount' => null,
        'orderTime' => 'date-time',
        'finishTime' => 'date-time',
        'status' => null,
        'failReason' => null,
        'feeUndertakerMerchantNo' => null,
        'fee' => null,
        'receiveType' => null,
        'accountName' => null,
        'accountNo' => null,
        'bankName' => null,
        'isReversed' => null,
        'reverseTime' => 'date-time',
        'remark' => null
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
        'returnCode' => 'returnCode',
        'returnMsg' => 'returnMsg',
        'requestNo' => 'requestNo',
        'orderNo' => 'orderNo',
        'merchantNo' => 'merchantNo',
        'orderAmount' => 'orderAmount',
        'receiveAmount' => 'receiveAmount',
        'debitAmount' => 'debitAmount',
        'orderTime' => 'orderTime',
        'finishTime' => 'finishTime',
        'status' => 'status',
        'failReason' => 'failReason',
        'feeUndertakerMerchantNo' => 'feeUndertakerMerchantNo',
        'fee' => 'fee',
        'receiveType' => 'receiveType',
        'accountName' => 'accountName',
        'accountNo' => 'accountNo',
        'bankName' => 'bankName',
        'isReversed' => 'isReversed',
        'reverseTime' => 'reverseTime',
        'remark' => 'remark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'returnCode' => 'setReturnCode',
        'returnMsg' => 'setReturnMsg',
        'requestNo' => 'setRequestNo',
        'orderNo' => 'setOrderNo',
        'merchantNo' => 'setMerchantNo',
        'orderAmount' => 'setOrderAmount',
        'receiveAmount' => 'setReceiveAmount',
        'debitAmount' => 'setDebitAmount',
        'orderTime' => 'setOrderTime',
        'finishTime' => 'setFinishTime',
        'status' => 'setStatus',
        'failReason' => 'setFailReason',
        'feeUndertakerMerchantNo' => 'setFeeUndertakerMerchantNo',
        'fee' => 'setFee',
        'receiveType' => 'setReceiveType',
        'accountName' => 'setAccountName',
        'accountNo' => 'setAccountNo',
        'bankName' => 'setBankName',
        'isReversed' => 'setIsReversed',
        'reverseTime' => 'setReverseTime',
        'remark' => 'setRemark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'returnCode' => 'getReturnCode',
        'returnMsg' => 'getReturnMsg',
        'requestNo' => 'getRequestNo',
        'orderNo' => 'getOrderNo',
        'merchantNo' => 'getMerchantNo',
        'orderAmount' => 'getOrderAmount',
        'receiveAmount' => 'getReceiveAmount',
        'debitAmount' => 'getDebitAmount',
        'orderTime' => 'getOrderTime',
        'finishTime' => 'getFinishTime',
        'status' => 'getStatus',
        'failReason' => 'getFailReason',
        'feeUndertakerMerchantNo' => 'getFeeUndertakerMerchantNo',
        'fee' => 'getFee',
        'receiveType' => 'getReceiveType',
        'accountName' => 'getAccountName',
        'accountNo' => 'getAccountNo',
        'bankName' => 'getBankName',
        'isReversed' => 'getIsReversed',
        'reverseTime' => 'getReverseTime',
        'remark' => 'getRemark'
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
        $this->container['returnCode'] = isset($data['returnCode']) ? $data['returnCode'] : null;
        $this->container['returnMsg'] = isset($data['returnMsg']) ? $data['returnMsg'] : null;
        $this->container['requestNo'] = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['orderNo'] = isset($data['orderNo']) ? $data['orderNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['orderAmount'] = isset($data['orderAmount']) ? $data['orderAmount'] : null;
        $this->container['receiveAmount'] = isset($data['receiveAmount']) ? $data['receiveAmount'] : null;
        $this->container['debitAmount'] = isset($data['debitAmount']) ? $data['debitAmount'] : null;
        $this->container['orderTime'] = isset($data['orderTime']) ? $data['orderTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['feeUndertakerMerchantNo'] = isset($data['feeUndertakerMerchantNo']) ? $data['feeUndertakerMerchantNo'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['receiveType'] = isset($data['receiveType']) ? $data['receiveType'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountNo'] = isset($data['accountNo']) ? $data['accountNo'] : null;
        $this->container['bankName'] = isset($data['bankName']) ? $data['bankName'] : null;
        $this->container['isReversed'] = isset($data['isReversed']) ? $data['isReversed'] : null;
        $this->container['reverseTime'] = isset($data['reverseTime']) ? $data['reverseTime'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
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
     * Gets returnCode
     *
     * @return string
     */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
     * Sets returnCode
     *
     * @param string $returnCode 返回码
     *
     * @return $this
     */
    public function setReturnCode($returnCode)
    {
        $this->container['returnCode'] = $returnCode;

        return $this;
    }

    /**
     * Gets returnMsg
     *
     * @return string
     */
    public function getReturnMsg()
    {
        return $this->container['returnMsg'];
    }

    /**
     * Sets returnMsg
     *
     * @param string $returnMsg 返回信息
     *
     * @return $this
     */
    public function setReturnMsg($returnMsg)
    {
        $this->container['returnMsg'] = $returnMsg;

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
     * Gets orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string $orderNo 易宝提现订单号
     *
     * @return $this
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo 商户编号
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount 提现金额
     *
     * @return $this
     */
    public function setOrderAmount($orderAmount)
    {
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets receiveAmount
     *
     * @return float
     */
    public function getReceiveAmount()
    {
        return $this->container['receiveAmount'];
    }

    /**
     * Sets receiveAmount
     *
     * @param float $receiveAmount 到账金额
     *
     * @return $this
     */
    public function setReceiveAmount($receiveAmount)
    {
        $this->container['receiveAmount'] = $receiveAmount;

        return $this;
    }

    /**
     * Gets debitAmount
     *
     * @return float
     */
    public function getDebitAmount()
    {
        return $this->container['debitAmount'];
    }

    /**
     * Sets debitAmount
     *
     * @param float $debitAmount 扣账金额
     *
     * @return $this
     */
    public function setDebitAmount($debitAmount)
    {
        $this->container['debitAmount'] = $debitAmount;

        return $this;
    }

    /**
     * Gets orderTime
     *
     * @return string
     */
    public function getOrderTime()
    {
        return $this->container['orderTime'];
    }

    /**
     * Sets orderTime
     *
     * @param string $orderTime 提现下单时间
     *
     * @return $this
     */
    public function setOrderTime($orderTime)
    {
        $this->container['orderTime'] = $orderTime;

        return $this;
    }

    /**
     * Gets finishTime
     *
     * @return string
     */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
     * Sets finishTime
     *
     * @param string $finishTime 提现完成时间
     *
     * @return $this
     */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 提现订单状态
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets failReason
     *
     * @return string
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string $failReason 失败原因
     *
     * @return $this
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets feeUndertakerMerchantNo
     *
     * @return string
     */
    public function getFeeUndertakerMerchantNo()
    {
        return $this->container['feeUndertakerMerchantNo'];
    }

    /**
     * Sets feeUndertakerMerchantNo
     *
     * @param string $feeUndertakerMerchantNo 手续费承担方商编
     *
     * @return $this
     */
    public function setFeeUndertakerMerchantNo($feeUndertakerMerchantNo)
    {
        $this->container['feeUndertakerMerchantNo'] = $feeUndertakerMerchantNo;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float $fee 手续费
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets receiveType
     *
     * @return string
     */
    public function getReceiveType()
    {
        return $this->container['receiveType'];
    }

    /**
     * Sets receiveType
     *
     * @param string $receiveType 到账类型
     *
     * @return $this
     */
    public function setReceiveType($receiveType)
    {
        $this->container['receiveType'] = $receiveType;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string $accountName 开户名
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->container['accountNo'];
    }

    /**
     * Sets accountNo
     *
     * @param string $accountNo 银行账号
     *
     * @return $this
     */
    public function setAccountNo($accountNo)
    {
        $this->container['accountNo'] = $accountNo;

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
     * @param string $bankName 开户行名称
     *
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;

        return $this;
    }

    /**
     * Gets isReversed
     *
     * @return bool
     */
    public function getIsReversed()
    {
        return $this->container['isReversed'];
    }

    /**
     * Sets isReversed
     *
     * @param bool $isReversed 冲退标识
     *
     * @return $this
     */
    public function setIsReversed($isReversed)
    {
        $this->container['isReversed'] = $isReversed;

        return $this;
    }

    /**
     * Gets reverseTime
     *
     * @return string
     */
    public function getReverseTime()
    {
        return $this->container['reverseTime'];
    }

    /**
     * Sets reverseTime
     *
     * @param string $reverseTime 冲退时间
     *
     * @return $this
     */
    public function setReverseTime($reverseTime)
    {
        $this->container['reverseTime'] = $reverseTime;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark 备注
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

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


