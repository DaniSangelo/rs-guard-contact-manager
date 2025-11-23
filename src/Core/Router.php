<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function get(string $uri, array $controller, ?string $middleware = null)
    {
        if (!is_array($controller)) {
            throw new \Exception("Controller must be an array");
        }

        $data = [
            'class' => $controller[0],
            'classMethod' => $controller[1],
            'middleware' => $middleware,
        ];
        $this->routes['GET'][$uri] = $data;
        return $this;
    }

    public function post($uri, $method, $controller, $middleware = null) {}

    public function delete($uri, $method, $controller, $middleware = null) {}

    public function put($uri, $method, $controller, $middleware = null) {}

    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        $httpMethod = $_SERVER['REQUEST_METHOD'];

        $routeInfo = $this->routes[$httpMethod][$uri];
        $class = $routeInfo['class'];
        $method = $routeInfo['classMethod'];
        $middleware = $routeInfo['middleware'];

        if ($middleware) {
            $m = new $middleware;
            $m->handle();
        }

        $c = new $class;
        $c->$method();

        return $this;
    }
}
