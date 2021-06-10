<?php foreach ($rooms as $key => $room): ?>
    <!--<article class="col-12 col-sm-9 mt-2">-->
    <!--    <div class="col-12 col-sm-12 row mb-2">-->
    <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">
                <?php echo $key + 1 ?>
            </div>
            <div class="card-header">
                <?php echo $room->name ?>
            </div>
            <div class="card-header">
                <?php echo $room->description ?>
            </div>
            <div class="card-header">
                <?php echo $room->unit_price ?>
            </div>
            <div class="card-header">
                <?php echo $room->status ?>
            </div>
            <div class="card-header">
                <?php echo $room->category ?>
            </div>
            <div class="card-header" >
                <a href="index.php?page=room&action=update&id=<?php echo $room->id ?>"
                        type="submit" class="btn btn-primary">Update
                </a>
                <a href="index.php?page=room&action=delete&id=<?php echo $room->id ?>"
                        type="submit" class="btn btn-danger">Delete
                </a>
                <a href="index.php?page=room&action=check_in&id=<?php echo $room->id ?>"
                        type="submit" class="btn btn-danger">Check in
                </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>


