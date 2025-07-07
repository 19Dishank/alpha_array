<?php
   session_start();
  include_once "connect.php";
  if(isset($_POST['Change_pwd']))
  {
    $qry="select * from tutor_tbl where tutor_id='".$_SESSION['tid']."'";
    $test=mysqli_query($cnn,$qry);
    $result=mysqli_fetch_array($test); 
    $old_pwd=$result['tutor_password'];
 
     if($old_pwd==md5($_POST['currpwd']))
     {
         if($_POST['newpwd']===$_POST['cfmpwd'])
          {
            $str="update tutor_tbl set tutor_password='".md5($_POST['newpwd'])."' where tutor_id='".$_SESSION['tid']."'";
            mysqli_query($cnn,$str);
            // echo "echo <script>alert('Password Changed Sucessfully..');
            // window.location.href='index.php';
            //   </script>;";
            $pwd_success="Password Change Successfully";
          }
         else
          {
            $pwd_error="New Password and Confirm Password Doesn't Not Matched";
          }  
      }
      else
      {
         $oldpwd_error="Old Password Not Matched";
      }    
  }
?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- /index.html by,  04:41:56 GMT -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Change Password | <?php echo $title;?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  menu-expanded pace-done" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    

    <!-- BEGIN: Header-->
   <?php include_once "header.php"; ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include_once "sidebar.php"; ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <?php if(isset($pwd_success))  { ?>
             <div class="alert alert-success">
                <strong>Check it out!</strong> <?php echo $pwd_success; ?></a>.
              </div>
               <?php } ?>
          <?php if(isset($oldpwd_error))  { ?>
             <div class="alert alert-danger">
                <strong>Oops!</strong> <?php echo $oldpwd_error; ?></a>.
              </div>
            <?php } ?>
            <?php if(isset($pwd_error))  { ?>
             <div class="alert alert-danger">
                <strong>Oops!</strong> <?php echo $pwd_error; ?></a>.
              </div>
            <?php } ?>
          <!-- Start here Conetent -->
              <section class="simple-validation">

                    <div class="card mb-4">
      <h5 class="card-header">Change Password</h5>
      <div class="card-body">
        <form id="custom_val" method="POST" onsubmit="return true">
          <div class="row">
            <div class="mb-3 col-md-6 form-password-toggle">
              <label class="form-label" for="currentPassword">Current Password</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="password" name="currpwd" id="currpwd" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6 form-password-toggle">
              <label class="form-label" for="newPassword">New Password</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="password" id="newpwd" name="newpwd" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            <div class="mb-3 col-md-6 form-password-toggle">
              <label class="form-label" for="confirmPassword">Confirm New Password</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="password" name="cfmpwd" id="cfmpwd" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="col-12 mb-4">
              <p class="fw-semibold mt-2">Password Requirements:</p>
              <ul class="ps-3 mb-0">
                <li class="mb-1">
                  Minimum 8 characters long - the more, the better
                </li>
                <li class="mb-1">At least one lowercase character</li>
                <li>At least one number, symbol, or whitespace character</li>
              </ul>
            </div>
            <div class="col-12 mt-1">
              <button type="submit" class="btn btn-primary me-2" name="Change_pwd" value="Submit">Save changes</button>
              <button type="reset" class="btn btn-label-secondary">Cancel</button>

            </div>
          </div>
        </form>
      </div>
    </div>

            </section>

          <!-- End here Conetent -->
            

        </div>
      </div>
    </div>
    <!-- END: Content-->



    </div>
    <!-- End: Customizer-->



    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include_once "footer.php"; ?>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->
    <script>
      $('#custom_val').validate({
        rules: {
          

          currpwd: {
            required: true,
            minlength: 6,
            lettersonly:true

        },
        newpwd: {
            required: true, 
            minlength: 6,
            lettersonly: true
        },
         cfmpwd: {
            required: true,
          minlength: 6,
          lettersonly: true 
        },

      },
      messages: {
         currpwd: {
                       required: "Please Enter Current Password", 
        
                    },

        newpwd: {
                    required: "Please Enter New Password",
                    },
        
        cfmpwd: {
                required: "Please Enter Confirm New Password",
              },
     },


     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9!@#$%^&*]{6,16}$/i.test(value);

      }); 
     
      </script>
  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>