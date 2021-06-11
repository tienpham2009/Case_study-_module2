<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">password</th>
        <th scope="col">email</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Phone</th>
        <th scope="col">Image</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($data as $key => $datum): ?>
    <tr>
        <th scope="row"><?php echo $datum['Id']?></th>
        <td><?php echo $datum['user_name'] ?></td>
        <td><?php echo $datum['password'] ?></td>
        <td><?php echo $datum['email'] ?></td>
        <td><?php echo $datum['date_of_birth'] ?></td>
        <td><?php echo $datum['phone_number'] ?></td>
        <td id="image">
            <img width="65" height="50" src="<?php if ($datum['image'] === "Public/Image/user/")
            {echo "Public/Image/user/unnamed1";
            }else{ echo  $datum['image']; }  ?>">
        </td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>