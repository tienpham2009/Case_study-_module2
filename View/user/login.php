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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
    <div class="row">
        <aside class="col-sm-9">
            <div class="card">
                <article class="card-body">
                    <a href="" class="float-right btn btn-outline-primary">Sign up</a>
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
<!--container end.//-->

<!--<article class="bg-secondary mb-3">-->
<!--    <div class="card-body text-center">-->
<!--        <h4 class="text-white">HTML UI KIT <br> Ready to use Bootstrap 4 components and templates </h4>-->
<!--        <p class="h5 text-white"> for Ecommerce, marketplace, booking websites-->
<!--            and product landing pages</p>   <br>-->
<!--        <p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com-->
<!--                <i class="fa fa-window-restore "></i></a></p>-->
<!--    </div>-->
<!--    <br><br><br>-->
<!--</article>-->