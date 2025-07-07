<?php
	include_once "connection.php";
	$did=$_GET['del'];
	$str="delete from package_tbl where package_id=".$did;
	mysqli_query($conn,$str);
	header('location:package.php');
?>