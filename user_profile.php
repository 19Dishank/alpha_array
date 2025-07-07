<!DOCTYPE html>
<?php
session_start();
require_once('connect.php');  
$name=$email=$number=$img1='';
$msg='';
if(isset($_POST['submit'])){
  /* if(!empty($_GET['upe_id'])){
    if($_FILES['img']['name']!=''){
            $img=$_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'],'assets/img/'.$img);
    $qury=mysqli_query($cnn,"update admin_user set img='$img',admin_name='".$_POST['name']."',email='".$_POST['email']."',cnntact_no='".$_POST['num']."' where admin_id='".$_SESSION['aid']."'"); */
    //echo $qury; die;
/*         echo '<script type = "text/javascript">';
    echo 'window.location.href = "profile.php"';
    echo '</script>'; */
  /*  }else{ */
      $qury=mysqli_query($cnn,"update user_tbl set user_name='".$_POST['user_name']."',user_email='".$_POST['user_email']."',user_contact='".$_POST['num']."',user_address='".$_POST['add']."',pincode_id='".$_POST['pincode']."' where user_id='".$_SESSION['uid']."'");
      //echo $qury; die;
         echo '<script type = "text/javascript">';
    echo 'window.location.href = "user_profile.php"';
    echo '</script>';
  
}
if(isset($_GET['upe_id'])){
  $qury=mysqli_query($cnn,"select * from user_tbl where user_id='".$_SESSION['uid']."'");
  $row=mysqli_fetch_assoc($qury);
  $name=$row['user_name'];
  $email=$row['user_email'];
  $number=$row['user_contact'];
  $add=$row['user_address'];
  $pin=$row['pincode_id'];
  
}
if(isset($_POST['change'])){
  //echo "select * from customer where cust_id='".$_SESSION['id']."'";
  $qury=mysqli_query($cnn,"select * from user_tbl where user_id='".$_SESSION['uid']."'");
  $row=mysqli_fetch_assoc($qury);
  
   if($_POST['cpwd']==$row['user_password']){
      //echo "ok";   
      if($_POST['rpwd']==$_POST['npwd']){
        // echo "ok";
        $qury=mysqli_query($cnn,"update user_tbl set user_password='".$_POST['npwd']."' where user_id='".$_SESSION['uid']."'");
  
      }else{
        $msg="repeat new password correctly";
     
     }
   }else{
     $msg="enter old password correctly";
   }
 }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/icon.png">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lora:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./assets/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="./assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="./assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="./assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="./assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="./assets/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href="./assets/libs/quill/dist/quill.core.css" />

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
   <link rel="stylesheet" href="./assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

</head>
<body>
   <?php include_once "header.php"; ?>


<form id="custom_val" method="POST" enctype="multipart/form-data">
<div class="container">

    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
            <?php
      if(isset($_FILES["txtImage"]["name"]))
        {
        if($_FILES["txtImage"]["name"]!="")
        {
          //echo "asd";die;
          if($_FILES["txtImage"]["type"]=="image/png"||$_FILES["txtImage"]["type"]=="image/jpg"||$_FILES["txtImage"]["type"]=="image/jpeg")
          {
          $imgVendor=date("Ymdhis").$_FILES["txtImage"]["name"];

          $selQuery="select * from user_tbl where user_id=".$_SESSION["uid"];
          $selRes=mysqli_query($cnn,$selQuery);
          $selResArr=mysqli_fetch_array($selRes);

          if(file_exists("images/".$selResArr["user_image"]))
            unlink("images/".$selResArr["user_image"]);
          

          $upQuery="update user_tbl set user_image='".$imgVendor."' where user_id=".$_SESSION["uid"];
          //echo $upQuery; die;
          mysqli_query($cnn,$upQuery);

          move_uploaded_file($_FILES["txtImage"]["tmp_name"],"images/Student/".$imgVendor);
          echo "<script>window.location='user_profile.php'</script>";
          // header('location:tutor_profile.php');
          }
          else
          echo "<script>alert('Profile Picture must be any one of types - png, jpg or jpeg');</script>";
        }
        }
        
      $queryImage="select * from user_tbl where user_id=".$_SESSION["uid"];
      $resImage=mysqli_query($cnn,$queryImage);
      $resArrImage=mysqli_fetch_array($resImage);

      if($resArrImage["user_image"]=="")
        $imgVendorSet="guest-user.jpg";
      else
        $imgVendorSet=$resArrImage["user_image"];
           ?> 
       
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex flex-column align-items-center text-center">
          <?php $qury=mysqli_query($cnn,"select * from user_tbl where user_id='".$_SESSION['uid']."'");
              $row=mysqli_fetch_assoc($qury);
        ?>
           
            
  
        <div class="avatar-upload">
        <?php //if(isset($_GET['upe_id'])){ ?>
        
           <div class="avatar-edit">
          
            <input type='file'  id="imageUpload" name="txtImage" accept=".png, .jpg, .jpeg" onchange="submit();">
            <label for="imageUpload"></ label>
           </div>
        
           <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(images/Student/<?php echo $imgVendorSet;?>);">
            </div>
          </div>
          <?php //}else{  
          ?>
          
          <?php //} ?>
        </div>
        
    
                    <div class="mt-3">
                      <h4><?php echo $row['user_name']?></h4>
                      <p class="text-secnndary mb-1"><?php echo $row['user_email']?></p>
                     </div> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
              <?php if(isset($_GET['upe_id'])){ ?>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                    <input type="text" name="user_name" value="<?php echo $name?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                     <input type="email" name="user_email" value="<?php echo $email?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                       <input type="text" name="num" value="<?php echo $number?>">
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                    <input type="text" name="add" value="<?php echo $add?>">
                    </div>
                  </div>
                  <hr>
          <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pincode</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                 <input type="number" name="pincode" value="<?php echo $pin?>">
                    </div>
                  </div>
                  <hr>


                  <div class="row">
                    <div class="col-sm-12">
                     <?Php if(!empty($_GET['upe_id'])){?>
                      <a class="btn btn-info " target="__blank" href="?upe_id=<?php echo $row['user_id']?>" hidden>Edit</a>
             <?php }else{?>
                <a class="btn btn-info " target="__blank" href="?upe_id=<?php echo $row['user_id']?>">Edit</a>
             <?php }?>
                         <?Php if(empty($_GET['upe_id'])){?>
                      <input type="submit" class="btn btn-info" name="submit" value="save" hidden>
            <?php }else{?>
            <input type="submit" class="btn btn-info" name="submit" value="save" >
             <?php }?>
                    </div>
                  </div>
              <?php }else{ ?>
                 <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                  <?php echo $row['user_name']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                     <?php echo $row['user_email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                      <?php echo $row['user_contact']?>
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                      <?php echo $row['user_address']?>
                    </div>
                  </div>
                  <hr>
          <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pincode</h6>
                    </div>
                    <div class="col-sm-9 text-secnndary">
                      <?php echo $row['pincode_id']?>
                    </div>
                  </div>
                  <hr>
         
                  <div class="row">
                    <div class="col-sm-12">
                       <a class="btn btn-info " target="__blank" href="?upe_id=<?php echo $row['user_id']?>" >Edit</a>
                    </div>
                  </div>
              <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </form>
      <form id="custom_vall" method="POST">
      <div class="container">
      <div class="main-body">
      <div class="row">
      <div class="col-sm-7">
      <div class="row gutters-sm">
          <div class="card h-100" style="margin: -33px 20px 20px 394px;">
           <div class="card-body">

            <div class="form-group pass_show"> 
                <input type="password"  class="form-cnntrol" placeholder="Current Password" name="cpwd" size="40px"> 
            </div> 
 
            <div class="form-group pass_show"> 
                <input type="password"  class="form-cnntrol" id="txtNewPassword" placeholder="New Password" name="npwd" size="40px"> 
            </div> 

            <div class="form-group pass_show"> 
                <input type="password"  class="form-cnntrol" id="cnnfirmPassword" placeholder="Repeat Password" name="rpwd" size="40px"> 
            </div>

            <div class="form-group pass_show"> 
                 <input class="btn btn-info " type="submit" name="change"> 
                 <div style="color:red" class=""><?php echo $msg;?></div>
           </div>             
          </div>
          </div>
      </div>
      </div>
      </div>
      </div>
      </div>
    </form>

             
<style>


 .avatar-upload {
   position: relative;
   max-width: 205px;
   margin: 50px auto;
}
 .avatar-upload .avatar-edit {
   position: absolute;
   right: 12px;
   z-index: 1;
   top: 10px;
}
 .avatar-upload .avatar-edit input {
   display: none;
}
 .avatar-upload .avatar-edit input + label {
   display: inline-block;
   width: 34px;
   height: 34px;
   margin-bottom: 0;
   border-radius: 100%;
   background: #FFFFFF;
   border: 1px solid transparent;
   box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.12);
   cursor: pointer;
   font-weight: normal;
   transition: all .2s ease-in-out;
}
 .avatar-upload .avatar-edit input + label:hover {
   background: #f1f1f1;
   border-color: #d6d6d6;
}
 .avatar-upload .avatar-edit input + label:after {
   content: "\f040";
   font-family: 'FontAwesome';

   position: absolute;
   top: 10px;
   left: 0;
   right: 0;
   text-align: center;
   margin: auto;
}
 .avatar-upload .avatar-preview {
   width: 192px;
   height: 192px;
   position: relative;
   border-radius: 100%;
   border: 6px solid whitesmoke;

}
 .avatar-upload .avatar-preview > div {
   width: 100%;
   height: 100%;
   border-radius: 100%;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center;
}
  .error{
    color:red;
  }
</style>

 <?php include_once "footer.php"; ?>

<script type="text/javascript">

</script>
 <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="./assets/libs/aos/dist/aos.js"></script>
    <script src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="./assets/libs/countup.js/dist/countUp.min.js"></script>
    <script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="./assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="./assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="./assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="./assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax-video.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax-element.min.js"></script>
    <script src="./assets/libs/parallax-js/dist/parallax.min.js"></script>
    <script src="./assets/libs/quill/dist/quill.min.js"></script>
    <script src="./assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="./assets/libs/typed.js/lib/typed.min.js"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>

 <script type="text/javascript" src="assets/js/min.js"></script>
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
  </script>

<script>
      $('#custom_val').validate({
        rules: {
          user_name:{
            required: true,
            minlength:3,
            lettersonly: true,
          },
          user_email:{
            required: true,
          },
          num:{
            required: true,
            minlength:10,
            maxlength:10,
          },
          add:{
            required: true,
            minlength:3,
            lettersonly: true,
          },
          pincode:{
            required: true,
            minlength:6,
            maxlength:6,
          },
      },
      messages: {
          user_name: {
            required:"User Name is Required",
          },
          user_email: {
            required:"User Email is Required",
          },
          num: {
            required:"Phone Number is Required",
          },
          add: {
            required:"Address is Required",
          },
          pincode: {
            required:"Pincode is Required",
          },
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
      }, "Please Enter Email Name in Characters Only"); 
     
</script>

<script>
      $('#custom_vall').validate({
        rules: {

          cpwd:{
            required: true,
            minlength:3,
          },
          npwd:{
            required: true,
            minlength:3,
          },
          rpwd:{
            required: true,
            minlength:3,
          },
      },
      messages: {

          cpwd: {
            required:"Current Password is Required",
          },
          npwd: {
            required:"New Password is Required",
          },
          rpwd: {
            required:"Repeat Password is Required",
          },
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
      }, "Please Enter address Only"); 
     
</script>

</body>
</html>