<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeOssStockStatus
 *
 * @method string getStockTaskId()
 * @method string getSourceIp()
 * @method string getLang()
 */
class DescribeOssStockStatusRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Green',
            '2017-08-23',
            'DescribeOssStockStatus',
            'green'
        );
    }

    /**
     * @param string $stockTaskId
     *
     * @return $this
     */
    public function setStockTaskId($stockTaskId)
    {
        $this->requestParameters['StockTaskId'] = $stockTaskId;
        $this->queryParameters['StockTaskId'] = $stockTaskId;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
