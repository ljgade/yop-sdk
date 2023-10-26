<?php
/**
 * XibOpenAccountDTO
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
 * XibOpenAccountDTO Class Doc Comment
 *
 * @category Class
 * @description 厦门国际扩展参数
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XibOpenAccountDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XibOpenAccountDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobileNo' => 'string',
        'bindCardNo' => 'string',
        'bindBankCode' => 'string',
        'bindCardType' => 'string',
        'returnUrl' => 'string',
        'businessLicenceEffectiveDate' => 'string',
        'businessLicenceExpirationDate' => 'string',
        'enterpriseEmail' => 'string',
        'registerAddress' => 'string',
        'legalGender' => 'string',
        'legalLicenceEffectiveDate' => 'string',
        'legalLicenceExpirationDate' => 'string',
        'shareholderName' => 'string',
        'benefitName' => 'string',
        'benefitCertificateType' => 'string',
        'benefitCertificateNo' => 'string',
        'benefitEffectiveDate' => 'string',
        'benefitExpirationDate' => 'string',
        'benefitAddress' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobileNo' => null,
        'bindCardNo' => null,
        'bindBankCode' => null,
        'bindCardType' => null,
        'returnUrl' => null,
        'businessLicenceEffectiveDate' => null,
        'businessLicenceExpirationDate' => null,
        'enterpriseEmail' => null,
        'registerAddress' => null,
        'legalGender' => null,
        'legalLicenceEffectiveDate' => null,
        'legalLicenceExpirationDate' => null,
        'shareholderName' => null,
        'benefitName' => null,
        'benefitCertificateType' => null,
        'benefitCertificateNo' => null,
        'benefitEffectiveDate' => null,
        'benefitExpirationDate' => null,
        'benefitAddress' => null
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
        'mobileNo' => 'mobileNo',
        'bindCardNo' => 'bindCardNo',
        'bindBankCode' => 'bindBankCode',
        'bindCardType' => 'bindCardType',
        'returnUrl' => 'returnUrl',
        'businessLicenceEffectiveDate' => 'businessLicenceEffectiveDate',
        'businessLicenceExpirationDate' => 'businessLicenceExpirationDate',
        'enterpriseEmail' => 'enterpriseEmail',
        'registerAddress' => 'registerAddress',
        'legalGender' => 'legalGender',
        'legalLicenceEffectiveDate' => 'legalLicenceEffectiveDate',
        'legalLicenceExpirationDate' => 'legalLicenceExpirationDate',
        'shareholderName' => 'shareholderName',
        'benefitName' => 'benefitName',
        'benefitCertificateType' => 'benefitCertificateType',
        'benefitCertificateNo' => 'benefitCertificateNo',
        'benefitEffectiveDate' => 'benefitEffectiveDate',
        'benefitExpirationDate' => 'benefitExpirationDate',
        'benefitAddress' => 'benefitAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobileNo' => 'setMobileNo',
        'bindCardNo' => 'setBindCardNo',
        'bindBankCode' => 'setBindBankCode',
        'bindCardType' => 'setBindCardType',
        'returnUrl' => 'setReturnUrl',
        'businessLicenceEffectiveDate' => 'setBusinessLicenceEffectiveDate',
        'businessLicenceExpirationDate' => 'setBusinessLicenceExpirationDate',
        'enterpriseEmail' => 'setEnterpriseEmail',
        'registerAddress' => 'setRegisterAddress',
        'legalGender' => 'setLegalGender',
        'legalLicenceEffectiveDate' => 'setLegalLicenceEffectiveDate',
        'legalLicenceExpirationDate' => 'setLegalLicenceExpirationDate',
        'shareholderName' => 'setShareholderName',
        'benefitName' => 'setBenefitName',
        'benefitCertificateType' => 'setBenefitCertificateType',
        'benefitCertificateNo' => 'setBenefitCertificateNo',
        'benefitEffectiveDate' => 'setBenefitEffectiveDate',
        'benefitExpirationDate' => 'setBenefitExpirationDate',
        'benefitAddress' => 'setBenefitAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobileNo' => 'getMobileNo',
        'bindCardNo' => 'getBindCardNo',
        'bindBankCode' => 'getBindBankCode',
        'bindCardType' => 'getBindCardType',
        'returnUrl' => 'getReturnUrl',
        'businessLicenceEffectiveDate' => 'getBusinessLicenceEffectiveDate',
        'businessLicenceExpirationDate' => 'getBusinessLicenceExpirationDate',
        'enterpriseEmail' => 'getEnterpriseEmail',
        'registerAddress' => 'getRegisterAddress',
        'legalGender' => 'getLegalGender',
        'legalLicenceEffectiveDate' => 'getLegalLicenceEffectiveDate',
        'legalLicenceExpirationDate' => 'getLegalLicenceExpirationDate',
        'shareholderName' => 'getShareholderName',
        'benefitName' => 'getBenefitName',
        'benefitCertificateType' => 'getBenefitCertificateType',
        'benefitCertificateNo' => 'getBenefitCertificateNo',
        'benefitEffectiveDate' => 'getBenefitEffectiveDate',
        'benefitExpirationDate' => 'getBenefitExpirationDate',
        'benefitAddress' => 'getBenefitAddress'
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
        $this->container['mobileNo'] = isset($data['mobileNo']) ? $data['mobileNo'] : null;
        $this->container['bindCardNo'] = isset($data['bindCardNo']) ? $data['bindCardNo'] : null;
        $this->container['bindBankCode'] = isset($data['bindBankCode']) ? $data['bindBankCode'] : null;
        $this->container['bindCardType'] = isset($data['bindCardType']) ? $data['bindCardType'] : null;
        $this->container['returnUrl'] = isset($data['returnUrl']) ? $data['returnUrl'] : null;
        $this->container['businessLicenceEffectiveDate'] = isset($data['businessLicenceEffectiveDate']) ? $data['businessLicenceEffectiveDate'] : null;
        $this->container['businessLicenceExpirationDate'] = isset($data['businessLicenceExpirationDate']) ? $data['businessLicenceExpirationDate'] : null;
        $this->container['enterpriseEmail'] = isset($data['enterpriseEmail']) ? $data['enterpriseEmail'] : null;
        $this->container['registerAddress'] = isset($data['registerAddress']) ? $data['registerAddress'] : null;
        $this->container['legalGender'] = isset($data['legalGender']) ? $data['legalGender'] : null;
        $this->container['legalLicenceEffectiveDate'] = isset($data['legalLicenceEffectiveDate']) ? $data['legalLicenceEffectiveDate'] : null;
        $this->container['legalLicenceExpirationDate'] = isset($data['legalLicenceExpirationDate']) ? $data['legalLicenceExpirationDate'] : null;
        $this->container['shareholderName'] = isset($data['shareholderName']) ? $data['shareholderName'] : null;
        $this->container['benefitName'] = isset($data['benefitName']) ? $data['benefitName'] : null;
        $this->container['benefitCertificateType'] = isset($data['benefitCertificateType']) ? $data['benefitCertificateType'] : null;
        $this->container['benefitCertificateNo'] = isset($data['benefitCertificateNo']) ? $data['benefitCertificateNo'] : null;
        $this->container['benefitEffectiveDate'] = isset($data['benefitEffectiveDate']) ? $data['benefitEffectiveDate'] : null;
        $this->container['benefitExpirationDate'] = isset($data['benefitExpirationDate']) ? $data['benefitExpirationDate'] : null;
        $this->container['benefitAddress'] = isset($data['benefitAddress']) ? $data['benefitAddress'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mobileNo'] === null) {
            $invalidProperties[] = "'mobileNo' can't be null";
        }
        if ($this->container['bindCardNo'] === null) {
            $invalidProperties[] = "'bindCardNo' can't be null";
        }
        if ($this->container['bindBankCode'] === null) {
            $invalidProperties[] = "'bindBankCode' can't be null";
        }
        if ($this->container['bindCardType'] === null) {
            $invalidProperties[] = "'bindCardType' can't be null";
        }
        if ($this->container['returnUrl'] === null) {
            $invalidProperties[] = "'returnUrl' can't be null";
        }
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
     * Gets mobileNo
     *
     * @return string
     */
    public function getMobileNo()
    {
        return $this->container['mobileNo'];
    }

    /**
     * Sets mobileNo
     *
     * @param string $mobileNo 经办人手机号<br>该手机号用于接收银行打款验资的验证码，请务必谨慎填写
     *
     * @return $this
     */
    public function setMobileNo($mobileNo)
    {
        $this->container['mobileNo'] = $mobileNo;

        return $this;
    }

    /**
     * Gets bindCardNo
     *
     * @return string
     */
    public function getBindCardNo()
    {
        return $this->container['bindCardNo'];
    }

    /**
     * Sets bindCardNo
     *
     * @param string $bindCardNo 绑定银行卡号
     *
     * @return $this
     */
    public function setBindCardNo($bindCardNo)
    {
        $this->container['bindCardNo'] = $bindCardNo;

        return $this;
    }

    /**
     * Gets bindBankCode
     *
     * @return string
     */
    public function getBindBankCode()
    {
        return $this->container['bindBankCode'];
    }

    /**
     * Sets bindBankCode
     *
     * @param string $bindBankCode 绑定银行编码
     *
     * @return $this
     */
    public function setBindBankCode($bindBankCode)
    {
        $this->container['bindBankCode'] = $bindBankCode;

        return $this;
    }

    /**
     * Gets bindCardType
     *
     * @return string
     */
    public function getBindCardType()
    {
        return $this->container['bindCardType'];
    }

    /**
     * Sets bindCardType
     *
     * @param string $bindCardType 绑定卡类型<br>可选项如下:<br>PUBLIC_CARD:对公
     *
     * @return $this
     */
    public function setBindCardType($bindCardType)
    {
        $this->container['bindCardType'] = $bindCardType;

        return $this;
    }

    /**
     * Gets returnUrl
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->container['returnUrl'];
    }

    /**
     * Sets returnUrl
     *
     * @param string $returnUrl 页面跳转地址
     *
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->container['returnUrl'] = $returnUrl;

        return $this;
    }

    /**
     * Gets businessLicenceEffectiveDate
     *
     * @return string
     */
    public function getBusinessLicenceEffectiveDate()
    {
        return $this->container['businessLicenceEffectiveDate'];
    }

    /**
     * Sets businessLicenceEffectiveDate
     *
     * @param string $businessLicenceEffectiveDate 营业执照生效日期<br>格式:yyyyMMdd
     *
     * @return $this
     */
    public function setBusinessLicenceEffectiveDate($businessLicenceEffectiveDate)
    {
        $this->container['businessLicenceEffectiveDate'] = $businessLicenceEffectiveDate;

        return $this;
    }

    /**
     * Gets businessLicenceExpirationDate
     *
     * @return string
     */
    public function getBusinessLicenceExpirationDate()
    {
        return $this->container['businessLicenceExpirationDate'];
    }

    /**
     * Sets businessLicenceExpirationDate
     *
     * @param string $businessLicenceExpirationDate 法人证件失效日期<br>格式:yyyyMMdd<br>长期有效: forever
     *
     * @return $this
     */
    public function setBusinessLicenceExpirationDate($businessLicenceExpirationDate)
    {
        $this->container['businessLicenceExpirationDate'] = $businessLicenceExpirationDate;

        return $this;
    }

    /**
     * Gets enterpriseEmail
     *
     * @return string
     */
    public function getEnterpriseEmail()
    {
        return $this->container['enterpriseEmail'];
    }

    /**
     * Sets enterpriseEmail
     *
     * @param string $enterpriseEmail 企业邮箱
     *
     * @return $this
     */
    public function setEnterpriseEmail($enterpriseEmail)
    {
        $this->container['enterpriseEmail'] = $enterpriseEmail;

        return $this;
    }

    /**
     * Gets registerAddress
     *
     * @return string
     */
    public function getRegisterAddress()
    {
        return $this->container['registerAddress'];
    }

    /**
     * Sets registerAddress
     *
     * @param string $registerAddress 商户注册地址
     *
     * @return $this
     */
    public function setRegisterAddress($registerAddress)
    {
        $this->container['registerAddress'] = $registerAddress;

        return $this;
    }

    /**
     * Gets legalGender
     *
     * @return string
     */
    public function getLegalGender()
    {
        return $this->container['legalGender'];
    }

    /**
     * Sets legalGender
     *
     * @param string $legalGender 法人性别<br>可选项如下:<br>MALE:男<br>FEMALE:女
     *
     * @return $this
     */
    public function setLegalGender($legalGender)
    {
        $this->container['legalGender'] = $legalGender;

        return $this;
    }

    /**
     * Gets legalLicenceEffectiveDate
     *
     * @return string
     */
    public function getLegalLicenceEffectiveDate()
    {
        return $this->container['legalLicenceEffectiveDate'];
    }

    /**
     * Sets legalLicenceEffectiveDate
     *
     * @param string $legalLicenceEffectiveDate 法人证件生效日期<br>格式:yyyyMMdd
     *
     * @return $this
     */
    public function setLegalLicenceEffectiveDate($legalLicenceEffectiveDate)
    {
        $this->container['legalLicenceEffectiveDate'] = $legalLicenceEffectiveDate;

        return $this;
    }

    /**
     * Gets legalLicenceExpirationDate
     *
     * @return string
     */
    public function getLegalLicenceExpirationDate()
    {
        return $this->container['legalLicenceExpirationDate'];
    }

    /**
     * Sets legalLicenceExpirationDate
     *
     * @param string $legalLicenceExpirationDate 法人证件失效日期<br>格式:yyyyMMdd<br>长期有效: forever
     *
     * @return $this
     */
    public function setLegalLicenceExpirationDate($legalLicenceExpirationDate)
    {
        $this->container['legalLicenceExpirationDate'] = $legalLicenceExpirationDate;

        return $this;
    }

    /**
     * Gets shareholderName
     *
     * @return string
     */
    public function getShareholderName()
    {
        return $this->container['shareholderName'];
    }

    /**
     * Sets shareholderName
     *
     * @param string $shareholderName 股东或实际控制人姓名
     *
     * @return $this
     */
    public function setShareholderName($shareholderName)
    {
        $this->container['shareholderName'] = $shareholderName;

        return $this;
    }

    /**
     * Gets benefitName
     *
     * @return string
     */
    public function getBenefitName()
    {
        return $this->container['benefitName'];
    }

    /**
     * Sets benefitName
     *
     * @param string $benefitName 受益人姓名
     *
     * @return $this
     */
    public function setBenefitName($benefitName)
    {
        $this->container['benefitName'] = $benefitName;

        return $this;
    }

    /**
     * Gets benefitCertificateType
     *
     * @return string
     */
    public function getBenefitCertificateType()
    {
        return $this->container['benefitCertificateType'];
    }

    /**
     * Sets benefitCertificateType
     *
     * @param string $benefitCertificateType 受益人证件类型<br>可选项如下:<br>身份证:ID_CARD
     *
     * @return $this
     */
    public function setBenefitCertificateType($benefitCertificateType)
    {
        $this->container['benefitCertificateType'] = $benefitCertificateType;

        return $this;
    }

    /**
     * Gets benefitCertificateNo
     *
     * @return string
     */
    public function getBenefitCertificateNo()
    {
        return $this->container['benefitCertificateNo'];
    }

    /**
     * Sets benefitCertificateNo
     *
     * @param string $benefitCertificateNo 受益人证件号
     *
     * @return $this
     */
    public function setBenefitCertificateNo($benefitCertificateNo)
    {
        $this->container['benefitCertificateNo'] = $benefitCertificateNo;

        return $this;
    }

    /**
     * Gets benefitEffectiveDate
     *
     * @return string
     */
    public function getBenefitEffectiveDate()
    {
        return $this->container['benefitEffectiveDate'];
    }

    /**
     * Sets benefitEffectiveDate
     *
     * @param string $benefitEffectiveDate 受益人证件生效日期<br>格式:yyyyMMdd
     *
     * @return $this
     */
    public function setBenefitEffectiveDate($benefitEffectiveDate)
    {
        $this->container['benefitEffectiveDate'] = $benefitEffectiveDate;

        return $this;
    }

    /**
     * Gets benefitExpirationDate
     *
     * @return string
     */
    public function getBenefitExpirationDate()
    {
        return $this->container['benefitExpirationDate'];
    }

    /**
     * Sets benefitExpirationDate
     *
     * @param string $benefitExpirationDate 受益人证件失效日期<br>格式:yyyyMMdd<br>长期有效: forever
     *
     * @return $this
     */
    public function setBenefitExpirationDate($benefitExpirationDate)
    {
        $this->container['benefitExpirationDate'] = $benefitExpirationDate;

        return $this;
    }

    /**
     * Gets benefitAddress
     *
     * @return string
     */
    public function getBenefitAddress()
    {
        return $this->container['benefitAddress'];
    }

    /**
     * Sets benefitAddress
     *
     * @param string $benefitAddress 受益人住址
     *
     * @return $this
     */
    public function setBenefitAddress($benefitAddress)
    {
        $this->container['benefitAddress'] = $benefitAddress;

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


