<?php
	include_once "connection.php";
	$did=$_GET['del'];
	$str="delete from degree_tbl where degree_id=".$did;
	mysqli_query($conn,$str);
	header('location:degree.php');
?>