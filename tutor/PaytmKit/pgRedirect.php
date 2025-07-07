<?php 
session_start();
include_once 'connection.php'; 
?>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("config_paytm.php");
require_once("encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = "ORDS" . rand(10000,99999999);
$CUST_ID = $_GET['tutor_id'];
$INDUSTRY_TYPE_ID = "Retail";
$CHANNEL_ID = "WEB";
$TXN_AMOUNT = $_GET['package_price'];
$_SESSION["pack_id"] = $_GET['package_id'];
$_SESSION["pack_price"] = $_GET['package_price'];
$_SESSION["package_duration"] = $_GET['package_duration'];
$pack_id=$_SESSION['pack_id'];
$val = $_GET['package_price'];
$duration =  $_SESSION['package_duration'];

$encrpt="eywoiryweior43907437604UIGBUGihishdsahoifsoifisdf";
// echo "<pre>";
// print_r($_SESSION);;die;
// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

$paramList["CALLBACK_URL"] = "http://localhost/dreamedu/tutor/PaytmKit/pgResponse.php?data=$encrpt&pack_id=$pack_id&val=$val&duration=$duration&user_id=$CUST_ID";

/*

$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>