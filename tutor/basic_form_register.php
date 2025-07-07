<?php
 session_start();
 require_once("connect.php");
 // if(!isset($_SESSION['mail']))
 // {
 //  header('location:index.php');
 //  }
 //echo "<pre>";
 // print_r($_POST);
//  //echo $_POST['multiStepsUsername']."name";

//  if(!empty($_POST['package_id']))
// {
// 	//echo "hello";
// 	$_SESSION['buy_pack_id']=$_POST['package_id'];
// 	$_SESSION['buy_tutor_id']=$_POST['tutor_id'];
// 	$qry1_package="select * from package_tbl where package_id='".$_SESSION['buy_pack_id']."'";
// 						   //echo $qry;
//    $my1_package=mysqli_query($cnn,$qry1_package);
//    $row1_package=mysqli_fetch_array($my1_package);


// 	$_SESSION['buy_package_price']=$row1_package['package_price'];
// 	$_SESSION['buy_package_duration']=$row1_package ['package_duration'];
// 	// echo "<pre>";
// 	//print_r($_SESSION);
// 	//header('location:PaytmKit/pgRedirect.php');
// 	echo "OK";
// }
// else 

if(!empty($_POST['tutor_classes']))
 {
 	
 		//echo "<pre>";
		//echo "sfdasdfadca";
		//print_r($_FILES['multiStepsWallpaper']['name']);
 		 	if(isset($_SESSION['last_id']))
	 		{
				$update_str="update tutor_tbl set tutor_name='".$_POST['multiStepsUsername']."',tutor_email='".$_POST['multiStepsEmail']."',tutor_password='".md5($_POST['multiStepsPass'])."',tutor_contact='".$_POST['multiStepsMobile']."',tutor_address='".$_POST['multiStepsAddress']."',pincode='".$_POST['multiStepsPincode']."',tutor_classes='".$_POST['tutor_classes']."' where tutor_id=".$_SESSION['last_id'];
			//echo $update_str;
				$row=mysqli_query($cnn,$update_str);
				if($row)
				{
				echo "OK";
				}
			 }
		// else
		// {
			//echo "<pre>";
			//print_r($_FILES);
			//move_uploaded_file($_FILES['multiStepsWallpaper']['tmp_name'],"images/".$_FILES['multiStepsWallpaper']['name']);
			$wallpaper="";
			$tutor_wallpaper="";
			//echo $wallpaper	;

		 	$images='';
		 	$register_date=date("Y-m-d H:i:s");
			$str="insert into tutor_tbl values(NULL,'".$images."','".$_POST['multiStepsUsername']."','".$_POST['multiStepsEmail']."','".md5($_POST['multiStepsPass'])."','".$_POST['multiStepsMobile']."','".$_POST['multiStepsAddress']."','".$_POST['multiStepsPincode']."','".$_POST['tutor_classes']."','".$register_date."','1')";
			//echo $str;
			$row=mysqli_query($cnn,$str);
			//echo "OK";
			$last_id = mysqli_insert_id($cnn);
			$_SESSION['last_id']=$last_id;
			if($row)
			{
				echo "OK";
			}

			//$str1="insert into tutor_prof_detail_tbl('tutor_id','tutor_wallpaper')values('".$_SESSION['last_id']."','".$wallpaper."')";
  			//	$tutor_wallpaper=mysqli_query($cnn,$str1);
			
		
		//}


 	
}


?>