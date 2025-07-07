
<?php
session_start();
require_once("connect.php");

//General If-------------------------------------------
 $fn='';
 $tg='';
 $doc='';
 $lg='';
 $yr='';
 $ts='';
 $ov='';
 $wp='';
 $genupd_id='';
 if(!empty($_GET['genup_id']))
 {
    $genupd_id=$_GET['genup_id'];
    $qry="select * from tutor_prof_detail_tbl,tutor_tbl where tutor_tbl.tutor_id=tutor_prof_detail_tbl.tutor_id and tutor_prof_detail_id='".$genupd_id."'";
	//echo $qry;

    $result=mysqli_query($cnn,$qry);
    $test=mysqli_fetch_array($result);
    $fn=$test['tutor_name'];
    $tg=$test['tutor_profile_tagline'];
    $doc=$test['identity_doc'];
    $lg=$test['language'];
    $yr=$test['experience_year'];
    $ts=$test['trained_student'];
    $ov=$test['overview'];
    $wp=$test['tutor_wallpaper'];
 }
if(isset($_POST['gensbtn']))
{
if(!empty($_GET['genup_id']))
{

   // $image="";

    if(!empty($genupd_id))
        {
          //echo $upd_id; die;
           if($_FILES['profile']['tmp_name']=="") 
           {
              $image=$doc;
           }
           else
           {
            move_uploaded_file($_FILES['profile']['tmp_name'],"images/".$_FILES['profile']['name']);
            $image=$_FILES['profile']['name'];
           }
			if($_FILES['wallpaper']['tmp_name']=="")
           {
            $wallpaper=$wp;
           }
           else 
           {
             move_uploaded_file($_FILES['wallpaper']['tmp_name'],"images/".$_FILES['wallpaper']['name']);
             $wallpaper=$_FILES['wallpaper']['name'];
           }

            $str="update tutor_prof_detail_tbl set tutor_profile_tagline='".$_POST['tagline']."',identity_doc='".$image."',language='".$_POST['lan']."',experience_year='".$_POST['year']."',trained_student='".$_POST['tstud']."',overview='".$_POST['view']."',tutor_wallpaper='".$wallpaper."' where tutor_prof_detail_id=".$genupd_id;
           //echo $str;die;
             mysqli_query($cnn,$str);
            $_SESSION['prof_doc']=$image;
			$str1="update tutor_tbl set tutor_name='".$_POST['fname']."',tutor_image='".$image."' where tutor_id='".$_SESSION['tid']."'";
            //echo $str1;die;
			$tutor_prof_update=mysqli_query($cnn,$str1);

        }


  // move_uploaded_file($_FILES['profile']['tmp_name'],"images/".$_FILES['profile']['name']);
  // $image=$_FILES['profile']['name'];



  // move_uploaded_file($_FILES['wallpaper']['tmp_name'],"images/".$_FILES['wallpaper']['name']);
  // $wallpaper=$_FILES['wallpaper']['name'];

  // $str="update tutor_prof_detail_tbl set tutor_profile_tagline='".$_POST['tagline']."',identity_doc='".$image."',language='".$_POST['lan']."',experience_year='".$_POST['year']."',trained_student='".$_POST['tstud']."',overview='".$_POST['view']."',tutor_wallpaper='".$wallpaper."' where tutor_prof_detail_id=".$genupd_id;

  //  mysqli_query($cnn,$str);
  // $str1="update tutor_tbl set tutor_name='".$_POST['fname']."' where tutor_id=".$genupd_id;
  // $tutor_prof_update=mysqli_query($cnn,$str1);

  if($tutor_prof_update)
  {
    $_SESSION['tname']=$_POST['fname'];
    $_SESSION['update']="Profile Update Successfully...";
  }

  // if($tut_data)
  // {
  //   $_SESSION['success']="Data Update Successfully...";
  // }
    // header('location:tutor_setting.php');

}
else
{

  /*move_uploaded_file($_FILES['profile']['tmp_name'],"images/".$_FILES['profile']['name']);
  $image=$_FILES['profile']['name'];*/
  if($_FILES['profile']['tmp_name']=="") 
   {
      $image=$doc;
   }
   else
   {
    move_uploaded_file($_FILES['profile']['tmp_name'],"images/".$_FILES['profile']['name']);
    $image=$_FILES['profile']['name'];
   }

   if($_FILES['wallpaper']['tmp_name']=="")
   {
    $wallpaper=$wp;
   }
   else 
   {
     move_uploaded_file($_FILES['wallpaper']['tmp_name'],"images/".$_FILES['wallpaper']['name']);
     $wallpaper=$_FILES['wallpaper']['name'];
   }
  $tutor_prof_status=1;
  
  $str="insert into tutor_prof_detail_tbl values(NUll,'".$_SESSION['tid']."','".$_POST['tagline']."','".$image."','".$_POST['lan']."','".$_POST['year']."','".$_POST['tstud']."','".$_POST['view']."','".$wallpaper."','".$tutor_prof_status."')";

  $tutor_prof_success=mysqli_query($cnn,$str);
   //echo $str;die;
  $str1="insert into tutor_tbl values('".$_POST['fname']."')";
  $tutor_prof_success=mysqli_query($cnn,$str1);

  if($tutor_prof_success)
  {
    $_SESSION['success']="Profile Added Successfully...";
  }
} 
header('location:tutor_profile.php');
}

//Change Password----------------------------------------------------------------
if(isset($_POST['Change_pwd']))
  {
    $qry="select * from tutor_tbl where tutor_id='".$_SESSION['tid']."'";
    $test=mysqli_query($cnn,$qry);
    $result=mysqli_fetch_array($test); 
    $old_pwd=$result['tutor_password'];
 
    if($old_pwd==$_POST['currpwd'])
    {
         if($_POST['newpwd']===$_POST['cfmpwd'])
          {
            $str="update tutor_tbl set tutor_password='".$_POST['newpwd']."' where tutor_id='".$_SESSION['tid']."'";
            //echo $str;die;
            mysqli_query($cnn,$str);

            echo "echo <script>alert('Password Changed Sucessfully..');
            window.location.href='index.php';
              </script>;";
          }
          else
          {
            $pwd_error="New Password and Confirm Password Doesn't Not Matched";
           } 
        }
        else
      {
         $oldpwd_error="Old Password Not Matched";
      }
    
    header('location:tutor_profile.php');

}



//Social Links----------------------------------------------------------------
 $fb='';
 $gg='';
 $ig='';
 $tw='';
 $yt='';
 $lk='';
 if(!empty($_GET['genup_id']))
 {
   //echo "asdasd";die;
   $gen_up_id=$_GET['genup_id'];
  $qry_social="select * from tutor_social_tbl,tutor_tbl where tutor_tbl.tutor_id=tutor_social_tbl.tutor_id  and tutor_social_tbl.tutor_id='".$_SESSION['tid']."'";
     //echo $qry_social;die;  
      $test_social=mysqli_query($cnn,$qry_social);
      $test=mysqli_fetch_array($test_social);
      if($test!=null){                              
      $fb=$test['facebook'];
      $gg=$test['google'];
      $ig=$test['instagram'];
      $tw=$test['twitter'];
      $yt=$test['youtube'];
      $lk=$test['linkedin'];
    }
 }
if(isset($_POST['socsbtn']))
{
if(!empty($_GET['genup_id']))
{
  // $str="update tutor_social_tbl set tutor_profile_tagline='".$_POST['tagline']."',identity_doc='".$image."',language='".$_POST['lan']."',experience_year='".$_POST['year']."',trained_student='".$_POST['tstud']."',overview='".$_POST['view']."',tutor_wallpaper='".$wallpaper."' where tutor_prof_detail_id=".$socupd_id;
  $str="update tutor_social_tbl set facebook='".$_POST['facebook']."',google='".$_POST['google']."',instagram='".$_POST['insta']."',twitter='".$_POST['twit']."',youtube='".$_POST['utube']."',linkedin='".$_POST['link']."' where tutor_id=".$_SESSION['tid'];
  //echo $str,die;
  mysqli_query($cnn,$str);
  //$a_id=$_SESSION['tid'];
  $a_id=$gen_up_id;
  header('location:tutor_profile.php');
}
else
{
  $str="insert into tutor_social_tbl values(NUll,'".$_SESSION['tid']."','".$_POST['facebook']."','".$_POST['google']."','".$_POST['insta']."','".$_POST['twit']."','".$_POST['utube']."','".$_POST['link']."')";
  $soc_success=mysqli_query($cnn,$str);
     //echo $str;die;
  if($soc_success)
  {
    $_SESSION['success']="Links Added Successfully...";
  }
} 
header('location:tutor_profile.php');
}
?>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<!-- /page-account-settings.html by,  04:45:15 GMT -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Account Setting | <?php echo $title;?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" href="./de3.png">
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

     <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.css">
     <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/toastr.min.css">

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  menu-expanded pace-done" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


    <!-- BEGIN: Header-->
    <?php include_once 'header.php';?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include_once 'sidebar.php';?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Account Settings</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Pages</a>
                  </li>
                  <li class="breadcrumb-item active"> Account Settings
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- account setting page start -->
 <!--    <section id="page-account-settings">
      <section id="animation">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Show / Hide Animation</h4>
          </div>
          <div class="card-body">
            <p>Use the jQuery <code>show/hide</code> method of your choice. These default to <code>fadeIn/fadeOut</code>.
              The methods <code>fadeIn/fadeOut</code>, <code>slideDown/slideUp</code>, and <code>show/hide</code> are built
              into jQuery.</p>
            <button type="button" class="btn btn-outline-warning mr-1 mb-1" id="slide-toast">slideDown -
              slideUp</button>
            <button type="button" class="btn btn-outline-warning mr-1 mb-1" id="fade-toast">fadeIn -
              fadeOut</button>
          </div>
        </div>
</section> -->
    <div class="row">
        <div class="col-12">
            <div class="row">
                <!-- left menu section -->
                <div class="col-md-3 mb-2 mb-md-0 pills-stacked">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-pill-general" data-toggle="pill"
                                href="#account-vertical-general" aria-expanded="true">
                                <i class="bx bx-cog"></i>
                                <span>General</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="account-pill-password" data-toggle="pill"
                                href="#account-vertical-password" aria-expanded="false">
                                <i class="bx bx-lock"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="account-pill-info" data-toggle="pill"
                                href="#account-vertical-info" aria-expanded="false">
                                <i class="bx bx-info-circle"></i>
                                <span>Info</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="account-pill-social" data-toggle="pill"
                                href="#account-vertical-social" aria-expanded="false">
                                <i class="bx bxl-twitch"></i>
                                <span>Social links</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="account-pill-connections" data-toggle="pill"
                                href="#account-vertical-connections" aria-expanded="false">
                                <i class="bx bx-link"></i>
                                <span>Connections</span>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="account-pill-notifications" data-toggle="pill"
                                href="#account-vertical-notifications" aria-expanded="false">
                                <i class="bx bx-bell"></i>
                                <span>Notifications</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!-- right content section -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <?php if(isset($tutor_prof_success))  { ?>
                                     <div class="alert alert-success">
                                        <strong>Profile Added Successfully...</strong></a>
                                      </div>
                                    <?php } ?>

                                    <?php if(isset($tutor_prof_update))  { ?>
                                     <div class="alert alert-success">
                                        <strong>Update Successfully...</strong></a>
                                      </div>
                                    <?php } ?>
                                    <form id="general_val" method="POST" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label class="form-label" for="basic-default-name">First Name</label>
                                            <input
                                              type="text"
                                              class="form-control"
                                              name="fname" 
                                              placeholder="Enter Your First Name"
                                              value="<?php echo $fn?>"
                                            />
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label" for="basic-default-name">Tutor Tagline</label>
                                            <input
                                              type="text"
                                              class="form-control"
                                              name="tagline" 
                                              placeholder="Add Tagline"
                                              value="<?php echo $tg?>"
                                            />
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleFormControlFile1" for="basic-default-image">Identity Document</label>
                                            <div class="custom-file">
                                              <input type="file" <?php if(empty($genupd_id)){ echo "required";} ?> accept="image/*" class="custom-file-input" id="customFile" name="profile"/>
                                              <!-- <input type="text"  id="customFile" name="profile" value="<?php echo $ig;?>"/> -->
                                              <label class="custom-file-label" for="customFile">Choose Identity pic</label>
                                              <?php if(isset($doc) && !empty($doc)) { ?>
                                                <img src="images/<?php echo $doc;?>" height="80px" width="80px" >
                                            <?php } ?>
                                            </div>
                                          </div>
                                          <br>
                                          <br>
                                          <br>
                                          <br>
                                          <div class="form-group">
                                            <label class="form-label" for="basic-default-name">Language</label>
                                            <input
                                              type="text"
                                              class="form-control"
                                              name="lan" 
                                              placeholder="Language You May Know"
                                              value="<?php echo $lg?>"
                                            />
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label" for="basic-default-name">Experience Year</label>
                                            <input
                                              type="number"
                                              class="form-control"
                                              name="year" 
                                              placeholder="Experience Year"
                                              value="<?php echo $yr?>"
                                              onkeypress="return event.charCode >= 48"
                                              min="1"
                                            />
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label" for="basic-default-name">Trained Students</label>
                                            <input
                                              type="number"
                                              class="form-control"
                                              name="tstud" 
                                              placeholder="Number Of Students Trained"
                                              value="<?php echo $ts?>"
                                              onkeypress="return event.charCode >= 48"
                                              min="0"
                                            />
                                          </div>
                                          <div class="form-group">
                                            <label class="form-label" for="basic-default-name">Overview</label>
                                            <textarea 
                                              class="form-control"
                                              name="view" 
                                              placeholder="About Yourself"
                                            ><?php echo $ov; ?></textarea>   
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleFormControlFile1" for="basic-default-image">Wallpaper</label>
                                            <div class="custom-file">
                                              <input type="file" <?php if(empty($genupd_id)){ echo "required";} ?> accept="image/*" class="custom-file-input" id="customFile" name="wallpaper"/>
                                              <!-- <input type="text"  id="customFile" name="profile" value="<?php echo $ig;?>"/> -->
                                              <label class="custom-file-label" for="customFile">Choose Wallpeper</label>
                                              <?php if(isset($wp) && !empty($wp)) { ?>
                                                <img src="images/<?php echo $wp;?>" height="80px" width="80px" >
                                            <?php } ?>
                                            </div>
                                          </div>
                                          <br>
                                          <br>
                                          <br>
                                          <br>
                                        <div class="row">
                                          <div class="col-12">
                                             <button type="submit" class="btn btn-primary"  name="gensbtn" value="Submit">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                
                                        <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                    aria-labelledby="account-pill-password" aria-expanded="false">
                                   
                                        <form id="password_val" method="POST">
                                            <div class="content-body">
                                              
                                               <?php if(isset($oldpwd_error))  { ?>
                                                 <div class="alert alert-danger">
                                                    <strong>Oops!</strong> <?php echo $oldpwd_error; ?></a>.
                                                  </div>
                                                <?php } ?>
                                                <?php if(isset($pwd_error))  { ?>
                                                 <div class="alert alert-danger">
                                                    <strong>Oops!</strong> <?php echo $pwd_error; ?></a>.
                                                  </div>
                                            <?php } ?>
                                        <div class="form-group">
                                          <label class="form-label" for="basic-default-name">Current Password</label>
                                          <input
                                            type="password"
                                            class="form-control"
                                            id="currpwd"
                                            name="currpwd"
                                            placeholder="Enter Your Current Password"
                                          />
                                        </div>
                                        
                                        <div class="form-group">
                                          <label class="form-label" for="basic-default-name">New Password</label>
                                          <input
                                            type="password"
                                            class="form-control"
                                            id="newpwd"
                                            name="newpwd"
                                            placeholder="Enter Your New Password"
                                          />
                                        </div>

                                         <div class="form-group">
                                          <label class="form-label" for="basic-default-name">Confirm Password</label>
                                          <input
                                            type="password"
                                            class="form-control"
                                            id="cfmpwd"
                                            name="cfmpwd"
                                            placeholder="Enter Your Confirm Password"
                                          />
                                        </div>
                                       
                                        <div class="row">
                                          <div class="col-12">
                                             <section id="page-account-settings">
          
                                              <button type="submit" class="btn btn-primary"  name="Change_pwd" value="Submit">Submit</button>

                                          </div>
                                        </div>
                                        </form>
                                    </div>
                                    </div>

                                <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                                    aria-labelledby="account-pill-social" aria-expanded="false">
                                    <form method="POST" id="social_val">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="url" class="form-control" name="facebook" placeholder="https://www.facebook.com/" value="<?php echo $fb; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Google</label>
                                                    <input type="url" class="form-control" name="google" placeholder="https://www.google.co.in/"value="<?php echo $gg; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input type="url" class="form-control" name="insta" placeholder="https://www.instagram.com/"value="<?php echo $ig; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="url" class="form-control" name="twit" placeholder="https://www.twitter.com/"value="<?php echo $tw; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Youtube</label>
                                                    <input type="url" class="form-control" name="utube" placeholder="https://www.youtube.com/" value="<?php echo $yt; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>LinkedIn</label>
                                                    <input type="url" class="form-control" name="link" placeholder="https://www.linkedin.com/" value="<?php echo $lk; ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" name="socsbtn" class="btn btn-primary glow mr-sm-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                                    aria-labelledby="account-pill-connections" aria-expanded="false">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <a href="javascript: void(0);" class="btn btn-info">Connect to
                                                <strong>Twitter</strong></a>
                                        </div>
                                        <hr>
                                        <div class="col-12 my-2">
                                            <button
                                                class=" btn btn-sm btn-light-secondary float-right">edit</button>
                                            <h6>You are connected to facebook.</h6>
                                            <p>Johndoe@gmail.com</p>
                                        </div>
                                        <hr>
                                        <div class="col-12 my-2">
                                            <a href="javascript: void(0);" class="btn btn-danger">Connect to
                                                <strong>Google</strong>
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="col-12 my-2">
                                            <button
                                                class=" btn btn-sm btn-light-secondary float-right">edit</button>
                                            <h6>You are connected to Instagram.</h6>
                                            <p>Johndoe@gmail.com</p>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                    aria-labelledby="account-pill-notifications" aria-expanded="false">
                                    <div class="row">
                                        <h6 class="m-1">Activity</h6>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked
                                                    id="accountSwitch1">
                                                <label class="custom-control-label mr-1"
                                                    for="accountSwitch1"></label>
                                                <span class="switch-label w-100">Email me when someone comments
                                                    onmy
                                                    article</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked
                                                    id="accountSwitch2">
                                                <label class="custom-control-label mr-1"
                                                    for="accountSwitch2"></label>
                                                <span class="switch-label w-100">Email me when someone answers on
                                                    my
                                                    form</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="accountSwitch3">
                                                <label class="custom-control-label mr-1"
                                                    for="accountSwitch3"></label>
                                                <span class="switch-label w-100">Email me hen someone follows
                                                    me</span>
                                            </div>
                                        </div>
                                        <h6 class="m-1">Application</h6>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked
                                                    id="accountSwitch4">
                                                <label class="custom-control-label mr-1"
                                                    for="accountSwitch4"></label>
                                                <span class="switch-label w-100">News and announcements</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="accountSwitch5">
                                                <label class="custom-control-label mr-1"
                                                    for="accountSwitch5"></label>
                                                <span class="switch-label w-100">Weekly product updates</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" checked
                                                    id="accountSwitch6">
                                                <label class="custom-control-label mr-1"
                                                    for="accountSwitch6"></label>
                                                <span class="switch-label w-100">Weekly blog digest</span>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- account setting page ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    

    <!-- Buynow Button-->
    <!-- <div class="buy-now"><a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger">Buy Now</a> -->

    </div>
    <!-- demo chat-->
    <div class="widget-chat-demo"><!-- widget chat demo footer button start -->
<!-- <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
    data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button> -->
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
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="app-assets/vendors/js/file-uploaders/dropzone.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->
     <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-account-settings.min.js"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <script src="app-assets/js/scripts/extensions/toastr.min.js"></script>

    <!-- END: Page JS-->

    <script>
      $('#custom_val').validate({
        rules: {
          

          fname: {
            required: true,
             minlength: 3,
          lettersonly: true 
        },

         tagline: {
            required: true,
             minlength: 3,
          lettersonly: true 
        },

         profile: {
            required: true,
        },

         lan: {
            required: true,
          minlength: 3,
          lettersonly: true 
        },

         year: {
            required: true,
        },

         tstud: {
            required: true,
        },

         view: {
            required: true,
        },

      },
      messages: {
         fname: {
                       required: "Topic Name Is Required",        
                    },
        tagline: {
                       required: "Tutor Name Is Required",
                    },
        profile: {
                       required: "Course Name Is Required", 
        
                    },
        lan: {
                       required: "Course Detail Is Required",
                       
                       },
        year: {
                       required: "Course image Is Required",
                       
                      
        
                    },
        tstud: {
                       required: "Course Fees Is Required",

                    },
        view: {
                       required: "Available Seat Is Required",
                    },
        wallpaper: {
                       required: "Available Duration Is Required",
                    },
        
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Please Enter Name in Characters Only"); 
      
     
      </script>
   <!--  <script type="text/javascript">
        
        $(document).ready(function() {
            $("#general_val").validate({
                  rules: {
                      tagline: {
                          required: true,
                          lettersonly1:true
                      },
                      profile: {
                          required: true,
                      },
                      lan : {
                          required: true,
                          lettersonly:true
                      },
                      year: {
                          required: true,
                      },
                      tstud: {
                          required: true,
                      }, 
                      
                      view: {
                          required: true,
                          lettersonly:true
                      },
                      wallpaper: {
                          required: true,
                          
                      },
                      
                      }
                  });
                  messages: {
                        tagline: {
                        minlength: "Category Name should be at least 3 characters"
                      }
                  }
           
            });
        jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s*!.,@#$%^&*]+$/i.test(value);
    }, "Only alphabetical characters");

        jQuery.validator.addMethod("lettersonly1", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
    }, "Only alphabetical characters");
    </script>

   

     <script type="text/javascript">
      
      $(document).ready(function() {
          $("#password_val").validate({
                rules: {
                    currpwd : {
                        required: true,
                        minlength: 3
                        lettersonly:true

                    }, 
                    newpwd : {
                        required: true,
                        minlength: 3
                        lettersonly:true

                    },  
                    cfmpwd : {
                        required: true,
                        minlength: 3
                        lettersonly:true
                    }
                        
                    // age: {
                    //     required: true,
                    //     number: true,
                    //     min: 18
                    // },
                    }
                });
                messages : {
                      currpwd: {
                      required: "Please enter Your old Password"
                    }
                }
         
          });
       jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9\s*!.,@#$%^&*]+$/i.test(value);
    }, "Only alphabetical characters");

    </script> -->

  </body>
  <!-- END: Body-->

<!-- /page-account-settings.html by,  04:45:15 GMT -->
</html>