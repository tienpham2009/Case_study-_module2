<?php

namespace App\Controller;

use App\Model\CateModel;
use App\Model\Models;
use App\Model\RoomModel;
use App\Room;

class RoomController
{
    public RoomModel $roomDB;
    public CateModel $cateModel;

    public function __construct()
    {
        $this->roomDB = new RoomModel();
        $this->cateModel = new CateModel();
    }


    function index()
    {
        $rooms = $this->roomDB->getAll();
        include 'View/room/list.php';
    }

    function getStatus()
    {
        $status = $_GET['status'];
        $rooms = $this->roomDB->getByStatus($status);
        include 'View/room/list.php';
    }

    public function getImage()
    {
        $fileError = [];
        $target_dir = "Public/Image/";
        $target_name = basename($_FILES["image"]["name"]);

        $target_file = $target_dir . $target_name;

        if ($_FILES["image"]["size"] > 5000000) {
            $fileError["fileUpload"] = "Chỉ được upload file dưới 5MB";
        }

        $file_type = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

        $file_type_allow = ["jpg", "png", "jpeg", "gif"];

        if (!in_array(strtolower($file_type), $file_type_allow)) {
            $fileError["fileUpload"] = "Chỉ được upload file ảnh";
        }

        if (file_exists($target_file)) {
            $fileError["fileUpload"] = "File đã tồn tại trên hệ thống";
        }

        if (empty($fileError)) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        }
        return $target_name;
    }

    public function error(): array
    {
        $error = [];
        $fields = ["name", "description", "unit_price", "cateName"];
        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $error[$field] = "Không được để trống";
            }
        }

        return $error;
    }

    public function getDataRoom()
    {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $unit_price = $_POST["unit_price"];
        $category = $_POST["cateName"];
        $image = $this->getImage();

        $data = [

            "name" => $name,
            "description" => $description,
            "unit_price" => $unit_price,
            "cateName" => $category,
            "image" => $image
        ];

        return new Room($data);
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $cates = $this->cateModel->getAll();
            include "View/room/add.php";
        } else {
            $error = $this->error();
            if (empty($error)) {
                $room = $this->getDataRoom();
                $this->roomDB->add($room);
                header("location:index.php?page=room&action=show-list");

            } else {
                include "View/room/add.php";
            }
        }
    }

    public function checkIn()
    {
        $id = $_GET["id"];
        $rooms = $this->roomDB->getById($id);
        $room = $rooms[0];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "View/room/check_in.php";
        } else {

            $fields = ["timeCheckIn", "timeCheckOut", "price"];
            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $error[$field] = "Không được để trống";
                }
            }
            if (empty($error)) {
                $checkIn = $_POST["timeCheckIn"];
                $checkOut = $_POST["timeCheckOut"];
                $price = $_POST["price"];
                $roomName = $_POST["roomName"];
                $roomId = $_POST['id'];

                $dataCheckIn = [
                    "roomName" => $roomName,
                    "checkIn" => $checkIn,
                    "checkOut" => $checkOut,
                    "price" => $price,
                    "roomId" => $roomId
                ];
                $this->roomDB->checkIn($dataCheckIn);
                header("location:index.php?page=room&action=show-list");
            } else {
                include "View/room/check_in.php";
            }
        }

    }

    function delete()
    {
        $id = $_GET['id'];
        $this->roomDB->delete($id);
        header('Location:index.php?page=room&action=show-list');
    }

    function update()
    {
        $id = $_GET['id'];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $room = $this->roomDB->getById($id);
            $cates = $this->cateModel->getAll();
            include "View/room/update.php";
        } else {
            if (empty($this->error())) {
                $id = $_GET['id'];
                $rooms = $this->getDataRoom();
                $this->roomDB->update($id, $rooms);
                header("location:index.php?page=room&action=show-list");
            } else {
                include "View/room/update.php";
            }

        }
    }

    public function checkOut()
    {
        $id = $_GET["id"];
        $this->roomDB->checkOut($id);
        header("location:index.php?page=room&action=show-list");
    }
}