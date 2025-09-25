<?php
namespace lib;

class Route {
    private static $routes = [];

    public static function get ($uri, $callback) {
        self::$routes["GET"][$uri] = $callback;
    }
    public static function pos ($uri, $callback) {
        self::$routes ["POST"][$uri] = $callback;
    }

    public static function dispatch ($uri, $method) {
        if (isset(self::$routes[$method][$uri])) {
            call_user_func(self::$routes[$method][$uri]);
        }
    }
}
?>