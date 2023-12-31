<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseAccountPayOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EnterpriseAccountPayOrderAccountPaymentRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderAccountPaymentRespDtoResult';
    }

    /**
     * @param EnterpriseAccountPayOrderAccountPaymentRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseAccountPayOrderAccountPaymentRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
