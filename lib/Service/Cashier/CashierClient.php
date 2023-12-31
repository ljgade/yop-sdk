<?php


namespace Yeepay\Yop\Sdk\Service\Cashier;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Cashier\Model as Model;

class CashierClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * CashierClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\PayLinkOrderRequest $request
     * @return Model\PayLinkOrderResponse
     * @throws YopClientException
     */
    public function payLinkOrder(Model\PayLinkOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayLinkOrderRequestMarshaller::getInstance(),
            Model\PayLinkOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnifiedOrderRequest $request
     * @return Model\UnifiedOrderResponse
     * @throws YopClientException
     */
    public function unifiedOrder(Model\UnifiedOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnifiedOrderRequestMarshaller::getInstance(),
            Model\UnifiedOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
