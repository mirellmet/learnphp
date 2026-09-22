<?php

namespace App;

class Router
{
    private static array $routes = [];

    public static function addRoute($path, $controller, $method): void
    {
        self::$routes[] = [
            'path' => $path,
            'action' => [$controller, $method],
        ];
    }

    public function __construct(private string $path)
    {
        $this->path = parse_url($path, PHP_URL_PATH);
    }

    public function match()
    {
        foreach (self::$routes as $route) {
            if ($route['path'] === $this->path) {
                return $route;
            }
        }

        return false;
    }
}