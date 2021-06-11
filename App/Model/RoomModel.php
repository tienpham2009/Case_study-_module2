<?php


namespace App\Model;


use App\Room;
use http\Exception\BadMethodCallException;
use PDO;

class RoomModel extends Models implements Model_Interface
{
    public function getAll()
    {
        $sql = 'select * from v_room';
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rooms = [];

        foreach ($result as $item) {
            $room = new Room($item);
            $room->setId($item['Id']);
            $room->setStatus($item["status"]);
            $room->setCheckIn($item["check_in"]);
            $room->setCheckOut($item["check_out"]);
            $rooms[] = $room;
        }
        return $rooms;
    }

    public function getById($id)
    {

        $sql = 'select * from v_room where Id= ?';
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rooms = [];

        foreach ($result as $item) {
            $room = new Room($item);
            $room->setId($item['Id']);
            $room->setStatus($item["status"]);
            $room->setCheckIn($item["check_in"]);
            $room->setCheckOut($item["check_out"]);
            $rooms[] = $room;
        }
        return $rooms;
    }

    function getByStatus($status){
        $sql = 'select * from v_room where status=?';
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $status);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rooms = [];

        foreach ($result as $item) {
            $room = new Room($item);
            $room->setId($item['Id']);
            $room->setStatus($item["status"]);
            $room->setCheckIn($item["check_in"]);
            $room->setCheckOut($item["check_out"]);
            $rooms[] = $room;
        }
        return $rooms;
    }

    public function add($object)
    {
        $sql = "INSERT INTO room( name,description,image,unit_price,category_id ) 
                VALUES ( :name , :description ,:image ,:unit_price ,:category_id ) ";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":name", $object->name);
        $stmt->bindParam(":description", $object->description);
        $stmt->bindParam(":image", $object->image);
        $stmt->bindParam(":unit_price", $object->unit_price);
        $stmt->bindParam(":category_id", $object->cateName);
        $stmt->execute();
    }

    function update($id,$object){
        if ($object->image != ""){
            $sql='update room 
            set name=:name,
            description=:description,
            image=:image,
            unit_price=:unit_price,
            category_id=:category where Id=:id';
            $stmt = $this->connect->prepare($sql);

            $stmt->bindParam(":name", $object->name);
            $stmt->bindParam(":description", $object->description);
            $stmt->bindParam(":image", $object->image);
            $stmt->bindParam(":unit_price", $object->unit_price);
            $stmt->bindParam(":category", $object->cateName);
            $stmt->bindParam(":id", $id);
        }else{
            $sql='update room 
            set name=:name,
            description=:description,
            unit_price=:unit_price,
            category_id=:category where Id=:id';
            $stmt = $this->connect->prepare($sql);

            $stmt->bindParam(":name", $object->name);
            $stmt->bindParam(":description", $object->description);
            $stmt->bindParam(":unit_price", $object->unit_price);
            $stmt->bindParam(":category", $object->cateName);
            $stmt->bindParam(":id", $id);
        }

        return $stmt->execute();
    }

    function delete($id)
    {
        $sql = 'delete from room where Id= ?';
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function checkIn($dataCheckIn)
    {
//        $sqlPay = "INSERT INTO payment (room_name,	price ) VALUES (:room_name , :price) WHERE room_id = :room_id";
//
//        $stmtPay = $this->connect->prepare($sqlPay);
//        $stmtPay->bindParam(":room_name" , $dataCheckIn["roomName"]);
//        $stmtPay->bindParam(":price" , $dataCheckIn["price"]);
//        $stmtPay->bindParam(":room_id", $dataCheckIn["roomId"]);
//        $stmtPay->execute();

        $sqlRoom = "UPDATE room SET check_in = :check_in , check_out = :check_out , status = :status WHERE Id = :room_id";

        $stmtRoom = $this->connect->prepare($sqlRoom);
        $status = "Rented";
        $stmtRoom->bindParam("check_in" , $dataCheckIn["checkIn"]);
        $stmtRoom->bindParam("check_out" , $dataCheckIn["checkOut"]);
        $stmtRoom->bindParam("room_id", $dataCheckIn["roomId"]);
        $stmtRoom->bindParam("status", $status);
        $stmtRoom->execute();
    }

    public function checkOut($id , $room)
    {
        $sql = "UPDATE room SET status = :status WHERE Id = :room_id";

        $stmt = $this->connect->prepare($sql);
        $status = "Empty";
        $stmt->bindParam(":status" , $status);
        $stmt->bindParam("room_id" , $id);
        $stmt->execute();
    }

    public function countByStatus($status)
    {
        $sql = "SELECT COUNT(Id) AS count, status FROM `room` WHERE status = :status ";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":status", $status);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result[0];

    }

    public function search($search)
    {
        $sql = 'select * from v_room where name like :text ';
        $stmt = $this->connect->prepare($sql);
        $txt = '%' . $search . '%';
        $stmt->bindParam(":text", $txt);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rooms = [];

        foreach ($result as $item) {
            $room = new Room($item);
            $room->setId($item['Id']);
            $room->setStatus($item["status"]);
            $room->setCheckIn($item["check_in"]);
            $room->setCheckOut($item["check_out"]);
            $rooms[] = $room;
        }
        return $rooms;
    }
}