<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="name" value="<?php echo $result['user_name'] ?>" type="text" class="form-control"
               id="exampleInputEmail1" placeholder="Enter name product">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input name="password" value="<?php echo $result['password'] ?>" type="text" class="form-control"
               id="exampleInputEmail1" placeholder="Enter price">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input name="email" value="<?php echo $result['email'] ?>" type="text" class="form-control"
               id="exampleInputEmail1"
               placeholder="Enter description">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Date Of Birth</label>
        <input name="date_of_birth" value="<?php echo $result['date_of_birth'] ?>" type="text" class="form-control"
               id="exampleInputEmail1" placeholder="Enter producer">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input name="phone" value="<?php echo $result['phone_number'] ?>" type="number" class="form-control"
               id="exampleInputEmail1" placeholder="Enter Phone Number">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <div><img width="100" height="75" src="<?php if ($result['image'] === "Public/images/user/")
            {echo "Public/images/user/anonymous.jpeg";
            }else{ echo  $result['image'];}  ?>"></div>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        <input type="hidden" name="image-name" value="<?php if ($result['image'] === "Public/images/user/")
        {echo "Public/images/user/anonymous.jpeg";
        }else{ echo  $result['image'];}  ?>" >
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>