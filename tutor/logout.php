<?php
require_once('connect.php');
session_start();
unset($_SESSION['tid']);
unset($_SESSION['tname']);
unset($_SESSION['prof_doc']);
unset($_SESSION['tmail']);
unset($_SESSION['expiry_package']);

header('location:index.php');
?>
 