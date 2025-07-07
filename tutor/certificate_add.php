<!DOCTYPE html>
<?php
session_start(); 
 require_once("connect.php");
 // if(!isset($_SESSION['mail']))
 // {
 //  header('location:index.php');
 //  }
if(isset($_SESSION['expiry_package']))
{
    header('location:billing.php'); 
}
 $cn='';
 $ag='';
 $py='';
 $ig='';
 $upd_id='';
 if(!empty($_GET['up_id']))
 {
    $upd_id=$_GET['up_id'];
    $qry=" select * from tutor_certificate_tbl where tutor_certificate_id=".$upd_id;
    $result=mysqli_query($cnn,$qry);
    $test=mysqli_fetch_array($result);
    $cn=$test['certificate_id'];
    $ag=$test['institute_agency'];
    $py=$test['passing_year'];
    $ig=$test['certificate_image'];
 }
      if(isset($_POST['sbtn']))
      {
        if(!empty($upd_id))
        {
          //echo $upd_id; die;
           if($_FILES['profile']['tmp_name']=="")
           {
              $image=$ig;
           }
           else
           {
            move_uploaded_file($_FILES['profile']['tmp_name'],"images/Certificate/".$_FILES['profile']['name']);
            $image=$_FILES['profile']['name'];
           }

            $str="update tutor_certificate_tbl set institute_agency='".$_POST['inst']."',certificate_image='".$image."',passing_year='".$_POST['year']."' where tutor_certificate_id=".$upd_id;
            mysqli_query($cnn,$str);

        }
        else
        {
          move_uploaded_file($_FILES['profile']['tmp_name'],"images/Certificate/".$_FILES['profile']['name']);
          $image=$_FILES['profile']['name'];

          $tutor_certificate_status=1;
          $str="insert into tutor_certificate_tbl values(NUll,'".$_POST['certificate_id']."','".$_POST['inst']."','".$image."','".$_POST['year']."','".$_SESSION['tid']."','".$tutor_certificate_status."')";
          $tutor_certificate_success=mysqli_query($cnn,$str);
          if($tutor_certificate_success)
          {
            $_SESSION['success']="Degree Added Successfully...";
          }
        } 
        header('location:tutor_certificate_list.php');
      }
   
    ?>


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
    <title>Certificate Add | <?php echo $title;?></title>
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
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
          <!-- Start here Conetent -->
              <section class="simple-validation">
              <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                  <div class="breadcrumbs-top">
                    <h5 class="content-header-title float-left pr-1 mb-0">Qualification</h5>
                      <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                          <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                          </li>
                          <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                          </li>
                          <li class="breadcrumb-item active">Add New Certificate 
                          </li>
                        </ol>
                      </div>
                  </div>
                </div>
              </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Add New Certificate</h4>
                      </div>
                      <div class="card-body">
                        <form id="custom_val" method="POST" enctype="multipart/form-data">
                        <!--   <div class="form-group">
                            <label for="exampleFormControlFile1">Certificate Image</label>
                            <div class="custom-file">
                              <input type="file" <?php if(empty($up_id)){ echo "required";} ?> accept="image/*" class="custom-file-input" id="customFile" name="profile"/>
                              <label class="custom-file-label" for="customFile">Choose profile pic</label>
                              <?php if(isset($ig) && !empty($ig)) { ?>
                                <img src="images/<?php echo $ig;?>" height="80px" width="80px" >
                            <?php } ?>
                            </div>
                          </div> -->


                           <div class="form-group">
                            <label for="exampleFormControlFile1">Certificate Image</label>
                            <div class="custom-file">
                              <input type="file" <?php if(empty($upd_id)){ echo "required";} ?> accept="image/*" class="custom-file-input" id="customFile" name="profile"/>
                              <!-- <input type="text"  id="customFile" name="profile" value="<?php echo $ig;?>"/> -->
                              <label class="custom-file-label" for="customFile">Choose certificate image</label>
                              <?php if(isset($ig) && !empty($ig)) { ?>
                                <img src="images/Certificate/<?php echo $ig;?>" height="80px" width="80px" >
                            <?php } ?>
                            </div>
                          </div>


                          <br>
                          <div class="form-group">
                            <label class="form-label" for="basic-default-name">Certificate Name</label>
                            <select class="form-control select2" name="certificate_id"> 
                                <option disabled selected>Select Certificate</option>   
                                <?php $data=mysqli_query($cnn,"select * from certificate_tbl");
                                while($row=mysqli_fetch_array($data)){
                                ?>
                                <option <?php if ($cn==$row['certificate_id']) {echo "selected";} ?> value="<?php echo $row['certificate_id']; ?>">
                                  <?php echo $row['certificate_name'];?>
                                  </option>   
                                <?php } ?>
                                </select>
                            </div>
                          
                          <div class="form-group">
                            <label class="form-label" for="basic-default-name">Institute/Agency</label>
                            <input
                              type="text"
                              class="form-control"
                              name="inst" 
                              placeholder="Type Institute/Agency"
                              value="<?php echo $ag?>"
                            />
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="basic-default-name">Passing Year</label>
                            <input
                              type="number"
                              class="form-control"
                              name="year" 
                              placeholder="Type Passing Year"
                              value="<?php echo $py?>"
                               onkeypress="return event.charCode >= 48"
                              min="1900" max="2099"
                            />
                          </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary" name="sbtn" value="Submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
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
          

        //   profile: {
        //     required: true,
        // },

         certificate_id: {
            required: true, 
        },

         inst: {
            required: true,
          minlength: 3,
          lettersonly: true 
        },

         year: {
            required: true,
          minlength: 4,
          max:<?php echo date("Y"); ?>
        },
      },
      messages: {
         profile: {
                       required: "Certificate Image Is Required",
                    },

        certificate_id: {
                       required: "Certificate Name Is Required",
                    },

        inst: {
                       required: "Institute Name Is Required",
                       
                        
        
                    },

        year: {
                       required: "Passing Year Is Required",
                    
        
                    },
        
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z . ]+$/i.test(value);
      }, "Please Enter Category Name in Characters Only"); 
     
      </script>
  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>