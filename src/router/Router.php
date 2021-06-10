<?php

namespace App;

class Router
{

    private  $handlers = array();
    private const METHOD_GET = 'GET';
    private const METHOD_POST = 'POST';


    public function run()
    {

        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method = $_SERVER['REQUEST_METHOD'];

        $callaback = null;
        foreach ($this->handlers as $item) {
            if ($item['path'] === $requestPath && $item['method'] === $method) {
                $callaback = $item['handler'];
            }
        }
        call_user_func_array($callaback, [array_merge($_GET, $_POST)]);
    }

    private function addHandler(string $method, string $path, $handler): void
    {

        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler
        ];
    }

    public function get(string $path, $handler): void
    {

        $this->addHandler(self::METHOD_GET, $path, $handler);
    }

    public function post(string $path, $handler): void
    {
    }

    public function put(string $path, $handler): void
    {
    }

    public function delete(string $path, $handler): void
    {
    }

    public function patch(string $path, $handler): void
    {
    }
}
