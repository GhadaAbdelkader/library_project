<?php 
namespace Core;
class Router {
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri'        => $uri,
            'controller' => $controller,
            'method'     => $method
        ];
    }
    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);

    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);

    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);

    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);

    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                return require $route['controller'];
            }
        }
        // dd($route['method']);

        $this->abort();
    }
    protected function abort($code =404) {
        http_response_code($code);
    
        require "Views/error-{$code}.php";
        die();
    }
}