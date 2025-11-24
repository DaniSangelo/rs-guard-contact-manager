<?php

namespace App\Core;

class Router
{
    private $routes = [];

    private function addRoute(
        string $httpMethod,
        string $uri,
        array $controller,
        ?string $middleware = null
    ): void {
        $this->routes[$httpMethod][$uri] = [
            'class' => $controller[0],
            'classMethod' => $controller[1],
            'middleware' => $middleware,
        ];
    }

    public function get(string $uri, array $controller, ?string $middleware = null)
    {
        $this->addRoute('GET', $uri, $controller, $middleware);
        return $this;
    }

    public function post(string $uri, array $controller, ?string $middleware = null)
    {
        $this->addRoute('POST', $uri, $controller, $middleware);
        return $this;
    }

    public function delete(string $uri, array $controller, ?string $middleware = null)
    {
        $this->addRoute('DELETE', $uri, $controller, $middleware);
        return $this;
    }

    public function put(string $uri, array $controller, ?string $middleware = null)
    {
        $this->addRoute('PUT', $uri, $controller, $middleware);
        return $this;
    }

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
