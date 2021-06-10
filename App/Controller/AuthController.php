<?php

namespace App\Controller;


use App\Model\UserModel;

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
}