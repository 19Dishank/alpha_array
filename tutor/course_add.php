 <?php
 session_start();
 require_once("connect.php");

 if(!isset($_SESSION['tmail']))
 {
  header('location:index.php');
  }

 $tn='';
 $tu='';
 $cn='';
 $cd='';
 $cf='';
 $as='';
 $ad='';
 $ig='';
 $exam='';
 $upd_id='';
 
 if(!empty($_GET['up_id']))
 { 
    $upd_id=$_GET['up_id'];
    $qry=" select * from course_tbl where course_id=".$upd_id;
    $result=mysqli_query($cnn,$qry);
    $test=mysqli_fetch_array($result);
    $tn=$test['topic_id'];
    $tu=$test['tutor_id'];
    $cn=$test['course_name'];
    $ig=$test['course_image'];
    $cd=$test['course_details']; 
    $cf=$test['course_fees'];
    $as=$test['available_seat'];
    $ad=$test['available_duration'];
    $exam=$test['exam_link'];
    
   
 }
      if(isset($_POST['sbtn']))
      {
        if(!empty($_GET['up_id']))
        {
           //  if($_FILES['profile']['tmp_name']=="") 
           // {
           //    $image=$ig;
           // }
           // else
           // {
           //    move_uploaded_file($_FILES['profile']['tmp_name'],"images/Course/".$_FILES['profile']['name']);
           //    $image=$_FILES['profile']['name'];
           // }


            if($_FILES['profile']['tmp_name']=='')
            {
              $image=$_POST['old_pro_img1'];
            }
            else{
              $image=$_FILES['profile']['name'];
              move_uploaded_file($_FILES['profile']['tmp_name'],'images/Course/'.$image);
            }
          

          $str="update course_tbl set course_name='".$_POST['cname']."',course_details='".$_POST['cdetail']."',course_image='".$image."',course_fees='".$_POST['cfees']."',available_seat='".$_POST['seat']."',available_duration='".$_POST['duration']."',exam_link='".$_POST['link']."' where course_id=".$upd_id;
          $course_update=mysqli_query($cnn,$str);
          // echo $str;die;

          if($course_update)
          {
            $_SESSION['update']="Course Update Successfully...";
          }
          else
          {
             $_SESSION['duplicate']="Course is already exists....";  
          }
        }
        else
        {
          move_uploaded_file($_FILES['profile']['tmp_name'],"images/Course/".$_FILES['profile']['name']);
          $image=$_FILES['profile']['name'];
          $cours_status=1;
          
          $str="insert into course_tbl values(NUll,'".$_POST['topic_id']."','".$_SESSION['tid']."','".$_POST['cname']."','".$_POST['cdetail']."','".$image."','".$_POST['cfees']."','".$_POST['seat']."','".$_POST['duration']."','".$_POST['link']."','".$cours_status."')";
          // echo $str;die;
          $course_success=mysqli_query($cnn,$str);
          
          if($course_success)
          {
            $_SESSION['success']="Course Added Successfully...";
          }
          else
          {
             $_SESSION['duplicate']="Course is already exists....";  
          }
        }
        header('location:course_list.php');
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
    <title>Course Add | <?php echo $title;?></title>
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  menu-expanded pace-done" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
   

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
              <section class="simple-validation">
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
                                      <li class="breadcrumb-item active">Add Course 
                                      </li>
                                    </ol>
                                  </div>
                              </div>
                            </div>
                          </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">Add New Course</h4>
                              </div>
                              <div class="card-body">
                                <form id="custom_val" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="form-label" for="basic-default-name">Topic Name</label>
                            <select class="form-control select2" name="topic_id"> 
                                       <option disabled selected>Select Topic Name</option>   
                                      <?php $data=mysqli_query($cnn,"select * from topic_tbl");
                                        while($row=mysqli_fetch_array($data)){
                                        ?>
                                        <option <?php if ($tn==$row['topic_id']) {echo "selected";} ?> value="<?php echo $row['topic_id']; ?>">
                                          <?php echo $row['topic_name'];?>
                                          </option>   
                                        <?php } ?>
                                </select>
                              </div>
                        <div class="form-group">
                          <label class="form-label" for="basic-default-name">Course Name</label>
                          <input
                            type="text"
                            class="form-control"
                            
                            name="cname" 
                            placeholder="Add Course"
                            value="<?php echo $cn?>"
                          />
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="basic-default-name">Course Detail</label>
                            <textarea name="cdetail" id="editor1" rows="10" cols="80" value="">
                             <?php echo $cd?>
                          </textarea>
                         <!--  <input
                            type="text"
                            class="form-control"
                            
                            name="cdetail" 
                            placeholder="Course Detail"
                            value="<?php //echo $cd?>"
                          /> -->
                        </div>

                          <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <div class="custom-file">
                           <input type="file" <?php if(empty($upd_id)){ echo "required";} ?> accept="image/*" class="custom-file-input" id="customFile" name="profile"/>

                           <input type="hidden" name="old_pro_img1" class="form-control" value="<?php echo $ig?>">

                            <label class="custom-file-label" for="customFile">Choose Course Image</label>
                            <?php if(isset($ig) && !empty($ig)) { ?>
                                <img src="images/Course/<?php echo $ig;?>" height="80px" width="80px" >
                            <?php } ?>
                            </div>
                          </div>

                          <!-- <div class="form-group">
                            <label for="exampleFormControlFile1">Degree Image</label>
                            <div class="custom-file">
                              <input type="file" <?php if(empty($upd_id)){ echo "required";} ?> accept="image/*" class="custom-file-input" id="customFile" name="profile"/>
                              <input type="text"  id="customFile" name="profile" value="<?php echo $ig;?>"/>
                              <label class="custom-file-label" for="customFile">Choose profile pic</label>
                              <?php if(isset($ig) && !empty($ig)) { ?>
                                <img src="images/Degree/<?php echo $ig;?>" height="80px" width="80px" >
                            <?php } ?>
                            </div>
                          </div> -->

                            <br>

                        <div class="form-group">
                          <label class="form-label" for="basic-default-name">Course Fees</label>
                          <input
                            type="number"
                            class="form-control"
                            
                            name="cfees" 
                            placeholder="Course Fees"
                            onkeypress="return event.charCode >= 48" min="1"
                            value="<?php echo $cf?>"
                          />
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="basic-default-name">Available Seat</label>
                          <input
                            type="number"
                            class="form-control"
                            
                            name="seat" 
                            placeholder="Available Seat"
                            onkeypress="return event.charCode >= 48" min="1"
                            value="<?php echo $as?>"
                          />
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="basic-default-name">Available Duration(Month)</label>
                          <input
                            type="number"
                            class="form-control"
                            
                            name="duration" 
                            placeholder="Available Duration"
                            onkeypress="return event.charCode >= 48" min="1"
                            value="<?php echo $ad?>"
                          />
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="basic-default-link">Exam Link</label>
                          <input
                            type="text"
                            class="form-control"
                            
                            name="link" 
                            placeholder="Enter Your Exam Link"
                            value="<?php echo $exam?>"
                          />
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="sbtn" value="Submit">Submit</button>
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
    <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
      <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
    <!-- END: Page JS-->

      <script>
      $('#custom_val').validate({
        rules: {
          

          topic_id: {
            required: true,
        },

         tutor_id: {
            required: true,
        },

         cname: {
            required: true,
          minlength: 3,
          
        },

         cdetail: {
            required: true,
          minlength: 3,
          lettersonly: true 
        },

        //  profile: {
        //     required: true,
        // },

         cfees: {
            required: true,
            maxlength:5
        },

         seat: {
            required: true,
            max:1000,
        },

        duration: {
            required: true,
            max:60
        },


      },
      messages: {
         topic_id: {
                       required: "Topic Name Is Required",        
                    },
        tutor_id: {
                       required: "Tutor Name Is Required",
                    },
        cname: {
                       required: "Course Name Is Required", 
        
                    },
        cdetail: {
                       required: "Course Detail Is Required",
                       
                       },
        profile: {
                       required: "Course image Is Required",
                       
                      
        
                    },
        cfees: {
                       required: "Course Fees Is Required",

                    },
        seat: {
                       required: "Available Seat Is Required",
                    },
        duration: {
                       required: "Available Duration Is Required",
                      max:"number of months should be less than 60"
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

  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>