<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BalanceQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BalanceQueryAccountInfoRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BalanceQueryAccountInfoRespDTOResult';
    }

    /**
     * @param BalanceQueryAccountInfoRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BalanceQueryAccountInfoRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
