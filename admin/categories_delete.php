<?php
	include_once "connection.php";
	$did=$_GET['del'];
	$str="delete from categories_tbl where categories_id=".$did;
	mysqli_query($conn,$str);
	header('location:categories_details.php');
?>