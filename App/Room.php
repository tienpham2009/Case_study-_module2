<?php
namespace App;

class Room
{
    public int $id;
    public string $name;
    public string $description;
    public string $image;
    public string $unit_price;
    public string $status;
    public string $category;
    public string $check_in;
    public string $check_out;

    public function __construct($data)
    {
        $this->name = $data["name"];
        $this->description = $data["description"];
        $this->image = $data["image"];
        $this->unit_price = $data["unit_price"];
        $this->status = $data["status"];
        $this->category = $data["category"];
        $this->check_in = $data["check_in"];
        $this->check_out = $data["check_out"];
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

}