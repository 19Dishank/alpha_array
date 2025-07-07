<?php
	include_once "connect.php";
	$did=$_GET['del_id'];
	$str="delete from gallery_tbl where gallery_id=".$did;
	mysqli_query($cnn,$str);
	header('location:gallery_list.php');
?>