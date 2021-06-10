<?php

namespace App\MiddleWare;

class Auth
{
    public function isLogin()
    {
        if (!isset($_SESSION['userLogin'])) {
        header("Location: View/user/user.php");
        }
    }
}