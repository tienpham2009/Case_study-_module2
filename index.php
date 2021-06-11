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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="Public/Css/view.css">
    <link rel="shortcut icon" href="Public/Image/icon2.png">
</head>
<body>
<?php //include "View/core/view.php" ?>
<div class="container" style="height: auto" id="header">
    <header class="row" style="position: ">
        <div class="col-12 col-md-12 shopping-mall">
            <h1>H.T.T Motel Manager</h1>
            <h5>The center point of professional managing</h5>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only">(current)Giới thiệu</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
<<<<<<< HEAD
=======
                <li class="nav-item">
                    <a class="nav-link" href="#">Hỏi đáp</a>
                </li>
>>>>>>> a9344eded376169878858569e1e8c8a13439df06
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản lí phòng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=room&action=show-list">Danh sách </a>
                        <a class="dropdown-item" href="index.php?page=room&action=add">Thêm mới</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Thống kê</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=room&action=search">
                <input class="form-control mr-sm-2" type="search" placeholder="Từ khóa" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
            <li class="nav-item dropdown">
                <div class="row">
                    <div class=" col-12" style="margin-left: 150px">
                        <li class="nav-item">
                            <img id="user" src="<?php echo $data['image'] ?>"
                                 style="float: left ; margin-right: 20px">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $data['user_name'] ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?page=user&action=list">Thông tin cá nhân </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?page=user&action=register-view">Đăng ký thành
                                    viên</a>
                                <a class="dropdown-item" href="index.php?page=user&action=edit">Cập nhật hồ sơ</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?page=user&action=logout">Đăng xuất</a>
                            </div>
                        </li>
                    </div>
                </div>
            </li>
        </div>
    </nav>
</div>
<div class=" row">
    <article class="col-12 col-sm-9 mt-2">
        <div style="height: 700px;overflow: scroll">
            <div class="col-12 col-sm-12 row mb-2">
                <?php include "router.php" ?>
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" style="width: 950px; margin-left: 400px">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="5000">
                            <img src="Public/Image/Single.jpg" class="d-block w-100"
                                 alt="...">
                        </div>
                        <div class="carousel-item" data-interval="5000">
                            <img src="Public/Image/Double.jpg" class="d-block w-100"
                                 alt="...">
                        </div>
                        <div class="carousel-item" data-interval="5000">
                            <img src="Public/Image/Vip.jpg" class="d-block w-100" alt="...">
                        </div>
            </div>
        </article>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </article>
    <aside class="col-12 col-sm-3" style="width: 50px">
        <div class="card poly-cart">
            <div class="card-body row">
                <p class="col-sm-9"><?php //include "View/core/count.php" ?></p>
            </div>
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <form>
                        <input placeholder="Từ khoá" class="form-control">
                    </form>
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
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<script src="Public/Js/roomJs.js"></script>

</body>
</html>
