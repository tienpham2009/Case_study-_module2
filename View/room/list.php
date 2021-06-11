<?php foreach ($rooms

as $key => $room): ?>
<!--<article class="col-12 col-sm-9 mt-2">-->
<!--    <div class="col-12 col-sm-12 row mb-2">-->
<style>
    .new {
        background-color: yellow
    }
</style>
<div class="col-sm-4">
    <div class="card text-center ">
        <div class="<?= $room->status !== 'empty' ?? 'new' ?>">
            <div class="card text-center">
                <div class="card-header">
                    <?php echo $key + 1 ?>
                </div>
                <div class="card-header">
                    <?php echo $room->name ?>
                </div>
                <div class="card-body">
                    <?php echo $room->description ?>
                </div>
                <div class="card-body">
                    <?php echo $room->unit_price ?>
                </div>
                <div class="card-body">
                    <?php echo $room->status ?>
                </div>
                <div class="card-header">
                    <?php echo $room->cateName ?>
                </div>
                <div class="card-header">
                    <a href="index.php?page=room&action=update&id=<?php echo $room->id ?>"
                       type="button" class="btn btn-primary">Update
                    </a>
                    <a href="index.php?page=room&action=delete&id=<?php echo $room->id ?>"
                       type="button" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">Delete
                    </a>
                    <?php if ($room->status === "empty"): ?>
                        <a href="index.php?page=room&action=check_in&id=<?php echo $room->id ?>"
                           type="submit" class="btn btn-info"><?php echo "Check in" ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($room->status === "Rented"): ?>
                        <a href="index.php?page=room&action=check_out&id=<?php echo $room->id ?>"
                           type="submit" class="btn btn-info">Check out
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php endforeach; ?>

