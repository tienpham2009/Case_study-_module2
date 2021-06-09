<?php

use App\Controller\RoomController;

include "vendor/autoload.php";

$page = $_REQUEST["page"] ?? null;
$action = $_REQUEST["action"] ?? null;

$roomController = new RoomController();

switch ($page){
    case 'room':
        switch ($action){
            case 'update':
                $roomController->update();
                break;
            case 'delete':
                $roomController->delete();
                break;
            case 'add':
                $roomController->add();
                break;
        }
        break;
    default:
        $roomController->index();
}
