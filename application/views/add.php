<div class="container">
	<form action="<?php echo base_url('index.php/insert'); ?>" method="post" enctype="multipart/form-data" >
	<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control"  value="<?php echo set_value('name'); ?>" id="exampleInputEmail1" required placeholder="Enter name">
    <span><?php echo form_error("name");?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" name="email"  value="<?php echo set_value('eamil'); ?>" placeholder="Enter email">
    <span style="color:red"><?php echo form_error("email");?></span>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" class="form-control"  value="<?php echo set_value('phone'); ?>" name="phone" id="exampleInputPassword1" placeholder="Phone">
    <span style="color:red"><?php echo form_error("phone");?></span>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control"  value="<?php echo set_value('address'); ?>" name="address" id="exampleInputPassword1" placeholder="Enter Address">
    <span style="color:red"><?php echo form_error("address");?></span>
  </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">image upload</label>
    <?php echo form_upload(['name'=>'userFile']);
        if(isset($upload_error)){ echo $upload_error ;}
      ?>
       <span style="color:red"><?php echo form_error("userFile");?></span>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>