<?php
 session_start();
/*include_once "connection.php"; 
echo '<pre>';
print_r($_POST); 
$date = date('Y-m-d H:i:s');

$qury3="insert into  admintovendor_tbl values(NULL,'".$_POST['rider_id']."','".$_POST['totalAmount']."','".$date."','".$_POST['razorpay_payment_id']."')";

$aa="update order_details_tbl,cart_tbl set order_details_tbl.vendor_payment_status='1' where cart_tbl.cart_id=order_details_tbl.cart_id and cart_tbl.vendor_id='".$_POST['rider_id']."'";
mysqli_query($conn,$aa);
$ans=mysqli_query($conn,$qury3);	 */
require_once("connect.php");
$Date = date('Y-m-d');
//$duration=$_GET["duration"];
$duration=4;
//strtotime($ticket_created_on_date_time . '+ ' . $in_between_days . ' days')
$exp_date= date('Y-m-d', strtotime($Date. '+ ' . $duration . ' month'));
//echo date('Y-m-d', strtotime($Date. ' + 2 days'));
$tutor_id = $_SESSION['tid'];
$tutor_trans_id = date('Ymdhis');
$package_id =$_POST["package_id"];
$purcahse_date = date('Y-m-d H:i:s');
//$pack_price = $_GET['val'];
//$exp_date=$purcahse_date;
//$end_date=$purcahse_date;
// $date = new DateTime('now');
// $date->modify('+3 month'); // or you can use '-90 day' for deduct
// $date = $date->format('Y-m-d h:i:s');
//$e = $date;
$qury = "INSERT INTO package_detail_tbl VALUES(null,'$package_id','$tutor_id','$tutor_trans_id','$purcahse_date','$exp_date','1')";
echo $qury;
mysqli_query($cnn,$qury);
?>