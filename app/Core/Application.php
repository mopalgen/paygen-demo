<?php

namespace App\Core;

class Application
{
    const BASE_PATH =  __DIR__  . '/../';
    const PAGES_PATH = self::BASE_PATH . 'pages/';

    public function __construct()
    {
        require_once __DIR__ . '/../etc/config.php';

        $route_path = $_SERVER['REQUEST_URI'];

        if ($route_path === '/') {
            require_once(self::PAGES_PATH . 'index.php');
        } elseif (explode('/', $route_path)['1'] === 'img') {
            header("content-type: image/jpeg");
            readfile(self::PAGES_PATH . $route_path);
            exit;
        } elseif (explode('/', $route_path)['1'] === 'js') {
            header("content-type: application/javascript");
            readfile(self::PAGES_PATH . $route_path);
            exit;
        } else {
            if (file_exists(self::PAGES_PATH . $route_path . '.php')) {
                require_once(self::PAGES_PATH . $route_path . '.php');
            } else {
                require_once(self::PAGES_PATH . '404.php');
            }
        }
    }
}