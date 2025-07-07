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

    <!-- Font -->
   
    <!-- Libs CSS -->
    

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <script src="assets/js/config.js"></script>
<!-- STYLE CSS -->
<link rel="stylesheet" href="css/style.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/tutor/css/pages/pages-auth.css">
    <script src="assets/tutor/js/helpers.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Recover Password</title>
    <style type="text/css">
       .numeral-mask{
        height: 45px;
    width: 45px;
       }
       .a{
        display:flex;
        column-gap:10px ;
        
        text-align-last: center;
        font-size:30px;
       }
       input, textarea, select, .button{
        font-size:30px; !important;
       }
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
    $code=$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'].$_POST['e'].$_POST['f'];
    $qry="select * from otp_status_tbl where otp='".$code."'";
    //echo $qry;die;
     $result=mysqli_query($cnn,$qry);
     $data=mysqli_fetch_array($result);
     // echo "<pre>";
     // print_r($data);die;
     if(mysqli_num_rows($result)>0)
     {
        //echo "hii";
        if(time()-$data['create_at']<100)
        {
         header("location:set_password.php");
        }
        else
        {
        ?>
            <!-- echo "<script>alert('Session/OTP Expire');</script>"; -->
            <script>
                swal({
                title: "OOPS!",
                text: "Session/OTP Expire",
                icon: "error",
                //button: "Aww yiss!",
                });
            </script>
            <?php 
        }
     }
     else
     {
        ?>
        <script>
                swal({
                title: "OOPS!",
                text: "InValid OTP",
                icon: "error",
                //button: "Aww yiss!",
                });
            </script>
        <!-- echo "<script>alert('InValid OTP');</script>"; -->
        <?php
     }
 }
?>



    <!-- PAGE TITLE
    ================================================== -->
    


    <!-- RECOVER
    ================================================== -->
    <div class="wrapper" style=" background-image: linear-gradient(rgba(134, 133, 133, 0.75),rgba(0,0,0,0.75)),url(4028065.jpg);">
			<div class="inner">
				<div class="image-holder">
					<img src="tqji_332m_141002.jpg" alt=""> 
          
				</div>
				<form   method="POST">
					<h3>Verify OTP</h3>
					
					<div style="padding-top:5rem;">
					
          <div class="form-wrapper a auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
              <input type="text" class="inputs auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus name="a">
              <input type="text" class="inputs auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="b">
              <input type="text" class="inputs auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="c">
              <input type="text" class="inputs auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="d">
              <input type="text" class="inputs auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="e">
              <input type="text" class="inputs auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="f">	
            </div>
                    <input type="hidden" name="otp" />
          
					
					
					<button type="submit" name="sbtn">Verify
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
         <div>
				</form>
        
			</div>
            <br>
            <center><a href="login.php">Remember Password?</a></center>
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
    <script src="tutor/assets/vendor/libs/cleavejs/cleave.js"></script>
    <!-- Page JS -->
    <script src="tutor/assets/js/pages-auth.js"></script>

    <script src="tutor/assets/js/pages-auth-two-steps.js"></script>

</body>
</html>
