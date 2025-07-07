<?php
session_start();
require_once('connection.php');


//Start  Categories

if(isset($_GET['categories_id']))
{
	$categories_id= $_GET['categories_id'];
	$categories_status=$_GET['categories_status'];
	if($categories_status=='0')
	{
		$sql = "update categories_tbl set categories_status='1' where categories_id= $categories_id";
		$Id_array =  mysqli_query($conn,$sql);
	}
	else
	{
		$sql = "update categories_tbl set categories_status='0' where categories_id= $categories_id";
		$Id_array =  mysqli_query($conn,$sql);
	}
	echo "<script>window.location='category_details.php';</script>";
}
// End  Categories

//Start Videos

if(isset($_GET['video_id']))
{
	$video_id= $_GET['video_id'];
	$video_status=$_GET['video_status'];
	if($video_status=='0')
	{
		$sql = "update video set video_status='1' where video_id= $video_id";
		$Id_array =  mysqli_query($conn,$sql);
	}
	else
	{
		$sql = "update video set video_status='0' where video_id= $video_id";
		$Id_array =  mysqli_query($conn,$sql);
	}
	echo "<script>window.location='video_list.php';</script>";
}
//End status



?> 