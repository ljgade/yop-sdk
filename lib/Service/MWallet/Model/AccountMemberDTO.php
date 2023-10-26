<?php
/**
 * AccountMemberDTO
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
 * AccountMemberDTO Class Doc Comment
 *
 * @category Class
 * @description 会员信息
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountMemberDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountMemberDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'memberName' => 'string',
        'idCardNo' => 'string',
        'idCardType' => 'string',
        'mobile' => 'string',
        'sex' => 'string',
        'address' => 'string',
        'idCardBeginDate' => 'string',
        'idCardEndDate' => 'string',
        'idCardOrg' => 'string',
        'corpOrationType' => 'string',
        'idImageFront' => 'string',
        'idImageBack' => 'string',
        'faceImage' => 'string',
        'bankNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'memberName' => null,
        'idCardNo' => null,
        'idCardType' => null,
        'mobile' => null,
        'sex' => null,
        'address' => null,
        'idCardBeginDate' => null,
        'idCardEndDate' => null,
        'idCardOrg' => null,
        'corpOrationType' => null,
        'idImageFront' => null,
        'idImageBack' => null,
        'faceImage' => null,
        'bankNo' => null
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
        'memberName' => 'memberName',
        'idCardNo' => 'idCardNo',
        'idCardType' => 'idCardType',
        'mobile' => 'mobile',
        'sex' => 'sex',
        'address' => 'address',
        'idCardBeginDate' => 'idCardBeginDate',
        'idCardEndDate' => 'idCardEndDate',
        'idCardOrg' => 'idCardOrg',
        'corpOrationType' => 'corpOrationType',
        'idImageFront' => 'idImageFront',
        'idImageBack' => 'idImageBack',
        'faceImage' => 'faceImage',
        'bankNo' => 'bankNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memberName' => 'setMemberName',
        'idCardNo' => 'setIdCardNo',
        'idCardType' => 'setIdCardType',
        'mobile' => 'setMobile',
        'sex' => 'setSex',
        'address' => 'setAddress',
        'idCardBeginDate' => 'setIdCardBeginDate',
        'idCardEndDate' => 'setIdCardEndDate',
        'idCardOrg' => 'setIdCardOrg',
        'corpOrationType' => 'setCorpOrationType',
        'idImageFront' => 'setIdImageFront',
        'idImageBack' => 'setIdImageBack',
        'faceImage' => 'setFaceImage',
        'bankNo' => 'setBankNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memberName' => 'getMemberName',
        'idCardNo' => 'getIdCardNo',
        'idCardType' => 'getIdCardType',
        'mobile' => 'getMobile',
        'sex' => 'getSex',
        'address' => 'getAddress',
        'idCardBeginDate' => 'getIdCardBeginDate',
        'idCardEndDate' => 'getIdCardEndDate',
        'idCardOrg' => 'getIdCardOrg',
        'corpOrationType' => 'getCorpOrationType',
        'idImageFront' => 'getIdImageFront',
        'idImageBack' => 'getIdImageBack',
        'faceImage' => 'getFaceImage',
        'bankNo' => 'getBankNo'
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
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['idCardNo'] = isset($data['idCardNo']) ? $data['idCardNo'] : null;
        $this->container['idCardType'] = isset($data['idCardType']) ? $data['idCardType'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['idCardBeginDate'] = isset($data['idCardBeginDate']) ? $data['idCardBeginDate'] : null;
        $this->container['idCardEndDate'] = isset($data['idCardEndDate']) ? $data['idCardEndDate'] : null;
        $this->container['idCardOrg'] = isset($data['idCardOrg']) ? $data['idCardOrg'] : null;
        $this->container['corpOrationType'] = isset($data['corpOrationType']) ? $data['corpOrationType'] : null;
        $this->container['idImageFront'] = isset($data['idImageFront']) ? $data['idImageFront'] : null;
        $this->container['idImageBack'] = isset($data['idImageBack']) ? $data['idImageBack'] : null;
        $this->container['faceImage'] = isset($data['faceImage']) ? $data['faceImage'] : null;
        $this->container['bankNo'] = isset($data['bankNo']) ? $data['bankNo'] : null;
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
     * Gets memberName
     *
     * @return string
     */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
     * Sets memberName
     *
     * @param string $memberName 用户姓名<br>真实姓名
     *
     * @return $this
     */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;

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
     * @param string $idCardNo 证件号码
     *
     * @return $this
     */
    public function setIdCardNo($idCardNo)
    {
        $this->container['idCardNo'] = $idCardNo;

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
     * @param string $idCardType 证件类型<br>可选项如下:<br>ID:身份证
     *
     * @return $this
     */
    public function setIdCardType($idCardType)
    {
        $this->container['idCardType'] = $idCardType;

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
     * Gets sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
     * Sets sex
     *
     * @param string $sex 性别<br>可选项如下:<br>MALE:男性<br>FEMALE:女性
     *
     * @return $this
     */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address 通讯地址<br>长度不少于5个汉字，不超过44个汉字。地址需详细包含省（直辖市），市，区（县）及详细地址
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets idCardBeginDate
     *
     * @return string
     */
    public function getIdCardBeginDate()
    {
        return $this->container['idCardBeginDate'];
    }

    /**
     * Sets idCardBeginDate
     *
     * @param string $idCardBeginDate 证件起始日期<br>类型为yyyy-MM-dd
     *
     * @return $this
     */
    public function setIdCardBeginDate($idCardBeginDate)
    {
        $this->container['idCardBeginDate'] = $idCardBeginDate;

        return $this;
    }

    /**
     * Gets idCardEndDate
     *
     * @return string
     */
    public function getIdCardEndDate()
    {
        return $this->container['idCardEndDate'];
    }

    /**
     * Sets idCardEndDate
     *
     * @param string $idCardEndDate 证件截止日期<br>类型为yyyy-MM-dd(如果为长期的话传长期)
     *
     * @return $this
     */
    public function setIdCardEndDate($idCardEndDate)
    {
        $this->container['idCardEndDate'] = $idCardEndDate;

        return $this;
    }

    /**
     * Gets idCardOrg
     *
     * @return string
     */
    public function getIdCardOrg()
    {
        return $this->container['idCardOrg'];
    }

    /**
     * Sets idCardOrg
     *
     * @param string $idCardOrg 身份证发证机关
     *
     * @return $this
     */
    public function setIdCardOrg($idCardOrg)
    {
        $this->container['idCardOrg'] = $idCardOrg;

        return $this;
    }

    /**
     * Gets corpOrationType
     *
     * @return string
     */
    public function getCorpOrationType()
    {
        return $this->container['corpOrationType'];
    }

    /**
     * Sets corpOrationType
     *
     * @param string $corpOrationType 职业类别<br>可选项如下:<br>00:公务员<br>05:服务业从业人员<br>06:农、林、牧、渔生产人员<br>07:工人<br>12:家庭主妇/主夫<br>13:教师<br>14:律师<br>15:医护人员<br>17:学生<br>18:离退休人员<br>19:私营业主<br>20:自由职业者<br>19:私营业主<br>20:自由职业者<br>21:无业人员<br>24:群众团体、社会团队和其他成员组织人员<br>25:事业单位员工<br>26:公司员工<br>30:公司负责人和高管<br>31:事业单位负责人<br>32:金融、财务从业者<br>33:IT技术人员<br>35:科研人员<br>37:文学艺术、体育专业人员<br>38:其他专业技术人员<br>39:网商经营者
     *
     * @return $this
     */
    public function setCorpOrationType($corpOrationType)
    {
        $this->container['corpOrationType'] = $corpOrationType;

        return $this;
    }

    /**
     * Gets idImageFront
     *
     * @return string
     */
    public function getIdImageFront()
    {
        return $this->container['idImageFront'];
    }

    /**
     * Sets idImageFront
     *
     * @param string $idImageFront 身份证正面图片地址<br>上传到易宝文件存储后返回的url
     *
     * @return $this
     */
    public function setIdImageFront($idImageFront)
    {
        $this->container['idImageFront'] = $idImageFront;

        return $this;
    }

    /**
     * Gets idImageBack
     *
     * @return string
     */
    public function getIdImageBack()
    {
        return $this->container['idImageBack'];
    }

    /**
     * Sets idImageBack
     *
     * @param string $idImageBack 身份证反面照地址<br><br>上传到易宝文件存储后返回的url
     *
     * @return $this
     */
    public function setIdImageBack($idImageBack)
    {
        $this->container['idImageBack'] = $idImageBack;

        return $this;
    }

    /**
     * Gets faceImage
     *
     * @return string
     */
    public function getFaceImage()
    {
        return $this->container['faceImage'];
    }

    /**
     * Sets faceImage
     *
     * @param string $faceImage 人脸图片地址<br>上传到易宝文件存储后返回的url
     *
     * @return $this
     */
    public function setFaceImage($faceImage)
    {
        $this->container['faceImage'] = $faceImage;

        return $this;
    }

    /**
     * Gets bankNo
     *
     * @return string
     */
    public function getBankNo()
    {
        return $this->container['bankNo'];
    }

    /**
     * Sets bankNo
     *
     * @param string $bankNo 绑定的一类银行卡号<br><a href=\"../../attachments/access?fileId=U0BjgGgqbA\">《支持的银行》</a>
     *
     * @return $this
     */
    public function setBankNo($bankNo)
    {
        $this->container['bankNo'] = $bankNo;

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


