<?php
//include "vendor/autoload.php";
//use App\MiddleWare\Auth;
//session_start();
//$auth = new Auth();
//$auth->isLogin();
//?>
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
<div class="container" style="height: auto" id="header">
    <header class="row" >
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
                <!--                <li class="nav-item dropdown">-->
                <!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"-->
                <!--                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                        Tài khoản-->
                <!--                    </a>-->
                <!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                <!--                        <a class="dropdown-item" href="#">Thông tin cá nhân </a>-->
                <!--                        <a class="dropdown-item" href="#">Quên mật khẩu</a>-->
                <!--                        <a class="dropdown-item" href="#">Đổi mật khẩu</a>-->
                <!--                        <div class="dropdown-divider"></div>-->
                <!--                        <a class="dropdown-item" href="index.php?page=user&action=register-view">Đăng ký thành viên</a>-->
                <!--                        <a class="dropdown-item" href="#">Cập nhật hồ sơ</a>-->
                <!--                        <div class="dropdown-divider"></div>-->
                <!--                        <a class="dropdown-item" href="index.php?page=user&action=logout">Đăng xuất</a>-->
                <!--                    </div>-->
                <!--                </li>-->
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
                <div class="form-inline my-3 my-lg-0">
                    <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=room&action=search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Từ khoá" aria-label="Search"
                               name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <div class="row">
                    <div class=" col-12" style="margin-left: 150px">
                        <li class="nav-item">
                            <img id="user" src="Public/Image/Screenshot%20from%202021-05-18%2020-26-40.png" style="float: left ; margin-right: 20px">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tài khoản
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Thông tin cá nhân </a>
                                <a class="dropdown-item" href="#">Quên mật khẩu</a>
                                <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?page=user&action=register-view">Đăng ký thành
                                    viên</a>
                                <a class="dropdown-item" href="#">Cập nhật hồ sơ</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?page=user&action=logout">Đăng xuất</a>
                            </div>
                        </li>

                    </div>
                </div>
        </div>
    </nav>
</div>
<div class="container" style="height: auto">
    <div class="row">
        <article class="col-12 col-sm-9 mt-2">
            <div class="col-12 col-sm-12 row mb-2">
                <?php include "router.php" ?>
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
