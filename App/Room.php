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
        $this->unit_price = (int)$data["unit_price"];
        $this->category = $data["category"];
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

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getCheckIn(): string
    {
        return $this->check_in;
    }

    /**
     * @param string $check_in
     */
    public function setCheckIn(string $check_in): void
    {
        $this->check_in = $check_in;
    }

    /**
     * @return string
     */
    public function getCheckOut(): string
    {
        return $this->check_out;
    }

    /**
     * @param string $check_out
     */
    public function setCheckOut(string $check_out): void
    {
        $this->check_out = $check_out;
    }

}