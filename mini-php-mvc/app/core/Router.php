<?php

class Router
{
    public function dispatch()
    {
        try {
            $url = $_GET['url'] ?? '';
            $url = trim($url, '/');
            $parts = explode('/', $url);

            $controllerName = !empty($parts[0]) ? ucfirst($parts[0]) . 'Controller' : 'HomeController';
            $method = $parts[1] ?? 'index';
            $params = array_slice($parts, 2);

            $controllerFile = "../app/controllers/$controllerName.php";
            if (file_exists($controllerFile)) {
                require_once $controllerFile;
                $controller = new $controllerName();
                if (method_exists($controller, $method)) {
                    call_user_func_array([$controller, $method], $params);
                } else {
                    http_response_code(404);
                    require "../app/views/404.php";
                }
            } else {
                http_response_code(404);
                require "../app/views/404.php";
            }

        } catch (Exception $e) {
            http_response_code(500);
            echo "<h1>500 - Internal Server Error</h1>";
            echo "<p>" . $e->getMessage() . "</p>";
        }
    }
}
