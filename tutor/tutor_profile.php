<!DOCTYPE html>
<?php
session_start();
require_once("connect.php");
if(!isset($_SESSION['tmail'])) 
 {
  header('location:index.php');
}
?>

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- /page-user-profile.html by,  04:44:28 GMT -->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>User Profile | <?php echo $title;?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-user-profile.min.css">
    <!-- END: Page CSS-->

    <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />

    <link rel="stylesheet" href="assets/vendor/css/pages/ui-carousel.css" />

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

* {
  box-sizing: border-box;
}



.heading {
  font-size: 25px;
  margin-right: 25px;
}



.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static menu-expanded pace-done" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   


   <?php include_once 'header.php';?>

   <?php include_once 'sidebar.php';?>

  
   <?php 
       
        // $qry="select * from tutor_prof_detail_tbl,tutor_degree_tbl,tutor_tbl where tutor_prof_detail_tbl.tutor_id=tutor_tbl.tutor_id and tutor_degree_tbl.tutor_id = tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";
        $qry="select * from tutor_prof_detail_tbl where tutor_id='".$_SESSION['tid']."'";
        //echo $qry;
        $test=mysqli_query($cnn,$qry);
        $result=mysqli_fetch_array($test);
    ?>
 
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- page user profile start -->
          <section class="page-user-profile">
            <div class="row">
              <div class="col-12">
                <!-- user profile heading section start -->
                <div class="card">
                  <div class="user-profile-images">
                    <!-- user wallpaper image -->
                      <!-- <img src="images/<?php echo $result['tutor_wallpaper'];?>" class="img-fluid rounded-top user-timeline-image" alt="user timeline image" width="1300" style="height: 374px;width: 1572px;"> -->

                    
                       <!--  wallpapaer -->   
                     <?php
                    if(isset($_FILES["txtImage_wallpaper"]["name"]))
                      {
                        if($_FILES["txtImage_wallpaper"]["name"]!="")
                        {
                          if($_FILES["txtImage_wallpaper"]["type"]=="image/png"||$_FILES["txtImage_wallpaper"]["type"]=="image/jpg"||$_FILES["txtImage_wallpaper"]["type"]=="image/jpeg")
                          {
                            $imgwallpaer=date("Ymdhis").$_FILES["txtImage_wallpaper"]["name"];

                            $selQuery="select * from tutor_prof_detail_tbl where tutor_id=".$_SESSION["tid"];
                            $selRes=mysqli_query($cnn,$selQuery);
                            $selResArr=mysqli_fetch_array($selRes);

                            if(file_exists("images/".$selResArr["tutor_wallpaper"]))
                              unlink("images/".$selResArr["tutor_wallpaper"]);

                            $upQuery="update tutor_prof_detail_tbl set tutor_wallpaper='".$imgwallpaer."' where tutor_id=".$_SESSION["tid"];
                            mysqli_query($cnn,$upQuery);

                            move_uploaded_file($_FILES["txtImage_wallpaper"]["tmp_name"],"images/".$imgwallpaer);
                            echo "<script>window.location='tutor_profile.php'</script>";
                            // header('location:tutor_profile.php');
                          }
                          else
                            echo "<script>alert('Profile Picture must be any one of types - png, jpg or jpeg');</script>";
                        }
                      }
                      
                    $queryImage="select * from tutor_prof_detail_tbl where tutor_id=".$_SESSION["tid"];
                    $img_wallpapaerSet="avatar.jpg";
                    
                    $resImage=mysqli_query($cnn,$queryImage);
                    if(mysqli_num_rows($resImage) > 0) {
                    $resArrImage=mysqli_fetch_array($resImage);
                    if($resArrImage["tutor_wallpaper"]=="")
                       $img_wallpapaerSet="avatar.jpg";
                     //$img_wallpapaerSet=$resArrImage["tutor_wallpaper"];
                    else
                      $img_wallpapaerSet=$resArrImage["tutor_wallpaper"];
                      //$img_wallpapaerSet="avatar.jpg";
                    }
                    ?>
                    <form method="post" enctype="multipart/form-data" style="margin:0px;">
                        <input type="file" name="txtImage_wallpaper" id="txtImage_wallpaper" onchange="submit();" style="display:none;">
                        <label id="lblImage" for="txtImage_wallpaper" style="cursor:pointer;">
                          <!-- <span style="border:2px solid #d5d5d4;padding: 8px;background-color: #fff; border-radius: 100%;font-size: 15px; position: absolute;margin-left: 75px;margin-top: 14px;"><i class="fa fa-pencil" ></i></span> -->
                        
                          <img src="images/<?php echo $img_wallpapaerSet;?>" class="img-fluid rounded-top user-timeline-image" style="height: 374px;width: 1572px;" />
                          
                          <!-- <div class="overlayEdit">
                            <span href="#" class="iconEdit" title="User Edit">
                              <i class="fa fa-camera"></i>
                            </span>
                          </div> -->
                        </label>
                    </form>
                    
                    <!--  wallpapaer -->   
                  


                     <?php
                    if(isset($_FILES["txtImage"]["name"]))
                      {
                        if($_FILES["txtImage"]["name"]!="")
                        {
                          if($_FILES["txtImage"]["type"]=="image/png"||$_FILES["txtImage"]["type"]=="image/jpg"||$_FILES["txtImage"]["type"]=="image/jpeg")
                          {
                            $imgVendor=date("Ymdhis").$_FILES["txtImage"]["name"];

                            $selQuery="select * from tutor_tbl where tutor_id=".$_SESSION["tid"];
                            $selRes=mysqli_query($cnn,$selQuery);
                            $selResArr=mysqli_fetch_array($selRes);
                           

                            if(file_exists("images/".$selResArr["tutor_image"]))
                              unlink("images/".$selResArr["tutor_image"]);

                            $upQuery="update tutor_tbl set tutor_image='".$imgVendor."' where tutor_id=".$_SESSION["tid"];
                            mysqli_query($cnn,$upQuery);
                            $_SESSION['prof_doc']=$imgVendor;
                            move_uploaded_file($_FILES["txtImage"]["tmp_name"],"images/".$imgVendor);
                            echo "<script>window.location='tutor_profile.php'</script>";
                            // header('location:tutor_profile.php');
                          }
                          else
                            echo "<script>alert('Profile Picture must be any one of types - png, jpg or jpeg');</script>";
                        }
                      }
                      
                    $queryImage="select * from tutor_tbl where tutor_id=".$_SESSION["tid"];
                    $resImage=mysqli_query($cnn,$queryImage);
                    $resArrImage=mysqli_fetch_array($resImage);

                    if($resArrImage["tutor_image"]=="")
                      $imgVendorSet="guest-user.jpg";
                    else
                      $imgVendorSet=$resArrImage["tutor_image"];
                    ?>
                    <form method="post" enctype="multipart/form-data" style="margin:-10px;">
                        <input type="file" name="txtImage" id="txtImage" onchange="submit();" style="display:none;">
                        <label id="lblImage" for="txtImage" style="cursor:pointer;">
                          <!-- <span style="border:2px solid #d5d5d4;padding: 8px;background-color: #fff; border-radius: 100%;font-size: 15px; position: absolute;margin-left: 75px;margin-top: 14px;"><i class="fa fa-pencil" ></i></span> -->
                        
                          <img src="images/<?php echo $imgVendorSet;?>" class="user-profile-image rounded"
                          style="height:140px;width:140px;border:0px solid #59bacc;background-color: #59bacc;" />
                          
                          <!-- <div class="overlayEdit">
                            <span href="#" class="iconEdit" title="User Edit">
                              <i class="fa fa-camera"></i>
                            </span>
                          </div> -->
                        </label>
                    </form>





                  </div>
                  <div class="user-profile-text">
                    <h4 class="mb-0 text-bold-500 profile-text-color">
                      <?php if(isset($_SESSION['tname'])) { echo $_SESSION['tname']; } ?></h4>
                    <small><?php if(isset($result['tutor_profile_tagline'])) { echo $result['tutor_profile_tagline']; }?></small>
                  </div>
                  <!-- user profile nav tabs start -->
                  <div class="card-body px-0">
                    <ul
                      class="nav user-profile-nav justify-content-center justify-content-md-start nav-pills border-bottom-0 mb-0"
                      role="tablist">
                      <li class="nav-item mb-0">
                        <a class=" nav-link d-flex px-1 active" id="feed-tab" data-toggle="tab" href="#feed"
                          aria-controls="feed" role="tab" aria-selected="true"><i class="bx bx-home"></i><span
                            class="d-none d-md-block">Feed</span></a>
                      </li>
                      <li class="nav-item mb-0">
                        <a class="nav-link d-flex px-1" id="activity-tab" data-toggle="tab" href="#activity"
                          aria-controls="activity" role="tab" aria-selected="false"><i class="bx bx-user"></i><span
                            class="d-none d-md-block">Activity</span></a>
                      </li>
                     <!--  <li class="nav-item mb-0">
                        <a class="nav-link d-flex px-1" id="friends-tab" data-toggle="tab" href="#friends"
                          aria-controls="friends" role="tab" aria-selected="false"><i class="bx bx-message-alt"></i><span
                            class="d-none d-md-block">Friends</span></a>
                      </li> -->
                      <li class="nav-item mb-0 mr-0">
                        <a class="nav-link d-flex px-1" id="profile-tab" data-toggle="tab" href="#profile"
                          aria-controls="profile" role="tab" aria-selected="false"><i class="bx bx-copy-alt"></i><span
                            class="d-none d-md-block">Profile</span></a>
                      </li>
                    </ul>
                  </div>
                  <!-- user profile nav tabs ends -->
                </div>
                <!-- user profile heading section ends -->

                <!-- user profile content section start -->
                <div class="row">
                  <!-- user profile nav tabs content start -->
                  <div class="col-lg-12">
                    <div class="tab-content">
                      <div class="tab-pane active" id="feed" aria-labelledby="feed-tab" role="tabpanel">
                        <!-- user profile nav tabs feed start -->
                        <div class="row">
                          <!-- user profile nav tabs feed left section start -->
                          <div class="col-lg-6">
                            <!-- user profile nav tabs feed left section info card start -->
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title mb-1">Info
                                  <i class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                </h5>

                               <?php 
                                   
                                    $qry_degree="select * from tutor_degree_tbl where tutor_id='".$_SESSION['tid']."'";
                                   // $qry="select * from tutor_prof_detail_tbl where tutor_id='".$_SESSION['tid']."'";
                                    //echo $qry;
                                    $test_degree=mysqli_query($cnn,$qry_degree);
                                    $result_degree=mysqli_fetch_array($test_degree);
                                ?>
 
                                <ul class="list-unstyled mb-0">
                                  <li class="d-flex align-items-center mb-25">
                                    <i class="bx bx-briefcase mr-50 cursor-pointer"></i><span>
                                      University<a href="JavaScript:void(0);">&nbsp;
                                      <?php if(isset($result_degree['college_or_university']) && !empty($result_degree['college_or_university'])) { ?>
                                      <?php echo $result_degree['college_or_university'];?></a></span>
                                      <?php } else { ?>

                                      <span class="text-secondary"><a href="degree_add.php">Add University </a></span>
                                    <?php } ?>
                                    </li>
                                  </li>
                                  <li class="d-flex align-items-center mb-25">
                                    <i class="bx bx-briefcase mr-50 cursor-pointer"></i>
                                    <span>
                                      Expereince<a href="JavaScript:void(0);">&nbsp;
                                      <?php if(isset($result['experience_year']) && !empty($result['experience_year'])) { ?>
                                      <?php echo $result['experience_year']." Year";?></a></span>
                                      <?php } else { ?>
                                      <span class="text-secondary">N/A</span>
                                      <?php } ?>
                                  </li>
                                   
                                 
                                  <li class="d-flex align-items-center">
                                    <i class="bx bx-rss mr-50 cursor-pointer"></i>
                                    <span>Trained Student <a href="JavaScript:void(0);">&nbsp;
                                      <?php if(isset($result['trained_student']) && !empty($result['trained_student'])) { ?>
                                      <?php echo $result['trained_student'];?></a></span>
                                      <?php } else { ?>
                                      <span class="text-secondary">N/A</span>
                                      <?php } ?>
                                      </li>
                                  </li>

                                  <?php 
       
                                      $qry_1="select * from tutor_degree_tbl,degree_tbl where tutor_degree_tbl.degree_id=degree_tbl.degree_id and
                                        tutor_degree_tbl.tutor_id='".$_SESSION['tid']."'";
                                      //echo $qry_1;
                                      $degree_data=mysqli_query($cnn,$qry_1);
                                      
                                  ?>
                                  <li class="d-flex align-items-center mb-25">
                                      
                                    <span >
                                      <?php
                                      while($row_degree=mysqli_fetch_array($degree_data))
                                        { 
                                        ?>
                                        <i class="bx bx-receipt mr-50 cursor-pointer"></i> 
                                    
                                          <?php if(isset($row_degree['degree_name']) && !empty($row_degree['degree_name'])) { ?>
                                          <?php echo $row_degree['degree_name']; ?> <br>
                                          <?php } else { ?>
                                          <span class="text-secondary">N/A</span>
                                          <?php } ?>
                                          <?php } ?>
                                      </span>
                                  </li>
                                </ul>

                              </div>
                            </div>



                         
                            <!-- user profile nav tabs feed left section like page card ends -->
                            <!-- user profile nav tabs feed left section today's events card start -->
                           
                            <!-- user profile nav tabs feed left section today's events card ends -->
                          </div>

                          <div class="col-lg-6">
                            <!-- user profile nav tabs feed left section info card start -->
                            <?php 
                              $q=mysqli_query($cnn,"select * from review_tbl where tutor_id='".$_SESSION['tid']."'");
                                      $row = mysqli_num_rows($q); 
                            ?>
                            <?php if($row != 0)  { ?>
                                   
                                    
                                      
                            <div class="card">
                              <div class="card-body"  >
                                <h5 class="card-title mb-1"> 

                                   <?php  
                                      $wrq=mysqli_query($cnn,"select AVG(rating) as AVGRATE from review_tbl where tutor_id='".$_SESSION['tid']."'"); 
                                      $roww= mysqli_fetch_array($wrq);

                                       // $test_social=mysqli_query($cnn,$qry_social);
                                       //  $result_social=mysqli_fetch_array($test_social);
                                       //  $count_social=mysqli_num_rows($test_social);
                                      $AVGRATE=$roww['AVGRATE'];

                                    ?>
                                      



                                  <span class="">
                                    

                                    My Rating <?php
                                      $x=0;
                                      while ($x<$AVGRATE) {
                                        echo '<i class="cursor-pointer bx bxs-star text-warning ml-50 align-middle"></i>';
                                        $x++;
                                      }
                                    ?>
                                      
                                    </span>
                                  <i class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                </h5>
                                   <!-- review start here -->
                                 
                                    
                                        
                                    <p><?php echo round($AVGRATE,1);?>&nbsp;  average based on <?php echo $row; ?> reviews.</p>
                                  <?php //} ?>
                                   <div class="row">
                                    
                                    <?php 
                                    $bty=mysqli_query($cnn,"SELECT rating,count(rating) as 'num_of_rate' 
                                      FROM `review_tbl` WHERE true and tutor_id='".$_SESSION['tid']."'
                                        group By (rating)");
                                        while($row=mysqli_fetch_array($bty))
                                        {
                                        ?>
                                        
                                      <div class="side">
                                           <div>
                                            <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row['rating'];?> star
                                            
                                          </div>
                                      </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                              <div class="bar-<?php echo $row['rating'];?>" style="width: <?php echo $row['num_of_rate']*10;?>%; height: 18px;background-color: #4CAF50;">
                                                
                                              </div>
                                        </div>
                                      </div>
                                      <div class="side left">
                                  <div>&nbsp;&nbsp;<?php echo $row['num_of_rate'];?></div>
                                  </div>
                                  <?php }  ?>
                                  </div>
                                   <!-- review end here -->
                             
                             

                              </div>
                            </div>
                          <?php } else { ?>
                             <div class="card">
                              <div class="card-body">
                                <h5 class="card-title mb-1"> No Reviews yet
                                  <i class="cursor-pointer bx bx-dots-vertical-rounded float-right"></i>
                                </h5>

                              
                                <ul class="list-unstyled mb-0">
                                  <li class="d-flex align-items-center mb-25">
                                   
                                      <a>
                                        😟😥☹️
                                      </a>
                                    </li>
                                  </li>
                                  
                                 
                                </ul>

                              </div>
                            </div>

                                      <?php }
                            
                                       ?>


                          
                            <!-- user profile nav tabs feed left section like page card ends -->
                            <!-- user profile nav tabs feed left section today's events card start -->
                           
                            <!-- user profile nav tabs feed left section today's events card ends -->
                          </div>
                          <!-- user profile nav tabs feed left section ends -->
                          <!-- user profile nav tabs feed middle section start -->
                        
                          <!-- user profile nav tabs feed middle section ends -->
                        </div>
                        <!-- user profile nav tabs feed ends -->
                      </div>
                      <div class="tab-pane " id="activity" aria-labelledby="activity-tab" role="tabpanel">
                          <!-- package staart here-->
                          <div class="row">
                              <!-- loop start here package staart here-->
                              <?php 
                                $qry_package="select * from package_detail_tbl,package_tbl where package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id='".$_SESSION['tid']."'";
                                //echo $qry;
                                $my_package=mysqli_query($cnn,$qry_package);
                                $no_of_pckgs=mysqli_num_rows($my_package);
                                while($row_package=mysqli_fetch_array($my_package)) {


                              ?>
                              <div class="col-md-6 col-xl-4">
                                <div class="card bg-<?php if($row_package['package_id']==1) { ?>primary <?php } if($row_package['package_id']==2) { ?>danger <?php }  if($row_package['package_id']==3) { ?>warning <?php }  ?> text-white mb-3">
                                  <div class="card-header">My Package List</div>
                                  <div class="card-body">
                                    <!-- <h5 class="card-title text-white">Primary card title</h5> -->
                                    <p class="card-text text-white">
                                      <h5 style="color: white;"><?php echo $row_package['package_type'];?></h5>
                                    </p>

                                    <h4 style="color: white;">From <?php echo $row_package['package_price'];?>₹
                                      For
                                     <?php echo $row_package['package_duration'];?> Month
                                    </h4>

                                    

                                    <!-- <p class="card-text">
                                      Some quick example text to build on the card title and make up.
                                    </p>-->
                                    <p class="card-text">
                                     
                                      <h5 style="color: white;"> <?php 
                                        $datestr=$row_package['package_exp_date'];//Your date
                                        
                                        //$datestr="2022-02-06";//Your date
                                        $date=strtotime($datestr);//Converted to a PHP date (a second count)

                                        //Calculate difference
                                        $diff=$date-time();//time returns current time in seconds
                                        $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
                                        //$hours=round(($diff-$days*60*60*24)/(60*60));

                                        if($days<0)
                                        {
                                          echo '<span class="badge bg-danger ">Expire</span>';
                                        }
                                        else
                                        {
                                          ?>
                                            <p><div class="badge badge-pill badge-light-success mr-1">Active</div></p>
                                            <?php  
                                            echo "Days Left :$days days  remain<br />";

                                        }


                                        //Report
                                        //echo "$days days remain<br />";;

                                         ?> 
                                       </h5>
                                    </p>

                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                              <!-- loop end here package staart here-->
                          </div>
                          <!-- package staart here-->

                      </div>
                       

                     
                     
                      <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                        <!-- user profile nav tabs profile start -->
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-12">
                                <div class="row">
                                  <?php 
                                    $qry_img="select * from tutor_tbl where tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                                    //echo $qry;
                                    $img_res=mysqli_query($cnn,$qry_img);
                                    while($row_img=mysqli_fetch_array($img_res)) {
                                    ?>
                                  <div class="col-12 col-sm-3 text-center mb-1 mb-sm-0">

                                   <!--    <img src="images/<?php echo $row_img['tutor_image'];?>" class="rounded" alt="group image" style="height: 250px;width: 220px";/>  -->

                                  <?php if (file_exists('images/'.$row_img['tutor_image']) && !empty($row_img['tutor_image']))  { ?>
                                  <td><img src="images/<?php echo $row_img['tutor_image'];?>" class="rounded" height="250" width="220"></td>
                                  <?php } else { ?>
                                  <td><img src="images/guest-user.jpg?>" class="round" height="250" width="220"></td>
                                  <?php } ?>

                                  </div>
                                  <?php } ?>
                                  <div class="col-12 col-sm-9">
                                    <div class="row">
                                      <div class="col-12 text-center text-sm-left">
                                        <?php 
                                            $qry_prf="select * from tutor_tbl,tutor_prof_detail_tbl where tutor_prof_detail_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                                            //echo $qry;
                                            $my_prf=mysqli_query($cnn,$qry_prf);
                                            while($row_prf=mysqli_fetch_array($my_prf)) {
                                              ?>
                                            
                                                <h6 class="media-heading mb-0" style="font-size: 30px;">
                                                   <?php if(isset($_SESSION['tname'])) { echo $_SESSION['tname']; } ?>
                                                 <?php 
                                                    if($row_prf['identity_doc']=="") 
                                                    {
                                                      //echo '<img src="images/not_verify.png" style="width:35px;">';
                                                    } 
                                                    else
                                                    {
                                                      echo '<img src="images/verified.png" style="width:25px;">';
                                                    }
                                                  ?> 
                                                
                                              </h6> 

                                              <h6 class="text-muted align-top" style="font-size: 20px;">
                                                <?php echo $row_prf['tutor_profile_tagline'];?></h6>
                                              <?php } ?>
                                            </div>
                                      <div class="col-12 text-center text-sm-left">
                                        <div class="mb-1">
                                          <?php 
                                            $qry_prf="select * from tutor_prof_detail_tbl,tutor_tbl where tutor_prof_detail_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                                            //echo $qry;
                                            $my_prf=mysqli_query($cnn,$qry_prf);
                                            while($row_prf=mysqli_fetch_array($my_prf)) {
                                          ?>
                                          <span><h6>Trained Students  <?php echo $row_prf['trained_student'];?></h6></span>
                                          <span><h6>Experience Year  <?php echo $row_prf['experience_year'];?></h6></span>
                                                                              
                                        <br>
                                        <h5><?php echo $row_prf['overview'];?></h5>
                                        <?php } ?>
                                        </div>
                                        <?php 
                                        $qry_social="select * from tutor_social_tbl where tutor_id='".$_SESSION['tid']."'";
                                        //echo $qry_social;
                                        $test_social=mysqli_query($cnn,$qry_social);
                                       
                                        $result_social=mysqli_fetch_array($test_social);
                                        $count_social=mysqli_num_rows($test_social);
                                        if($count_social > 0){
                                        $facebook=$result_social['facebook'];
                                        $instagram=$result_social['instagram'];
                                        $twitter=$result_social['twitter'];
                                        $google=$result_social['google'];
                                        $youtube=$result_social['youtube'];
                                        $linkedin=$result_social['linkedin'];
                                        }
                                        ?>
                                         <?php if($count_social == 0) { ?>
                                            <p><a href="tutor_setting.php">Add Social Profile </a></p>
                                         <?php } ?>
                                        <div class="social">
                                          <?php if(isset($facebook) && !empty($facebook)) { ?>
                                          <a href="<?php echo $result_social['facebook']; ?>" target="_new"><img src="images/social/facebook.png"/></a>
                                          <?php }?>

                                          <?php if(isset($google) && !empty($google)) { ?>
                                          <a href="<?php echo $result_social['google']; ?>" target="_new"><img src="images/social/google.png"/></a>
                                          <?php } ?>

                                          <?php if(isset($instagram) && !empty($instagram)) { ?>
                                          <a href="<?php echo $result_social['instagram']; ?>" target="_new"><img src="images/social/insta.png"/></a>
                                          <?php } ?>

                                          <?php if(isset($twitter) && !empty($twitter)) { ?>
                                          <a href="<?php echo $result_social['twitter']; ?>" target="_new"><img src="images/social/twitter.png"/></a>
                                          <?php } ?>

                                          <?php if(isset($youtube) && !empty($youtube)) { ?>
                                          <a href="<?php echo $result_social['youtube']; ?>" target="_new"><img src="images/social/youtube.png"/></a>
                                          <?php } ?>

                                          <?php if(isset($linkedin) && !empty($linkedin)) { ?>
                                          <a href="<?php echo $result_social['linkedin']; ?>" target="_new"><img src="images/social/linkedin.png"/></a>
                                          <?php } ?>
                                        </div>
                                           <?php if(isset($result['tutor_prof_detail_id'])) {?>   
                                        <button class="btn btn-sm  float-right  mb-2"><a href="tutor_setting.php?genup_id=<?php echo $result['tutor_prof_detail_id']; ?>"><i class="cursor-pointer bx bx-edit" style='font-size:35px'></i></a></button>
                                        <?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Basic details</h5>
                            <ul class="list-unstyled">
                              <?php 
                              $qry_tutor="select * from tutor_tbl where tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                              //echo $qry;
                              $my_tutor=mysqli_query($cnn,$qry_tutor);
                              while($row_tutor=mysqli_fetch_array($my_tutor)) {
                                ?>
                              <h5><li><i class="cursor-pointer bx bx-map mb-1 mr-50"></i><?php echo $row_tutor['tutor_address'];?></li></h5>
                              <h5><li><i class="cursor-pointer bx bx-phone-call mb-1 mr-50"></i><?php echo $row_tutor['tutor_contact'];?></li></h5>
                              <h5><li><i class="cursor-pointer bx bx-time mb-1 mr-50"></i><?php echo $row_tutor['pincode'];?></li></h5>
                              <h5><li><i class="cursor-pointer bx bx-envelope mb-1 mr-50"></i><?php echo $row_tutor['tutor_email'];?></li></h5>
                              <?php }
                              ?>
                            </ul>
                            <div class="row">
                              <?php 
                              $qry_certi="select * from tutor_certificate_tbl,tutor_tbl where tutor_certificate_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                              //echo $qry_certi;
                              $my_certi=mysqli_query($cnn,$qry_certi);
                              while($row_certi=mysqli_fetch_array($my_certi)) {
                                ?>
                              <div class="col-sm-6 col-12">
                                <h3><small class="text-muted">Institute Agency</small></h3>
                                <h5><?php echo $row_certi['institute_agency'];?></h5>
                              </div>

                              <div class="col-sm-6 col-12">
                                <h3><small class="text-muted">Passing Year</small></h3>
                                <h5><?php echo $row_certi['passing_year'];?></h5>
                              </div>
                            <?php } ?>
                            </div>
                            <div class="row">
                              <?php 
                              $qry_deg="select * from tutor_degree_tbl,tutor_tbl where tutor_degree_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";

                              //echo $qry_deg;
                              $my_deg=mysqli_query($cnn,$qry_deg);
                              while($row_deg=mysqli_fetch_array($my_deg)) {
                                ?>
                              
                              <div class="col-sm-6 col-12">
                                <h3><small class="text-muted">College or university</small></h3>
                                <h5><?php echo $row_deg['college_or_university'];?></h5>
                              </div>
                              <?php } ?>
                            </div>
                            <div class="row">
                              <?php 
                              $qry_prf="select * from tutor_prof_detail_tbl,tutor_tbl where tutor_prof_detail_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                             //echo $qry_prf;
                              $my_prf=mysqli_query($cnn,$qry_prf);
                              while($row_prf=mysqli_fetch_array($my_prf)) {
                                ?>

                              <div class="col-sm-6 col-12">
                                <h3><small class=F"text-muted">Tagline</small></h3>
                                <h5><?php echo $row_prf['tutor_profile_tagline'];?></h5>
                              </div>

                              <div class="col-sm-6 col-12">
                                <h3><small class="text-muted">language</small></h3>
                                <h5><?php echo $row_prf['language'];?></h5>
                              </div>

                              
                              <div class="col-12">
                                <h3><small class="text-muted">Bio</small></h3>
                                <h5><?php echo $row_prf['overview'];?></h5>
                              </div>
                            
                      
                            </div>

                            <button class="btn btn-sm  float-right mb-2"><a href="tutor_setting.php?genup_id=<?php echo $row_prf['tutor_prof_detail_id']; ?>"><i class="cursor-pointer bx bx-edit" style='font-size:35px'></i></a></button>
                          </div>
                          <?php } ?>
                        </div>
                        <!-- user profile nav tabs profile ends -->
                      </div>
                    </div>
          
                  <!-- user profile nav tabs content ends -->

                    <!-- user profile right side content gallery start -->
                    <div class="content-wrapper">        
                      <div class="container-xxl flex-grow-1 container-p-y">      
                        <h4 class="py-3 breadcrumb-wrapper mb-1"><span class="text-muted fw-light">Gallery /</span>My Gallery</h4>
                          <div class="row">
                            <!-- 3D coverflow effect -->
                            <div class="col-12">
                              <div class="swiper-container" id="swiper-3d-coverflow-effect">
                                <?php 
                                  $qry="select * from gallery_tbl,tutor_tbl where gallery_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."' and gallery_tbl.image_status='1'";
                                                          //echo $qry;die;
                                  $gallery_test=mysqli_query($cnn,$qry);
                                  $count_gallery=mysqli_num_rows($gallery_test);

                                 
                                  if($count_gallery > 0 ) { 
                                ?>
                                <div class="swiper-wrapper">

                                  <?php
                                 while($gall_result=mysqli_fetch_array($gallery_test))
                                  {
                                    
                                      ?>
                                      <div class="swiper-slide" style="background-image:url(images/<?php echo $gall_result['images'];?>)"></div>
                                    

                                  <?php  } } else {
                                    echo "<p><a href='gallery_list.php'>Add Gallery From Here</a><p>";
                                  } ?>
                                </div>
                                <?php //if($count_gallery > 0 ) {  ?>
                                <div class="swiper-pagination"></div>
                              <?php //} ?>
                              </div>
                            </div>
                          </div>
                          <div class="content-backdrop fade"></div>
                      </div>
                    </div>
                  </div>

                        </div>
                      </div>
                    </div>
                    <!-- user profile right side content gallery ends -->
                  </div> 
                  <!-- user profile right side content ends -->
                </div>
                <!-- user profile content section start -->
              </div>
            </div>
          </section>
          <!-- page user profile ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><div class="customizer-content p-2">
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


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
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
    <script src="app-assets/js/scripts/pages/page-user-profile.min.js"></script>
    <!-- END: Page JS-->
    <script src="assets/vendor/libs/swiper/swiper.js"></script>
    <script src="assets/js/ui-carousel.js"></script>
  </body>
  <!-- END: Body-->

<!-- /page-user-profile.html by,  04:44:34 GMT -->
</html>