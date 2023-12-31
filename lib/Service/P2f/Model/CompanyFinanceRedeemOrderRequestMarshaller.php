<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CompanyFinanceRedeemOrderRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CompanyFinanceRedeemOrderRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceRedeemOrderRequestMarshaller();
    }

    /**
     * @return CompanyFinanceRedeemOrderRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'P2f';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/p2f/company-finance/redeem-order';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CompanyFinanceRedeemOrderRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getP2fOpenAcctNo() != null){
            $internalRequest->addParameter('p2fOpenAcctNo', ObjectSerializer::sanitizeForSerialization($request->getP2fOpenAcctNo(), 'string'));
        }
        if($request->getProdCode() != null){
            $internalRequest->addParameter('prodCode', ObjectSerializer::sanitizeForSerialization($request->getProdCode(), 'string'));
        }
        if($request->getAmount() != null){
            $internalRequest->addParameter('amount', ObjectSerializer::sanitizeForSerialization($request->getAmount(), 'float'));
        }
        if($request->getRemark() != null){
            $internalRequest->addParameter('remark', ObjectSerializer::sanitizeForSerialization($request->getRemark(), 'string'));
        }
        if($request->getChannelCode() != null){
            $internalRequest->addParameter('channelCode', ObjectSerializer::sanitizeForSerialization($request->getChannelCode(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getP2fOrderId() != null){
            $internalRequest->addParameter('p2fOrderId', ObjectSerializer::sanitizeForSerialization($request->getP2fOrderId(), 'string'));
        }
        if($request->getRequestTime() != null){
            $internalRequest->addParameter('requestTime', ObjectSerializer::sanitizeForSerialization($request->getRequestTime(), 'string', 'date-time'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CompanyFinanceRedeemOrderRequestMarshaller::__init();
