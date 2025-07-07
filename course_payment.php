<?php 
require_once('connect.php');
//echo "hello";
session_start();
echo "<pre>";
print_r($_SESSION);
print_r($_POST);

    $date= date('Y-m-d');
	$booking_status='1';
	//$user_payment_status='1';
	//$payment_method_id='1';
	$user_id= $_SESSION['uid'];
	$tutor_id= $_SESSION['tid'];
	$course_id= $_POST["course_id"];
	$totalAmount= $_POST["totalAmount"];
	$tutor_payment_status='1';
    //$payment_amount=$_SESSION["course_fees"];
    //print_r($_POST);
    //echo $course_id;
	$qury = "INSERT INTO user_booking_tbl VALUES(null,'$user_id','$tutor_id','$course_id','$date','$booking_status')";
	echo $qury;
	mysqli_query($cnn,$qury);
	$booking_id = mysqli_insert_id($cnn);
	
	//$qury_payment = "INSERT INTO tutor_payment_tbl VALUES(null,'$booking_id','".$_POST['PAYMENTMODE']."','$date','".$_POST['ORDERID']."','".$_POST['BANKNAME']."','$tutor_payment_status')";
	 //mysqli_query($cnn,$qury_payment);
	

	$seat_expire="select * from course_tbl where course_id='".$course_id."'";
	$seat_row=mysqli_query($cnn,$seat_expire);
	$seat_result=mysqli_fetch_array($seat_row);
	//echo $seat_result['available_seat'];

	$available_seat=$seat_result['available_seat'];
	$available_seat--;
	// echo $seat_expire;die;
	//$exp_seat--;
	$expire="update course_tbl set available_seat='".$available_seat."'where course_id='".$course_id."'";
	//echo $qury_payment;die;
	 mysqli_query($cnn,$expire);
 //    echo "<pre>";
	// print_r($_SESSION);
	// echo "onpage";
	// //die;
	if(!isset($_SESSION['uid']))
	{
		 $str_get="select * from user_tbl where user_id='".$user_id."'";
	      //echo $str;die;
	      $result_payment=mysqli_query($cnn,$str_get);
	      $row_pay=mysqli_fetch_array($result_payment);
	      if(mysqli_num_rows($result_payment)>0)
	      {
	          $_SESSION['uid']=$row_pay['user_id'];
	          $_SESSION['umail']=$row_pay['user_email'];
	          $_SESSION['uname']=$row_pay['user_name'];
	          //header("location:../payment_success.php");
	      }
	      else
	      {
	//			header("location:../payment_success.php");
		  }
	 }
	// header("location:../payment_success.php");	  
?>