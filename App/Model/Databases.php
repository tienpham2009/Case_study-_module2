<?php
namespace App\Model;

use PDO;
use PDOException;

class Databases
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=mange_motel";
        $this->user = "root";
        $this->password = "200997";

    }

    public function connect()
    {
        try {
            return new PDO($this->dsn,$this->user,$this->password);
        }catch (PDOException $PDOException){
            echo $PDOException->getMessage();
            die();
        }
    }
}