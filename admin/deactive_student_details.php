<?php
  session_start();
  include_once "connection.php";
  if(!isset($_SESSION['id']))
  {
     header('location:index.php');
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
    <title>Deactive Student Details | <?php echo $title;  ?></title>
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
        <div class="content-header row">
        </div>
        <div class="content-body">
          <!-- Start here Conetent -->
            <!-- Scroll - horizontal and vertical table -->
<section id="horizontal-vertical">
      <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Student</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Student List
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body card-dashboard">
          <h4>Deactive Student Details</h4>
                        <?php if(isset($_SESSION['success'])) {?>            
                       <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo $_SESSION['success'];  
                        unset($_SESSION['success']); ?>
                        </div> 
                        <?php } ?>
                        <?php if(isset($_SESSION['danger'])) { ?>            
                          <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Danger!</strong> <?php echo $_SESSION['danger'];  
                        unset($_SESSION['danger']); ?>
                        </div> 
                         <?php } ?>
          <div class="table-responsive">
             <table class="table table-striped dataex-html5-selectors dataTable">
              <thead>
                <!-- <a href="category_add.php" class="add_cat"> 
                             <button value="Add Category" class="btn btn-outline-primary waves-effect" style="margin: 60px 0px -86px;font-size: 13px;">
                              <i class="bx bxs-plus-circle">     </i> Add Student
                              </button></a>-->
                <tr>
                    <th>Student-Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Pincode</th>
                    <th>Register Date</th>
                    <th>Status</th>

                </tr>
              </thead> <tbody> <?php $qry="select * from user_tbl where user_status='0'";
              $test=mysqli_query($conn,$qry);
              while($result=mysqli_fetch_array($test)) {     ?> 
              <tr> 
                <td><?php echo $result['user_name'];?></td>
                <!-- <td><?php echo $result['user_image'];?></td> -->
                <?php if (file_exists('../images/Student/'.$result['user_image']))  { ?>
                                    <td><img src="../images/Student/<?php echo $result['user_image'];?>"height="100px" width="100px"></td>
                                    <?php } else { ?>
                                      <td><img src="images/avtar.png>"height="100px" width="100px"></td>
                                    <?php } ?>
                <td><?php echo $result['user_email'];?></td>
                <td><?php echo $result['user_contact'];?></td>
                <td><?php echo $result['user_address'];?></td>
                <!-- <td><?php echo $result['user_gender'];?></td> -->
                <td>
                                      <?php 
                                        if($result['user_gender']==0) 
                                        {
                                        ?>
                                        <img src="images/female.jpg">
                                        <?php 
                                        } 
                                        else
                                        {
                                        ?>
                                        <img src="images/male.jpg">
                                        <?php 
                                        }
                                      ?>
                                    </td>
                <td><?php echo $result['pincode_id'];?></td>
                <td><?php echo $result['register_date'];?></td>
                
                 <td>
                                    <!-- <?php if($result['user_status']==0) { ?>
                                       
                                       <a href="change_status.php?categories_id=<?php echo $result['user_id'];?>&categories_status=<?php echo $result['user_status'];?>"> 
                                       <div class="fonticon-wrap">
                                       <i class="bx bxs-minus-circle"></i>
                                       </div></a>
                                       </a>
                                    <?php } else { ?>
                               
                                       <a href="change_status.php?categories_id=<?php echo $result['user_id'];?>&categories_status=<?php echo $result['user_status'];?>"> 
                                       <div class="fonticon-wrap">
                                       <i class="bx bxs-plus-circle"></i>
                                       </div></a>
                                       </a>
                                    <?php }?>

                                        <?php if($result['user_status']==0) {echo "<span class='text-danger'>Inactive</span>";} else { echo "<span class='text-success'>Active</span>";}  ?> --> 

                                        <label class="switch">
                      
                      <?php if($result['user_status']==1) { ?>
                        <input type="checkbox" style="" checked id="myCheck" onchange="change_sts('<?php echo $result['user_id']?>','<?php echo $result['user_status']?>');">
                        <span class="slider round"></span>
                      
                      <?php } else { ?>
                         <input type="checkbox" id="myCheck" style=" background-color: #2196F3 !important;" onchange="change_sts('<?php echo $result['user_id']?>','<?php echo $result['user_status']?>');">
                         <span class="slider round inactive" ></span>
                      
                      <?php } ?>
                     </label>



                                    </td>
                                  

                </tr>
                    <?php
                    }
                  ?> 
  
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
  
<script>
      function refreshTable(){
        // $("#body_bg").load('gallery_list.php');
        location.reload()
      
               
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
                            user_id: id,
                            user_status: status,
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

  </body>
  <!-- END: Body-->

<!-- /table-datatable.html by,  04:45:09 GMT -->
</html>