<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php require_once 'config.php'; ?>
<div class="row justify-content-center">
	<form action="" method="post">
		<div class="form-group" >
			<label>Name</label>
			<input type="text" class="form-control" name="name" placeholder="Enter your name">
		 </div>
		 <div class="form-group" >
			<label>Email</label>
			<input type="text" name="email" class="form-control" placeholder="Enter your email">
		 </div>
		  <div class="form-group" >
			<label>Address</label>
			<input type="text" name="address" class="form-control" placeholder="Enter your address">
		 </div>
		 <div class="form-group">
		 	<button type="submit" class="btn btn-primary" name="save">Save</button>
		 </div>
	</form>
</div>
	
</bdoy>
</html>