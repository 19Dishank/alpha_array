 <?php

 
 session_start();
 require_once("connect.php");

 if(!isset($_SESSION['tmail']))
 {
  header('location:index.php');
  }

 $cn='';

 $vn='';
 $location='';

 $upd_id='';
 
 if(!empty($_GET['up_id']))
 { 
    $upd_id=$_GET['up_id'];
    $qry=" select * from video where video_id=".$upd_id;
    $result=mysqli_query($cnn,$qry);
    $test=mysqli_fetch_array($result);
    $cn=$test['course_id'];
    $vn=$test['video_name'];
    $location=$test['location'];
  
}
if(isset($_POST['sbtn']))
{
  //echo "hii";die;
    
    
    $file_name = $_FILES['video']['name'];
    $file_temp = $_FILES['video']['tmp_name'];
    $file_size = $_FILES['video']['size'];
    $course_id = $_POST['course_id'];
    if(!empty($_GET['up_id']))
    {
      $upd_id=$_GET['up_id'];   
      if($_FILES['video']['tmp_name']=='')
        {
          $videos=$_POST['vid'];
        }
        else{
          $videos=$_FILES['video']['name'];
          move_uploaded_file($_FILES['video']['tmp_name'],"video/".$videos);
        }
      
        $str="update video set video_name='".$_POST['vname']."',location='".$videos."' where video_id=".$upd_id;
          $video_update=mysqli_query($cnn,$str);
          //echo $str;die;
          if($video_update)
          {
            $_SESSION['success']="Course Video Update Successfully...";
          }
          else{
            $_SESSION['success']="Course Video Not Update";
          }
        }
    else
    {
      if($file_size < 50000000)
      {
      
        $file = explode('.', $file_name);
        $end = end($file);
        $name = date("Ymd").time();
        $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
        move_uploaded_file($_FILES['video']['tmp_name'],"video/".$name.$_FILES['video']['name']);
        //$name=$_FILES['video']['name'];
        //echo "End: $end <br>";
        //echo "Allowed Extensions: " . implode(", ", $allowed_ext) . "<br>";
        if(in_array($end, $allowed_ext))
        {
          $location = $name.$file_name;
          $video_status=1;
          $query = "INSERT INTO `video`  VALUES (NULL,'".$_POST['vname']."', '$location','$course_id','$video_status')";
          $result = mysqli_query($cnn, $query);
          //echo $query;die;
          if ($result) {
            $_SESSION['success']="Course Video Added";
          } 
        } 
       
    
      }
    }
    
  header('location:video_list.php');

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
                                <h5 class="content-header-title float-left pr-1 mb-0">Video</h5>
                                  <div class="breadcrumb-wrapper d-none d-sm-block">
                                    <ol class="breadcrumb p-0 mb-0 pl-1">
                                      <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                      </li>
                                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                                      </li>
                                      <li class="breadcrumb-item active">Add Video 
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
                                <h4 class="card-title">Add New Video</h4>
                              </div>

                              
                              <div class="card-body">
                                <form  method="POST" enctype="multipart/form-data">
                                  <div class="form-group">
                                  <label class="form-label" for="basic-default-name">Course Name</label>
                                  <select class="form-control select2" name="course_id"> 
                                            <option disabled selected>Select Course Name</option>   
                                            <?php $data=mysqli_query($cnn,"select * from course_tbl,tutor_tbl where course_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'");
                                              while($row=mysqli_fetch_array($data)){
                                              ?>
                                              <option <?php if ($cn==$row['course_id']) {echo "selected";} ?> value="<?php echo $row['course_id']; ?>">
                                                <?php echo $row['course_name'];?>
                                                </option>   
                                              <?php } ?>
                                      </select>
                                    </div>


                              <div class="form-group">
                                <label class="form-label" for="basic-default-name">Video Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  
                                  name="vname" 
                                  placeholder="Add Video name"
                                  value="<?php echo $vn?>"
                                />
                              </div>
                            

                                <div class="form-group">
                                  <label for="exampleFormControlFile1">Video</label>
                                  <div class="custom-file">
                                <input type="file" <?php if(empty($upd_id)){ echo "required";} ?> accept="videos/*" class="custom-file-input" id="customFile" name="video"/>

                                <input type="hidden" name="vid" class="form-control" value="<?php echo $location?>">

                                  <label class="custom-file-label" for="customFile">Choose Video</label>
                          
                                  </div>
                                </div>

                              
                                    
                                  </div>
                                </div> 

                                  <br>

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
          

          course_id: {
            required: true,
        },

         tutor_id: {
            required: true,
        },

         vname: {
            required: true,
          minlength: 3,
          
        },

       

        //  video: {
        //     required: true,
        // },

       


      },
      messages: {
         course_id: {
                       required: "Topic Name Is Required",        
                    },
        tutor_id: {
                       required: "Tutor Name Is Required",
                    },
        vname: {
                       required: "Video Name Is Required", 
        
                    },
        
        video: {
                       required: "Video Is Required",
                       
                      
        
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