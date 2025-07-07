<!DOCTYPE html>
<?php
session_start();
require_once("connect.php");
 if(!isset($_SESSION['tmail']))
 {
  header('location:index.php');
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
    <title>Inquiry List | <?php echo $title;?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static menu-expanded pace-done" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- modals -->
        <!-- Large modal -->
        <!-- modals -->
        <!-- Large modal -->
          <?php 
            $qry="select * from user_tbl";
            $test=mysqli_query($cnn,$qry);
            $result=mysqli_fetch_array($test);
          ?>
         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="OwnerModal">
          <div class="modal-dialog modal-lg" >
            <div class="modal-content" style="width:1000px;">
  
              <!-- <div class="modal-header" >
               <button type="button" class="btn btn-danger" data-dismiss="modal" align="right">Close</button>
              </div> -->
              <div class="modal-body">
                  <!-- Dynmamic Jquery AJax Data load Here -->

              </div>
              
            </div>
          </div>
        </div>
        <div class="x_content">
         <!-- /modals -->
      </div>
           <!--  Modal Code End here-->
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
            <!-- Scroll - horizontal and vertical table -->
              <section id="horizontal-vertical">
              <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                  <div class="breadcrumbs-top">
                    <h5 class="content-header-title float-left pr-1 mb-0">Inquiry</h5>
                      <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                          <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                          </li>
                          <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                          </li>
                          <li class="breadcrumb-item active">Inquiry List
                          </li>
                        </ol>
                      </div>
                  </div>
                </div>
              </div>

                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Inquiry List</h4>
                      </div>
                      <div class="card-body card-dashboard">

                        <div class="table-responsive">
                          <table class="table table-striped dataex-html5-selectors">
                            <thead>
                             <tr>
                                <th style="width: 180px;">Student Name</th>
                                <th>Course Name</th>
                                <th>Inquiry Description</th>
                                <th>Inquiry Date</th>
                                <th>Give Response</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $qry="select * from inquiry_tbl,user_tbl,tutor_tbl,course_tbl where inquiry_tbl.user_id=user_tbl.user_id and inquiry_tbl.tutor_id=tutor_tbl.tutor_id and inquiry_tbl.course_id=course_tbl.course_id and inquiry_tbl.tutor_id='".$_SESSION['tid']."'";
                                $test=mysqli_query($cnn,$qry);
                                while($result=mysqli_fetch_array($test))
                                {
                                ?>
                                <tr>
                                    <td><button type="button" style="" id="user" class="btn" data-id="<?php echo $result['user_id'];?>" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    <i class="fa fa-info-circle" style="font-size:21px"></i>
                                    </button><?php echo $result['user_name']?></td>

                                    <!-- <td><?php echo $result['tutor_name']?>
                                    <button type="button" style="" id="tutor" class="btn" data-id="<?php echo $result['tutor_id'];?>" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    <i class="fa fa-info-circle" style="font-size:21px"></i>
                                    </button></td> -->
                                    <td><?php echo $result['course_name']?></td>
                                    <td><?php echo $result['inquiry_description']?></td>
                                    <td><?php echo date("d-M-Y", strtotime($result['inquiry_date']) );?></td>
                                    <td>
                                      <?php //echo $result['message']?>
                                      <a href="give_response.php?up_id=<?php echo $result['inquiry_id']; ?>">
                                      <div class="fonticon-wrap">
                                              <i class="fa fa-reply" aria-hidden="true" style="font-size:20px"></i>
                                        </div></a>
                                    </td>
                                    <td><a href="?del_id=<?php echo $result['inquiry_id']; ?>" onclick="return confirm('Are you sure you want to delete this item?')"><div class="fonticon-wrap">
                                      <i class="bx bx-trash" style="font-size:20px"></i>
                                    </div></a>
                                  </td>
                                  </tr>
                                <?php
                                 } 
                                ?> 
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
<!--/ Scroll - horizontal and vertical table -->

          <!-- End here Conetent -->
            

        </div>
      </div>
    </div>
    <!-- END: Content-->



    </div>
    <!-- End: Customizer-->
  
<?php
    if(isset($_GET['del_id']))
    {
      $did=$_GET['del_id'];
      $str="delete from inquiry_tbl where inquiry_id=".$did;
      mysqli_query($cnn,$str);
      echo "<script>window.location='inquiry_list.php'</script>";
      header('location:inquiry_list.php');
    }
    ?>

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
    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/datatables/datatable.min.js"></script>
    <!-- END: Page JS-->
    <script>
        $(document).on("click", "#user", function () {
           var user_id = $(this).data('id');
          // alert(cust_id);
            $.ajax({
                   type: "POST",
                   url: "user_modal.php",
                   data: { user_id:user_id  },
                   success: function(response){ 
                        // Add response in Modal body
                        $('.modal-body').html(response);

                        // Display Modal
                       // $('#campModal').modal('show'); 
                  } 
              });
        });  
    </script>
    <script>
        $(document).on("click", "#tutor", function () {
           var tutor_id = $(this).data('id');
          // alert(cust_id);
            $.ajax({
                   type: "POST",
                   url: "tutor_modal.php",
                   data: { tutor_id:tutor_id  },
                   success: function(response){ 
                        // Add response in Modal body
                        $('.modal-body').html(response);

                        // Display Modal
                       // $('#campModal').modal('show'); 
                  } 
              });
        });  
    </script>>
        
  </body>
  <!-- END: Body-->

<!-- /table-datatable.html by,  04:45:09 GMT -->
</html>