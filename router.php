<?php

use App\Controller\RoomController;

$roomController=new RoomController();

$page=$_REQUEST['page']??'';
$action=$_REQUEST['action']??'';

switch ($page){
    case 'room':
        $roomController->index();
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
//    default:
//        $roomController->index();
}
