<?php
namespace Jd\Api\Goods;

use Jd\Api\IApi;
use Jd\JFunc;

class WareUpdateDelistingApi implements IApi{

    /**
     * @var string
     * @must true
     */
    public $wareId;

    /**
     * @var string
     * @must true
     * @desc 流水号（无实际意义，不重复即可）
     */
    public $tradeNo;

    /**
     * @var string
     */
    public $method = '360buy.ware.update.delisting';

    /**
     * @var array
     */
    protected $params = array();

    /**
     * WareUpdateDelistingApi constructor.
     */
    public function __construct() {}

    /**
     * Get api method name
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Get api params
     *
     * @return string
     */
    public function getJsonParams()
    {
        $this->params['ware_id'] = $this->wareId;
        $this->params['trade_no'] = $this->tradeNo;

        JFunc::allDataType2String($this->params);

        ksort($this->params);
        return json_encode($this->params);
    }

    /**
     * Open api document
     */
    public static function openApiDocument()
    {
        header('Location:http://jos.jd.com/api/detail.htm?apiName=360buy.ware.update.delisting&id=121');
    }
}

