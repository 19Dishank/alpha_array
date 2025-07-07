<?php 
session_start();
include_once 'connection.php'; 
?>
<html>
<head>
 <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
   

  <style>
* {
  box-sizing: border-box;
}

/* Create three columns of equal width */
.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

/* Style the list */
.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

/* Add shadows on hover */
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

/* List items */
.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

/* Grey list item */
.price .grey {
  background-color: #eee;
  font-size: 20px;
}

/* The "Sign Up" button */
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

/* Change the width of the three columns to 100%
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</Style>
</head>
<body>
<form method="POST">
  <?php
    //$a = $_GET["id"];
   // $b = $_GET["pass"];
   // $qry = "select * from admin where admin_email = '$a' and admin_password = '$b'";
	//echo $qry;
   // $c = mysql_query($qry);
   // $r = mysql_fetch_array($c);
   // $_SESSION["temp_id"] = $r["admin_id"];
	//echo $_SESSION["temp_id"];
	
	$q=mysqli_query($conn,"select * from package");
	while($qq=mysqli_fetch_array($q))
	{
	
  ?> 
	
	<div class="columns">
	<ul class="price">
    <li class="header"><?php echo $qq["package_name"]  ?></li>
    <li class="grey"><?php echo (int)$ans = $qq["package_price"] / $qq["package_duration"]  ?> / month</li>
    <li><?php echo $qq["package_duration"]  ?> Months</li>
    <li><?php echo $qq["No_Days_Of_Add"]  ?> Days Of Advertisement</li>
    <li><?php echo $qq["package_No_of_listing"]  ?> Listing</li>
    <li>Rs. <?php echo $qq["package_price"]  ?></li>
    <li class="grey"><a href="http://localhost:8081/yourhome/admin/PaytmKit/pgRedirect.php?ids=<?php echo $r['admin_id']?>&val=<?php echo $qq["package_price"]?>&packid=<?php echo $qq["package_id"]  ?>" class="button">Sign Up</a></li>
  </ul>
	</div>
<?php
	}
?>
</form>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  
	
</body>
</html>