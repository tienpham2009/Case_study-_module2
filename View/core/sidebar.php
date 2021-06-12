<div class="card poly-cart">
    <div class="card-body row">
        <p class="col-sm-9"><?php include "View/core/count.php" ?></p>
    </div>
<!--    <div class="card mt-3 mb-3">-->
<!--        <div class="card-body">-->
<!--            <form>-->
<!--                <input placeholder="Từ khoá" class="form-control"/>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
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
</div>
