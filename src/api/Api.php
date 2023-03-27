<?php

namespace src\api;

class Api {
    public function handleRequest($request): void
    {
        $router = new Router();
        $response = $router->route($request);
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function post($route, $data): bool|array|string
    {
        $result = [];
        switch ($route) {
            case 'api/cards':
                $travelController = new TravelController();
                $result = $travelController->get($data);
                break;
            default:
        }

        return $result;
    }


}
