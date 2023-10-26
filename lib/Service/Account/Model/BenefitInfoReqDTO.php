<?php
/**
 * BenefitInfoReqDTO
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
 * BenefitInfoReqDTO Class Doc Comment
 *
 * @category Class
 * @description 未命名
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BenefitInfoReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BenefitInfoReqDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'benefitName' => 'string',
        'benefitMobileNo' => 'string',
        'benefitIdType' => 'string',
        'benefitIdNo' => 'string',
        'benefitStartDate' => 'string',
        'benefitExpireDate' => 'string',
        'benefitIncomeType' => 'string',
        'benefitImageFont' => 'string',
        'benefitImageBack' => 'string',
        'benefitAddress' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'benefitName' => null,
        'benefitMobileNo' => null,
        'benefitIdType' => null,
        'benefitIdNo' => null,
        'benefitStartDate' => null,
        'benefitExpireDate' => null,
        'benefitIncomeType' => null,
        'benefitImageFont' => null,
        'benefitImageBack' => null,
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
        'benefitName' => 'benefitName',
        'benefitMobileNo' => 'benefitMobileNo',
        'benefitIdType' => 'benefitIdType',
        'benefitIdNo' => 'benefitIdNo',
        'benefitStartDate' => 'benefitStartDate',
        'benefitExpireDate' => 'benefitExpireDate',
        'benefitIncomeType' => 'benefitIncomeType',
        'benefitImageFont' => 'benefitImageFont',
        'benefitImageBack' => 'benefitImageBack',
        'benefitAddress' => 'benefitAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'benefitName' => 'setBenefitName',
        'benefitMobileNo' => 'setBenefitMobileNo',
        'benefitIdType' => 'setBenefitIdType',
        'benefitIdNo' => 'setBenefitIdNo',
        'benefitStartDate' => 'setBenefitStartDate',
        'benefitExpireDate' => 'setBenefitExpireDate',
        'benefitIncomeType' => 'setBenefitIncomeType',
        'benefitImageFont' => 'setBenefitImageFont',
        'benefitImageBack' => 'setBenefitImageBack',
        'benefitAddress' => 'setBenefitAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'benefitName' => 'getBenefitName',
        'benefitMobileNo' => 'getBenefitMobileNo',
        'benefitIdType' => 'getBenefitIdType',
        'benefitIdNo' => 'getBenefitIdNo',
        'benefitStartDate' => 'getBenefitStartDate',
        'benefitExpireDate' => 'getBenefitExpireDate',
        'benefitIncomeType' => 'getBenefitIncomeType',
        'benefitImageFont' => 'getBenefitImageFont',
        'benefitImageBack' => 'getBenefitImageBack',
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
        $this->container['benefitName'] = isset($data['benefitName']) ? $data['benefitName'] : null;
        $this->container['benefitMobileNo'] = isset($data['benefitMobileNo']) ? $data['benefitMobileNo'] : null;
        $this->container['benefitIdType'] = isset($data['benefitIdType']) ? $data['benefitIdType'] : null;
        $this->container['benefitIdNo'] = isset($data['benefitIdNo']) ? $data['benefitIdNo'] : null;
        $this->container['benefitStartDate'] = isset($data['benefitStartDate']) ? $data['benefitStartDate'] : null;
        $this->container['benefitExpireDate'] = isset($data['benefitExpireDate']) ? $data['benefitExpireDate'] : null;
        $this->container['benefitIncomeType'] = isset($data['benefitIncomeType']) ? $data['benefitIncomeType'] : null;
        $this->container['benefitImageFont'] = isset($data['benefitImageFont']) ? $data['benefitImageFont'] : null;
        $this->container['benefitImageBack'] = isset($data['benefitImageBack']) ? $data['benefitImageBack'] : null;
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

        if ($this->container['benefitName'] === null) {
            $invalidProperties[] = "'benefitName' can't be null";
        }
        if ($this->container['benefitMobileNo'] === null) {
            $invalidProperties[] = "'benefitMobileNo' can't be null";
        }
        if ($this->container['benefitIdType'] === null) {
            $invalidProperties[] = "'benefitIdType' can't be null";
        }
        if ($this->container['benefitIdNo'] === null) {
            $invalidProperties[] = "'benefitIdNo' can't be null";
        }
        if ($this->container['benefitStartDate'] === null) {
            $invalidProperties[] = "'benefitStartDate' can't be null";
        }
        if ($this->container['benefitExpireDate'] === null) {
            $invalidProperties[] = "'benefitExpireDate' can't be null";
        }
        if ($this->container['benefitIncomeType'] === null) {
            $invalidProperties[] = "'benefitIncomeType' can't be null";
        }
        if ($this->container['benefitImageFont'] === null) {
            $invalidProperties[] = "'benefitImageFont' can't be null";
        }
        if ($this->container['benefitImageBack'] === null) {
            $invalidProperties[] = "'benefitImageBack' can't be null";
        }
        if ($this->container['benefitAddress'] === null) {
            $invalidProperties[] = "'benefitAddress' can't be null";
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
     * Gets benefitMobileNo
     *
     * @return string
     */
    public function getBenefitMobileNo()
    {
        return $this->container['benefitMobileNo'];
    }

    /**
     * Sets benefitMobileNo
     *
     * @param string $benefitMobileNo 受益人手机号
     *
     * @return $this
     */
    public function setBenefitMobileNo($benefitMobileNo)
    {
        $this->container['benefitMobileNo'] = $benefitMobileNo;

        return $this;
    }

    /**
     * Gets benefitIdType
     *
     * @return string
     */
    public function getBenefitIdType()
    {
        return $this->container['benefitIdType'];
    }

    /**
     * Sets benefitIdType
     *
     * @param string $benefitIdType 受益人证件类型<br>可选项如下:<br>ID_CARD:身份证
     *
     * @return $this
     */
    public function setBenefitIdType($benefitIdType)
    {
        $this->container['benefitIdType'] = $benefitIdType;

        return $this;
    }

    /**
     * Gets benefitIdNo
     *
     * @return string
     */
    public function getBenefitIdNo()
    {
        return $this->container['benefitIdNo'];
    }

    /**
     * Sets benefitIdNo
     *
     * @param string $benefitIdNo 受益人证件号码<br>填写身份证号码
     *
     * @return $this
     */
    public function setBenefitIdNo($benefitIdNo)
    {
        $this->container['benefitIdNo'] = $benefitIdNo;

        return $this;
    }

    /**
     * Gets benefitStartDate
     *
     * @return string
     */
    public function getBenefitStartDate()
    {
        return $this->container['benefitStartDate'];
    }

    /**
     * Sets benefitStartDate
     *
     * @param string $benefitStartDate 受益人证件生效日期<br>参数格式为yyyyMMdd
     *
     * @return $this
     */
    public function setBenefitStartDate($benefitStartDate)
    {
        $this->container['benefitStartDate'] = $benefitStartDate;

        return $this;
    }

    /**
     * Gets benefitExpireDate
     *
     * @return string
     */
    public function getBenefitExpireDate()
    {
        return $this->container['benefitExpireDate'];
    }

    /**
     * Sets benefitExpireDate
     *
     * @param string $benefitExpireDate 受益人证件失效日期<br>参数格式为yyyyMMdd或者forever
     *
     * @return $this
     */
    public function setBenefitExpireDate($benefitExpireDate)
    {
        $this->container['benefitExpireDate'] = $benefitExpireDate;

        return $this;
    }

    /**
     * Gets benefitIncomeType
     *
     * @return string
     */
    public function getBenefitIncomeType()
    {
        return $this->container['benefitIncomeType'];
    }

    /**
     * Sets benefitIncomeType
     *
     * @param string $benefitIncomeType 最终受益人受益方式<br>可选项如下:<br>A01:直接或间接控股25%（含）以上<br>A02:通过人事、财务等其他方式对公司进行控制<br>A03:高级管理人员<br>A04:法人或公司负责人<br>A05:其他
     *
     * @return $this
     */
    public function setBenefitIncomeType($benefitIncomeType)
    {
        $this->container['benefitIncomeType'] = $benefitIncomeType;

        return $this;
    }

    /**
     * Gets benefitImageFont
     *
     * @return string
     */
    public function getBenefitImageFont()
    {
        return $this->container['benefitImageFont'];
    }

    /**
     * Sets benefitImageFont
     *
     * @param string $benefitImageFont 受益人证件照正面
     *
     * @return $this
     */
    public function setBenefitImageFont($benefitImageFont)
    {
        $this->container['benefitImageFont'] = $benefitImageFont;

        return $this;
    }

    /**
     * Gets benefitImageBack
     *
     * @return string
     */
    public function getBenefitImageBack()
    {
        return $this->container['benefitImageBack'];
    }

    /**
     * Sets benefitImageBack
     *
     * @param string $benefitImageBack 受益人证件照反面
     *
     * @return $this
     */
    public function setBenefitImageBack($benefitImageBack)
    {
        $this->container['benefitImageBack'] = $benefitImageBack;

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
     * @param string $benefitAddress 受益人地址
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

