
<?php 
$connec=mysqli_connect("localhost","root","","contact");

if($connec){
	echo "<center>-------</center>";
}
else{
	die("error is".mysqli_connect_error());
}
if (isset($_POST['save'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$connec->query("INSERT INTO ctable(name,email,address) VALUES('$name','$email','$address')") or die($connec->error);
}
?>