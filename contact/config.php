
<?php 
$connec=mysqli_connect("localhost","root","","contact");

if($connec){
	//echo "s";
}
else{
	die("error is".mysqli_connect_error());
}
?>