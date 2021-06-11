<?php
use App\Controller\RoomController;
include "vendor/autoload.php";
$status = $_REQUEST["status"] ?? null;
$roomController = new RoomController();
$count = $roomController->countByStatus();
if ($count["status"] == "Empty"){
    echo "Phòng còn trống: ". $count["count"];
}else if ($count["status"] == "Rented"){
    echo "Phòng đã cho thuê: ".$count["count"];
}

