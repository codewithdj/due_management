<?php 
	require_once('dbConnect.php');
	$enroll= $_GET['id'];
	$sql = "delete from tution_fees where enrollNo='$enroll'";
	if(mysqli_query($conn,$sql)){
		header("location:lib-admin.php");
	}
		
?>