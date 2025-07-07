<!DOCTYPE html>
<?php
session_start();
 require_once("connection.php");
 // if(!isset($_SESSION['mail']))
 // {
 //  header('location:index.php');
 //  }
?>
<style>
  
  .wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
 background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0,0,0,0.75)),url(16264059_rm314-adj-11.jpg);
  //background: url("images/twocars.jpg") no-repeat center center;
  background-size: cover; }

  
</style>
<!-- beautify ignore:start -->
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!--  auth-reset-password-basic       , Wed, 09 Feb 2022 09:14:39 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Set Password | <?php echo $title;?></title>
    
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
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <!-- Custom notification for demo -->
      <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">

    <!-- beautify ignore:end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="wrapper">
<?php
    if(isset($_POST['sbtn']))
    {
    
    if ($_POST['pwd']==$_POST['cpwd'])  
    {
    $mail=$_SESSION['mail'];
    $str="update admin_tbl set admin_password= '".$_POST['cpwd']."' where admin_email='".$mail."'";
    //echo $str;die;
    mysqli_query($conn,$str);
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
  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-4">
      <!-- Reset Password -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.php" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
              </span>
              <img src="../Black.png" alt="" width="50%" style="margin-left: 50px;">
            </a>
          </div>
          <!-- /Logo -->
           <?php 
            $qry="select * from admin_tbl";
            $test=mysqli_query($conn,$qry);
            $result=mysqli_fetch_array($test);
          ?>
          <h4 class="mb-2">Reset Password</h4>
       <!--   <p class="mb-4">for <span class="fw-bold"><?php echo $result['admin_email'] ?></span></p> -->
          <form id="custom_val" class="mb-3" method="POST">
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">New Password</label>
                <input type="password" id="password" class="form-control" name="pwd" style="border-bottom: groove;border-top: none;border-left: none;border-right: none;" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" class="form-control" name="cpwd" style="border-bottom: groove;border-top: none;border-left: none;border-right: none;" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
            </div>
            <button type="submit" style="color: #5a8dee;background-color: #ffffff; border-color: #5a8dee;" name="sbtn" class="btn btn-primary glow position-relative w-100">Set New Password<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
<br><br>
            <div class="text-center">
              <a href="index.php">
                <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
                Back to login
              </a>
            </div>
          </form>
        </div>
      </div>
      <!-- /Reset Password -->
    </div>
  </div>
</div>

<!-- / Content -->

  
  
  

  <!-- Core JS -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

      <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

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


<!--  auth-reset-password-basic       , Wed, 09 Feb 2022 09:14:39 GMT -->
</html>
