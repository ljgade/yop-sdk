<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeOnlinebankOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult';
    }

    /**
     * @param RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
