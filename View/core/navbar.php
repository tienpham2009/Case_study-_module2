<nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-2 " >
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
                    Quản lí phòng
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=room&action=show-list">Danh Sách</a>
                    <a class="dropdown-item" href="index.php?page=room&action=add">Thêm Mới</a>
                    <a class="dropdown-item" href="index.php?page=room&action=statistical">Thông kê</a>
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
        </ul>
    </div>
</nav>
