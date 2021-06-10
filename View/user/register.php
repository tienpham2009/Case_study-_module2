<?php
require_once "../../vendor/autoload.php";
use App\Controller\AuthController;
$authController = new AuthController();
if (isset($_SESSION['error'])){
    var_dump($_SESSION['error']);
    die();
}
if ($_SERVER['REQUEST_METHOD']==="POST") {
    $authController->register();
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="../../Public/Css/user.css">

    <div class="container">
        <br>
        <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/">
                Bootstrap-ecommerce.com</a></p>
        <hr>

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>

                <?php if (isset($_SESSION['error'])):?>
                    <div class="alert alert-danger">
                        <?php ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="../../index.php?page=user&action=register">

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="name" class="form-control" placeholder="Full name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <input name="phone" class="form-control" placeholder="Phone number" type="number">
                    </div> <!-- form-group// -->

                    <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" id="password" class="form-control" placeholder="Create password"
                               type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="confirm_password" id="confirm_password" class="form-control"
                               placeholder="Repeat password" type="password">
                    </div> <!-- form-group// -->
                    <h4><span style="" id="message"></span></h4>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account</button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="login.php">Log In</a></p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->

    <br><br>
    <article class="bg-secondary mb-3">
        <div class="card-body text-center">
            <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
            <p class="h5 text-white">Components and templates <br> for Ecommerce, marketplace, booking websites
                and product landing pages</p>   <br>
            <p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/">
                    Bootstrap-ecommerce.com
                    <i class="fa fa-window-restore "></i></a></p>
        </div>
        <br><br>
    </article>

    <script type="text/javascript">
        $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() === $('#confirm_password').val()) {
                $('#message').html('Password khớp').css('color', 'green');
            } else
                $('#message').html('Password không khớp').css('color', 'red');
        });
    </script>