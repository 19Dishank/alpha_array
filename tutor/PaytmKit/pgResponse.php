 <?php 
session_start();

include_once 'connection.php'; 
//  echo "<pre>";
// print_r($_GET);
// echo "<pre>";
// print_r($_SESSION);die;
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

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

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	$Date = date('Y-m-d');
	$duration=$_GET["duration"];
	//strtotime($ticket_created_on_date_time . '+ ' . $in_between_days . ' days')
	$exp_date= date('Y-m-d', strtotime($Date. '+ ' . $duration . ' month'));
	//echo date('Y-m-d', strtotime($Date. ' + 2 days'));
	$tutor_id = $_GET['user_id'];
	$tutor_trans_id = date('Ymdhis');
	$package_id =$_GET["pack_id"];
	$purcahse_date = date('Y-m-d H:i:s');
	//$pack_price = $_GET['val'];
	//$exp_date=$purcahse_date;
	//$end_date=$purcahse_date;
	// $date = new DateTime('now');
	// $date->modify('+3 month'); // or you can use '-90 day' for deduct
	// $date = $date->format('Y-m-d h:i:s');
	//$e = $date;
	$qury = "INSERT INTO package_detail_tbl VALUES(null,'$package_id','$tutor_id','$tutor_trans_id','$purcahse_date','$exp_date','1')";
	//echo $qury;die;
	mysqli_query($conn,$qury);
    //$exp_user="update user set user_status='1' where user_id=".$user_id;
    //$data_user=mysqli_query($conn,$exp_user);
	header("location:http://localhost/dreamedu/tutor/PaytmKit/payment_sucess.php");

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}


?>