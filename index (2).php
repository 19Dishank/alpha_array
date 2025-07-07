<!DOCTYPE html>
<?php  

session_start();
require_once('connect.php');
 if(isset($_SESSION['tmail']))
 {
  header('location:dashboard.php');
  }
?>
<!-- beautify ignore:start -->
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!--  auth-login-basic       , Wed, 09 Feb 2022 09:14:36 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Page | <?php echo $title;?></title>
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
  <link rel="stylesheet" href="style1.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./de3.png">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--<link rel="stylesheet" href="css/style.css"> -->
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
</head>

<body style=" min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #accffe;">

  <?php
    if(isset($_POST['sub']))
    {
      $email=$_POST['mail'];
      $email=$_POST['mail'];
      $str="select * from tutor_tbl where (tutor_email='".$_POST['mail']."' or 
      tutor_contact='".$_POST['mail']."')
      and tutor_password='".md5($_POST['password'])."' and tutor_status='1'";
      //echo $str;die;
      $result=mysqli_query($cnn,$str);
      $row=mysqli_fetch_array($result);
      if(mysqli_num_rows($result)>0)
      {
          //echo $str;die;
          $_SESSION['tid']=$row['tutor_id'];
          $_SESSION['tmail']=$row['tutor_email'];
          $_SESSION['tname']=$row['tutor_name'];
		      $_SESSION['prof_doc']=$row['tutor_image'];
		  //echo "<pre>";
		  //print_r($_SESSION);die;
          //$_SESSION['img']=$row['tutor_image'];
          //echo $_SESSION['tid'];die;
          #check tutor package is expiry or not
          $qry_pack="select * from tutor_tbl,package_detail_tbl,package_tbl where package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."' order by package_detail_tbl.package_detail_id desc";
           //echo $qry_pack;die;
          $test_pack=mysqli_query($cnn,$qry_pack);
          $result_pack=mysqli_fetch_array($test_pack);
          $count_pack=mysqli_num_rows($test_pack);
          if(isset($result_pack['package_exp_date']))
          {
              $datestr=$result_pack['package_exp_date'];//Your date
              $date=strtotime($datestr);//Converted to a PHP date (a second count)
          }
		

          //Calculate difference
          $diff=time();//time returns current time in seconds
          $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
          $hours=round(($diff-$days*60*60*24)/(60*60));
          // /die;
         // echo $days."<br>";
         // echo $count_pack;
          if($days>0 && $count_pack>0)
          {
            // echo $qry_pack;die;
            // header('location:dashboard.php');
			
            echo '<script>';
            echo 'location.reload();';
            echo 'window.location.href("dashboard.php")';
            echo '</script>';

          }
          else
          {
            // echo $qry_pack;die;
            
            $_SESSION['expiry_package']="expiry";
            // header('location:billing.php');
            echo '<script>';
           // echo 'location.reload();';
            echo 'window.location.href("billing.php")';
            echo '</script>';
          }
          // echo $qry_pack;die;
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

<!-- Content -->

<div class="container-xxl">

  <div class="authentication-wrapper authentication-basic container-p-y">
  <img src="image-1.png" alt="" class="">
    <div>

      <!-- Register -->
	  
      <div class="card" >
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="dashboard.php" class="app-brand-link gap-2">
              
            </a>
			
          </div>
          <!-- /Logo -->
          <h4 class="mb-2" style="text-align: center;font-weight: 700; color:white;" >Welcome to AlphaArray! 👋</h4>
          <p class="mb-4" style="text-align: center;font-weight: 700;color: white;">Please sign-in to your account.</p>

          <form id="custom_val"  class="mb-3" method="POST" autocomplete="off" >
            <div class="mb-3 form-holder">
              <span class="fa-solid fa-envelope" style="margin-left: 15px;"></span>
              <input type="text" class="form-control" name="mail" autofocus placeholder="E-Mail">
            </div>						
             <div class="mb-3 form-holder">
              <span class="fa-solid fa-lock" style="margin-left: 15px;"></span>
            <input type="password" id="password" class="form-control" name="password"  aria-describedby="password"  placeholder="Password"> <style>
			
			</style>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password"></label>
                <a href="forgot_password.php">
                  <small ><u>Forget Password?</u></small>
                </a>
              </div>
             
            </div>
          
            <div class="mb-3">
              <button type="submit" name="sub" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>

          <p class="text-center">
            <span style="font-weight: 700; color:white;">New on our platform?</span> <br>
            <a href="registration.php">
              <span ><u>Create an account</u></span>
            </a>
          </p>

         
        </div>
      </div>
      <!-- /Register -->
    </div>
	<img src="image-2.png" alt="" class="">
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
         swal({
      title: "OOPS!",
      text: "Enter E-mail Or Password!",
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


<!--  auth-login-basic       , Wed, 09 Feb 2022 09:14:36 GMT -->
</html>
