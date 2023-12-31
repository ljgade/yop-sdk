<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BackQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BackQueryYopQueryDivideBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\BackQueryYopQueryDivideBackResDTOResult';
    }

    /**
     * @param BackQueryYopQueryDivideBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BackQueryYopQueryDivideBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
