<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Hình ảnh</label>
            <br>
            <img style="width: 200px ; height: 150px" src="Public/Image/<?php echo $room[0]->image ?>">
        </div>
        <input type="hidden" value="<?php echo $room[0]->id ?>" name="id">
        <label class="form-label" for="exampleFormControlInput1">Tên phòng</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"
               name="name" value="<?php echo $room[0]->name ?>">
        <?php if (isset($error["name"])):?>
            <p class="error"><?php echo $error["name"] ?></p>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mô tả</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">
            <?php echo $room[0]->description?>
        </textarea>
        <?php if (isset($error["description"])):?>
            <p class="error" ><?php echo $error["description"] ?></p>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Loại phòng</label>
        <select class="form-control" name="cateName" id="category">
            <?php foreach ($cates as $cate): ?>
                <option value="<?php echo $cate->id ?>"><?php echo $cate->name ?></option>
            <?php endforeach; ?>
        </select>
        <?php if (isset($error["cateName"])):?>
            <p class="error" ><?php echo $error["cateName"] ?></p>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Đơn giá</label>
        <input type="text" class="form-control" id="unitPrice"
               name="unit_price" value="<?php echo $room[0]->unit_price?>">
        <?php if (isset($error["unit_price"])):?>
            <p class="error" ><?php echo $error["unit_price"] ?></p>
        <?php endif;?>
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

