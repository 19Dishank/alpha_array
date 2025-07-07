<!DOCTYPE html>

<?php
session_start();
 require_once("connection.php");

 ?> 
<!-- beautify ignore:start -->
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!--  auth-two-steps-basic       , Wed, 09 Feb 2022 09:14:40 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Verification Page | <?php echo $title;?></title>
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
<link rel="stylesheet" href="assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<style>
  
  .wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
 background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0,0,0,0.75)),url(16264059_rm314-adj-11.jpg);
  //background: url("images/twocars.jpg") no-repeat center center;
  background-size: cover; }

  
</style>
<body class="wrapper">

<?php
 if(isset($_POST['sbtn']))
 {  
  //echo "sds";die;
    $code=$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'].$_POST['e'].$_POST['f'];
    $qry="select * from otp_status_tbl where otp='".$code."'";
      //echo $qry;die;
     $result=mysqli_query($conn,$qry);
     $data=mysqli_fetch_array($result);
    //echo "<pre>";
     //print_r($data);die;
     if(mysqli_num_rows($result)>0)
     {
        //echo "hii";die;
        if(time()-$data['create_at']<100)
        {
          //echo "hii";die;
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
        //echo "safasf";die;
        ?>
        <script>
                swal({
                title: "OOPS!",
                text: "Invalid OTP",
                icon: "error",
                //button: "Aww yiss!",
                });
            </script>
        <!-- echo "<script>alert('InValid OTP');</script>"; -->
        <?php
     }
  }
?>
  <!-- Content -->

<div class="authentication-wrapper authentication-basic px-4">
  <div class="authentication-inner py-4">
    <!--  Two Steps Verification -->
    <div class="card" style="box-shadow: 0 0px 15px white;">
      <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center">
            <a href="index.php" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
              </span>
              <img src="images/Black.png" alt="" width="50%" style="margin-left: 50px;">
            </a>
          </div>
        <!-- /Logo -->
          <?php 
            $qry="select * from admin_tbl";
            $test=mysqli_query($conn,$qry);
            $result=mysqli_fetch_array($test);
          ?>
        <h4 class="mb-2">Enter Verification Code</h4>
        <p class="text-start mb-4">
          We sent a verification code to your mail.Enter the code from the email in the field below.
        <!--  <span class="fw-bold d-block mt-2"><?php echo $result['admin_email'] ?></span> -->
        </p>
        <p class="mb-0 fw-semibold">Type your 6 digit security code</p>
        <form id="twoStepsForm" method="POST" class="mb-2">
          <div class="mb-3">
            <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus name="a">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="b">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="c">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="d">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="e">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="f">
            </div>
            <!-- Create a hidden field which is combined by 3 fields above -->
            <input type="hidden" name="otp" />
          </div>
          <button type="submit" name="sbtn" class="btn btn-primary d-grid w-100 mb-3" style="color: #5a8dee;background-color: #ffffff; border-color: #5a8dee;">
            Verify my account
          </button>

<!-- <button type="submit" name="sbtn" class="btn btn-primary glow position-relative w-100">SEND CODE<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>   -->

          <div class="text-center">Didn't get the code?
            <a href="resend_otp.php">
              Resend
            </a>
            <div class="timer" id="<?php if(isset($_POST["sbtn"])){ echo ''; } else{ echo 'hidetimer';}?>">
              <time id="countdown">2:00</time>
          </div>
          </div>
        </form>
        <script type="text/javascript">

          /*timer*/

                var seconds = 120;
                function secondPassed() {
                    var minutes = Math.round((seconds - 30)/60),
                        remainingSeconds = seconds % 60;

                    if (remainingSeconds < 10) {
                        remainingSeconds = "0" + remainingSeconds;
                    }

                    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
                    if (seconds == 0) {
                        clearInterval(countdownTimer);
                       //form1 is your form name
                      //document.form1.submit();
                      document.getElementById('countdown').innerHTML='';
                    } else {
                        seconds--;
                    }
                }
                var countdownTimer = setInterval('secondPassed()', 1000);

          </script>
      </div>
      </div>
    </div>
    <!-- / Two Steps Verification -->
  </div>
</div>

<!-- / Content -->

  
  
  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/pages-auth.js"></script>

<script src="assets/js/pages-auth-two-steps.js"></script>

</body>


<!--  auth-two-steps-basic       , Wed, 09 Feb 2022 09:14:40 GMT -->
</html>
