<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SupplierQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SupplierQueryQuerySupplierRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryQuerySupplierRespDTOResult';
    }

    /**
     * @param SupplierQueryQuerySupplierRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierQueryQuerySupplierRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
