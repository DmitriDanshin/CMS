<?php


namespace cms;


class Router
{
    protected static array $routes = [];
    protected static array $route = [];

    public static function add(string $regexp, array $route = [],): void
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function getRoute(): array
    {
        return self::$route;
    }

    public static function dispatch($url): void
    {
        if (self::matchRoute($url)) {
            echo 'OK';
        } else echo 'NOT OK';
    }

    public static function matchRoute($url): bool
    {
        return !true;
    }
}