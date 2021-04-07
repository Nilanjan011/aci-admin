<div class="container">
	<form action="<?php echo site_url('update/'.$item->id); ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?php echo $item->name; ?>" required placeholder="Enter name">
    <span style="color:red"><?php echo form_error("name");?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" name="email" value="<?php echo $item->email; ?>" placeholder="Enter email">
    <span style="color:red"><?php echo form_error("email");?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" name="phone" value="<?php echo $item->phone; ?>" class="form-control" id="exampleInputPassword1" placeholder="Phone">
    <span style="color:red"><?php echo form_error("phone");?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address" value="<?php echo $item->address; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
    <span style="color:red"><?php echo form_error("address");?></span>
  </div>
   <div class="form-group">
  
    <label for="exampleFormControlFile1">image upload</label>
    <?php echo form_upload(['name'=>'userFile']);
        if(isset($upload_error)){ echo $upload_error ;}
      ?>
    <img src="<?= base_url($item->image) ?>" width="50" height="50" alt="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>