<?php
namespace App;

class Payment
{
    public $pirce;
    public $month;
    public $time;

    public function __construct($data)
    {
        $this->pirce = $data["price"];
        $this->month = $data["month"];
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }
}