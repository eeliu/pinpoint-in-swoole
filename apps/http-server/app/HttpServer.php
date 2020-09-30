<?php
namespace app;
use Swoole\Http\Server as SServer;
use Swoole\Http\Request;
use Swoole\Http\Response;
class HttpServer{

    private    $server;

    public function __construct()
    {
        $this->server = new SServer('0.0.0.0', 9501, SWOOLE_BASE);
    }


    public function doSomething()
    {
//        \Swoole\Coroutine\System::sleep(0.1);
        $this->doSomething1();
    }


    public function doSomething1()
    {
//        \Swoole\Coroutine\System::sleep(0.1);
        $this->doSomething2();
    }


    public function doSomething2()
    {
        return "hello pinpoint";
    }

    public function doAny()
    {
//        \Swoole\Coroutine\System::sleep(0.1);
    }


    public function init()
    {
        $this->server->on('request', function (Request $request, Response $response) {
            $this->doSomething();
            $this->doAny();
            $response->end('Hello ' . $request->rawcontent());
        });
    }

    public function run()
    {
        $this->server->start();
    }

}