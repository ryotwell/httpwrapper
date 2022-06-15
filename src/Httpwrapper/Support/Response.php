<?php

namespace Ryodevz\Httpwrapper\Support;

class Response
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function body()
    {
        return json_decode($this->response->getBody());
    }
}