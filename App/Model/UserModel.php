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
        $stmt = $this->connect->prepare($sql);

    }

    public function getById($request)
    {
        $sql = "SELECT * FROM `user` WHERE `email` = ? AND `password` = ?;";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $request['email']);
        $stmt->bindParam(2, $request['password']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($user)
    {
        $sql = "INSERT INTO `user`(`user_name`,`password`,`email`,`image`,`date_of_birth`,`phone_number`) 
VALUES(:user_name,:password,:email,:image,:date_of_birth,:phone_number) ";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':user_name',$user->name);
        $stmt->bindParam(':password',$user->password);
        $stmt->bindParam(':email',$user->email);
        $stmt->bindParam(':image',$user->image);
        $stmt->bindParam(':date_of_birth',$user->date_of_birth);
        $stmt->bindParam(':phone_number',$user->phone);
        $stmt->execute();
    }

    public function checkValidateUser($name){
        $sql = "SELECT `user_name` FROM `user` WHERE `user_name` = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function checkValidateEmail($email){
        $sql = "SELECT `email` FROM `user` WHERE `email` = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}