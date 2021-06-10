<?php


namespace App;


class Category
{
    public $id;
    public $name;

    public function __construct($data)
    {
        $this->name=$data['catName'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}