<?php

namespace src\api;

use src\api\TravelController;

class Router {
    public function route($method, $url, $data) {
        $url_parts = parse_url($url);
        $path = $url_parts['path'];
        $params = array();

        if (isset($url_parts['query'])) {
            parse_str($url_parts['query'], $params);
        }

        switch ($method) {
            case 'GET':
                if ($path == '/users') {
                    $controller = new UserController();
                    if (isset($params['id'])) {
                        return $controller->getUserById($params['id']);
                    } else {
                        return $controller->getAllUsers();
                    }
                }
                break;

            case 'POST':
                if ($path == '/api/travel') {
                    $controller = new TravelController();
                    return $controller->createUser($data);
                }
                break;
        }

        // If no route was matched, return an error response
        return array('error' => 'Route not found');
    }
}

