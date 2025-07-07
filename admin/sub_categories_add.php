<?php
  session_start();
  include_once "connection.php";
  if(!isset($_SESSION['id']))
  {
     header('location:index.php');
  }
  $qry1="select * from sub_categories_tbl";
  $result1=mysqli_query($conn,$qry1);
  $catid='';
  $subcatname='';
  if(!empty($_GET['upid']))
  {
    $up_id=$_GET['upid'];
    $qry="select * from sub_categories_tbl where sub_cat_id=".$up_id;
   $test=mysqli_query($conn,$qry);
   while($res=mysqli_fetch_array($test))
   {
    $catid=$res['catid'];
   }
   
  }
  if(isset($_POST['sbtn']))
  {
    $up_id=$_GET['upid'];
    if(isset($up_id))
    {
      $qry="update sub_categories_tbl set sub_cat_name='".$_POST['subcatname']."' where sub_cat_id=".$up_id;
      $cat_success1=mysqli_query($conn,$qry);
      if($cat_success1)
          {
            $_SESSION['success']="Sub Category Updated Successfully...";
          }

    }
    else
    {
      $cat_status=1;
      $qry="insert into sub_categories_tbl values(Null,'".$_POST['subcatname']."','".$cat_status."') ";
      // mysqli_query($conn,$qry);
     // echo"Data inserted";
      $cat_success=mysqli_query($conn,$qry);
          if($cat_success)
          {
            $_SESSION['success']="Sub Category Added Successfully...";
          }
          else
          {
            $_SESSION['danger']="Oops!! Alredey Sub Category Existed...";
          }
    }
    header('location:sub_categories_details.php');
  }

?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Sub Categories Add</title>
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
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    

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
        <!-- BEGIN: breadcrumb-->
       <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Sub Categories</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Add Sub Categories
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
          <!-- Start here Conetent -->
              <section class="simple-validation">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  
                  <div class="card-body">
                    <form id="custom_val" method="POST" autocomplete="off">
                    
                      <div class="form-group">
                        <label class="form-label" for="basic-default-name">Categories Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="catname"
                          name="catname"
                          value="<?php echo $catname; ?>"
                          placeholder="Enter Your Category Name"
                        />
                      </div>
					  
					  <div class="form-group">
                        <label class="form-label" for="basic-default-name">Sub Categories Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="subcatname"
                          name="subcatname"
                          value="<?php echo $subcatname; ?>"
                          placeholder="Enter Your Sub Category Name"
                        />
                      </div>
                     
                     
                      <div class="row">
                        <div class="col-12">
                          <button type="submit" class=" btn btn-outline-primary mr-1 mb-1" id="position-bottom-full" name="sbtn" value="Submit">Submit</button>
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
      
          $("#custom_val").validate({
                rules: {
                    catid : {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
					subcatname : {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    
                    },
                messages : {
                      catid: {
                                required: "Category Name Is Required",
                    },
					subcatname: {
                                required: "Sub Category Name Is Required",
                    },
                },

                submitHandler: function(form) {
                  form.submit();
                }
              });

      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");
    </script>

  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>