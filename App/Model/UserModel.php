<?php
namespace App\Model;
use App\Model;
use PDO;

class UserModel extends Models
{
    public mixed $user_name;
    public mixed $password;
    public mixed $email;
    public mixed $image;
    public mixed $date_of_birth;
    public mixed $phone_number;


public function getAll()
{
    $sql = "SELECT * FROM `user`";
   $stmt =  $this->connect->prepare($sql);

}
public function getById($request)
{
    $sql = "SELECT * FROM `user` WHERE `email` = ? AND `password` = ?;";
    $stmt =  $this->connect->prepare($sql);
    $stmt->bindParam(1,$request['email']);
    $stmt->bindParam(2,$request['password']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}