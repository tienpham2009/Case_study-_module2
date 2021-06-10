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
        if ($result !== false) {
            $_SESSION['userLogin'] = $result['email'];
            header("Location: ../../index.php");
        }
        return false;
    }

    public function logout()
    {
        unset($_SESSION['userLogin']);
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
                header("Location: ../../View/user/login.php");
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
}