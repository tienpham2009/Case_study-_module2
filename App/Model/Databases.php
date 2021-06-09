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
        $this->dsn = "mysql:host=localhost;dbname=manage_motel";
        $this->user = "admin";
        $this->password = "123456";
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