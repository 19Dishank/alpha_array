<!DOCTYPE html>
<?php
session_start();
require_once("connection.php");
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
    <title>Active Course Details | <?php echo $title;?></title>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

<style>
   
.switch {
  position: relative;
  display: inline-block;
  width: 54px;
  height: 27px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background: rgba(57,218,138,.8)!important;
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.inactive{
 background: rgb(252 33 73 / 80%)!important;
}
</style>

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  menu-expanded pace-done" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- modals -->
        <!-- Large modal -->
    <?php 
            $qry="select * from course_tbl ";
            $test=mysqli_query($conn,$qry);
            $result=mysqli_fetch_array($test);
          ?>
         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="OwnerModal">
          <div class="modal-dialog modal-lg" >
            <div class="modal-content" style="width:0px;margin: 90px 258px;">
  
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
                    <h5 class="content-header-title float-left pr-1 mb-0">Course</h5>
                      <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                          <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                          </li>
                          <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                          </li>
                          <li class="breadcrumb-item active">Course List
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
                        <h4 class="card-title">Active Course Details</h4>
                      </div>
                      <div class="card-body card-dashboard">
                        <?php if(isset($_SESSION['success'])) {?>            
                          <div class="alert alert-success alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> <?php echo $_SESSION['success'];  
                          unset($_SESSION['success']); ?>
                          </div> 
                        <?php } ?>
                        <div class="table-responsive">
                          <table class="table table-striped dataex-html5-selectors">
                            <thead>
                             <tr>
                                <th>Course Image</th>
                                <th style="width: 200px;">Add As Tutor</th>
                                <th>Course Name</th>
                                <th>Topic Name</th>
                                <th>Status</th>
                              </tr>
                             
                            </thead>
                            <tbody>
                               <?php $qry="select * from course_tbl,topic_tbl,tutor_tbl where course_tbl.topic_id=topic_tbl.topic_id and course_tbl.tutor_id=tutor_tbl.tutor_id and course_status='1'";
									$test=mysqli_query($conn,$qry);
									while($result=mysqli_fetch_array($test)) {     ?> 
                                <tr>
                                    <?php if (file_exists('images/course/'.$result['course_image']))  { ?>
                                    <td><img src="images/course/<?php echo $result['course_image'];?>"height="100px" width="100px"></td>
                                    <?php } else { ?>
                                      <td><img src="images/default_image.png?>"height="100px" width="100px"></td>
                                    <?php } ?>

                                    <td><?php echo $result['tutor_name']?></td>

                                    <td><button type="button" style="" id="course" class="btn" data-id="<?php echo $result['course_id'];?>" data-toggle="modal" data-target=".bs-example-modal-lg">
                                        <i class="fa fa-info-circle" style="font-size:21px"></i>
                                      </button><?php echo $result['course_name']?></td>

                                    <td><?php echo $result['topic_name']?></td>

                                    <td>
                                    <!-- <?php if($result['course_status']==0) { ?>
                                       
                                       <a href="change_status.php?course_id=<?php echo $result['course_id'];?>&course_status=<?php echo $result['course_status'];?>"> 
                                       <div class="fonticon-wrap">
                                       <i class="bx bxs-minus-circle"></i>
                                       </div></a>
                                       </a>
                                    <?php } else { ?>
                               
                                       <a href="change_status.php?course_id=<?php echo $result['course_id'];?>&course_status=<?php echo $result['course_status'];?>"> 
                                       <div class="fonticon-wrap">
                                       <i class="bx bxs-plus-circle"></i>
                                       </div></a>
                                       </a>
                                    <?php }?>

                                        <?php if($result['course_status']==0) {echo "<span class='text-danger'>Inactive</span>";} else { echo "<span class='text-success'>Active</span>";}  ?>  --> 

                      <label class="switch">
                      
                      <?php if($result['course_status']==1) { ?>
                        <input type="checkbox" style="" checked id="myCheck" onchange="change_sts('<?php echo $result['course_id']?>','<?php echo $result['course_status']?>');">
                        <span class="slider round"></span>
                      
                      <?php } else { ?>
                         <input type="checkbox" id="myCheck" style=" background-color: #2196F3 !important;" onchange="change_sts('<?php echo $result['course_id']?>','<?php echo $result['course_status']?>');">
                         <span class="slider round inactive" ></span>
                      
                      <?php } ?>
                     </label>

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
      $str="delete from course_tbl where course_id=".$did;
      mysqli_query($cnn,$str);
      echo "<script>window.location='course_list.php'</script>";
      //header('location:cat_list.php');
    }
    ?>


    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<script>
      function refreshTable(){
        //$("#body_bg").load('cat_list.php');
        location.reload();
      
               
      }
       function change_sts(id,status)
              {
                //alert(id);
               // alert(status);
               // var ans = confirm("Are you sure you want to change status?");
                 //alert(ans);
               //   if (ans == true) {
                    
                       //alert(ans);
             var id = id;
                      $.ajax({
                        type: 'POST',
                        dataType: 'html',
                        url: "change_status_ajax.php",
                        data: {
                          //  student_sts: 1,
                            course_id: id,
                            course_status: status,
                          //  row_id: id,
                            //user_status: status,
                        },
                         success: function(data){
               //alert(data);
              // $('.myCheck').css('background-color','#2196F3');
              //$("#myCheck").prop("checked", true);
                         // if(data==1){
                             refreshTable();
                         // }else{
                          //      alert('status update failed, please try again.');
                         // }
                         
                        },  
                      });
                
              }
        
    </script>

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
        $(document).on("click", "#course", function () {
           var course_id = $(this).data('id');
          // alert(cust_id);
            $.ajax({
                   type: "POST",
                   url: "course_model.php",
                   data: { course_id:course_id  },
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