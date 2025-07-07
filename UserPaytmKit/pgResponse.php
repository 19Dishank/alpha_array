<?php 
session_start();
include_once 'connection.php'; 
// echo "<pre>";
//  print_r($_GET);
//  echo "<pre>";
//  print_r($_SESSION);
// header("Pragma: no-cache");
// header("Cache-Control: no-cache");
// header("Expires: 0");

// following files need to be included
require_once("config_paytm.php");
require_once("encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	//echo $_POST['BANKNAME'];
	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}

	$date= date('Y-m-d');
	$booking_status='1';
	//$user_payment_status='1';
	//$payment_method_id='1';
	$user_id= $_GET["u_id"];
	$tutor_id= $_GET["t_id"];
	$course_id= $_GET["c_id"];
	$tutor_payment_status='1';
    //$payment_amount=$_SESSION["course_fees"];
	$qury = "INSERT INTO user_booking_tbl VALUES(null,'$user_id','$tutor_id','$course_id','$date','$booking_status')";
	//echo $qury;
	mysqli_query($conn,$qury);
	$booking_id = mysqli_insert_id($conn);
	
	$qury_payment = "INSERT INTO tutor_payment_tbl VALUES(null,'$booking_id','".$_POST['PAYMENTMODE']."','$date','".$_POST['ORDERID']."','".$_POST['BANKNAME']."','$tutor_payment_status')";
	 mysqli_query($conn,$qury_payment);
	

	$seat_expire="select * from course_tbl where course_id='".$_GET['c_id']."'";
	$seat_row=mysqli_query($conn,$seat_expire);
	$seat_result=mysqli_fetch_array($seat_row);
	echo $seat_result['available_seat'];

	$available_seat=$seat_result['available_seat'];
	$available_seat--;
	// echo $seat_expire;die;
	//$exp_seat--;
	$expire="update course_tbl set available_seat='".$available_seat."'where course_id='".$_GET['c_id']."'";
	//echo $qury_payment;die;
	 mysqli_query($conn,$expire);
 //    echo "<pre>";
	// print_r($_SESSION);
	// echo "onpage";
	// //die;
	if(!isset($_SESSION['uid']))
	{
		 $str_get="select * from user_tbl where user_id='".$user_id."'";
	      //echo $str;die;
	      $result_payment=mysqli_query($conn,$str_get);
	      $row_pay=mysqli_fetch_array($result_payment);
	      if(mysqli_num_rows($result_payment)>0)
	      {
	          $_SESSION['uid']=$row_pay['user_id'];
	          $_SESSION['umail']=$row_pay['user_email'];
	          $_SESSION['uname']=$row_pay['user_name'];
	          header("location:../payment_success.php");
	      }
	      else
	      {
				header("location:../payment_success.php");
		  }
	 }
	 header("location:../payment_success.php");	  

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}


?>