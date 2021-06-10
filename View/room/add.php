<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Tên phòng</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        <?php if (isset($error["name"])):?>
            <p class="error" ><?php echo $error["name"] ?></p>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mô tả</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        <?php if (isset($error["description"])):?>
            <p class="error" ><?php echo $error["description"] ?></p>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Đơn giá</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="unit_price" >
        <?php if (isset($error["unit_price"])):?>
            <p class="error" ><?php echo $error["unit_price"] ?></p>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Loại phòng</label>
        <select class="form-control" name="category" id="exampleFormControlInput1">
            <option value="Vip">Vip</option>
            <option value="Đôi">Đôi</option>
            <option value="Đơn">Đơn</option>
        </select>
        <?php if (isset($error["category"])):?>
            <p class="error" ><?php echo $error["category"] ?></p>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Hình ảnh</label>
        <input type="file" class="form-control" id="image" name="image">
        <?php if (isset($error["image"])):?>
            <p><?php echo $error["image"] ?></p>
        <?php endif;?>
    </div>
    <div class="form-group">
        <button type="submit">Thêm mới</button>
    </div>
</form>
