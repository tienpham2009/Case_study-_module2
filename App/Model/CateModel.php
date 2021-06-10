<?php


namespace App\Model;


use App\Category;

class CateModel extends Models implements Model_Interface
{
    public function getAll()
    {
        $sql = 'select * from category';
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $cates = [];

        foreach ($result as $key => $item) {
            $cate = new Category($item);
            $cate->setId($item['id']);
            $cates[] = $cate;
        }
        return $cates;
    }

    public function getById($id)
    {
        $sql = 'select * from category where id=?';
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
}