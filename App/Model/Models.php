<?php
namespace App\Model;

class Models
{
    protected \PDO $connect;

    public function __construct()
    {
        $database = new Databases();
        $this->connect = $database->connect();
    }
}