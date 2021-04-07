<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo  $title ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-light bg-light">
	  <form class="form-inline">
	    <a href="<?php echo site_url('/') ?>"><button class="btn btn-outline-success mr-5" type="button">Home</button></a>
	    <a href="<?php echo site_url('/logout') ?>"><button class="btn btn-sm btn-outline-danger" type="button">Logout</button></a>
	  </form>
  	</nav>
</div>



