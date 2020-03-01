<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
require_once 'config.php';
$q=$_GET['q'];
$sql= "SELECT * FROM ctable where 'name' like '$q%' OR 'email' like '$q%' or address like '$q%' ";
$results=$connec->query("$sql");
$num=mysqli_num_rows($results)
?>
<?php if($num > 0): ?>
	<h1 class=" blockquote text-center"> <?php echo $num." results found"; ?></h1>
<div class="row justify-content-center">
<form class="form-group ">

<?php
while($row=$results->fetch_assoc()): ?>
	<tr>
	<td><?php echo $row['name']."<br>"; ?></td>
	<td><?php echo $row['address']."<br>"; ?></td>
	<td><?php echo $row['email']."<br>"; ?></td>	
	</tr>
<?php endwhile; ?>
<?php endif ; ?>
</form>
</div>
</body>
</html>