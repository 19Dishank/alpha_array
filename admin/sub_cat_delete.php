<?php
	include_once "connection.php";
	$did=$_GET['del'];
	$str="delete from sub_categories_tbl where sub_cat_id=".$did;
	mysqli_query($conn,$str);
	header('location:sub_cat_list.php');
?>