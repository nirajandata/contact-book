<?php
session_start(); 
$connec=mysqli_connect("localhost","root","","contact");
$update=false;
$ids=1;
$name='';
$address='';
$email='';
if(!$connec){
	die("error is".mysqli_connect_error());
}
$result=$connec->query("SELECT * FROM ctable") or die($connec->error);
if (isset($_POST['save'])){
	  if (!empty($_POST['name'])) {
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$connec->query("INSERT INTO ctable(name,email,address) VALUES('$name','$email','$address')") or die($connec->error);
	
	$_SESSION['message']="Record has been saved";
	$_SESSION['msg']="success";
	header("location:index.php");
	}
	// else{
	// 	echo "<center><h1>error in the table </center>";
	// }

	}
	if (isset($_GET['delete'])) {
	 $id=$_GET['delete'];
	 $connec->query("DELETE FROM ctable WHERE id=$id") or die($connec->error);
	 $_SESSION['message']="Record has been deleted";
	 $_SESSION['msg']="danger";
	 header("location:index.php");	
	}
	if (isset($_GET['edit'])) {
	 $id=$_GET['edit'];
	 
	 $update=true;
	 $resl=$connec->query("SELECT * FROM ctable where id=$id ") or die($connec->error);
	 if ($id!=null) {
	 	$row=$resl->fetch_array();
	 	$name=$row['name'];
	 	$address=$row['address'];
	 	$email=$row['email'];
	 }
	}
	if (isset($_POST['update'])) {
	 $ids=$_POST['id'];
	 $name = $_POST['name'];
	 $email=$_POST['email'];
	 $address=$_POST['address'];
	 $connec->query("UPDATE ctable SET name='$name', address='$address', email='$email'  WHERE id=$ids ");
	 $_SESSION['message']="Record has been updated";
	 $_SESSION['msg']="warning";
	 //header('location: index.php');
	}
?>