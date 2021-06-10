<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label" for="exampleFormControlInput1">Tên phòng</label>
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
        <select class="form-control" name="cateName" id="exampleFormControlInput1">
            <?php foreach ($cates as $cate): ?>
                <option value="<?php echo $cate->id ?>"><?php echo $cate->name ?></option>
            <?php endforeach; ?>
        </select>
        <?php if (isset($error["cateName"])):?>
            <p class="error" ><?php echo $error["cateName"] ?></p>
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
        <button type="submit" class="btn btn-success">Save</button>
        <a class="btn btn-secondary" href="index.php?page=room&action=show-list">Back</a>
    </div>
</form>
