<?php
 session_start();
 include_once('connect.php');

#change status of course

if(isset($_POST['course_status']))
{
	$course_id= $_POST['course_id'];
	$course_status=$_POST['course_status'];
	if($course_status=='0')
	{
		$sql = "update course_tbl set course_status='1' where course_id= $course_id";
		$course_tbl =  mysqli_query($cnn,$sql);
	}
   else
	{
		$sql = "update course_tbl set course_status='0' where course_id= $course_id";
		$course_tbl =  mysqli_query($cnn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

#change status of tutor/personal_information

if(isset($_POST['tutor_status']))
{
	$tutor_id= $_POST['tutor_id'];
	$tutor_status=$_POST['tutor_status'];
	if($tutor_status=='0')
	{
		$sql = "update tutor_tbl set tutor_status='1' where tutor_id= $tutor_id";
		$tutor_tbl =  mysqli_query($cnn,$sql);
	}
   else
	{
		$sql = "update tutor_tbl set tutor_status='0' where tutor_id= $tutor_id";
		$tutor_tbl =  mysqli_query($cnn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

#change status of image

if(isset($_POST['image_status']))
{
	$gallery_id= $_POST['gallery_id'];
	$image_status=$_POST['image_status'];
	if($image_status=='0')
	{
		$sql = "update gallery_tbl set image_status='1' where gallery_id= $gallery_id";
		$gallery_tbl =  mysqli_query($cnn,$sql);
	}
   else
	{
		$sql = "update gallery_tbl set image_status='0' where gallery_id= $gallery_id";
		$gallery_tbl =  mysqli_query($cnn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

#change status of student

if(isset($_POST['user_status']))
{
	$user_id= $_POST['user_id'];
	$user_status=$_POST['user_status'];
	if($user_status=='0')
	{
		$sql = "update user_tbl set user_status='1' where user_id= $user_id";
		$user_tbl =  mysqli_query($cnn,$sql);
	}
   else
	{
		$sql = "update user_tbl set user_status='0' where user_id= $user_id";
		$user_tbl =  mysqli_query($cnn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

#change status of tutor certificate

if(isset($_POST['tutor_certificate_status']))
{
	$tutor_certificate_id= $_POST['tutor_certificate_id'];
	$tutor_certificate_status=$_POST['tutor_certificate_status'];
	if($tutor_certificate_status=='0')
	{
		$sql = "update tutor_certificate_tbl set tutor_certificate_status='1' where tutor_certificate_id= $tutor_certificate_id";
		$tutor_certificate_tbl =  mysqli_query($cnn,$sql);
	}
   else
	{
		$sql = "update tutor_certificate_tbl set tutor_certificate_status='0' where tutor_certificate_id= $tutor_certificate_id";
		$tutor_certificate_tbl =  mysqli_query($cnn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

#change status of video

if(isset($_POST['video_status']))
{
	$video_id= $_POST['video_id'];
	$video_status=$_POST['video_status'];
	if($video_status=='0')
	{
		$sql = "update video set video_status='1' where video_id= $video_id";
		$video_tbl =  mysqli_query($cnn,$sql);
	}
   else
	{
		$sql = "update video set video_status='0' where video_id= $video_id";
		$video_tbl =  mysqli_query($cnn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

?>