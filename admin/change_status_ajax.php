<?php
 session_start();
 include_once('connection.php');


#change status of video

if(isset($_POST['video_status']))
{
	$video_id= $_POST['video_id'];
	$video_status=$_POST['video_status'];
	if($video_status=='0')
	{
		$sql = "update video set video_status='1' where video_id= $video_id";
		$video_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update video set video_status='0' where video_id= $video_id";
		$video_tbl =  mysqli_query($conn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

#change status of course

if(isset($_POST['categories_status']))
{
	$categories_id= $_POST['categories_id'];
	$categories_status=$_POST['categories_status'];
	if($categories_status=='0')
	{
		$sql = "update categories_tbl set categories_status='1' where categories_id= $categories_id";
		$categories_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update categories_tbl set categories_status='0' where categories_id= $categories_id";
		$categories_tbl =  mysqli_query($conn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}
// start SUB CATEGORIES

if(isset($_POST['sub_cat_status']))
{
	$sub_cat_id= $_POST['sub_cat_id'];
	$sub_cat_status=$_POST['sub_cat_status'];
	if($sub_cat_status=='0')
	{
		$sql = "update sub_categories_tbl set sub_cat_status='1' where sub_cat_id= $sub_cat_id";
		$sub_categories_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update sub_categories_tbl set sub_cat_status='0' where sub_cat_id= $sub_cat_id";
		$sub_categories_tbl =  mysqli_query($conn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

//End SUB CATEOGRIES


// start FAQ

if(isset($_POST['faq_status']))
{
	$faq_id= $_POST['faq_id'];
	$faq_status=$_POST['faq_status'];
	if($faq_status=='0')
	{
		$sql = "update faq_tbl set faq_status='1' where faq_id= $faq_id";
		$faq_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update faq_tbl set faq_status='0' where faq_id= $faq_id";
		$faq_tbl =  mysqli_query($conn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

//End FAQ

// start STUDENT

if(isset($_POST['user_status']))
{
	$user_id= $_POST['user_id'];
	$user_status=$_POST['user_status'];
	if($user_status=='0')
	{
		$sql = "update user_tbl set user_status='1' where user_id= $user_id";
		$user_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update user_tbl set user_status='0' where user_id= $user_id";
		$user_tbl =  mysqli_query($conn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

//End STUDENT


// start COURSE

if(isset($_POST['course_status']))
{
	$course_id= $_POST['course_id'];
	$course_status=$_POST['course_status'];
	if($course_status=='0')
	{
		$sql = "update course_tbl set course_status='1' where course_id= $course_id";
		$course_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update course_tbl set course_status='0' where course_id= $course_id";
		$course_tbl =  mysqli_query($conn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}

//End COURSE

// start Booking

if(isset($_POST['booking_status']))
{
	$booking_id= $_POST['booking_id'];
	$booking_status=$_POST['booking_status'];
	if($booking_status=='0')
	{
		$sql = "update user_booking_tbl set booking_status='1' where booking_id= $booking_id";
		$user_booking_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update user_booking_tbl set booking_status='0' where booking_id= $booking_id";
		$user_booking_tbl =  mysqli_query($conn,$sql);
	}
	return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}


//End COURSE

//tutor status
if(isset($_POST['tutor_status']))
{
	$tutor_id= $_POST['tutor_id'];
	$tutor_status=$_POST['tutor_status'];
	if($tutor_status=='0')
	{
		$sql = "update tutor_tbl set tutor_status='1' where tutor_id= $tutor_id";
		$tutor_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update tutor_tbl set tutor_status='0' where tutor_id= $tutor_id";
		$tutor_tbl =  mysqli_query($conn,$sql);
	}
	//return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}
//degree status
if(isset($_POST['degree_status']))
{
	$degree_id= $_POST['degree_id'];
	$degree_status=$_POST['degree_status'];
	if($degree_status=='0')
	{
		$sql = "update degree_tbl set degree_status='1' where degree_id= $degree_id";
		$degree_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update degree_tbl set degree_status='0' where degree_id= $degree_id";
		$degree_tbl =  mysqli_query($conn,$sql);
	}
	//return true;
	//echo $sql; die;
	//echo $sql;
	//echo "<script>window.location='listsubject.php';</script>";
}
//topic status
if(isset($_POST['topic_status']))
{
	$topic_id= $_POST['topic_id'];
	$topic_status=$_POST['topic_status'];
	if($topic_status=='0')
	{
		$sql = "update topic_tbl set topic_status='1' where topic_id= $topic_id";
		$topic_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update topic_tbl set topic_status='0' where topic_id= $topic_id";
		$topic_tbl =  mysqli_query($conn,$sql);
	}
}
//feedback status
if(isset($_POST['feedback_status']))
{
	$feedback_id= $_POST['feedback_id'];
	$feedback_status=$_POST['feedback_status'];
	if($feedback_status=='0')
	{
		$sql = "update feedback_tbl set feedback_status='1' where feedback_id= $feedback_id";
		$feedback_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update feedback_tbl set feedback_status='0' where feedback_id= $feedback_id";
		$feedback_tbl =  mysqli_query($conn,$sql);
	}
}
//package status
if(isset($_POST['package_status']))
{
	$package_id= $_POST['package_id'];
	$package_status=$_POST['package_status'];
	if($package_status=='0')
	{
		$sql = "update package_tbl set package_status='1' where package_id= $package_id";
		$package_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update package_tbl set package_status='0' where package_id= $package_id";
		$package_tbl =  mysqli_query($conn,$sql);
	}
}

//tutor package status
if(isset($_POST['package_detail_status']))
{
	$package_detail_id= $_POST['package_detail_id'];
	$package_detail_status=$_POST['package_detail_status'];
	if($package_detail_status=='0')
	{
		$sql = "update package_detail_tbl set package_detail_status='1' where package_detail_id= $package_detail_id";
		$package_detail_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update package_detail_tbl set package_detail_status='0' where package_detail_id= $package_detail_id";
		$package_detail_tbl =  mysqli_query($conn,$sql);
	}
}

//package status
if(isset($_POST['tutor_certificate_status']))
{
	$tutor_certificate_id= $_POST['tutor_certificate_id'];
	$tutor_certificate_status=$_POST['tutor_certificate_status'];
	if($tutor_certificate_status=='0')
	{
		$sql = "update tutor_certificate_tbl set tutor_certificate_status='1' where tutor_certificate_id= $tutor_certificate_id";
		$tutor_certificate_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update tutor_certificate_tbl set tutor_certificate_status='0' where tutor_certificate_id= $tutor_certificate_id";
		$tutor_certificate_tbl =  mysqli_query($conn,$sql);
	}
	//echo $sql;
}
//tutor degree status
if(isset($_POST['tutor_degree_status']))
{
	$tutor_degree_id= $_POST['tutor_degree_id'];
	$tutor_degree_status=$_POST['tutor_degree_status'];
	if($tutor_degree_status=='0')
	{
		$sql = "update tutor_degree_tbl set tutor_degree_status='1' where tutor_degree_id= $tutor_degree_id";
		$tutor_degree_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update tutor_degree_tbl set tutor_degree_status='0' where tutor_degree_id= $tutor_degree_id";
		$tutor_degree_tbl =  mysqli_query($conn,$sql);
	}
}
//tutor payment status
if(isset($_POST['tutor_payment_status']))
{
	$tutor_payment_id= $_POST['tutor_payment_id'];
	$tutor_payment_status=$_POST['tutor_payment_status'];
	if($tutor_payment_status=='0')
	{
		$sql = "update tutor_payment_tbl set tutor_payment_status='1' where tutor_payment_id= $tutor_payment_id";
		$tutor_payment_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update tutor_payment_tbl set tutor_payment_status='0' where tutor_payment_id= $tutor_payment_id";
		$tutor_payment_tbl =  mysqli_query($conn,$sql);
	}
}
//tutor payment status
if(isset($_POST['tutor_prof_status']))
{
	$tutor_prof_detail_id= $_POST['tutor_prof_detail_id'];
	$tutor_prof_status=$_POST['tutor_prof_status'];
	if($tutor_prof_status=='0')
	{
		$sql = "update tutor_prof_detail_tbl set tutor_prof_status='1' where tutor_prof_detail_id= $tutor_prof_detail_id";
		$tutor_prof_detail_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update tutor_prof_detail_tbl set tutor_prof_status='0' where tutor_prof_detail_id= $tutor_prof_detail_id";
		$tutor_prof_detail_tbl =  mysqli_query($conn,$sql);
	}
}

//review status
if(isset($_POST['review_status']))
{
	$review_id= $_POST['review_id'];
	$review_status=$_POST['review_status'];
	if($review_status=='0')
	{
		$sql = "update review_tbl set review_status='1' where review_id= $review_id";
		$review_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update review_tbl set review_status='0' where review_id= $review_id";
		$review_tbl =  mysqli_query($conn,$sql);
	}
}


//response status
if(isset($_POST['response_status']))
{
	$response_id= $_POST['response_id'];
	$response_status=$_POST['response_status'];
	if($response_status=='0')
	{
		$sql = "update response_tbl set response_status='1' where response_id= $response_id";
		$response_tbl =  mysqli_query($conn,$sql);
	}
   else
	{
		$sql = "update response_tbl set response_status='0' where response_id= $response_id";
		$response_tbl =  mysqli_query($conn,$sql);
	}
}
?>