<?php

namespace App\Core;

class Request
{
    private $params;
    private $method;
    private $uri;
    private $agent;
    private $ip;

    function __construct()
    {
        $this->params = $_REQUEST;
        $this->method = strtolower($_SERVER["REQUEST_METHOD"]);
        $this->uri = $_SERVER["REQUEST_URI"];
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
        return $this->uri;
    }

    public function getAgent(): string
    {
        return $this->agent;
    }

    public function getIp(): string
    {
        return $this->ip;
    }
    public function getUri(): string
    {
        return $this->uri;
    }
}
