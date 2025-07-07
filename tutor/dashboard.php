
<!DOCTYPE html> 
<?php
session_start();
require_once("connect.php");
if(!isset($_SESSION['tmail']))
{
   header('location:index.php');
}
// echo "<pre>";
// print_r($_SESSION);die;
if(isset($_SESSION['expiry_package']))
{
    header('location:billing.php'); 
}

 //include("billing_cnn.php");



 
?>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- /widgets.html by,  04:44:53 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard | <?php echo $title; ?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/swiper.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/widgets.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
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
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.html"></a>
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="content-body">
        <!-- Widgets Statistics start -->
          <section id="widgets-Statistics">
            <div class="row">
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="course_list.php"><div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
                      <i class="bx bx-book font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis" style="color: grey;">Course</span>
                    <h4 class="mb-0">
                    <?php 
                    $str="SELECT COUNT(course_name) as Total_Course FROM course_tbl,tutor_tbl where course_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                    $count=mysqli_query($cnn,$str);
                    $result_count=mysqli_fetch_array($count);
                    ?>
                    <tr>
                      <td><b><?php echo $result_count['Total_Course'];?></b></td>
                    </tr>
                    </h4>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="video_list.php"><div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
                      <i class="fa fa-video-camera font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis" style="color: grey;">Video</span>
                    <h4 class="mb-0">
                    <?php 
                    $str="SELECT COUNT(video_name) as Total_video FROM video,course_tbl,tutor_tbl where video.course_id=course_tbl.course_id and course_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                    $count=mysqli_query($cnn,$str);
                    $result_count=mysqli_fetch_array($count);
                    ?>
                    <tr>
                      <td><b><?php echo $result_count['Total_video'];?></b></td>
                    </tr>
                    </h4>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="user_list.php"><div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                      <i class="fa fa-user font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis" style="color: grey;">Student</span>
                    <h4 class="mb-0">
                    <?php 
                      $str="SELECT * FROM user_booking_tbl,user_tbl,tutor_tbl where user_booking_tbl.user_id=user_tbl.user_id and user_booking_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."' GROUP by(user_tbl.user_id)";
                      $count=mysqli_query($cnn,$str);
                      $result_count=mysqli_fetch_array($count);
                      $Total_User=mysqli_num_rows($count);
                    ?>
                    <tr>
                      <td><b><?php echo $Total_User; ?></b></td>
                    </tr>
                  </h4>
                </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="#"><div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                      <i class="fa fa-inr font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis">Total Income[₹]</span>
                    <h4 class="mb-0">
                    <?php 
                      $str="SELECT * from user_booking_tbl where tutor_id=".$_SESSION['tid'];
                      //echo $str;
                      $count12=mysqli_query($cnn,$str);
                      $sum=0;
                      while($row12=mysqli_fetch_array($count12))
                      {
                            $str12="SELECT * from course_tbl where course_id=".$row12['course_id'];
                            $cr=mysqli_query($cnn,$str12);
                            
                            while($test=mysqli_fetch_array($cr))
                            {
                                $sum=$sum+$test['course_fees'];
                            }

                      }
                      
                      
                    ?>
                    <tr>

                      <td><b>₹<?php echo $sum;?></b></td>
                    </tr>
                  </h4>
                </a>
                  </div>
                </div>
              </div>
             <!---- <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="package_detail_list.php"><div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
                      <i class="bx bxs-package font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis">Package</span>
                    <h4 class="mb-0">
                     <?php 
                      $str="SELECT COUNT(package_tbl.package_id) as Total_Package FROM package_detail_tbl,package_tbl where package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id='".$_SESSION['tid']."'";
                      $count=mysqli_query($cnn,$str);
                      $result_course=mysqli_fetch_array($count);
                      ?>
                    <tr>
                      <td><b><?php echo $result_course['Total_Package'];?></b></td>
                    </tr>
                  </h4>
                  </a>
                  </div>
                </div>
              </div>----->
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="inquiry_list.php"><div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-1">
                      <i class="fa fa-solid fa-question font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis">Inquiry</span>
                    <h4 class="mb-0">
                    <?php 
                      $str="SELECT COUNT(inquiry_tbl.inquiry_id) as Total_Inquiry FROM inquiry_tbl,user_tbl where inquiry_tbl.user_id=user_tbl.user_id and inquiry_tbl.tutor_id='".$_SESSION['tid']."'";
                      $count=mysqli_query($cnn,$str);
                      $result_course=mysqli_fetch_array($count);
                      ?>
                    <tr>
                      <td><b><?php echo $result_course['Total_Inquiry'];?></b></td>
                    </tr>
                    </h4>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="review_list.php"><div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                      <i class="fa fa-star font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis">Review</span>
                    <h4 class="mb-0">
                    <?php 
                      $str="SELECT COUNT(review_tbl.review_id) as Total_Review FROM review_tbl,user_tbl where review_tbl.user_id=user_tbl.user_id and review_tbl.tutor_id='".$_SESSION['tid']."'";
                      $count=mysqli_query($cnn,$str);
                      $result_course=mysqli_fetch_array($count);
                    ?>
                    <tr>
                      <td><b><?php echo $result_course['Total_Review'];?></b></td>
                    </tr>
                    </h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        <!-- Widgets Statistics End -->    
<div class="row">
            <!-- User Card Starts -->
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Recent Student List</h4>
                      </div>
                      <div class="card-body card-dashboard">

                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                             <tr>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Pincode</th>
                                <th>Register Date</th>
                             
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                //$qry="SELECT * FROM `user_tbl` ORDER BY `user_tbl`.`register_date` DESC";
                                $qry="select * from user_booking_tbl,user_tbl where user_booking_tbl.user_id=user_tbl.user_id and user_booking_tbl.tutor_id='".$_SESSION['tid']."' group by user_tbl.user_id order by user_tbl.user_id DESC ";
                                $test=mysqli_query($cnn,$qry);
                                while($result=mysqli_fetch_array($test))
                                {
                                ?>
                                <tr>
                                  <?php if (file_exists('../images/Student/'.$result['user_image']))  { ?>
                                    <td><img src="../images/Student/<?php echo $result['user_image'];?>"height="100px" width="100px"></td>
                                    <?php } else { ?>
                                      <td><img src="images/avatar.jpg>"height="100px" width="100px"></td>
                                    <?php } ?>
                                    <td><?php echo $result['user_name']?></td>
                                    <td><?php echo $result['user_email']?></td>
                                    <td><?php echo $result['user_contact']?></td>
                                    <td><?php echo $result['user_address']?></td>
                                    <!-- <td><?php echo $result['user_gender']?></td> -->

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



                                    <td><?php echo $result['pincode_id']?></td>
                                    <td><?php echo date("d-M-Y", strtotime($result['date']) );?></td>

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
            </div>
            <!-- End User Card -->
          </div>

           <div class="row">
            <!-- Payment Card Starts -->
            <div class="col-lg-12">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Recent Package List</h4>
                    </div>
                    <div class="card-body card-dashboard">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                           <tr>
                              <th>Type</th>
                              <th>Duration (Month)</th>
                              <th>Price (₹)</th>
                              <th>Purchase Date</th>
                              <th>Exp.Date</th>
                              <th>Days Left</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php  
                              $qry="select * from package_detail_tbl,package_tbl where package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id='".$_SESSION['tid']."'";
                              $test=mysqli_query($cnn,$qry);
                              while($result=mysqli_fetch_array($test))
                              {
                              ?>
                              <tr>
                                  <td><?php echo $result['package_type']?></td>
                                  <td><?php echo $result['package_duration']?></td>
                                  <td><?php echo $result['package_price']?></td>
                                  <td><?php echo date("d-M-Y", strtotime($result['purchase_date']) );?></td>
                                  <td><?php echo date("d-M-Y", strtotime($result['package_exp_date']) );?></td>
                                  <td><?php
                                    //Convert to date
                                    //$datestr="2022-02-06";//Your date
                                    $datestr=$result['package_exp_date'];//Your date
                                    $date=strtotime($datestr);//Converted to a PHP date (a second count)

                                    //Calculate difference
                                    $diff=$date-time();//time returns current time in seconds
                                    $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
                                    $hours=round(($diff-$days*60*60*24)/(60*60));

                                    //Report
                                    //echo "$days days  remain<br />";

                                    if($days<0)
                                        {
                                          echo '<span class="badge badge-pill badge-circle-light-danger mr-1 ">Expire</span>';
                                        }
                                        else
                                        {
                                          ?>
                                            <!-- <p><div class="badge badge-pill badge-light-success mr-1">Active</div></p> -->
                                            <?php  
                                            echo "$days days  remain<br />";

                                        }


                                    ?></td>                      
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
            </div>
            <!-- End Payment Card -->
          </div>

        

          <div class="row">
            <!-- Task Card Starts -->
            <div class="col-lg-12">
              <div class="row">
                <div class="col-12">
                  <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center flex-wrap">
                      <h4 class="card-title d-flex mb-25 mb-sm-0">
                        <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Monthly Registered Students
                      </h4>
                      <!--<ul class="list-inline d-flex mb-25 mb-sm-0">
                        <li class="d-flex align-items-center">
                         <i class='bx bx-filter font-medium-3 mr-50'></i>
                          <div class="dropdown">
                            <div class="dropdown-toggle mr-1 cursor-pointer" role="button" id="dropdownMenuButton"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="javascript:void(0);">My Tasks</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due this week</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due next week</a>
                              <a class="dropdown-item" href="javascript:void(0);">Custom Filter</a>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class='bx bx-sort mr-50 font-medium-3'></i>
                          <div class="dropdown">
                            <div class="dropdown-toggle cursor-pointer" role="button" id="dropdownMenuButton2"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort</div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                              <a class="dropdown-item" href="javascript:void(0);">None</a>
                              <a class="dropdown-item" href="javascript:void(0);">Alphabetical</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due Date</a>
                              <a class="dropdown-item" href="javascript:void(0);">Assignee</a>
                            </div>
                          </div>
                        </li>
                      </ul>--->
                    </div>
                    <div class="card-body px-0 py-1">
                      <div id="student_container"></div>
                           <div class="x_content">
                              <div class="col-md-8 col-sm-8 col-xs-12">
                                  
                                 <!--  <button id="plain" type="button" class="btn btn-round btn-success">Plain</button>
                                  <button id="inverted" type="button" class="btn btn-round btn-warning">Inverted</button>
                                  <button id="polar" type="button" class="btn btn-round btn-danger">Polar</button> -->
                              </div>  
                              <div class="clearfix"></div>
                           </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Daily Financials Card Starts -->
          </div>
          

          

        </section>  
    
    <!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
    

    <!-- BEGIN: Customizer-->
<div class="customizer d-none d-md-block"><!--<a class="customizer-toggle" href="javascript:void(0);"><i class="bx bx-cog bx bx-spin white"></i></a>----><div class="customizer-content p-2">
  <h4 class="text-uppercase mb-0">Theme Customizer</h4>
  <small>Customize & Preview in Real Time</small>
  <a href="javascript:void(0)" class="customizer-close">
    <i class="bx bx-x"></i>
  </a>
  <hr>
  <!-- Theme options starts -->
  <h5 class="mt-1">Theme Layout</h5>
  <div class="theme-layouts">
    <div class="d-flex justify-content-start">
      <div class="mx-50">
        <fieldset>
          <div class="radio">
            <input type="radio" name="layoutOptions" value="false" id="radio-light" class="layout-name" data-layout=""
              checked>
            <label for="radio-light">Light</label>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="radio">
            <input type="radio" name="layoutOptions" value="false" id="radio-dark" class="layout-name"
              data-layout="dark-layout">
            <label for="radio-dark">Dark</label>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="radio">
            <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark" class="layout-name"
              data-layout="semi-dark-layout">
            <label for="radio-semi-dark">Semi Dark</label>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
  <!-- Theme options starts -->
  <hr>

  <!-- Menu Colors Starts -->
  <div id="customizer-theme-colors">
    <h5>Menu Colors</h5>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-primary selected" data-color="theme-primary"></li>
      <li class="color-box bg-success" data-color="theme-success"></li>
      <li class="color-box bg-danger" data-color="theme-danger"></li>
      <li class="color-box bg-info" data-color="theme-info"></li>
      <li class="color-box bg-warning" data-color="theme-warning"></li>
      <li class="color-box bg-dark" data-color="theme-dark"></li>
    </ul>
    <hr>
  </div>
  <!-- Menu Colors Ends -->
  <!-- Menu Icon Animation Starts -->
  <div id="menu-icon-animation">
    <div class="d-flex justify-content-between align-items-center">
      <div class="icon-animation-title">
        <h5 class="pt-25">Icon Animation</h5>
      </div>
      <div class="icon-animation-switch">
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
          <label class="custom-control-label" for="icon-animation-switch"></label>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <!-- Menu Icon Animation Ends -->
  <!-- Collapse sidebar switch starts -->
  <div class="collapse-sidebar d-flex justify-content-between align-items-center">
    <div class="collapse-option-title">
      <h5 class="pt-25">Collapse Menu</h5>
    </div>
    <div class="collapse-option-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <!-- Collapse sidebar switch Ends -->
  <hr>

  <!-- Navbar colors starts -->
  <div id="customizer-navbar-colors">
    <h5>Navbar Colors</h5>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-white border selected" data-navbar-default=""></li>
      <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
      <li class="color-box bg-success" data-navbar-color="bg-success"></li>
      <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
      <li class="color-box bg-info" data-navbar-color="bg-info"></li>
      <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
      <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
    </ul>
    <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
    <hr>
  </div>
  <!-- Navbar colors starts -->
  <!-- Navbar Type Starts -->
  <h5>Navbar Type</h5>
  <div class="navbar-type d-flex justify-content-start">
    <div class="hidden-ele mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="navbarType" value="false" id="navbar-hidden">
          <label for="navbar-hidden">Hidden</label>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="navbarType" value="false" id="navbar-static">
          <label for="navbar-static">Static</label>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
          <label for="navbar-sticky">Fixed</label>
        </div>
      </fieldset>
    </div>
  </div>
  <hr>
  <!-- Navbar Type Starts -->

  <!-- Footer Type Starts -->
  <h5>Footer Type</h5>
  <div class="footer-type d-flex justify-content-start">
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="footerType" value="false" id="footer-hidden">
          <label for="footer-hidden">Hidden</label>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="footerType" value="false" id="footer-static" checked>
          <label for="footer-static">Static</label>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="footerType" value="false" id="footer-sticky">
          <label for="footer-sticky" class="">Sticky</label>
        </div>
      </fieldset>
    </div>
  </div>
  <!-- Footer Type Ends -->
  <hr>

  <!-- Card Shadow Starts-->
  <div class="card-shadow d-flex justify-content-between align-items-center py-25">
    <div class="hide-scroll-title">
      <h5 class="pt-25">Card Shadow</h5>
    </div>
    <div class="card-shadow-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
        <label class="custom-control-label" for="card-shadow-switch"></label>
      </div>
    </div>
  </div>
  <!-- Card Shadow Ends-->
  <hr>

  <!-- Hide Scroll To Top Starts-->
  <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
    <div class="hide-scroll-title">
      <h5 class="pt-25">Hide Scroll To Top</h5>
    </div>
    <div class="hide-scroll-top-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
        <label class="custom-control-label" for="hide-scroll-top-switch"></label>
      </div>
    </div>
  </div>
  <!-- Hide Scroll To Top Ends-->
  </div>

    </div>
    <!-- End: Customizer-->
<!-- widget chat demo footer button ends -->
<!-- widget chat demo start -->
  <div class="widget-chat widget-chat-demo d-none">
    <div class="card mb-0">
      <div class="card-header border-bottom p-0">
        <div class="media m-75">
          <a href="JavaScript:void(0);">
            <div class="avatar mr-75">
              <img src="app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32"
                height="32">
              <span class="avatar-status-online"></span>
            </div>
          </a>
          <div class="media-body">
            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
            <span class="text-muted font-small-3">Active</span>
          </div>
        </div>
        <div class="heading-elements">
          <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
        </div>
      </div>
      <div class="card-body widget-chat-container widget-chat-demo-scroll">
        <div class="chat-content">
          <div class="badge badge-pill badge-light-secondary my-1">today</div>
          <div class="chat">
            <div class="chat-body">
              <div class="chat-message">
                <p>How can we help? 😄</p>
                <span class="chat-time">7:45 AM</span>
              </div>
            </div>
          </div>
          <div class="chat chat-left">
            <div class="chat-body">
              <div class="chat-message">
                <p>Hey John, I am looking for the best admin template.</p>
                <p>Could you please help me to find it out? 🤔</p>
                <span class="chat-time">7:50 AM</span>
              </div>
            </div>
          </div>
          <div class="chat">
            <div class="chat-body">
              <div class="chat-message">
                <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                <span class="chat-time">8:01 AM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer border-top p-1">
        <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
          <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
          <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>
<!-- widget chat demo ends -->


    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include_once "footer.php"; ?>
    <!-- END: Footer-->

    <!--Starts Monthly Registered Student-->
    <?php   
      $monthly_student = student_get_ByMonth();
      $monthName_student = student_get_ByMonth(); 
      function student_get_ByMonth()
      {
        global $cnn;
        $sql = "SELECT COUNT('user_id') as 'number_of_student',extract(month FROM register_date ) as month 
            FROM `user_tbl`,user_booking_tbl where user_booking_tbl.user_id=user_tbl.user_id and user_booking_tbl.tutor_id='".$_SESSION['tid']."'
            GROUP BY extract(month FROM register_date)  ORDER by month";
            //echo $sql;
        $students =  mysqli_query($cnn,$sql);
        return $students;
      }
      ?>
    <!--End Monthly Registered Student-->
    

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/dragula.min.js"></script>
    <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="assets/js/cards-statistics.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/cards/widgets.min.js"></script>
    <!-- END: Page JS-->

    <!-- Monthly Registerd Students   -->
    <script>
    
      var chart = Highcharts.chart('student_container', {

        title: {
          text: 'Monthly Registered Students'
        },

        subtitle: {
          text: 'Plain'
        },

        xAxis: {
          //categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
          categories: [<?php while($row1 = mysqli_fetch_array($monthName_student)) { echo "'".date("F", mktime(0, 0, 0, $row1['month']))."',";  } ?>]
        },

        series: [{
          type: 'column',
          colorByPoint: true,
          data: [<?php while($rows = mysqli_fetch_array($monthly_student)) { echo $rows['number_of_student'].","; } ?>],
          showInLegend: false
        }]

      });
                            
                  
      $('#plain').click(function () {
        chart.update({
          chart: {
            inverted: false,
            polar: false
          },
          subtitle: {
            text: 'Plain'
          }
        });
      });

      $('#inverted').click(function () {
        chart.update({
          chart: {
            inverted: true,
            polar: false
          },
          subtitle: {
            text: 'Inverted'
          }
        });
      });

      $('#polar').click(function () {
        chart.update({
          chart: {
            inverted: false,
            polar: true
          },
          subtitle: {
            text: 'Polar'
          }
        });
      });
    </script>
    <!-- Monthly Registerd Students   -->

  </body>
  <!-- END: Body-->

<!-- /widgets.html by,  04:44:54 GMT -->
</html>