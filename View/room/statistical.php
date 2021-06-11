<a type="button" class="btn btn-secondary" href="index.php?page=room&action=show-list">Back</a>
<div class="card" style="width: 100%">
    <div class="card-header" >
        Thống kê
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Tháng</th>
                <th scope="col">Doanh thu</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($payments as $key => $payment):?>
            <tr>
                <td><?php echo $payment->month ?></td>
                <td><?php echo $payment->pirce ?></td>
            </tr>

            <?php endforeach;?>
            </tbody>
        </table>

    </div>
</div>