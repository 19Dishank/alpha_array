<!DOCTYPE html>

<?php
session_start();
 require_once("connect.php");
 // if(isset($_SESSION['tmail']))
 // {
 //  header('location:dashboard.php');
 //  }
 ?>
<!-- beautify ignore:start -->
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!--  auth-two-steps-basic       , Wed, 09 Feb 2022 09:14:40 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Forgot Password | <?php echo $title;?></title>
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
     <link rel="stylesheet" href="style1.css" />
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
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style type="text/css">
     
    .form-label {
    font-size: medium;
  }


    .card{
    box-shadow: -1px 4px 28px 0px rgb(242 242 243);
    background-color:white; 
	//rgba(254, 254, 254, 0.52);
    font-weight: 700;
    background-color: #1D3557;
    width: 425px;
  }
  
.form-holder {
  position: relative;
  margin-bottom: 21px;
  }
  .form-holder span {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    font-size: 15px;
    color: #333;
	}
    .form-holder span.lnr-lock {
      left: 2px; 
	  }
.form-control {
  border: none;
  border-bottom: 1px solid #e6e6e6;
  display: block;
  width: 100%;
  height: 38px;
 
  padding: 0px 42px 0px;
  color: #666;
  font-family: "Rubik";
  font-size: 16px; 
  }
  .form-control::-webkit-input-placeholder {
    font-size: 14px;
    font-family: "Rubik";
    color: grey;
    transform: translateY(1px); 
	}
  .form-control::-moz-placeholder {
    font-size: 14px;
    font-family: "Rubik";
    color: grey;
    transform: translateY(1px);
	}
  .form-control:-ms-input-placeholder {
    font-size: 14px;
    font-family: "Rubik";
    color: grey;
    transform: translateY(1px); 
	}
  .form-control:-moz-placeholder {
    font-size: 14px;
    color: grey;
    font-family: "Rubik";
    transform: translateY(1px); 
	}
  .form-control:focus {
    border-bottom: 1px solid #accffe; 
	}
.image-1 {
	position: absolute;
	bottom: -12px;
	left: -191px;
	z-index: 99;
}
.image-2 {
	position: absolute;
	bottom: 0;
	right: -129px;
}


  </style>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body style=" min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #accffe;">

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
          //header("location:set_password.php");
          //exit();
          ?>
           <script>
             window.location.href='set_password.php'; 
            </script>
        <?php }
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
  <!-- Content -->

  <div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
   <img src="image-1.png" alt="" class="">
    <div>
      <!-- Forgot Password -->
      <div class="card" style="">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.php" class="app-brand-link gap-2">
             
            <?php 
            $qry="select * from tutor_tbl";
            $test=mysqli_query($cnn,$qry);
            $result=mysqli_fetch_array($test);
          ?>  
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2" style="text-align: center;font-weight: 700;color:white;">Enter Verification Code</h4>
          <p class="mb-4" style="text-align: center;font-weight: 700;color:white;"> We sent a verification code to your mail.Enter the code from the email in the field below.</p>
          <p class="mb-0 fw-semibold" style="font-weight: 700;color: white;">Type your 6 digit security code</p>
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
          <button type="submit" name="sbtn" class="btn btn-primary d-grid w-100 mb-3">
            Verify my account
          </button>

          <div class="text-center" style="font-weight: 700;color: white;">Didn't get the code?
            <a href="resend_otp.php">
              <u>Resend</u>
            </a>
            <div class="timer" id="<?php if(isset($_POST["sbtn"])){ echo ''; } else{ echo 'hidetimer';}?>">
              <time id="countdown">2:00</time>
          </div>
          </div>
        </form>
          <div class="text-center">
            <a href="index.php" class="d-flex align-items-center justify-content-center" style="text-align: center;font-weight: 700;">
              <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
              <u>Back to login</u>
            </a>
          </div>
        </div>
      </div>
	  	
      <!-- /Forgot Password -->
    </div><img src="image-2.png" alt="" class="">
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

    <script>
      $('#custom_val').validate({
        rules: {
          pwd: 'required',
          cpwd: 'required',

        //   mail: {
        //     required: true,
        //   minlength: 3,
        //   lettersonly: true 
        // },
      },
      messages: {
         pwd: "Enter New Password",
         cpwd: "Enter Confirm Password"
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


<!--  auth-two-steps-basic       , Wed, 09 Feb 2022 09:14:40 GMT -->
</html>
