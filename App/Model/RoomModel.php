<?php


namespace App\Model;


class RoomModel extends Models implements Model_Interface
{
    public function getAll()
    {
        $sql = 'select * from room';
        $stmt = $this->connect->query($sql);
        $stmt->fetchAll();


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
        $stmt->bindParam(":description", $object->name);
        $stmt->bindParam(":image", $object->name);
        $stmt->bindParam(":unit_price", $object->name);
        $stmt->bindParam(":category", $object->name);
//        $stmt->bindParam(":check_in", $object->name);
//        $stmt->bindParam(":check_out", $object->name);

        return $stmt->execute();
    }

    function delete($id){
        $sql ='delete from room where Id=?';
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
    }
}