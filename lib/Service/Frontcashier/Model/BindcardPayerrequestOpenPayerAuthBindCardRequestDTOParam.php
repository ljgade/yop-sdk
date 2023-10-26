<?php
/**
 * BindcardPayerrequestOpenPayerAuthBindCardRequestDTOParam
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 前置收银台
 *
 * <p>前置收银台</p>
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

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * BindcardPayerrequestOpenPayerAuthBindCardRequestDTOParam Class Doc Comment
 *
 * @category Class
 * @description 方法签名第0个参数，请自行修改arg0等参数的名字
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BindcardPayerrequestOpenPayerAuthBindCardRequestDTOParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BindcardPayerrequestOpenPayerAuthBindCardRequestDTOParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parentMerchantNo' => 'string',
        'merchantNo' => 'string',
        'merchantFlowId' => 'string',
        'bindCallBackUrl' => 'string',
        'userNo' => 'string',
        'userType' => 'string',
        'bankCardNo' => 'string',
        'userName' => 'string',
        'idCardNo' => 'string',
        'phone' => 'string',
        'cvv2' => 'string',
        'validthru' => 'string',
        'riskParamExt' => 'string',
        'orderValidate' => 'int',
        'authType' => 'string',
        'empower' => 'bool',
        'cardType' => 'string',
        'authScene' => 'string',
        'pageNotifyUrl' => 'string',
        'appKey' => 'string',
        'idCardType' => 'string',
        'sendSms' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parentMerchantNo' => null,
        'merchantNo' => null,
        'merchantFlowId' => null,
        'bindCallBackUrl' => null,
        'userNo' => null,
        'userType' => null,
        'bankCardNo' => null,
        'userName' => null,
        'idCardNo' => null,
        'phone' => null,
        'cvv2' => null,
        'validthru' => null,
        'riskParamExt' => null,
        'orderValidate' => 'int32',
        'authType' => null,
        'empower' => null,
        'cardType' => null,
        'authScene' => null,
        'pageNotifyUrl' => null,
        'appKey' => null,
        'idCardType' => null,
        'sendSms' => null
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
        'parentMerchantNo' => 'parentMerchantNo',
        'merchantNo' => 'merchantNo',
        'merchantFlowId' => 'merchantFlowId',
        'bindCallBackUrl' => 'bindCallBackUrl',
        'userNo' => 'userNo',
        'userType' => 'userType',
        'bankCardNo' => 'bankCardNo',
        'userName' => 'userName',
        'idCardNo' => 'idCardNo',
        'phone' => 'phone',
        'cvv2' => 'cvv2',
        'validthru' => 'validthru',
        'riskParamExt' => 'riskParamExt',
        'orderValidate' => 'orderValidate',
        'authType' => 'authType',
        'empower' => 'empower',
        'cardType' => 'cardType',
        'authScene' => 'authScene',
        'pageNotifyUrl' => 'pageNotifyUrl',
        'appKey' => 'appKey',
        'idCardType' => 'idCardType',
        'sendSms' => 'sendSms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parentMerchantNo' => 'setParentMerchantNo',
        'merchantNo' => 'setMerchantNo',
        'merchantFlowId' => 'setMerchantFlowId',
        'bindCallBackUrl' => 'setBindCallBackUrl',
        'userNo' => 'setUserNo',
        'userType' => 'setUserType',
        'bankCardNo' => 'setBankCardNo',
        'userName' => 'setUserName',
        'idCardNo' => 'setIdCardNo',
        'phone' => 'setPhone',
        'cvv2' => 'setCvv2',
        'validthru' => 'setValidthru',
        'riskParamExt' => 'setRiskParamExt',
        'orderValidate' => 'setOrderValidate',
        'authType' => 'setAuthType',
        'empower' => 'setEmpower',
        'cardType' => 'setCardType',
        'authScene' => 'setAuthScene',
        'pageNotifyUrl' => 'setPageNotifyUrl',
        'appKey' => 'setAppKey',
        'idCardType' => 'setIdCardType',
        'sendSms' => 'setSendSms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parentMerchantNo' => 'getParentMerchantNo',
        'merchantNo' => 'getMerchantNo',
        'merchantFlowId' => 'getMerchantFlowId',
        'bindCallBackUrl' => 'getBindCallBackUrl',
        'userNo' => 'getUserNo',
        'userType' => 'getUserType',
        'bankCardNo' => 'getBankCardNo',
        'userName' => 'getUserName',
        'idCardNo' => 'getIdCardNo',
        'phone' => 'getPhone',
        'cvv2' => 'getCvv2',
        'validthru' => 'getValidthru',
        'riskParamExt' => 'getRiskParamExt',
        'orderValidate' => 'getOrderValidate',
        'authType' => 'getAuthType',
        'empower' => 'getEmpower',
        'cardType' => 'getCardType',
        'authScene' => 'getAuthScene',
        'pageNotifyUrl' => 'getPageNotifyUrl',
        'appKey' => 'getAppKey',
        'idCardType' => 'getIdCardType',
        'sendSms' => 'getSendSms'
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
        $this->container['parentMerchantNo'] = isset($data['parentMerchantNo']) ? $data['parentMerchantNo'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['merchantFlowId'] = isset($data['merchantFlowId']) ? $data['merchantFlowId'] : null;
        $this->container['bindCallBackUrl'] = isset($data['bindCallBackUrl']) ? $data['bindCallBackUrl'] : null;
        $this->container['userNo'] = isset($data['userNo']) ? $data['userNo'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['bankCardNo'] = isset($data['bankCardNo']) ? $data['bankCardNo'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['idCardNo'] = isset($data['idCardNo']) ? $data['idCardNo'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['cvv2'] = isset($data['cvv2']) ? $data['cvv2'] : null;
        $this->container['validthru'] = isset($data['validthru']) ? $data['validthru'] : null;
        $this->container['riskParamExt'] = isset($data['riskParamExt']) ? $data['riskParamExt'] : null;
        $this->container['orderValidate'] = isset($data['orderValidate']) ? $data['orderValidate'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['empower'] = isset($data['empower']) ? $data['empower'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
        $this->container['authScene'] = isset($data['authScene']) ? $data['authScene'] : null;
        $this->container['pageNotifyUrl'] = isset($data['pageNotifyUrl']) ? $data['pageNotifyUrl'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['idCardType'] = isset($data['idCardType']) ? $data['idCardType'] : null;
        $this->container['sendSms'] = isset($data['sendSms']) ? $data['sendSms'] : null;
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
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->container['parentMerchantNo'];
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo parentMerchantNo
     *
     * @return $this
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->container['parentMerchantNo'] = $parentMerchantNo;

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
     * @param string $merchantNo merchantNo
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->container['merchantFlowId'];
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId merchantFlowId
     *
     * @return $this
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->container['merchantFlowId'] = $merchantFlowId;

        return $this;
    }

    /**
     * Gets bindCallBackUrl
     *
     * @return string
     */
    public function getBindCallBackUrl()
    {
        return $this->container['bindCallBackUrl'];
    }

    /**
     * Sets bindCallBackUrl
     *
     * @param string $bindCallBackUrl bindCallBackUrl
     *
     * @return $this
     */
    public function setBindCallBackUrl($bindCallBackUrl)
    {
        $this->container['bindCallBackUrl'] = $bindCallBackUrl;

        return $this;
    }

    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->container['userNo'];
    }

    /**
     * Sets userNo
     *
     * @param string $userNo userNo
     *
     * @return $this
     */
    public function setUserNo($userNo)
    {
        $this->container['userNo'] = $userNo;

        return $this;
    }

    /**
     * Gets userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
     * Sets userType
     *
     * @param string $userType userType
     *
     * @return $this
     */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;

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
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string $userName userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /**
     * Gets idCardNo
     *
     * @return string
     */
    public function getIdCardNo()
    {
        return $this->container['idCardNo'];
    }

    /**
     * Sets idCardNo
     *
     * @param string $idCardNo idCardNo
     *
     * @return $this
     */
    public function setIdCardNo($idCardNo)
    {
        $this->container['idCardNo'] = $idCardNo;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets cvv2
     *
     * @return string
     */
    public function getCvv2()
    {
        return $this->container['cvv2'];
    }

    /**
     * Sets cvv2
     *
     * @param string $cvv2 cvv2
     *
     * @return $this
     */
    public function setCvv2($cvv2)
    {
        $this->container['cvv2'] = $cvv2;

        return $this;
    }

    /**
     * Gets validthru
     *
     * @return string
     */
    public function getValidthru()
    {
        return $this->container['validthru'];
    }

    /**
     * Sets validthru
     *
     * @param string $validthru validthru
     *
     * @return $this
     */
    public function setValidthru($validthru)
    {
        $this->container['validthru'] = $validthru;

        return $this;
    }

    /**
     * Gets riskParamExt
     *
     * @return string
     */
    public function getRiskParamExt()
    {
        return $this->container['riskParamExt'];
    }

    /**
     * Sets riskParamExt
     *
     * @param string $riskParamExt riskParamExt
     *
     * @return $this
     */
    public function setRiskParamExt($riskParamExt)
    {
        $this->container['riskParamExt'] = $riskParamExt;

        return $this;
    }

    /**
     * Gets orderValidate
     *
     * @return int
     */
    public function getOrderValidate()
    {
        return $this->container['orderValidate'];
    }

    /**
     * Sets orderValidate
     *
     * @param int $orderValidate orderValidate
     *
     * @return $this
     */
    public function setOrderValidate($orderValidate)
    {
        $this->container['orderValidate'] = $orderValidate;

        return $this;
    }

    /**
     * Gets authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
     * Sets authType
     *
     * @param string $authType authType
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;

        return $this;
    }

    /**
     * Gets empower
     *
     * @return bool
     */
    public function getEmpower()
    {
        return $this->container['empower'];
    }

    /**
     * Sets empower
     *
     * @param bool $empower empower
     *
     * @return $this
     */
    public function setEmpower($empower)
    {
        $this->container['empower'] = $empower;

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
     * Gets authScene
     *
     * @return string
     */
    public function getAuthScene()
    {
        return $this->container['authScene'];
    }

    /**
     * Sets authScene
     *
     * @param string $authScene authScene
     *
     * @return $this
     */
    public function setAuthScene($authScene)
    {
        $this->container['authScene'] = $authScene;

        return $this;
    }

    /**
     * Gets pageNotifyUrl
     *
     * @return string
     */
    public function getPageNotifyUrl()
    {
        return $this->container['pageNotifyUrl'];
    }

    /**
     * Sets pageNotifyUrl
     *
     * @param string $pageNotifyUrl pageNotifyUrl
     *
     * @return $this
     */
    public function setPageNotifyUrl($pageNotifyUrl)
    {
        $this->container['pageNotifyUrl'] = $pageNotifyUrl;

        return $this;
    }

    /**
     * Gets appKey
     *
     * @return string
     */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
     * Sets appKey
     *
     * @param string $appKey appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;

        return $this;
    }

    /**
     * Gets idCardType
     *
     * @return string
     */
    public function getIdCardType()
    {
        return $this->container['idCardType'];
    }

    /**
     * Sets idCardType
     *
     * @param string $idCardType idCardType
     *
     * @return $this
     */
    public function setIdCardType($idCardType)
    {
        $this->container['idCardType'] = $idCardType;

        return $this;
    }

    /**
     * Gets sendSms
     *
     * @return bool
     */
    public function getSendSms()
    {
        return $this->container['sendSms'];
    }

    /**
     * Sets sendSms
     *
     * @param bool $sendSms sendSms
     *
     * @return $this
     */
    public function setSendSms($sendSms)
    {
        $this->container['sendSms'] = $sendSms;

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


