<?php


namespace App\Model;


use App\Room;
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
        $sql = 'select * from v_room where Id=?';
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

        return $stmt->execute();
    }

    function delete($id)
    {
        $sql = 'delete from room where Id= ?';
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
}