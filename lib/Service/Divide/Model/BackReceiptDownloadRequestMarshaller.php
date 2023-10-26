<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BackReceiptDownloadRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BackReceiptDownloadRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BackReceiptDownloadRequestMarshaller();
    }

    /**
     * @return BackReceiptDownloadRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Divide';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/yos/v1.0/divide/back/receipt/download';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BackReceiptDownloadRequest $request
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
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getDivideBackRequestId() != null){
            $internalRequest->addParameter('divideBackRequestId', ObjectSerializer::sanitizeForSerialization($request->getDivideBackRequestId(), 'string'));
        }
        if($request->getUniqueOrderNo() != null){
            $internalRequest->addParameter('uniqueOrderNo', ObjectSerializer::sanitizeForSerialization($request->getUniqueOrderNo(), 'string'));
        }
        if($request->getLedgerNo() != null){
            $internalRequest->addParameter('ledgerNo', ObjectSerializer::sanitizeForSerialization($request->getLedgerNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BackReceiptDownloadRequestMarshaller::__init();
