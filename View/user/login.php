<?php
require_once "../../vendor/autoload.php";

use App\Controller\AuthController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $authController = new AuthController();
    if (!$authController->checkEmailPassword()) {
        $error = 'Tai khoan mat khau khong dung';
    }
}
?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="../../Public/Css/view.css">
<link rel="shortcut icon" href="../../Public/Image/icon2.png">
    <title>Login</title>

</head>
<div class="container" >
    <div style="margin-left: 200px ; margin-top: 200px" >
        <div class="row">
            <aside class="col-sm-9">
                <div class="card">
                    <article class="card-body">
                        <a href="register.php" class="float-right btn btn-outline-primary">Sign up</a>
                        <h4 class="card-title mb-4 mt-1">Sign in</h4>
                        <form method="post">
                            <div class="input-group mt-3">
                                <?php if (isset($error)) : ?>
                                    <div class="alert alert-danger">
                                        <?php echo $error ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Your email</label>
                                <input name="email" class="form-control" placeholder="Email" type="email">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <a class="float-right" href="#">Forgot?</a>
                                <label>Your password</label>
                                <input name="password" class="form-control" placeholder="******" type="password">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="checkbox">
                                    <label> <input type="checkbox"> Save password </label>
                                </div> <!-- checkbox .// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                            </div> <!-- form-group// -->
                        </form>
                    </article>
                </div> <!-- card.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div>


</div>
