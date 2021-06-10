<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Tên phòng</label>
            <p><?php  echo $room->name ?></p>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Loại Phòng</label>
            <p><?php  echo $room->cateName ?></p>
        </div>
        <div class="form-group col-md-6">
            <label for="inputZip">Giá phòng</label>
            <p><?php echo $room->unit_price ?></p>
        </div>
    </div>

    <div class="form-group">
        <label for="inputAddress">Hình ảnh</label>
        <img width="150px" height="200px" src="Public/Image/<?php echo $room->image ?>">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Time check in</label>
            <input type="text" class="form-control" id="timeCheckIn" value="<?php echo date(" Y-m-d h:i:sa")?>">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Thời gian check out</label>
            <input type="datetime-local" class="form-control" id="timeCheckout"">
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Tổng tiền</label>
            <input type="text" class="form-control" id="inputZip">
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
