<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require_once 'config.php';
	 ?>
<div class="container">
<h2 class=" blockquote text-center">A Address Book </h2>	 
<footer class="blockquote-footer text-center">By Navaraj Dhakal</footer>
<div class="row justify-content-center">
	<form action="" method="post">
		<div class="form-group" >
			<label>Name</label>
			<input type="text" class="form-control" required="required" name="name" placeholder="Enter your name">
		 </div>
		 <div class="form-group" >
			<label>Email</label>
			<input type="text" name="email" class="form-control" required="required" placeholder="Enter your email">
		 </div>
		  <div class="form-group" >
			<label>Address</label>
			<input type="text" required="required" name="address" class="form-control" placeholder="Enter your address">
		 </div>
		 <div class="form-group">
		 	<button type="submit" class="btn btn-primary" name="save">Save</button>
		 </div>
	</form>
</div>
<div class="row justify-content-center">
<table class="table align-self-center">
<thead class="thead-light">
	<tr>
		<th> Name</th>
		<th> Address</th>
		<th> Email</th>

	</tr>
</thead>
<?php
while($row=$result->fetch_assoc()): ?>
	<tr>
	<td><?php echo $row['name']."<br>"; ?></td>
	<td><?php echo $row['address']."<br>"; ?></td>
	<td><?php echo $row['email']."<br>"; ?></td>	
	</tr>
<?php endwhile; ?>

</table>
</div>
</div>
</body>
</html>
