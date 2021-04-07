<div class="container">
<a href="<?php echo site_url('add'); ?>">
	<button type="button" class="btn btn-primary">Add</button>
</a>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Edit</th>
      <th>image</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $i=1;
    ?>
    <?php foreach ($data as $item) { ?>  
     <th scope="row"><?php echo $i; ?></th>
     <?php $i++; ?>
     <td><?= $item->name ?></td>
	<td><?= $item->email ?></td>
	<td><?= $item->phone ?></td>
	<td><?= $item->address ?></td>
	<td><img src="<?=base_url($item->image)?>" width="50" height="50" alt="image"></td>
	<td><a href="<?= site_url('edit/'.$item->id);?>">update</a></td>
	<td>
		<a href="<?= site_url('delete/'.$item->id);?>">delete</a></td><td></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>