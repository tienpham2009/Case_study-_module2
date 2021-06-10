<?php
namespace App\Model;
use App\Model;
use PDO;

class UserModel extends Models
{
    public string $user_name;
    public string $password;
    public string $email;
    public string $image;
    public mixed $date_of_birth;
    public mixed $phone_number;


public function getAll()
{
    $sql = "SELECT * FROM `user`";
   $stmt =  $this->connect->prepare($sql);

}
public function getById($request)
{
    $sql = "SELECT * FROM `user` WHERE `email` = ?;";
    $stmt =  $this->connect->prepare($sql);
    $stmt->bindParam(1,$request['email']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}