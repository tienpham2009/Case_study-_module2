<?php
namespace App\Controller;

use App\Model\RoomModel;
use App\Room;

class RoomController
{
    public $roomDB;

    public function __construct()
    {
        $this->roomDB = new RoomModel();
    }

    public function getImage()
    {
        $fileError = [];
        $target_dir = "Public/Image/";
        $target_name = basename($_FILES["fileToUpload"]["name"]);

        $target_file = $target_dir. $target_name;

        if ($_FILES["fileToUpload"]["size"] > 5000000){
            $fileError["fileUpload"] = "Chỉ được upload file dưới 5MB";
        }

        $file_type = pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION);

        $file_type_allow = ["jpg","png","jpeg","gif"];

        if (!in_array(strtolower($file_type), $file_type_allow)){
            $fileError["fileUpload"] = "Chỉ được upload file ảnh";
        }

        if (file_exists($target_file)){
            $fileError["fileUpload"] = "File đã tồn tại trên hệ thống";
        }

        if (empty($fileError)){
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        }
        return $target_name;
    }

    public function error()
    {
        $error = [];
        $fields = ["name","description","unit_price","status","category","image"];

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
        $status = $_POST["status"];
        $category = $_POST["category"];
        $check_in = $_POST["check_in"];
        $check_out = $_POST["check_out"];
        $image = $this->getImage();

        $data = [
            "name" => $name,
            "description" => $description,
            "unit_price" => $unit_price,
            "status" => $status,
            "category" => $category,
            "check_in" => $check_in,
            "check_out" => $check_out,
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
                header("Location:");
            }

        }
    }
}