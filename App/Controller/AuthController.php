<?php

namespace App\Controller;


use App\Model\UserModel;

class AuthController
{
    public string $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function checkEmailPassword()
    {
        if (isset($_POST['email'])) {
            $email = $_REQUEST['email'];
            $result = $this->userModel->getById($email);
            if (!$result) {
                header("Location: ../../index.php");
            }else{
                header("Location: View/user/user.php");
            }
        }
    }
}