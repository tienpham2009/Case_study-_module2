<?php

namespace App\Controller;


use App\Model\UserModel;
use App\User;

class AuthController
{
    public mixed $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function checkEmailPassword()
    {
        $result = $this->userModel->getById($_REQUEST);
        var_dump($result);


        if ($result !== false) {
            $_SESSION['id'] = $result['Id'];
            header("Location: ../../index.php");
        }
        return false;
    }

    public function logout()
    {
        unset($_SESSION['id']);
        session_destroy();
        header("Location: index.php");
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (isset($_SESSION['error'])) {
                unset($_SESSION['error']);
            }
            $error = [];
            $data = [
                'name' => $_REQUEST['name'],
                'email' => $_REQUEST['email'],
                'phone' => $_REQUEST['phone'],
                'password' => $_REQUEST['password']
            ];

            $user = new User($data);
            if (empty($_REQUEST['image'])) {
                $user->setImage("");
            }
            if (empty($_REQUEST['date_of_birth'])) {
                $user->setDateOfBirth("1990-01-01");
            }
            if ($this->validateUser($user->name) != false) {
                $error['name'] = "Name đã tồn tại";
            }

            if ($this->validateEmail($user->email) != false) {
                $error['email'] = "Email đã tồn tại";
            }

            if (!empty($error)) {
                session_start();
                $_SESSION['error'] = $error;
                header("Location: index.php?page=user&action=register-view");
            } else {
                $this->userModel->addUser($user);
                header("Location: View/user/login.php");
            }
        } else {
            echo "1234";
        }
    }

    public function validateEmail($email)
    {
        return $this->userModel->checkValidateEmail($email);
    }

    public function validateUser($name)
    {
        return $this->userModel->checkValidateUser($name);
    }

    public function edit()
    {

        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $this->getByidforEdit();
        } else {
            $basename = $_FILES['image']['name'];

            $target_dir = "Public/Image/user/";
            $taget_file = $target_dir . basename($basename);
            move_uploaded_file($_FILES['image']['tmp_name'], $taget_file);

            $name = $_REQUEST['name'];
            $password = $_REQUEST['password'];
            $email = $_REQUEST['email'];
            $date_of_birth = $_REQUEST['date_of_birth'];
            $phone = $_REQUEST['phone'];
            $image = $taget_file;

            if ($image === "Public/Images/user/") {
                $data = ['name' => $name, 'email' => $email,
                    'password' => $password, 'date_of_birth' => $date_of_birth,'phone'=>$phone];
            } else {
                $data = ['name' => $name, 'email' => $email,
                    'password' => $password, 'date_of_birth' => $date_of_birth,
                    'phone'=>$phone, 'image' => $image];
            }
            $user = new User($data);
            $user->setId($_SESSION['id']);
            $userModel = new UserModel();
            $userModel->edit($user);
            header("Location: index.php");
        }
    }
    public function getByidforEdit()
    {
        $id = $_SESSION['id'];
        $result = $this->userModel->getByidforEdit($id);
        $result = $result[0];
        require_once 'View/user/edit.php';
    }
    public function showlist()
    {
        $id = $_SESSION['id'];
        $result = $this->userModel->getByidforEdit($id);
        $data = $result;

        include_once "View/user/list.php";
    }
}