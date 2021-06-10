<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label" for="exampleFormControlInput1">Tên phòng</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mô tả</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Đơn giá</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="unit_price">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Loại phòng</label>
        <select class="form-control" name="category" id="exampleFormControlInput1">
            <?php foreach ($cates as $cate): ?>
                <option value="<?php echo $cate->id ?>"><?php echo $cate->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Hình ảnh</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Save</button>
        <a class="btn btn-secondary" href="index.php?page=room&action=show-list">Back</a>
    </div>
</form>
