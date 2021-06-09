<?php foreach ($rooms as $room):?>
<article class="col-12 col-sm-9 mt-2">
    <div class="col-12 col-sm-12 row mb-2">
        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-header">
                    <?php echo $room->id?>
                </div>
                <div class="card-body">
                    <?php echo $room->name?>
                </div>
                <div class="card-body">
                    <?php echo $room->description?>
                </div>
                <div class="card-body">
                    <img src="<?php echo $room->image?>" alt="">
                </div>
                <div class="card-body">
                    <?php echo $room->unit_price?>
                </div>
                <div class="card-body">
                    <?php echo $room->status?>
                </div>
                <div class="card-body">
                    <?php echo $room->category?>
                </div>
                <div class="card-body">
                    <input type="date" value="<?php echo $room->check_in?>">
                </div>
                <div class="card-body">
                    <input type="date" value="<?php echo $room->check_out?>">
                </div>
            </div>

            <button type="button" class="btn btn-danger" >Delete</button>
        </div>
    </div>
</article>
<?php endforeach;?>
