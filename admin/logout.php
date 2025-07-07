<?php
require_once('connection.php');
session_start();

unset($_SESSION['id']);
unset($_SESSION['mail']);
unset($_SESSION['name']);
unset($_SESSION['password']);
header('location:index.php');
?>