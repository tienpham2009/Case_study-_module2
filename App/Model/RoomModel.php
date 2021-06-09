<?php


namespace App\Model;


use App\Room;

class RoomModel extends Models implements Model_Interface
{
    public function getAll()
    {
        $sql = 'select * from room';
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $rooms = [];

        foreach ($result as $key => $item) {
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
        $sql = 'select *from room where Id=?';
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function add($object)
    {
        $sql = "INSERT INTO room( name,description,image,unit_price,category ) 
                VALUES ( :name , :description ,:image ,:unit_price ,:category ) ";

        $stmt = $this->connect->prepare($sql);

        $stmt->bindParam(":name", $object->name);
        $stmt->bindParam(":description", $object->description);
        $stmt->bindParam(":image", $object->image);
        $stmt->bindParam(":unit_price", $object->unit_price);
        $stmt->bindParam(":category", $object->category);

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