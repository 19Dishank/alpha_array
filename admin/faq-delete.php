<?php
	include_once "connection.php";
	$did=$_GET['del'];
	$str="delete from faq_tbl where faq_id=".$did;
	mysqli_query($conn,$str);
	header('location:faq-details.php');
?>