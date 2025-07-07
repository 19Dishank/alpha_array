<!DOCTYPE html>
<?php
session_start();
require_once("connect.php");
 if(!isset($_SESSION['mail']))
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
    <title>User Booking List | <?php echo $title;?></title>
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
         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="OwnerModal">
          <div class="modal-dialog modal-lg" style="">
            <div class="modal-content">
  
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Detail</h4>
              </div>
              <div class="modal-body">
                  <!-- /Dynmamic Jquery AJax Data load Here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                    <h5 class="content-header-title float-left pr-1 mb-0">User</h5>
                      <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                          <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                          </li>
                          <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                          </li>
                          <li class="breadcrumb-item active">User Booking List
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
                        <h4 class="card-title">User Booking List</h4>
                      </div>
                      <div class="card-body card-dashboard">
                        <div class="table-responsive">
                          <table class="table table-striped dataex-html5-selectors">
                            <thead>
                             <tr>
                                <th>User Name</th>
                                <th>Tutor NAme</th>
                                <th>Course Name</th>
                                <th>Date</th>
                                <th>Booking Status</th>
                             </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $qry="select * from user_booking_tbl,user_tbl,tutor_tbl,course_tbl where  user_booking_tbl.user_id=user_tbl.user_id and user_booking_tbl.tutor_id=tutor_tbl.tutor_id and user_booking_tbl.course_id=course_tbl.course_id";
                                
                                $test=mysqli_query($cnn,$qry);
                                while($result=mysqli_fetch_array($test))
                                {
                                ?>
                                <tr>
                                    <td><?php echo $result['user_name']?>
                                      <button type="button" style="" id="user" class="btn" data-id="<?php echo $result['user_id'];?>" data-toggle="modal" data-target=".bs-example-modal-lg">
                                      <i class="fa fa-info-circle" style="font-size:21px"></i>
                                    </td>
                                    <td><?php echo $result['tutor_name']?>
                                    <button type="button" style="" id="tutor" class="btn" data-id="<?php echo $result['tutor_id'];?>" data-toggle="modal" data-target=".bs-example-modal-lg">
                                      <i class="fa fa-info-circle" style="font-size:21px"></i>
                                    </button></td>
                                    <td><?php echo $result['course_name']?></td>
                                    <td><?php echo date("d-M-Y", strtotime($result['date']) );?></td>
                                    

                                    <td>
                                    <?php if($result['booking_status']==0) { ?>

                                     <a href="change_status.php?booking_id=<?php echo $result['booking_id'];?>&booking_status=<?php echo $result['booking_status'];?>"> 
                                     <div class="fonticon-wrap">
                                     <i class="bx bxs-minus-circle"></i>
                                     </div></a>
                                     </a>
                                    
                                   <?php } else { ?>
                             
                                     <a href="change_status.php?booking_id=<?php echo $result['booking_id'];?>&booking_status=<?php echo $result['booking_status'];?>"> 
                                     <div class="fonticon-wrap">
                                     <i class="bx bxs-plus-circle"></i>
                                     </div></a>
                                     </a>
                                  <?php }?>
                                  
                                      <?php if($result['booking_status']==0) {echo "<span class='text-danger'>Inactive</span>";} else { echo "<span class='text-success'>Active</span>";}  ?>      
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
    </script>
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
  </body>
  <!-- END: Body-->

<!-- /table-datatable.html by,  04:45:09 GMT -->
</html>