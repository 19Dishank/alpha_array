<?php 
session_start();
require_once("connect.php");
 
if(isset($_SESSION['expiry_package']))
{
    header('location:billing.php'); 
}
else
{
    header('location:dashboard.php');
}
?>