<?php
include "vendor/autoload.php";
use App\MiddleWare\Auth;
session_start();
$auth = new Auth();
$auth->isLogin();
?>
<?php ob_start() ?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Public/Css/view.css">
</head>
<body>
<?php //include "View/core/view.php" ?>
<div class="container" style="height: auto">
    <header class="row">
        <div class="col-12 col-md-12 shopping-mall">
            <h1>Online H.T.T Motel Manager</h1>
            <h5>The center point of the professional managing</h5>
        </div>
    </header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-2">
        <a class="navbar-brand" href="index.php">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hỏi đáp</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tài khoản
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                        <a class="dropdown-item" href="#">Quên mật khẩu</a>
                        <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?page=user&action=register-view">Đăng ký thành viên</a>
                        <a class="dropdown-item" href="#">Cập nhật hồ sơ</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?page=user&action=logout">Đăng xuất</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản lí phòng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=room&action=show-list">Danh Sách</a>
                        <a class="dropdown-item" href="index.php?page=room&action=add">Thêm Mới</a>
                        <a class="dropdown-item" href="#">Thông kê</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Từ khoá" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </nav>
    <div class="row">
        <article class="col-12 col-sm-9 mt-2">
            <div class="col-12 col-sm-12 row mb-2">
                <?php include "router.php" ?>
            </div>
        </article>
        <aside class="col-12 col-sm-3">
            <div class="card poly-cart">
                <div class="card-body row">
                    <img class="col-sm-5" src="images/shoppingcart.gif"/>
                    <ul class="col-sm-7">
                        <li>100 items</li>
                        <li>$56.8</li>
                        <li><a href="#">Xem giỏ hàng</a></li>
                    </ul>
                </div>
            </div>
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <form>
                        <input placeholder="Từ khoá" class="form-control"/>
                    </form>
                </div>
            </div>
            <div class="list-group">
                <a href="" type="button" class="list-group-item list-group-item-action active">
                    Phòng trống
                </a>
                <a href="" type="button" class="list-group-item list-group-item-action">Phòng đang cho thuê</a>
                <a href="" type="button" class="list-group-item list-group-item-action">Máy tính xách tay</a>
                <a href="" type="button" class="list-group-item list-group-item-action">Máy tính xách tay</a>
                <a href="" type="button" class="list-group-item list-group-item-action">Máy tính xách tay</a>
                <a href="" type="button" class="list-group-item list-group-item-action">Máy tính xách tay</a>
                <a href="" type="button" class="list-group-item list-group-item-action">Máy tính xách tay</a>
            </div>
        </aside>
    </div>
<!--    <footer class="card mb-2" id="footer">-->
<!--        <div class="text-center">-->
<!--            <p class="mt-3">CodeGym &copy; 2021</p>-->
<!--        </div>-->
<!--    </footer>-->
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
