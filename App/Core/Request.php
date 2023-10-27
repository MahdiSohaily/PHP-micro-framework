<?php

namespace App\Core;

class Request
{
    private $params;
    private $method;
    private $url;
    private $agent;
    private $ip;

    function __construct()
    {
        $this->params = $_REQUEST;
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->url = $_SERVER["REQUEST_URI"];
        $this->agent = $_SERVER["HTTP_USER_AGENT"];
        $this->ip = $_SERVER["REMOTE_ADDR"];
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getAgent(): string
    {
        return $this->agent;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function __callStatic($method, $args){
        return 
    }
}
