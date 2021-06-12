<?php

use App\Controller\RoomController;
use App\Controller\AuthController;

require __DIR__ . "/vendor/autoload.php";

$page = $_REQUEST["page"] ?? null;
$action = $_REQUEST["action"] ?? null;
$status = $_REQUEST["status"] ?? null;

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
            case 'status':
                $roomController->getStatus();
                break;
            case "search":
                $roomController->search();
                break;
            case "statistical":
                $roomController->statistical();
                break;
            case "detail":
                $roomController->detail();
                break;
        }
        break;
    case 'user':
        switch ($action) {
            case 'logout':
                $authController->logout();
                break;
            case 'register':
                $authController->register();
                break;
            case 'register-view':
                header("location: View/user/register.php");
                break;
            case 'edit':
                $authController->edit();
                break;
            case 'list':
                $authController->showlist();
                break;
        }
        break;
    default:
        $roomController->home();
        break;
}

