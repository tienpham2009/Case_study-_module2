<?php
include "vendor/autoload.php";

use App\MiddleWare\Auth;
use App\Controller\AuthController;

session_start();
$auth = new Auth();
$auth->isLogin();
$authController = new AuthController();
$data = $authController->getByid();
?>
<?php ob_start() ?>
<!doctype html>
<html lang="en">
<head>
    <title>H.T.T Motel Manager</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Public/Css/view.css">
    <link rel="shortcut icon" href="Public/Image/icon2.png">
</head>
<body>
<div class="container" style="height: auto" id="header">
    <header class="row" style="position: ">
        <div class="col-12 col-md-12 shopping-mall">
            <h1>H.T.T Motel Manager</h1>
            <h5>The center point of professional managing</h5>
        </div>
    </header>
    <?php include "View/core/navbar.php" ?>
    <div class="container" style="height: auto">
        <div class="row">
            <article class="col-12 col-sm-9 mt-2">
                <div class="col-12 col-sm-12 row mb-2" style="height: 700px; overflow: auto ">
                    <?php include "router.php" ?>
                </div>
                <!--            slide-->
            </article>
        </div>
        <aside class="col-12 col-sm-3">
            <div class="card poly-cart">
                <div class="card-body row">
                    <p class="col-sm-9"><?php include "View/core/count.php" ?></p>
                </div>
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <form>
                            <input placeholder="Từ khoá" class="form-control"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="list-group">
                <a href="" type="button" class="list-group-item list-group-item-action active">
                    Hiển thị phòng theo trạng thái
                </a>
                <a href="index.php?page=room&action=status&status=Empty" type="button"
                   class="list-group-item list-group-item-action">Phòng trống</a>
                <a href="index.php?page=room&action=status&status=Rented" type="button"
                   class="list-group-item list-group-item-action">Phòng đã cho thuê</a>
                <a href="index.php?page=room&action=show-list" type="button" class="btn btn-secondary">Back</a>
            </div>
        </aside>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="Public/Js/roomJs.js"></script>

</body>
</html>
