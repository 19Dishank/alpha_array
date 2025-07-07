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
    <title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <style type="text/css">
      .login{
  display:flex;
  align-items: center;
  justify-content: center;
  padding-top:1rem;
}
.limg{
  padding-left: 5rem;
    width: 75%;
    margin-bottom: 18px ;
}
    </style>
</head>
<body>

<?php
    if(isset($_POST['sub']))
    {
      //echo "sddsad";die;
      $email=$_POST['mail'];
      $email=$_POST['mail'];
      $str="select * from user_tbl where (user_email='".$_POST['mail']."' or user_contact='".$_POST['mail']."') and user_password='".$_POST['password']."'";
      //echo $str;die;
      $result=mysqli_query($cnn,$str);
      $row=mysqli_fetch_array($result);
      if(mysqli_num_rows($result)>0)
      {
          $_SESSION['uid']=$row['user_id'];
          $_SESSION['umail']=$row['user_email'];
          $_SESSION['uname']=$row['user_name'];
          //header('location:index.php');
          ?>
          <script>
                        swal({
                              title: 'Good Job',
                              text: 'Login success',
                              icon: "success",
                            }).then(function() {
                                window.location.href = "index.php";
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
      text: "Incorrect Mail or Password!!!",
      icon: "warning",
      //button: "Aww yiss!",
      });
  </script>
  
<?php } } ?>

   


    <!-- LOGIN
    ================================================== -->
    <div class="wrapper" style=" background-image: linear-gradient(rgba(134, 133, 133, 0.75),rgba(0,0,0,0.75)),url(4028065.jpg);">
			<div class="inner">
				<div class="image-holder">
					<img src="tqji_332m_141002.jpg"  alt=""> 
          <div class="login">
          New here? &nbsp;<a href="register.php">Register</a>
          </div>
				</div>
				<form id="custom_val"  method="POST">
				<img src="images/Purple.png" alt="" class="limg">	
        
          <p class="mb-4" style="text-align: center;font-weight: 700;font-size: initial;">Please sign-in to your account.</p>

					
					<div style="padding-top:2rem;">
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address" class="form-control" name="mail">
                        
						<i class="zmdi zmdi-email"></i>
					</div>
          <div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
                        
						<i class="zmdi zmdi-lock"></i>
					</div>
          
					<span><a href="recover.php">Forgot Password?</a></span>
					
					<button type="submit" name="sub">Sign in
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
         <div>
				</form>
        
			</div>
            <br>
            <center><a href="">Login As Tutor?</a></center>
            <center><a href="index.php">Back To Home</a></center>
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

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>

      <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>

    <script>
      $('#custom_val').validate({
        rules: {
          mail: 'required',
          password: 'required',

        //   mail: {
        //     required: true,
        //   minlength: 3,
        //   lettersonly: true 
        // },
      },
      messages: {
        swal({
      title: "OOPS!",
      text: "Incorrect Mail or Password!!!",
      icon: "warning",
      //button: "Aww yiss!",
      });
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
