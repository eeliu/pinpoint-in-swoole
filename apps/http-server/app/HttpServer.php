<?php

//$server = new Swoole\WebSocket\Server('127.0.0.1', 9501, SWOOLE_BASE);
//$server->set(['open_http2_protocol' => true]);
//// http && http2
//$server->on('request', function (Swoole\Http\Request $request, Swoole\Http\Response $response) {
//    $response->end('Hello ' . $request->rawcontent());
//});
//// websocket
//$server->on('message', function (Swoole\WebSocket\Server $server, Swoole\WebSocket\Frame $frame) {
//    $server->push($frame->fd, 'Hello ' . $frame->data);
//});
//// tcp
//$tcp_server = $server->listen('127.0.0.1', 9502, SWOOLE_TCP);
//// $tcp_server->set($tcp_options);
//$tcp_server->on('receive', function (Swoole\Server $server, int $fd, int $reactor_id, string $data) {
//    $server->send($fd, tcp_pack('Hello ' . tcp_unpack($data)));
//});
//$server->start();

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

public function init()
{
//    $this->server->set(['open_http2_protocol' => true]);
// http && http2
    $this->server->on('request', function (Request $request, Response $response) {
        $response->end('Hello ' . $request->rawcontent());
    });
//// websocket
//    $this->server->on('message', function (Swoole\WebSocket\Server $server, Swoole\WebSocket\Frame $frame) {
//        $server->push($frame->fd, 'Hello ' . $frame->data);
//    });
    echo "init \n";
}

public function run()
{
    echo "run \n";
    $this->server->start();
}

}