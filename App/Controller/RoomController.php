<?php

namespace App\Controller;

use App\Model\RoomModel;
use App\Room;

class RoomController
{
    public RoomModel $roomDB;

    public function __construct()
    {
        $this->roomDB = new RoomModel();
    }


    function index()
    {
        $rooms = $this->roomDB->getAll();
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

    public function error()
    {
        $error = [];
        $fields = ["name","description","unit_price","category"];
        foreach ($fields as $field){
            if (empty($_POST[$field])){
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
        $category = $_POST["category"];
        $image = $this->getImage();

        $data = [

            "name" => $name,
            "description" => $description,
            "unit_price" => $unit_price,
            "category" => $category,
            "image" => $image
        ];

         return new Room($data);
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
             include "View/room/add.php";
        }else{
            if (empty($this->error())){
                $room = $this->getDataRoom();
                $this->roomDB->add($room);
<<<<<<< HEAD
                header("location:index.php?page=room&action=show-list");
=======
                header("Location:index.php");
>>>>>>> 0a663d8ffeb2975de77fc16fe78ecaf7c9395d78
            }else{
                include "View/room/add.php";
            }

        }
    }

    function delete()
    {
        $id = $_GET['id'];
        $room = $this->roomDB->delete($id);
        header('Location:index.php');
    }
}