<?php
include_once "../../vendor/autoload.php";

use App\Controller\AuthController;

$authController = new AuthController();
session_start();
//var_dump($_SESSION['error']);?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="../../Public/Css/user.css">
    <link rel="shortcut icon" href="../../Public/Image/icon2.png">

    <title>Register</title>
</head>
<div class="container">
    <br>
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your free account</p>
            <?php if (!empty($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?php echo implode("<br>", $_SESSION['error']) ?>
                </div>
            <?php endif; ?>


            <form method="post" action="../../index.php?page=user&action=register">

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="name" class="form-control" placeholder="Full name" type="text">
                </div> <!-- form-group// -->
                <?php if (!empty($_SESSION['errorsFill']['name'])): ?>
                    <p class="text-danger"><?php echo $_SESSION['errorsFill']['name'];
                        unset($_SESSION['errorsFill']['name']) ?></p>
                <?php endif; ?>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email">
                </div> <!-- form-group// -->
                <?php if (!empty($_SESSION['errorsFill']['email'])): ?>
                    <p class="text-danger"><?php echo $_SESSION['errorsFill']['email'];
                        unset($_SESSION['errorsFill']['email']) ?></p>
                <?php endif; ?>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="phone" class="form-control" placeholder="Phone number" type="number">

                </div> <!-- form-group// -->
                <?php if (!empty($_SESSION['errorsFill']['phone'])): ?>
                    <p class="text-danger"><?php echo $_SESSION['errorsFill']['phone'];
                        unset($_SESSION['errorsFill']['phone']) ?></p>
                <?php endif; ?>

                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" id="password" class="form-control" placeholder="Create password"
                           type="password">
                </div> <!-- form-group// -->
                <?php if (!empty($_SESSION['errorsFill']['password'])): ?>
                    <p class="text-danger"><?php echo $_SESSION['errorsFill']['password'];
                        unset($_SESSION['errorsFill']['password']) ?></p>
                <?php endif; ?>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="confirm_password" id="confirm_password" class="form-control"
                           placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->
                <h6><span style="" id="message"></span></h6>
                <h6><span style="" id="message1"></span></h6>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Create Account</button>
                </div> <!-- form-group// -->
                <p class="text-center">Have an account? <a href="login.php">Log In</a></p>
            </form>
        </article>
    </div> <!-- card.// -->

</div>
<!--container end.//-->
<script type="text/javascript">
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val().length > 0) {
            if ($('#password').val() === $('#confirm_password').val()) {
                $('#message').html('Password khớp').css('color', 'green');
            } else
                $('#message').html('Password không khớp').css('color', 'red');
        }
    });
    $('#password').on('keyup', function () {
        if ($('#password').val().length < 6) {
            $('#message1').html('Password chưa đủ 6 ký tự').css('color', 'red');
        } else
            $('#message1').html('Password đạt').css('color', 'green');
    });
</script>

