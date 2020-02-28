<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<?php require_once 'config.php'; ?>

	<form action="" method="post">
		<div class="form-group" >
			<label>Name</label>
			<input type="text" name="name" placeholder="Enter your name">
		 </div>
		 <div class="form-group" >
			<label>Email</label>
			<input type="text" name="email" placeholder="Enter your email">
		 </div>
		  <div class="form-group" >
			<label>Address</label>
			<input type="text" name="address" placeholder="Enter your address">
		 </div>
		 <div class="form-group">
		 	<button type="submit" name="save">Save</button>
		 </div>
	</form>
</bdoy>
</html>