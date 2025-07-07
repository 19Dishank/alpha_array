<?php
session_start();
include 'connect.php';
 if(!isset($_SESSION['tmail']))
 {
  header('location:index.php');
  }

//Start Videos

if(isset($_GET['video_id']))
{
	$video_id= $_GET['video_id'];
	$video_status=$_GET['video_status'];
	if($video_status=='0')
	{
		$sql = "update video set video_status='1' where video_id= $video_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update video set video_status='0' where video_id= $video_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='video_list.php';</script>";
}
//End Categories

//Start Categories

if(isset($_GET['categories_id']))
{
	$categories_id= $_GET['categories_id'];
	$categories_status=$_GET['categories_status'];
	if($categories_status=='0')
	{
		$sql = "update categories_tbl set categories_status='1' where categories_id= $categories_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update categories_tbl set categories_status='0' where categories_id= $categories_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='cat_list.php';</script>";
}
//End Categories

//Start Sub Categories

if(isset($_GET['sub_cat_id']))
{
	$sub_cat_id= $_GET['sub_cat_id'];
	$sub_cat_status=$_GET['sub_cat_status'];
	if($sub_cat_status=='0')
	{
		$sql = "update sub_categories_tbl set sub_cat_status='1' where sub_cat_id= $sub_cat_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update sub_categories_tbl set sub_cat_status='0' where sub_cat_id= $sub_cat_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='sub_cat_list.php';</script>";
}
// End Sub Categories

//Start Degree

if(isset($_GET['degree_id']))
{
	$degree_id= $_GET['degree_id'];
	$degree_status=$_GET['degree_status'];
	if($degree_status=='0')
	{
		$sql = "update degree_tbl set degree_status='1' where degree_id= $degree_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update degree_tbl set degree_status='0' where degree_id= $degree_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='degree_list.php';</script>";
}
//End Degree

//Start Package

if(isset($_GET['package_id']))
{
	$package_id= $_GET['package_id'];
	$package_status=$_GET['package_status'];
	if($package_status=='0')
	{
		$sql = "update package_tbl set package_status='1' where package_id= $package_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update package_tbl set package_status='0' where package_id= $package_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='package_list.php';</script>";
}
//End Package


//Start Topic

if(isset($_GET['topic_id']))
{
	$topic_id= $_GET['topic_id'];
	$topic_status=$_GET['topic_status'];
	if($topic_status=='0')
	{
		$sql = "update topic_tbl set topic_status='1' where topic_id= $topic_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update topic_tbl set topic_status='0' where topic_id= $topic_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='topic_list.php';</script>";
}
//End Topic


//Start Tutor

if(isset($_GET['tutor_id']))
{
	$tutor_id= $_GET['tutor_id'];
	$tutor_status=$_GET['tutor_status'];
	if($tutor_status=='0')
	{
		$sql = "update tutor_tbl set tutor_status='1' where tutor_id= $tutor_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update tutor_tbl set tutor_status='0' where tutor_id= $tutor_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='tutor_list.php';</script>";
}
//End Tutor

//Start User

if(isset($_GET['user_id']))
{
	$user_id= $_GET['user_id'];
	$user_status=$_GET['user_status'];
	if($user_status=='0')
	{
		$sql = "update user_tbl set user_status='1' where user_id= $user_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update user_tbl set user_status='0' where user_id= $user_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='user_list.php';</script>";
}
//End User

//Start Review

if(isset($_GET['review_id']))
{
	$review_id= $_GET['review_id'];
	$review_status=$_GET['review_status'];
	if($review_status=='0')
	{
		$sql = "update review_tbl set review_status='1' where review_id= $review_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update review_tbl set review_status='0' where review_id= $review_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='review_list.php';</script>";
}
//End Review

//Start Feedback

if(isset($_GET['feedback_id']))
{
	$feedback_id= $_GET['feedback_id'];
	$feedback_status=$_GET['feedback_status'];
	if($feedback_status=='0')
	{
		$sql = "update feedback_tbl set feedback_status='1' where feedback_id= $feedback_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update feedback_tbl set feedback_status='0' where feedback_id= $feedback_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='feedback_list.php';</script>";
}
//End Feedback

//Start Course

if(isset($_GET['course_id']))
{
	$course_id= $_GET['course_id'];
	$course_status=$_GET['course_status'];
	if($course_status=='0')
	{
		$sql = "update course_tbl set course_status='1' where course_id= $course_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update course_tbl set course_status='0' where course_id= $course_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='course_list.php';</script>";
}
//End Course

//Start Certificate

if(isset($_GET['certificate_id']))
{
	$certificate_id= $_GET['certificate_id'];
	$certificate_status=$_GET['certificate_status'];
	if($certificate_status=='0')
	{
		$sql = "update certificate_tbl set certificate_status='1' where certificate_id= $certificate_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update certificate_tbl set certificate_status='0' where certificate_id= $certificate_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='certificate_list.php';</script>";
}
//End Certificate

//Start Gallery

if(isset($_GET['gallery_id']))
{
	$gallery_id= $_GET['gallery_id'];
	$image_status=$_GET['image_status'];
	if($image_status=='0')
	{
		$sql = "update gallery_tbl set image_status='1' where gallery_id= $gallery_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update gallery_tbl set image_status='0' where gallery_id= $gallery_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='gallery_list.php';</script>";
}
//End Gallery

//Start Package Detail

if(isset($_GET['package_detail_id']))
{
	$package_detail_id= $_GET['package_detail_id'];
	$package_detail_status=$_GET['package_detail_status'];
	if($package_detail_status=='0')
	{
		$sql = "update package_detail_tbl set package_detail_status='1' where package_detail_id= $package_detail_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update package_detail_tbl set package_detail_status='0' where package_detail_id= $package_detail_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='package_detail_list.php';</script>";
}
//End Package Detail

//Start Response

if(isset($_GET['response_id']))
{
	$response_id= $_GET['response_id'];
	$response_status=$_GET['response_status'];
	if($response_status=='0')
	{
		$sql = "update response_tbl set response_status='1' where response_id= $response_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update response_tbl set response_status='0' where response_id= $response_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='response_list.php';</script>";
}
//End Response

//Start Tutor Certificate

if(isset($_GET['tutor_certificate_id']))
{
	$tutor_certificate_id= $_GET['tutor_certificate_id'];
	$tutor_certificate_status=$_GET['tutor_certificate_status'];
	if($tutor_certificate_status=='0')
	{
		$sql = "update tutor_certificate_tbl set tutor_certificate_status='1' where tutor_certificate_id= $tutor_certificate_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update tutor_certificate_tbl set tutor_certificate_status='0' where tutor_certificate_id= $tutor_certificate_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	//echo $sql;die;
	echo "<script>window.location='tutor_certificate_list.php';</script>";
}
//End Tutor Certificate

//Start Tutor Degree

if(isset($_GET['tutor_degree_id']))
{
	$tutor_degree_id= $_GET['tutor_degree_id'];
	$tutor_degree_status=$_GET['tutor_degree_status'];
	if($tutor_degree_status=='0')
	{
		$sql = "update tutor_degree_tbl set tutor_degree_status='1' where tutor_degree_id= $tutor_degree_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update tutor_degree_tbl set tutor_degree_status='0' where tutor_degree_id= $tutor_degree_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='tutor_degree_list.php';</script>";
}
//End Tutor Degree 

//Start User Booking

if(isset($_GET['booking_id']))
{
	$booking_id= $_GET['booking_id'];
	$booking_status=$_GET['booking_status'];
	if($booking_status=='0')
	{
		$sql = "update user_booking_tbl set booking_status='1' where booking_id= $booking_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update user_booking_tbl set booking_status='0' where booking_id= $booking_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='user_booking_list.php';</script>";
}
//End User Booking

//Start Tutor Payment

if(isset($_GET['tutor_payment_id']))
{
	$tutor_payment_id= $_GET['tutor_payment_id'];
	$tutor_payment_status=$_GET['tutor_payment_status'];
	if($tutor_payment_status=='0')
	{
		$sql = "update tutor_payment_tbl set tutor_payment_status='1' where tutor_payment_id= $tutor_payment_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update tutor_payment_tbl set tutor_payment_status='0' where tutor_payment_id= $tutor_payment_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='tutor_payment_list.php';</script>";
}
//End Tutor Payment

//Start Tutor Prof Detail

if(isset($_GET['tutor_prof_detail_id']))
{
	$tutor_prof_detail_id= $_GET['tutor_prof_detail_id'];
	$tutor_prof_status=$_GET['tutor_prof_status'];
	if($tutor_prof_status=='0')
	{
		$sql = "update tutor_prof_detail_tbl set tutor_prof_status='1' where tutor_prof_detail_id= $tutor_prof_detail_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update tutor_prof_detail_tbl set tutor_prof_status='0' where tutor_prof_detail_id= $tutor_prof_detail_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='tutor_prof_detail_list.php';</script>";
}
//End Tutor Prof Detail


//Start FAQ
if(isset($_GET['faq_id']))
{
	$faq_id= $_GET['faq_id'];
	$faq_status=$_GET['faq_status'];
	if($faq_status=='0')
	{
		$sql = "update faq_tbl set faq_status='1' where faq_id= $faq_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update faq_tbl set faq_status='0' where faq_id= $faq_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='faq_list.php';</script>";
}
//End FAQ
?> 