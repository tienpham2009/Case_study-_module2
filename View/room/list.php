<?php foreach ($rooms as $key => $room): ?>
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
        <div class="card-header">
            <?php echo $room->check_in ?>
        </div>
        <div class="card-header">
            <?php echo $room->check_out ?>
        </div>
        <div class="card-header">
            <a href="index.php?page=room&action=update&id=<?php echo $room->id ?>"
                    type="button" class="btn btn-primary">Update
            </a>
            <a href="index.php?page=room&action=delete&id=<?php echo $room->id ?>"
                    type="button" class="btn btn-danger">Delete
            </a>
        </div>
    </div>

<?php endforeach; ?>


