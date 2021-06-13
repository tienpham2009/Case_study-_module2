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
        /// unset cac session error cu
        if (isset($_SESSION['errorsFill'])) {
            unset($_SESSION['errorsFill']);
        }
        if (isset($_SESSION['id'])) {
            unset($_SESSION['id']);
        }
        if (isset($_SESSION['errorsFill']['password'])) {
            unset($_SESSION['errorsFill']['password']);
            session_destroy();
        }
        /// xu ly Request Post
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (isset($_SESSION['error'])) {
                unset($_SESSION['error']);
            }
            $errorsFill = [];

            //Kiem tra input rong va validate du lieu
            $errorsFill = $this->checkFillvalidateInput();


            if (empty($errorsFill)) {
                $data = [
                    'name' => $_REQUEST['name'],
                    'email' => $_REQUEST['email'],
                    'phone' => $_REQUEST['phone'],
                    'password' => $_REQUEST['password']
                ];
                $user = new User($data);
                if (empty($_REQUEST['image'])) {
                    $user->setImage("Public/Image/user/unnamed1.jpeg");
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
                    header("Location: View/user/register.php");
                } else {

                    $this->userModel->addUser($user);
                    header("Location: View/user/login.php");
                }
            } else {
                $_SESSION['errorsFill'] = $errorsFill;
                header("Location: View/user/register.php");
            }
        } else {
            header("Location: View/user/register.php");
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


            $data = ['name' => $name, 'email' => $email,
                'password' => $password, 'phone' => $phone];


            $user = new User($data);


            if (empty($basename)) {
                $user->setImage($_REQUEST['image-name']);
            } else {
                $user->setImage($image);
            }

            $user->setId($_SESSION['id']);
            $user->setDateOfBirth($date_of_birth);

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

    public function getByid()
    {
        $id = $_SESSION['id'];
        $result = $this->userModel->getByinIndex($id);
        $result = $result[0];
        return $result;
    }

    public function checkFillvalidateInput()
    {
        $pattern = "/^(84|0[3|5|7|8|9])+([0-9]{8})\b/";
        $fields = ['name', 'email', 'phone', 'password'];
        $errorsFill = [];
        foreach ($fields as $key => $field) {
            if (empty($_POST[$field])) {
                $errorsFill[$field] = "Không được để trống";
            }
        }
        if (strlen($_POST['password']) < 6) {
            $errorsFill['password'] = $errorsFill['password']."PW không đủ 6 ký tự"."<br>";
        }
        if (strlen($_POST['name']) < 6 ){
            $errorsFill['name'] = $errorsFill['name']."Name không đủ 6 ký tự"."<br>";
        }
        if (!preg_match($pattern,$_POST['phone'])){
            $errorsFill['phone'] = $errorsFill['phone']."SĐT không tồn tại";
        }


        return $errorsFill;
    }


}