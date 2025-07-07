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
  
<!-- /widgets.html by,  04:44:53 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard | <?php echo $title; ?></title>
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
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
                    <a href="tutor_details.php"><div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
                      <i class="fa fa-black-tie font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis" style="color: grey;">Tutor</span>
                    <h4 class="mb-0">
                      <?php 
                      $str="SELECT COUNT(tutor_id) as Total_Tutor FROM tutor_tbl";
                      $count=mysqli_query($conn,$str);
                      $result_count=mysqli_fetch_array($count);
                      ?>
                    <tr>
                      <td><b><?php echo $result_count['Total_Tutor'];?></b></td>
                    </tr>
                    </h4>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="student_details.php"><div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                      <i class="fa fa-user font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis" style="color: grey;">Student</span>
                    <h4 class="mb-0">
                      <?php 
                      $str="SELECT COUNT(user_id) as Total_User FROM user_tbl";
                      $count=mysqli_query($conn,$str);
                      $result_count=mysqli_fetch_array($count);
                    ?>
                    <tr>
                      <td><b><?php echo $result_count['Total_User'];?></b></td>
                    </tr>
                  </h4>
                </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="course_details.php"><div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
                      <i class="bx bx-book font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis">Course</span>
                    <h4 class="mb-0">
                      <?php 
                      $str="SELECT count(course_id) as Total_course FROM course_tbl";
                      $count=mysqli_query($conn,$str);
                      $result_course=mysqli_fetch_array($count);
                      ?>
                    <tr>
                      <td><b><?php echo $result_course['Total_course'];?></b></td>
                    </tr>
                  </h4>
                </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="inquiry_details.php"><div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-1">
                      <i class="fa fa-solid fa-question font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis">Inquiry</span>
                    <h4 class="mb-0">
                    <?php 
                        $str="SELECT count(inquiry_id) as Total_inquiry FROM inquiry_tbl";
                        $count=mysqli_query($conn,$str);
                        $result_inquiry=mysqli_fetch_array($count);
                        ?>
                      <tr>
                        <td><b><?php echo $result_inquiry['Total_inquiry'];?></b></td>
                      </tr>
                    </h4>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="package.php"><div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                      <i class="fa fa-gift font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis">Package</span>
                    <h4 class="mb-0"> 
                      <?php 
                      $str="SELECT count(package_id) as Total_package FROM package_tbl";
                        $count=mysqli_query($conn,$str);
                        $result_package=mysqli_fetch_array($count);
                        ?>
                    <tr>
                      <td><b><?php echo $result_package['Total_package'];?></b></td>
                    </tr>
                    </h4>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <a href="tutor_subscription_detail.php"><div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                      <i class="fa fa-inr font-medium-5"></i>
                    </div>
                    <span class="text-muted mb-0 line-ellipsis">Total Income [₹]</span>
                    <h4 class="mb-0">
                      <?php 
                      $str="SELECT SUM(package_price) as Total_Price FROM package_detail_tbl,package_tbl where package_detail_tbl.package_id=package_tbl.package_id";
                      $count=mysqli_query($conn,$str);
                      $result_count=mysqli_fetch_array($count);
                      ?>
                    <tr>
                      <td><b>₹ <?php echo $result_count['Total_Price'];?></b></td>
                    </tr>
                  </h4>
                </a>
                  </div>
                </div>
              </div>              
            </div>
        <!-- Widgets Statistics End -->    

          
          <div class="row">
            <!-- Task Card Starts -->
            <div class="col-lg-12">
              <div class="row">
                <div class="col-12">
                  <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center flex-wrap">
                      <h4 class="card-title d-flex mb-25 mb-sm-0">
                        <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Monthly Registered Tutors
                      </h4>
                      
                    </div>
                    <div class="card-body px-0 py-1">
                      <div id="tutor_container"></div>
                        <div class="x_content">
                          <div class="col-md-8 col-sm-8 col-xs-12">
                              
                              <button id="plain" type="button" class="btn btn-round btn-success">Plain</button>
                                  <button id="inverted" type="button" class="btn btn-round btn-warning">Inverted</button>
                                  <button id="polar" type="button" class="btn btn-round btn-danger">Polar</button>
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
                      <ul class="list-inline d-flex mb-25 mb-sm-0">
                      </ul>
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

          <div class="row">
            <!-- Tutor Card Starts -->
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Recent Tutor List</h4>
                      </div>
                      <div class="card-body card-dashboard">

                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                             <tr>
                                <th>Image </th>
                                <th>Name</th>
                                <th>Email </th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Pincode</th>
                                <th>Tutor Classes</th>
                                <th>Register Date</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // $qry="select * from tutor_tbl";
                                $qry="SELECT * FROM `tutor_tbl` ORDER BY `tutor_tbl`.`tutor_id` DESC limit 5";

                                $test=mysqli_query($conn,$qry);
                                while($result=mysqli_fetch_array($test))
                                {
                                ?>
                                <tr>
                                    <?php if (file_exists('../tutor/images/'.$result['tutor_image']) && !empty( $result['tutor_image']))  { ?>
                                    <td><img src="../tutor/images/<?php echo $result['tutor_image'];?>"height="100px" width="100px"></td>
                                    <?php } else { ?>
                                      <td><img src="../images/avtar.png?>"height="100px" width="100px"></td>
                                    <?php } ?>
                                    <td><?php echo $result['tutor_name']?></td>
                                    <td><?php echo $result['tutor_email']?></td>
                                    <td><?php echo $result['tutor_contact']?></td>
                                    <td><?php echo $result['tutor_address']?></td>
                                    <td><?php echo $result['pincode']?></td>
                                    <td><?php echo $result['tutor_classes']?></td>
                                    <td><?php echo date("d-M-Y", strtotime($result['register_date']))?></td>
                                    <td><?php 
                                      if($result['tutor_status']==1) 
                                      {
                                        echo '<span class="badge bg-success">Active</span>';
                                      } 
                                      else
                                      {
                                      echo '<span class="badge bg-danger">Inactive</span>';
                                      }?>
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
            </div>
            <!-- End Tutor Card -->
          </div>

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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email </th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Pincode</th>
                                <th>Register Date</th>                             
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $qry="SELECT * FROM `user_tbl` ORDER BY `user_tbl`.`user_id` DESC limit 5";
                                $test=mysqli_query($conn,$qry);
                                while($result=mysqli_fetch_array($test))
                                {
                                ?>
                                <tr>
                                    
                                    <?php if (file_exists('../images/student/'.$result['user_image']) && !empty( $result['user_image']))  { ?>
                                    <td><img src="../images/student/<?php echo $result['user_image'];?>"height="100px" width="100px"></td>
                                    <?php } else { ?>
                                      <td><img src="../images/avatar.jpg"height="100px" width="100px" alt="test"></td>
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
                                    <td><?php echo date("d-M-Y", strtotime($result['register_date']))?></td>
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
                      <h4 class="card-title">Recent Package Payment List</h4>
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
                        <table class="table table-hover">
                          <thead>
                           <tr>
                              <th>Tutor Name</th>
                              <th>Type</th>
                              <th>Duration (Month)</th>
                              <th>Price(₹)</th>
                              <th>Purchase Date</th>
                              <th>Exp.Date</th>
                              <th style="width: 200px;">Days Left <img src="images/clock.png" width="23px" ;></th>
                              <th>Status</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                              <?php   
                              $qry="select * from package_detail_tbl,package_tbl,tutor_tbl where package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id=tutor_tbl.tutor_id order by package_detail_tbl.package_detail_id DESC";
                                // echo $qry;die;
                              $test=mysqli_query($conn,$qry);
                              while($result=mysqli_fetch_array($test))
                              {
                              ?>
                              <tr>
                                  <td><?php echo $result['tutor_name']?></td>
                                  <td><?php echo $result['package_type']?></td>
                                  <td><?php echo $result['package_duration']?></td>
                                  <td><?php echo $result['package_price']?></td>
                                  <td><?php echo  date("d-M-Y", strtotime($result['purchase_date']))?></td>
                                  <td><?php echo  date("d-M-Y", strtotime($result['package_exp_date']))?></td>
                                  <td><?php
                                    //Convert to date
                                    //$datestr="2022-02-06";//Your date
                                    $datestr=$result['package_exp_date'];//Your date
                                    $date=strtotime($datestr);//Converted to a PHP date (a second count)

                                    //Calculate difference
                                    $diff=$date-time();//time returns current time in seconds
                                    $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
                                    $hours=round(($diff-$days*60*60*24)/(60*60));


                                     if($days<0)
                                    {
                                      echo '<span class="badge bg-danger ">Expire</span>';
                                    }
                                    else
                                    {
                                        echo "$days days  remain<br />";

                                    }

                                    //Report
                                    //echo "$days days  remain<br />";;
                                    ?>
                                  </td>
                                  <td><?php 
                                    if($result['package_detail_status']==1) 
                                    {
                                      echo '<span class="badge bg-success">Success</span>';
                                    } 
                                    else
                                    {
                                      echo '<span class="badge bg-danger">Pending</span>';
                                    }?> 
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
            </div>
            <!-- End Payment Card -->
          </div>
        </section>
        </div>
      </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Customizer-->

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

    <!--Starts Monthly Registered Tutors-->
    <?php   
      $monthly_student = student_get_ByMonth();
      $monthName_student = student_get_ByMonth(); 
      function student_get_ByMonth()
      {
        global $conn;
        $sql = "SELECT COUNT('user_id') as 'number_of_student',extract(month FROM register_date ) as month 
            FROM `user_tbl` 
            GROUP BY extract(month FROM register_date)  ORDER by month";
            //echo $sql;
        $students =  mysqli_query($conn,$sql);
        return $students;
      }
      ?>
    <!--End Monthly Registered Tutors-->
      
    <!--Start Monthly Registered Student-->
      <?php     
      $monthly_tutor = tutor_get_ByMonth();
      $monthName_tutor = tutor_get_ByMonth(); 
      function tutor_get_ByMonth()
      {
        global $conn;
        $sql = "SELECT COUNT('tutor_id') as 'number_of_tutors',extract(month FROM register_date ) as month 
            FROM `tutor_tbl` 
            GROUP BY extract(month FROM register_date)  ORDER by month";
            //echo $sql;
        $tutors =  mysqli_query($conn,$sql);
        return $tutors;
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

    <!-- Monthly Registerd Tutors   -->
    <script>
    
      var chart = Highcharts.chart('tutor_container', {

        title: {
          text: 'Monthly Registered Tutors'
        },

        subtitle: {
          text: 'Plain'
        },

        xAxis: {
          //categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
          categories: [<?php while($row1 = mysqli_fetch_array($monthName_tutor)) { echo "'".date("F", mktime(0, 0, 0, $row1['month']))."',";  } ?>]
        },

        series: [{
          type: 'column',
          colorByPoint: true,
          data: [<?php while($rows = mysqli_fetch_array($monthly_tutor)) { echo $rows['number_of_tutors'].",";  } ?>],
          showInLegend: false
        }]

      });
                            
                  
      $('#plain1').click(function () {
        chart.update({
          chart: {
            inverted: false,
            polar1: false
          },
          subtitle: {
            text: 'Plain'
          }
        });
      });

      $('#inverted1').click(function () {
        chart.update({
          chart: {
            inverted: true,
            polar1: false
          },
          subtitle: {
            text: 'Inverted'
          }
        });
      });

      $('#polar1').click(function () {
        chart.update({
          chart: {
            inverted: false,
            polar1: true
          },
          subtitle: {
            text: 'Polar'
          }
        });
      });

    </script>
      <!-- Monthly Registerd Tutors   -->

  </body>
  <!-- END: Body-->

<!-- /widgets.html by,  04:44:54 GMT -->
</html>