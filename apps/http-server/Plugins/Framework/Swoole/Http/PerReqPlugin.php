<?php
namespace Plugins\Framework\Swoole\Http;


class PerReqPlugin
{
    private  $_callback;


    public $tid = null;
    public $sid = null;
    public $psid = null;
    public $pname = null;
    public $ptype = null;

    public $ah = null;
    public $app_name = null;
    public $app_id = null;
    private $curNextSpanId = '';
    private $isLimit = false;
    public $args=[];


    public function __construct(callable $callback)
    {
        $this->_callback = $callback;
    }

    protected function onBefore()
    {
        echo "call onBefore";
    }


    protected function onException($e)
    {

    }

    protected function onEnd(&$ret)
    {
        echo "call onEnd";
    }

    public function __invoke(&...$args)
    {
        $this->args = $args;
        $this->onBefore();
        try{
            $ret = call_user_func_array($this->_callback,$args);
            $this->onEnd($ret);
            return $ret;
        }catch (\Exception $e){
            $this->onException($e);
            throw $e;
        }
    }




}