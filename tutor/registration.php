<!DOCTYPE html>
<?php
 session_start();
 require_once("connect.php");
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
    <link rel="canonical" href="https://1.envato.market/DreamEdu_admin">
    
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
<link rel="stylesheet" href="assets/vendor/libs/bs-stepper/bs-stepper.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
<link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
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
    <!-- beautify ignore:end -->

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
          <a href="index.php" class="app-brand-link gap-2 mb-3">
            <span class="app-brand-logo demo">
              

            </span>
                 <img src="images/icon.png" style="width: 40px;opacity: 0.7;"> 

                <span class="app-brand-text demo h3 mb-0 fw-bold" style="color:black;opacity: 0.7;">AlphaArray</span>
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
                  <div class="step">
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
                <?php 
                  
                ?>
                <div class="bs-stepper-content pt-4">
                  <form id="multiStepsForm" onSubmit="return false" enctype="multipart/form-data">
                    <!-- Account Details -->
                    <div id="accountDetailsValidation" class="content">
                      <div class="content-header mb-3">
                        <h4>Account Information</h4>
                        <span>Enter Your Account Details</span>
                      </div>
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsUsername">Full Name</label>
                          <input type="text" name="multiStepsUsername"  class="form-control" placeholder="John Doe" />
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsEmail">Email</label>
                          <input type="email" name="multiStepsEmail" id="multiStepsEmail" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                        </div>
                        <div class="col-sm-6 form-password-toggle">
                          <label class="form-label" for="multiStepsPass">Password</label>
                          <div class="input-group input-group-merge">
                            <input type="password" id="multiStepsPass" name="multiStepsPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsPass2" />
                            <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="bx bx-hide"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 form-password-toggle">
                          <label class="form-label" for="multiStepsConfirmPass">Confirm Password</label>
                          <div class="input-group input-group-merge">
                            <input type="password" id="multiStepsConfirmPass" name="multiStepsConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsConfirmPass2" />
                            <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="bx bx-hide"></i></span>
                          </div>
                        </div>
                        

                        <div class="col-12 d-flex justify-content-between mt-4">
                          <button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="d-sm-inline-block d-none">Previous</span>
                          </button>
                          <button class="btn btn-primary btn-next" id="BasicForm">
                           <span class="d-sm-inline-block d-none me-sm-1 me-0">Next</span> 
                           <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                        </div>
                      </div>
                    </div>
                    <!-- Personal Info -->
                    <div id="personalInfoValidation" class="content">
                      <div class="content-header mb-3">
                        <h4>Personal Information</h4>
                        <span>Enter Your Personal Information</span>
                      </div>
                      <div class="row g-3">
                        
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsMobile">Mobile</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"></span>
                            <input type="text" id="multiStepsMobile" name="multiStepsMobile" class="form-control multi-steps-mobile" placeholder="MobileNumber" />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsPincode">Pincode</label>
                          <input type="text" id="multiStepsPincode" name="multiStepsPincode" class="form-control multi-steps-pincode" placeholder="Postal Code" maxlength="6" />
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="multiStepsAddress">Address</label>
                          <input type="text" id="multiStepsAddress" name="multiStepsAddress" class="form-control" placeholder="Address" />
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="multiStepsArea">Landmark</label>
                          <input type="text" id="multiStepsArea" name="multiStepsArea" class="form-control" placeholder="Area/Landmark" />
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsCity">Tutor Classes</label> <br>
                  <!-- 1 --> <input type="radio"  name="tutor_classes" value="I am an Individual"/> I am an Individual
                  <!-- 2 --> <input type="radio" name="tutor_classes"  value="I run an Institute"/> I run an Institute
                        </div>
                        
                        <div>
                            <input type="hidden" value="done" name="completed">
                            <input type="hidden" name="last_id" value="<?php if(isset($_SESSION['last_id'])) { echo $_SESSION['last_id']; } ?>" >
                        </div>
                        
                        <div class="col-12 d-flex justify-content-between mt-4">
                          <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="d-sm-inline-block d-none">Previous</span>
                          </button>
                          <button class="btn btn-primary btn-next" name="btnPersonal" value="btnPersonal"> <span class="d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                        </div>
                      </div>
                    </div>
                    <!-- Billing Links -->
                    <div id="billingLinksValidation" class="content">
                    
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
    window.Helpers.initCustomOptionCheck();
    </script>

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
<script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
<script src="assets/vendor/libs/select2/select2.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/pages-auth-multisteps.js"></script>
  
  <script>
  $('#multiStepsForm').on('submit', function( event ) {
    // $("#BasicForm").click(function(event){
     //console.log("sadasdasd");
   //  alert('sadad');
       
       // $name=$('#multiStepsUsername').val();  
       // $email=$('#multiStepsEmail').val();  
       // $password=$('#multiStepsPass').val();  
       //$name=$('#multiStepsUsername').val();  
      // alert($name);
       // prevent the default submit
       event.preventDefault();
       var form = $(this);
       $.ajax({
        url: "basic_form_register.php", 
        type: "POST",
        // use the forms data
        data: form.serialize(),
        beforeSend: function() {    
          console.log( "Processing..." );
        },
        success: function( response ){
           //alert(response);
          // do sth with the response
          if(response === "OK") {
             // credentials verified
             // redirect
            // window.location.href='PaytmKit/pgRedirect.php';
            window.location.href='billing.php';
            // $("h1").addClass("page-header");
            // form.closest('.modal').append('<div class="error">'+response+'</div>');
          }else{
             // credentials incorrect
             // append errormessage to modal
            $(".page-header").show();
            //('#error').append('<div class="error" style="color:red;size:50px;">'+response+'</div>');
          }
        },
        error: function( response ) {
           console.log(response);
        }

    });
    });
    </script>
</body>


<!--  auth-register-multisteps       , Wed, 09 Feb 2022 09:14:38 GMT -->
</html>
