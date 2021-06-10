<form method="post">
    <div class="form-row">
        <input type="hidden" name="id" value="<?php echo $room->id ?>">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Tên phòng</label>
            <input class="form-control" value="<?php echo $room->name ?>" name="roomName" >
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Loại Phòng</label>
            <p><?php  echo $room->cateName ?></p>
        </div>
        <div class="form-group col-md-6">
            <label for="inputZip">Giá phòng</label>
            <input id="unitPrice" class="form-control" value=" <?php echo $room->unit_price ?>" >
        </div>
    </div>

    <div class="form-group">
        <label for="inputAddress">Hình ảnh</label>
        <img width="150px" height="200px" src="Public/Image/<?php echo $room->image ?>">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputCity">Time check in</label>
            <input type="text" class="form-control" id="timeCheckIn" value="<?php echo date(" Y-m-d G:i:s ")?>" name="timeCheckIn">
            <?php if (isset($error)):?>
                <p class="error ><?php echo $error["timeCheckIn"] ?></p>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Thời gian check out</label>
            <input type="datetime-local" class="form-control" id="timeCheckOut" onchange="total()" name="timeCheckOut">
            <?php if (isset($error)):?>
                <p class="error"><?php echo $error["timeCheckOut"] ?></p>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-4">
            <label for="inputZip">Tổng tiền</label>
            <input type="text" class="form-control" id="price" name="price">
            <?php if (isset($error)):?>
                <p class="error><?php echo $error["price"] ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
<!--            <input class="form-check-input" type="checkbox" id="gridCheck">-->
<!--            <label class="form-check-label" for="gridCheck">-->
<!--                Check me out-->
<!--            </label>-->
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cho thuê</button>
    <a href="index.php?page=room&action=show-list" type="button" class="btn btn-secondary">Back</a>
</form>
