<?php
  session_start();
  include_once "connection.php";
  if(!isset($_SESSION['id']))
  {
     header('location:index.php');
  }
  $qry1="select * from faq_tbl";
  $result1=mysqli_query($conn,$qry1);
  $question='';
  $answer='';

  if(!empty($_GET['upid']))
  {
    $up_id=$_GET['upid'];
    $qry="select * from faq_tbl where faq_id=".$up_id;
   $test=mysqli_query($conn,$qry);
   while($res=mysqli_fetch_array($test))
   {
    $question=$res['question'];
    $answer=$res['answer'];
   }
   
  }
  if(isset($_POST['sbtn']))
  {
    $up_id=$_GET['upid'];
    if(isset($up_id))
    {
      $qry="update faq_tbl set question='".$_POST['question']."', answer='".$_POST['answer']."' where faq_id=".$up_id;
      $faq_success1=mysqli_query($conn,$qry);
      if($faq_success1)
          {
            $_SESSION['success']="FAQ Updated Successfully...";
          }

    }
    else
    {
      $faq_status=1;
      $qry="insert into faq_tbl values(Null,'".$_POST['question']."','".$_POST['answer']."','".$faq_status."') ";
      // mysqli_query($conn,$qry);
     // echo"Data inserted";
      $faq_success=mysqli_query($conn,$qry);
          if($faq_success)
          {
            $_SESSION['success']="Question Added Successfully...";
          }
          else
          {
            $_SESSION['danger']="Oops!! Alredey Question Existed...";
          }
    }
    header('location:faq-details.php');
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
    <title>FAQ Add</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
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
    <link rel="shortcut icon" href="images/icon.png">
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
              <h5 class="content-header-title float-left pr-1 mb-0">FAQ</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Add FAQ
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
                        <label class="form-label" for="basic-default-name">Question</label>
                        <input
                          type="text"
                          class="form-control"
                          id="question"
                          name="question"
                          value="<?php echo $question; ?>"
                          placeholder="Enter Your Question"
                        />
                      </div>
					  
					  <div class="form-group">
                        <label class="form-label" for="basic-default-name">Answer</label>
                        <textarea rows="4" cols="30" class="form-control" id="answer" name="answer" placeholder="Enter your answer"><?php echo $answer; ?></textarea>
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
                    question : {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
					answer : {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    
                    },
                messages : {
                      question: {
                                required: "Question Is Required",
                    },
					answer: {
                                required: "Answer Is Required",
                    },
                },

                submitHandler: function(form) {
                  form.submit();
                }
              });

     // jQuery.validator.addMethod("lettersonly", function(value, element) {
      //  return this.optional(element) || /^[a-zA-Z & : ? , . ]+$/i.test(value);
   // }, "Only alphabetical characters");
    </script>

  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>