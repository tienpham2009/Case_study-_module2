<div class="card row" style="width: 100%">
    <div class="col-1">
        <a type="button" class="btn btn-secondary" href="index.php?page=room&action=show-list">Back</a>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Năm</label>
            <input type="text" class="form-control col-4" id="unitPrice" name="year">
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error ?></p>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-success">Xem Thống Kê</button>
    </form>
    <div class="card-header">
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
            <?php foreach ($payments as $key => $payment): ?>
                <tr>
                    <td><?php echo $payment->month ?></td>
                    <td><?php echo $payment->pirce ?></td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>