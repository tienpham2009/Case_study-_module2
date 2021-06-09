<?php

use App\Controller\RoomController;

$roomController=new RoomController();

$page=$_REQUEST['page']??'';
$action=$_REQUEST['action']??'';

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
    default:
        $roomController->index();
}