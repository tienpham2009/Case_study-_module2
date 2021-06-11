<?php

use App\Controller\RoomController;
use App\Controller\AuthController;

require __DIR__ . "/vendor/autoload.php";

$page = $_REQUEST["page"] ?? null;
$action = $_REQUEST["action"] ?? null;

$roomController = new RoomController();
$authController = new AuthController();

switch ($page) {
    case 'room':
        switch ($action) {
            case 'update':
                $roomController->update();
                break;
            case 'delete':
                $roomController->delete();
                break;
            case 'add':
                $roomController->add();
                break;
            case "show-list":
                $roomController->index();
                break;
            case "check_in":
                $roomController->checkIn();
                break;
            case "check_out":
                $roomController->checkOut();
                break;

        }
        break;
    case 'user':
        switch ($action){
            case 'logout':
                $authController->logout();
                break;
            case 'register':
                $authController->register();
                break;
            case 'register-view':
                header("location: View/user/register");
                break;
            case 'edit':
                $authController->edit();
                break;
            case 'list':
                $authController->showlist();
                break;
        }
        break;

}
?>
