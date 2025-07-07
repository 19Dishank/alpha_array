<!doctype html> 
<?php
session_start();
 require_once("connect.php");
 //  if(!isset($_SESSION['umail']))
 // {
 //  header('location:login.php');
 //  }
if(isset($_POST['sbtn']))
{
    move_uploaded_file($_FILES['profile']['tmp_name'],"images/".$_FILES['profile']['name']);
    $image=$_FILES['profile']['name'];
    $user_status=1;
    $register_date=date("Y-m-d H:i:s");
    $str="insert into user_tbl values(NUll,'".$_POST['fname']."','".$image."','".$_POST['email']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['gender']."','".$_POST['pincode']."','".$register_date."','".$user_status."')";
    //echo $str;die;
    $register_success=mysqli_query($cnn,$str);
   
    ?>
   <script>
    swal({
      title: 'Good Job',
      text: 'Register success',
      icon: "success",
    }).then(function() {
        window.location.href = "login.php";
    })
    </script>
    <?php  
     header('location:login.php');
}
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="shortcut icon" href="images/icon.png">
   
  

    <meta charset="utf-8">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">

 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Registration</title>
    <style type="text/css">
      
      .custum-file-upload {
  height: 50px;
  
  display: flex;
  flex-direction: column;
  align-items: space-between;
  gap: 20px;
  cursor: pointer;
  
  justify-content: center;
  border: 2px dashed #cacaca;
  background-color: rgba(255, 255, 255, 1);
  padding:0.5rem;
  padding-top:0.5rem;
  border-radius: 10px;
  box-shadow: 0px 48px 35px -48px rgba(0,0,0,0.1);
}

.custum-file-upload .icon {
  display: flex;
  align-items: center;
  justify-content: center;

}

.custum-file-upload .icon svg {
  height: 30px;
  fill: rgba(75, 85, 99, 1);
}

.custum-file-upload .text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .text span {
  font-weight: 400;
  color: rgba(75, 85, 99, 1);
}

.custum-file-upload input {
  display: none;
}

.login{
  display:flex;
  align-items: center;
  justify-content: center;
  padding-top:3.5rem;
}
img {
  max-width: 100%; 
    padding-top:7rem;
}
  </style>

</head>
<body class="bg-white">
    <!-- PAGE TITLE
    ================================================== -->
   

    <div class="wrapper" style=" background-image: linear-gradient(rgba(134, 133, 133, 0.75),rgba(0,0,0,0.75)),url(4028065.jpg);">
			<div class="inner">
				<div class="image-holder">
					<img src="tqji_332m_141002.jpg" alt=""> <!-- login code -->
          <div class="login">
          Already Registered? &nbsp;<a href="login.php">login</a>
          </div>
				</div>
				<form id="custom_val" name="checkout" method="POST" enctype="multipart/form-data">
					<h3>Registration Form</h3>
					<div class="form-wrapper">
						<input type="text" placeholder="Full Name" class="form-control" name="fname">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						
						<label class="custum-file-upload" for="file">
<div class="icon"> <span style="color:#333;">Upload Your Photo </span>
<svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
</div>

   <input type="file" id="file" class="" name="profile">
</label>
<br>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
          <div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
          <div class="form-wrapper">
						<input type="text" placeholder="Contact Number" class="form-control" name="phone">
						<i class="zmdi zmdi-phone"></i>
					</div>
          
         
          <div class="form-wrapper">
            <textarea  placeholder="Address" class="form-control" name="address"></textarea>
						<i class="zmdi zmdi-home"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" class="form-control" >
							<option value="" disabled selected>Gender</option>
							<option value="1">Male</option>
							<option value="0">Female</option>
							<option value="2">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					
          <div class="form-wrapper">
						<input type="Text" placeholder="Pincode" class="form-control" name="pincode">
						<i class="zmdi zmdi-pin"></i>
					</div>
					<button type="submit" name="sbtn">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
         
				</form>
        
			</div>
		</div>
    

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="./assets/libs/aos/dist/aos.js"></script>
    <script src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="./assets/libs/countup.js/dist/countUp.min.js"></script>
    <script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="./assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="./assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="./assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="./assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax-video.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax-element.min.js"></script>
    <script src="./assets/libs/parallax-js/dist/parallax.min.js"></script>
    <script src="./assets/libs/quill/dist/quill.min.js"></script>
    <script src="./assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="./assets/libs/typed.js/lib/typed.min.js"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
  

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>

<!-- <script>
      $('#custom_val').validate({
        rules: {
          fname: 'required',
          email: 'required',
          password: 'required',
      },
      messages: {
         fname: "User Name is Required",
         email: "Email id is Required",
         password: "Password is Required",
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Please Enter Email Name in Characters Only"); 
     
    </script>
 -->

 <script>
      $('#custom_val').validate({
        rules: {

          fname:{
            required: true,
            minlength:3,
            lettersonly: true,
          },
          profile:{
            required: true,
          },
          email:{
            required: true,
          },
          password:{
            required: true,
            minlength:3,
          },
          phone:{
            required: true,
            minlength:10,
          },
          address:{
            required: true,
            minlength:3,
            
          },
           pincode:{
            required: true,
            minlength:3,
          },
        
      },
      messages: {
        
          fname: {
            required:"<span>Name is Required</span>",

          },
          profile: {
            required:"Image is Required",

          },
          email: {
            required:"Email is Required",
          },
          password: {
            required: "Password is Required",
          },
          phone: {
            required:"Phone Number is Required",
          },
          address: {
            required:"Address is Required",
          },
          pincode: {
            required:"Pincode is Required",
          },
        
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
      }, "Please Enter Email Name in Characters Only"); 
     
    </script>
</body>
</html>
