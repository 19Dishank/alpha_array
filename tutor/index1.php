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
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="./de3.png">

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
      body {
      font-family:Times new roman;
        font-size: 130%;
        font-weight:bold;
        background-opacity:0.6;
        background: url(New1.jpg)no-repeat center;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;


      
    }
    .form-label {
    font-size: medium;
  }


    .card{
        box-shadow: -1px 4px 28px 0px rgb(242 242 243);
    background: rgba(254, 254, 254, 0.52);
    color: black;
    font-weight: 700;
    background-color: transparent;
    width: 425px;
  }
  input, select, textarea{
    color: #ff0000 !important;
}

  </style>
</head>

<body>

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
          $diff=$date-time();//time returns current time in seconds
          $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
          $hours=round(($diff-$days*60*60*24)/(60*60));
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
    <div>

      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="dashboard.php" class="app-brand-link gap-2">
              <!-- <span class="app-brand-logo demo">
                <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>icon</title>
                  <defs>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                    <stop stop-color="#5A8DEE" offset="0%"></stop>
                    <stop stop-color="#699AF9" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                    <stop stop-color="#FDAC41" offset="0%"></stop>
                    <stop stop-color="#E38100" offset="100%"></stop>
                    </linearGradient>
                  </defs>
                  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                      <g id="Login" transform="translate(519.000000, 244.000000)">
                        <g id="Logo" transform="translate(148.000000, 42.000000)">
                          <g id="icon" transform="translate(0.000000, 4.000000)">
                            <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
                            <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span> -->
                <!-- <img src="./Dreamedu2.png" style="height: 63px;width: 200px;"> -->
              
              <!-- <span class="app-brand-text demo h3 mb-0 fw-bold">AlphaArray</span> -->
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2" style="text-align: center;font-weight: 700;color: #c9be9e;" >Welcome to AlphaArray! 👋</h4>
          <p class="mb-4" style="text-align: center;font-weight: 700;color: white;">Please sign-in to your account.</p>

          <form id="custom_val"  class="mb-3" method="POST" autocomplete="off">
            <div class="mb-3">
              <label for="email" class="form-label" style="text-align: center;font-weight: 700;color: #c9be9e;">Email or Username</label>
              <input type="text" class="form-control" name="mail" autofocus>
            </div>
             <div class="mb-3">
              <label for="email" class="form-label" style="text-align: center;font-weight: 700;color: #c9be9e;">Password</label>
            <input type="password" id="password" class="form-control" name="password"  aria-describedby="password" />
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password"></label>
                <a href="forgot_password.php">
                  <small style="font-weight: 700; color: white;"><u>Forget Password?</u></small>
                </a>
              </div>
             
            </div>
           <!--  <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div>
            </div> -->
            <div class="mb-3">
              <button type="submit" name="sub" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>

          <p class="text-center">
            <span style="font-weight: 700; color: #c9be9e;">New on our platform?</span> <br>
            <a href="registration.php">
              <span style="font-weight: 700; color: white;"><u>Create an account</u></span>
            </a>
          </p>

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
