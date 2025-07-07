<!DOCTYPE html>
<?php
 session_start();
 require_once("connection.php");
 // if(!isset($_SESSION['mail']))
 // {
 //  header('location:index.php');
 //  }


  $ig=''; 
?>

<!-- beautify ignore:start -->
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Registration Page</title>
    
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


    <!-- Vendor -->
<link rel="stylesheet" href="assets/vendor/libs/bs-stepper/bs-stepper.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
<link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />


    <!-- Page CSS -->
    
<!-- Page -->
<link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>


</head>

<body>

  <!-- Content -->

<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">

    <!-- Left Text -->
    <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
      <div class="w-px-400">
        <img src="assets/img/illustrations/create-account-light.png" class="img-fluid scaleX-n1-rtl" alt="multi-steps" width="600" data-app-light-img="illustrations/create-account-light.png" data-app-dark-img="illustrations/create-account-dark.png">
      </div>
    </div>
    <!-- /Left Text -->

    <!--  Multi Steps Registration -->
    <div class="d-flex col-lg-8 authentication-bg p-sm-5 p-3">
      <div class="d-flex flex-column w-px-700 mx-auto">
        <!-- Logo -->
        <div class="app-brand border-bottom mx-3 mb-4">
          <a href="index.html" class="app-brand-link gap-2 mb-3">
            <span class="app-brand-logo demo">
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

    </span>
                <span class="app-brand-text demo h3 mb-0 fw-bold">AlphaArray</span>
              </a>
            </div>
            <!-- /Logo -->

            <div class="my-auto">
              <div id="multiStepsValidation" class="bs-stepper shadow-none">
                <div class="bs-stepper-header">
                  <div class="step" data-target="#accountDetailsValidation">
                    <button type="button" class="step-trigger">
                      <span class="bs-stepper-circle">
                        <i class="bx bx-home"></i>
                      </span>
                      <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Account</span>
                        <span class="bs-stepper-subtitle">Account Details</span>
                      </span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#personalInfoValidation">
                    <button type="button" class="step-trigger">
                      <span class="bs-stepper-circle">
                        <i class="bx bx-user"></i>
                      </span>
                      <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Personal</span>
                        <span class="bs-stepper-subtitle">Enter Information</span>
                      </span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step active" data-target="#billingLinksValidation">
                    <button type="button" class="step-trigger">
                      <span class="bs-stepper-circle">
                        <i class="bx bx-detail"></i>
                      </span>
                      <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Billing</span>
                        <span class="bs-stepper-subtitle">Payment Details</span>
                      </span>
                    </button>
                  </div>
                </div>
               
                <div class="bs-stepper-content pt-4">
                <?php 
                  if(isset($_GET['final_submit']))
                  {
                        echo "asdasdfsdfsdsd";
                        echo "<pre>";
                        
                  }
                ?>
                </div>
                    </div>
                  <form mtehod="POST" >
                  
                                    
                      
                    <!-- Billing Links -->
                    <div id="billingLinksValidation" class="content" active>
                      <div class="content-header mb-3">
                        <h4>Select Plan</h4>
                        <span>Select Plan As Per Your Requirement</span>
                      </div>
                      <!-- Custom plan options -->
                       <div class="row gap-md-0 gap-3 mb-4">
                        <?php 
                            $qry_package="select * from package_tbl";
                            //echo $qry;
                            $my_package=mysqli_query($cnn,$qry_package);
                            $no_of_pckgs=mysqli_num_rows($my_package);
                            while($row_package=mysqli_fetch_array($my_package)) {


                              ?>
                        <div class="col-md">
                          
                          <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="basicOption">
                              <span class="custom-option-body">
                                <span class="d-block h4"><?php echo $row_package['package_type'];?></span>
                                <small>A Simple Start For Start-Ups & Students</small>
                                <span class="d-flex justify-content-center">
                                  <sup class="text-primary fs-big lh-1 mt-4">₹</sup>
                                  <span class="display-5 h1 fw-normal mb-0 text-primary"><?php echo $row_package['package_price'];?></span>
                                  <span class="mt-auto mb-2">/month</span>
                                </span>
                              </span>
                              <input name="package_id" class="form-check-input" type="hidden" value="<?php echo $row_package['package_id'];?>" id="basicOption"  />
                              <input name="package_price" class="form-check-input" type="hidden" value="<?php echo $row_package['package_price'];?>" id="package_price"  />
                              <input name="package_duration" class="form-check-input" type="hidden" value="<?php echo $row_package['package_duration'];?>" id="package_duration"  />
                                 
                            </label>
                          </div>
                          <?php 
                            
                            $data=mysqli_query($cnn,"select * from tutor_tbl order by tutor_id desc limit 1");
                            $row=mysqli_fetch_array($data);
                            $tutor_id= isset($_SESSION['tid']) ? $_SESSION['tid'] : $row['tutor_id'];
                            $_SESSION['tid']=$tutor_id;
                            //$_SESSION['tid'];
                          ?>
                              <input type="hidden" name="user_id" value="<?php echo $row['user_id'];; ?>">
                            <a href="javascript:void(0)"  data-amount="<?php echo $row_package['package_price'];?>" data-id="<?php echo $row_package['package_id'];?>" type="Buy Now" class="buy_now btn btn-success btn-next btn-submit" name="final_submit">Buy Now </a>

                              
                          </div>
                        <?php } ?>
                      
                      </div>
                      <hr>
                        <span style="color: red;">*You Need to Add Professional Details After Registration For Displaying Your Profile On Frontend</span>
                      <hr>
                        <span style="color: red;">*You Can Add Your Professional Details From Backend</span>
                      <div class="row g-3">
                       
                        <div class="col-12 d-flex justify-content-between mt-4">
                          <a href="logout.php" class="btn btn-primary btn-next btn-submit">
                          
                            Log Out
                          </a>
                          <!-- <input type="submit" class="btn btn-success btn-next btn-submit" name="final_submit"> -->
                        </div>
                      </div>
                      <!--/ Credit Card Details -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Multi Steps Registration -->
      </div>
    </div>

    <script>
    // Check selected custom option
   
    </script>

<!-- / Content -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    alert(totalAmount);
    var package_id =  $(this).attr("data-id");
    //alert(product_id);
    var options = {
    "key": "rzp_test_TPaS0mhcHBSjSV",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "AlphaArray",
    "description": "Payment",
    "image": "../img/product/12347_ivana-squares.jpg",
    "handler": function (response){
        //  alert(response);
$.ajax({
    url: 'package_payment.php',
    type: 'post',
    //data: {cart:product_id},
    data: {
            razorpay_payment_id: response.razorpay_payment_id , 
            totalAmount : totalAmount ,
            package_id : package_id ,
            //product_id : product_id,
    }, 
success: function (msg) {
//window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
	<?php unset($_SESSION['expiry_package']);?>
  alert('Payment done successfully.');
  window.location.href = "dashboard.php";
}
});
},
"theme": {
"color": "#528FF0"
}
};
var rzp1 = new Razorpay(options);
rzp1.open();
e.preventDefault();
});
</script>  
  
  
  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  



  
 
 </body>


<!--  auth-register-multisteps       , Wed, 09 Feb 2022 09:14:38 GMT -->
</html>
