
<?php 
$connec=mysqli_connect("localhost","root","","contact");

if($connec){
	echo "<center>-------</center>";
}
else{
	die("error is".mysqli_connect_error());
}
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address'])&&isset($_POST['save'])){
	  if (!empty($_POST['name'])) {
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$connec->query("INSERT INTO ctable(name,email,address) VALUES('$name','$email','$address')") or die($connec->error);
	$result=$connec->query("SELECT * FROM ctable") or die($connec->error);
	}
	else{
		echo "<center><h1>error in the table <h1></center>";
	}
	}
?>
