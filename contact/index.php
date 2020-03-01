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

<?php 
if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg'] ?>" role="alert">
	<?php
	 echo $_SESSION['message'];
	 unset($_SESSION['message']);
	?>
</div>
<?php endif ?>
<div class="container">
<h2 class="pt-4 blockquote text-center">A Address Book </h2>	 
<footer class="blockquote-footer text-center">By Navaraj Dhakal</footer>
  	
  <form class="pt-3 form-inline justify-content-center" method="get" action="search.php" >
	    <input class="form-control mr-sm-2" type="search" placeholder="Search" name='q'>
    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
  	
<div class="pt-3 row justify-content-center">
	<input type="hidden" name="id" value="<?php echo $ids; ?> ">
	<form action="" method="post">
		<div class="form-group" >
			<label>Name</label>
			<input type="text" class="form-control" value="<?php echo $name ; ?>" required="required" name="name" placeholder="Enter your name">
		 </div>
		 <div class="form-group" >
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $email ; ?>" required="required" placeholder="Enter your email">
		 </div>
		  <div class="form-group" >
			<label>Address</label>
			<input type="text" required="required" name="address" class="form-control" value="<?php echo $address; ?>" placeholder="Enter your address">
		 </div>
		 <div class="form-group">
		 	<?php if ($update == true): ?>
		 	<button type="submit" class="btn btn-info" name="update">update</button>
		 	<?php else: ?>
		 		<button type="submit" class="btn btn-primary" name="save">Save</button>
		 	<?php endif ;?>
		 </div>
	</form>
</div>
<?php if(mysqli_num_rows($result) > 0): ?>
<div class="row justify-content-center">
<table class="table ">
<thead >
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
	<td>
		<a href="index.php?edit=<?php echo $row['id'] ?>"
			class="btn btn-info">Edit
		</a>
		<a href="config.php?delete=<?php echo $row['id'] ?>"
			class="btn btn-danger">Trash
		</a>
	</td>
	</tr>
<?php endwhile; ?>
<?php endif ; ?>
</table>
</div>
</div>

</body>
</html>