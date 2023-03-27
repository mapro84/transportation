<?php

use src\app\Controller\HomeController;
use src\app\Controller\BOController;
use src\app\Controller\TravelController;
use src\api\Api;
use src\Core\Utils\Debug;

$homeController = new HomeController();
$boController = new BOController();
$travelController = new TravelController();
$api = new Api();
$debug = new Debug();

$page = $_GET['page'] ?? '';
switch ($page) {
    case 'home':
        $homeController->show();
    break;
    case 'bo':
        $boController->show();
    break;
    case 'travel':
        $data = $_POST['data'];
        $travelController->get($data);
    break;
    default:
        $homeController->show();
}
