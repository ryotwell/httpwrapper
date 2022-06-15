<?php

namespace Ryodevz\Httpwrapper;

use GuzzleHttp\Client;
use Ryodevz\Httpwrapper\Support\Response;

class Http
{
    protected static string $method;

    protected static string $url;

    protected static array $data = [];

    protected static array $query = [];

    protected static array $headers = [];

    public static function get(string $url, array $query = [])
    {
        static::$method = 'get';
        static::$url = $url;
        static::$query = $query;

        return new static;
    }

    public static function post(string $url, array $data = [])
    {
        static::$method = 'post';
        static::$url = $url;
        static::$data = $data;

        return new static;
    }

    public static function delete(string $url, array $data = [])
    {
        static::$method = 'delete';
        static::$url = $url;
        static::$data = $data;

        return new static;
    }

    public static function put(string $url, array $data = [])
    {
        static::$method = 'put';
        static::$url = $url;
        static::$data = $data;

        return new static;
    }

    public static function patch(string $url, array $data = [])
    {
        static::$method = 'patch';
        static::$url = $url;
        static::$data = $data;

        return new static;
    }

    public static function withHeaders(array $headers = [])
    {
        static::$headers = $headers;

        return new static;
    }

    public function send()
    {
        $client = new Client();

        $response = $client->{static::$method}(static::$url, [
            'form_params' => static::$data,
            'headers' => static::$headers,
            'query' => static::$query,
        ]);

        return new Response($response);
    }
}