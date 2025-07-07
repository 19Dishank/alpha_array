<!doctype html>
<?php
session_start();
require_once('connect.php');

?>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/icon.png">

    
   
  

    <meta charset="utf-8">
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Recover Password</title>
    <style type="text/css">
     .login{
  display:flex;
  align-items: center;
  justify-content: center;
  padding-top:1rem;
}
  </style>

</head>
<body class="bg-white">

<?php
    if(isset($_POST['sbtn']))
    {
    
    if ($_POST['pwd']==$_POST['cpwd'])  
    {
    $mail=$_SESSION['mail'];
    $str="update user_tbl set user_password= '".$_POST['cpwd']."' where user_email='".$mail."'";
    mysqli_query($cnn,$str);
   // die;
     ?>
        <script>
        swal({
              title: 'Good Job',
              text: 'Your Password is successfully reset..',
              icon: "success",
            }).then(function() {
                window.location.href = "logout.php";
            })
    </script>
    <?php

  }
  else
     {
        ?>
        <script>
                swal({
                title: "OOPS!",
                text: "Password Did Not Match",
                icon: "error",
                //button: "Aww yiss!",
                });
            </script>
        <!-- echo "<script>alert('InValid OTP');</script>"; -->
        <?php
     }
 }
?>



    

    <!-- RECOVER ================================================== -->
    <div class="wrapper" style=" background-image: linear-gradient(rgba(134, 133, 133, 0.75),rgba(0,0,0,0.75)),url(4028065.jpg);">
			<div class="inner">
				<div class="image-holder">
					<img src="tqji_332m_141002.jpg" alt=""> 
          
				</div>
				<form id="custom_val"  method="POST">
					<h3>Set password</h3>
					
					<div style="padding-top:5rem;">
					
          <div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control"  id="password" name="pwd">
                        
						<i class="zmdi zmdi-lock"></i>
					</div>
          <div class="form-wrapper">
						<input type="password" id="confirm-password" name="cpwd" placeholder="Confirm Password" class="form-control" >
                        
						<i class="zmdi zmdi-lock"></i>
					</div>
          
					
					
					<button type="submit" name="sbtn">Set Password
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
         <div>
				</form>
        
			</div>
            <br>
            
            <center><a href="index.php">Back To Home</a></center>
            <center><a href="login.php">Remember your password? </a></center>
           
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

<script>
      $('#custom_val').validate({
        rules: {
          pwd: 'required',
          cpwd: 'required',
      },
      messages: {
         pwd: "Password is Required",
         cpwd: "Confirm Password is Required",
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Please Enter Email Name in Characters Only"); 
     
    </script>

</body>
</html>
