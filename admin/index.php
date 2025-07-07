<!DOCTYPE html>
<?php

session_start();
include_once('connection.php');
 if(isset($_SESSION['mail']))
 {
  //header('location:dashboard.php');
  }
?>
<!-- beautify ignore:start -->
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!--  auth-login-basic, Wed, 09 Feb 2022 09:14:36 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Page | <?php echo $title;?></title>
    
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
   if(isset($_POST['sub']))
{
        
  $str="select * from admin_tbl where admin_email='".$_POST['mail']."' and admin_password='".$_POST['password']."'";
  //echo $str;die;
  $result=mysqli_query($conn,$str);
  $row=mysqli_fetch_array($result);
  if(mysqli_num_rows($result)>0)
  {
      $_SESSION['id']=$row['admin_id'];
      $_SESSION['mail']=$row['admin_email'];
      $_SESSION['name']=$row['admin_name'];
      $_SESSION['password']=$row['admin_password'];
      header('location:dashboard.php');
  }
  else
  {
?>
    <script>
        swal({
        title: "OOPS!",
        text: "Incorrect mail or Password!!!",
        icon: "error",
        //button: "Aww yiss!",
        });
    </script>
<?php } } ?>

<!-- Content -->
<style>
  
  .wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
 background-image: linear-gradient(rgba(0, 0, 0, 0.75),rgba(0,0,0,0.75)),url(16264059_rm314-adj-11.jpg);
  //background: url("images/twocars.jpg") no-repeat center center;
  background-size: cover; }

  
</style>
<div class="container-xxl ">
  <div class="authentication-wrapper authentication-basic ">
    <div class="authentication-inner ">

      <!-- Register -->
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
          
         <center> <p class="mb-4"> Sign-in to your account</p></center>

          <form id="custom_val"  class="mb-3" method="POST" autocomplete="off">
            <div class="mb-3">
              <label for="email" class="form-label">Email or Username</label>
              <input type="email" class="form-control" name="mail" placeholder="Enter your email or username" autofocus style="border-bottom: groove;border-top: none;border-left: none;border-right: none;">
            </div>
             <div class="mb-3">
              <label for="email" class="form-label">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" style="border-bottom: groove;border-top: none;border-left: none;border-right: none;" aria-describedby="password" />
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password"></label>
                <a href="forgot_password.php">
                  <small>Forget Password?</small>
                </a>
              </div>
             
            </div>
            
            <div class="mb-3">
              <button type="submit" name="sub" class="btn btn-primary d-grid w-100" type="submit" style="color: #5a8dee;background-color: #ffffff; border-color: #5a8dee;">Sign in</button>
            </div>
          </form>

         

          <!-- <div class="divider my-4">
            <div class="divider-text">or</div>
          </div>

          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
              <i class="tf-icons bx bxl-facebook"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
              <i class="tf-icons bx bxl-google-plus"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-label-twitter">
              <i class="tf-icons bx bxl-twitter"></i>
            </a>
          </div> -->
        </div>
      </div>
      <!-- /Register -->
    </div>
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

      <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
 

  <!-- Main JS -->

  <!-- Page JS -->
  
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
         mail: "Email id is Required",
         password: "Password is Required"
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


<!--  auth-login-basic       , Wed, 09 Feb 2022 09:14:36 GMT -->
</html>
