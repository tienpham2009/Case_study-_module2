<?php

use App\Controller\RoomController;

include "vendor/autoload.php";

$page = $_REQUEST["page"] ?? null;
$action = $_REQUEST["action"] ?? null;

$roomController = new RoomController();

switch ($page) {
    case "room":
        switch ($action) {
            case "add":
                $roomController->add();
                break;
        }
        break;
}
