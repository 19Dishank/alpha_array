<?php include('header.php');
$name=$email=$number=$img1='';
$msg='';
if(isset($_POST['submit'])){
	/* if(!empty($_GET['upe_id'])){
		if($_FILES['img']['name']!=''){
						$img=$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],'assets/img/'.$img);
		$qury=mysqli_query($con,"update admin_user set img='$img',admin_name='".$_POST['name']."',email='".$_POST['email']."',contact_no='".$_POST['num']."' where admin_id='".$_SESSION['aid']."'"); */
		//echo $qury; die;
/* 				 echo '<script type = "text/javascript">';
    echo 'window.location.href = "profile.php"';
    echo '</script>'; */
	/* 	}else{ */
			$qury=mysqli_query($con,"update customer set cust_name='".$_POST['cust_name']."',email='".$_POST['email']."',contactno='".$_POST['num']."',address1='".$_POST['add1']."',address2='".$_POST['add2']."',city='".$_POST['city']."',state='".$_POST['state']."' where cust_id='".$_SESSION['id']."'");
			//echo $qury; die;
				 echo '<script type = "text/javascript">';
    echo 'window.location.href = "profile.php"';
    echo '</script>';
	
}
if(isset($_GET['upe_id'])){
	$qury=mysqli_query($con,"select * from customer where cust_id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($qury);
	$name=$row['cust_name'];
	$email=$row['email'];
	$number=$row['contactno'];
	$add=$row['address1'];
	$add2=$row['address2'];
	$city=$row['city'];
	$state=$row['state'];
	
}
if(isset($_POST['change'])){
	//echo "select * from customer where cust_id='".$_SESSION['id']."'";
	$qury=mysqli_query($con,"select * from customer where cust_id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($qury);
	
	 if($_POST['cpwd']==$row['password']){
			//echo "ok";	 
			if($_POST['rpwd']==$_POST['npwd']){
				echo "ok";
			  $qury=mysqli_query($con,"update customer set password='".$_POST['npwd']."' where cust_id='".$_SESSION['id']."'");
				
			  
			  
			}else{
			  $msg="repeat new password correctly";
		 
		 }
	 }else{
		 $msg="enter old password correctly";
	 }
 }
?>


<html>
<head>
<style>
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
body {
	 background: whitesmoke;
	 font-family: 'Open Sans', sans-serif;
}
 .container {
	 max-width: 960px;
	 margin: 30px auto;
	 padding: 20px;
}
 h1 {
	 font-size: 20px;
	 text-align: center;
	 margin: 20px 0 20px;
}
 h1 small {
	 display: block;
	 font-size: 15px;
	 padding-top: 8px;
	 color: gray;
}
 .avatar-upload {
	 position: relative;
	 max-width: 205px;
	 margin: 50px auto;
}
 .avatar-upload .avatar-edit {
	 position: absolute;
	 right: 12px;
	 z-index: 1;
	 top: 10px;
}
 .avatar-upload .avatar-edit input {
	 display: none;
}
 .avatar-upload .avatar-edit input + label {
	 display: inline-block;
	 width: 34px;
	 height: 34px;
	 margin-bottom: 0;
	 border-radius: 100%;
	 background: #FFFFFF;
	 border: 1px solid transparent;
	 box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.12);
	 cursor: pointer;
	 font-weight: normal;
	 transition: all .2s ease-in-out;
}
 .avatar-upload .avatar-edit input + label:hover {
	 background: #f1f1f1;
	 border-color: #d6d6d6;
}
 .avatar-upload .avatar-edit input + label:after {
	 content: "\f040";
	 font-family: 'FontAwesome';

	 position: absolute;
	 top: 10px;
	 left: 0;
	 right: 0;
	 text-align: center;
	 margin: auto;
}
 .avatar-upload .avatar-preview {
	 width: 192px;
	 height: 192px;
	 position: relative;
	 border-radius: 100%;
	 border: 6px solid whitesmoke;

}
 .avatar-upload .avatar-preview > div {
	 width: 100%;
	 height: 100%;
	 border-radius: 100%;
	 background-size: cover;
	 background-repeat: no-repeat;
	 background-position: center;
}
	.error{
		color:red;
	}
</style>

</head>
<body>

<form method="POST" enctype="multipart/form-data">
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
		   <?php
			if(isset($_FILES["txtImage"]["name"]))
			  {
				if($_FILES["txtImage"]["name"]!="")
				{
					//echo "asd";die;
				  if($_FILES["txtImage"]["type"]=="image/png"||$_FILES["txtImage"]["type"]=="image/jpg"||$_FILES["txtImage"]["type"]=="image/jpeg")
				  {
					$imgVendor=date("Ymdhis").$_FILES["txtImage"]["name"];

					$selQuery="select * from customer where cust_id=".$_SESSION["id"];
					$selRes=mysqli_query($con,$selQuery);
					$selResArr=mysqli_fetch_array($selRes);

					if(file_exists("assets/img/".$selResArr["img"]))
					  unlink("assets/img/".$selResArr["img"]);

					$upQuery="update customer set img='".$imgVendor."' where cust_id=".$_SESSION["id"];
					mysqli_query($con,$upQuery);

					move_uploaded_file($_FILES["txtImage"]["tmp_name"],"assets/img/".$imgVendor);
					echo "<script>window.location='profile.php'</script>";
					// header('location:tutor_profile.php');
				  }
				  else
					echo "<script>alert('Profile Picture must be any one of types - png, jpg or jpeg');</script>";
				}
			  }
			  
			$queryImage="select * from customer where cust_id=".$_SESSION["id"];
			$resImage=mysqli_query($con,$queryImage);
			$resArrImage=mysqli_fetch_array($resImage);

			if($resArrImage["img"]=="")
			  $imgVendorSet="guest-user.jpg";
			else
			  $imgVendorSet=$resArrImage["img"];
           ?>	
		   
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex flex-column align-items-center text-center">
				  <?php $qury=mysqli_query($con,"select * from customer where cust_id='".$_SESSION['id']."'");
							$row=mysqli_fetch_assoc($qury);
				?>
					 
						
	
				<div class="avatar-upload">
				<?php //if(isset($_GET['upe_id'])){ ?>
				
					 <div class="avatar-edit">
					
						<input type='file'  id="imageUpload" name="txtImage" accept=".png, .jpg, .jpeg" onchange="submit();">
						<label for="imageUpload"></	label>
					 </div>
				
					 <div class="avatar-preview">
						<div id="imagePreview" style="background-image: url(assets/img/<?php echo $imgVendorSet;?>);">
						</div>
					</div>
					<?php //}else{	
					?>
					
					<?php //} ?>
				</div>
				
		
                    <div class="mt-3">
                      <h4><?php echo $row['cust_name']?></h4>
                      <p class="text-secondary mb-1"><?php echo $row['email']?></p>
                     </div>	
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                 
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                  <a href="myorder.php">My Order</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
							<?php if(isset($_GET['upe_id'])){ ?>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="cust_name" value="<?php echo $name?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <input type="email" name="email" value="<?php echo $email?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <input type="text" name="num" value="<?php echo $number?>">
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address line 1</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="add1" value="<?php echo $add?>">
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address line 2</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                 <input type="text" name="add2" value="<?php echo $add2?>">
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">city</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <input type="text" name="city" value="<?php echo $city?>">
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">state</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <input type="text" name="state" value="<?php echo $state?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                     <?Php if(!empty($_GET['upe_id'])){?>
                      <a class="btn btn-info " target="__blank" href="?upe_id=<?php echo $row['cust_id']?>" hidden>Edit</a>
					   <?php }else{?>
						    <a class="btn btn-info " target="__blank" href="?upe_id=<?php echo $row['cust_id']?>">Edit</a>
					   <?php }?>
                         <?Php if(empty($_GET['upe_id'])){?>
                      <input type="submit" class="btn btn-info" name="submit" value="save" hidden>
					  <?php }else{?>
					  <input type="submit" class="btn btn-info" name="submit" value="save" >
					   <?php }?>
                    </div>
                  </div>
							<?php }else{ ?>
								 <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                  <?php echo $row['cust_name']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $row['email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['contactno']?>
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address line 1</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['address1']?>
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address line 2</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['address2']?>
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">city</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['city']?>
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">state</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['state']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                       <a class="btn btn-info " target="__blank" href="?upe_id=<?php echo $row['cust_id']?>" >Edit</a>
                    </div>
                  </div>
							<?php } ?>
                </div>
              </div>

              <div class="row gutters-sm">
               
               
                  <div class="card h-100">
			<div class="card-body">
		
		    
		    <?php  ?>
			
		    <div class="form-group pass_show"> 
                <input type="password"  class="form-control" placeholder="current Password" name="cpwd"> 
            </div> 
		     
            <div class="form-group pass_show"> 
                <input type="password"  class="form-control" id="txtNewPassword" placeholder="New Password" name="npwd"> 
            </div> 
		  
            <div class="form-group pass_show"> 
                <input type="password"  class="form-control" id="confirmPassword" placeholder="Repat Password" name="rpwd"> 
            </div> 
			 <div class="form-group pass_show"> 
                <input class="btn btn-info " type="submit" name="change"> 
				<div style="color:red" class=""><?php echo $msg;?></div>
            </div> 
            

	
                  </div>
                  </div>
              
              </div>



            </div>
          </div>

        </div>
    </div>
	</form>
		  		<script type="text/javascript" src="assets/js/min.js"></script>
			  	<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
	</script>
	 <script>
   /*  function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    }); */
    </script>
	</body>
</html>