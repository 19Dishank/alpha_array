<!DOCTYPE html>
<?php
session_start();
 require_once("connection.php");
 if(!isset($_SESSION['mail']))
 {
  header('location:index.php');
  }
   
?>
<html>
  <head>
<title>
<link rel="shortcut icon" href="images/icon.png">
</title>
  </head>
<style>
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
<?php 
  $tutor_id = $_POST['tutor_id'];                 
    
    // $sql = "Select * from tutor_tbl,tutor_prof_detail_tbl where tutor_tbl.tutor_id=tutor_prof_detail_tbl.tutor_id and tutor_tbl.tutor_id=$tutor_id";
  $sql = "Select * from tutor_tbl where tutor_tbl.tutor_id=$tutor_id";
    //$sql = "select * from tbl_camp where Camp_ID=$camp_id";
    //echo $sql;
    $data = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($data);

    $tutor_image=$row['tutor_image'];   
    $tutor_name=ucfirst($row['tutor_name']);
    $tutor_contact=ucfirst($row['tutor_contact']);
    $tutor_address=$row['tutor_address'];
    $tutor_email=$row['tutor_email'];
    $tutor_classes=$row['tutor_classes'];


    
    $register_date=$row['register_date'];

    $sql1 = "Select * from tutor_prof_detail_tbl where tutor_prof_detail_tbl.tutor_id=$tutor_id";
    $data1 = mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_array($data1);
    $tutor_profile_tagline=$row1['tutor_profile_tagline'];
    $language=$row1['language'];
    $identity_doc=$row1['identity_doc'];

    
  
?>
<div class="container">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    <div class="main-body"> 
    
       
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../tutor/images/<?php echo $tutor_image;?>" alt="Admin" class="rounded-circle" width="150" >

                    
                 

                    <div class="mt-3">
                      <h4><?php echo $tutor_name;?><?php 
                          if($row1['identity_doc']=="") 
                          {
                            echo '<img src="../tutor/images/NotVerifyed.png" style="width:35px;">';
                          } 
                          else
                          {
                            echo '<img src="images/verify.png" style="width:35px;">';
                          }
                        ?> </h4>
                      <p class="text-secondary mb-1"><?php echo $tutor_profile_tagline;?></p>
                      <p class="text-muted font-size-sm"><?php echo $tutor_address;?></p>
                      <!-- <button class="btn btn-primary">Follow</button> -->
                      
                         
                      
                    <!--   <button class="btn btn-outline-primary">Message</button> -->
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <ul class="list-group list-group-flush" style="margin: -30px -10px -5px -30px;">

                  <?php 
                  $tutor_id = $_POST['tutor_id'];                 

                  $sql = "Select * from tutor_tbl,tutor_social_tbl where tutor_tbl.tutor_id=tutor_social_tbl.tutor_id and tutor_tbl.tutor_id=$tutor_id";
                  //$sql = "select * from tbl_camp where Camp_ID=$camp_id";
                  //echo $sql;
                  $data = mysqli_query($conn,$sql);
				  //echo "<pre>";
				  //print_r($data);
                  $row = mysqli_fetch_array($data);
					$cnt=mysqli_num_rows($data);
                  //echo $cnt;
				  if($cnt > 0 ) {
				  $facebook=$row['facebook'];
                  $instagram=$row['instagram'];
                  $twitter=$row['twitter'];
                  $google=$row['google'];
                  $youtube=$row['youtube'];
                  $linkedin=$row['linkedin'];
				  }
				  else
				  {
					  $facebook="";
					  $instagram="";
					  $google="";
					  $twitter="";
					  $youtube="";
					  $linkedin="";
				  }
                   ?>

                  
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="<?php echo $twitter;?>" target="_new"><h6 class="mb-0"><img src="https://img.icons8.com/office/80/000000/twitter.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6></a>
                    <?php if(isset($twitter) && !empty($twitter)) { ?>
                    <span class="text-secondary"><?php $tw=explode("/",$twitter); echo $tw[3];?></span>
                    <?php } else { ?>
                    <span class="text-secondary">N/A</span>
                  <?php } ?>
                  </li>
                 
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="<?php echo $instagram;?>" target="_new"><h6 class="mb-0"><img src="https://img.icons8.com/office/80/000000/instagram-new.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6></a>
                    <?php if(isset($instagram) && !empty($instagram)) { ?>
                    <span class="text-secondary"><?php $ig=explode("/",$instagram); echo $ig[3];?></span>
                  <?php } else { ?>
                    <span class="text-secondary">N/A</span>
                  <?php } ?>
                  </li>


                  
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="<?php echo $facebook;?>" target="_new"><h6 class="mb-0"><img src="https://img.icons8.com/office/80/000000/facebook.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6></a>
                    <?php if(isset($facebook) && !empty($facebook)) { ?>
                    <span class="text-secondary"><?php $fbs=explode("/",$facebook); echo $fbs[3];?></span>
                    <?php } else { ?>
                    <span class="text-secondary">N/A</span>
                  <?php } ?>
                  </li>
                

                  
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="<?php echo $youtube;?>" target="_new"><h6 class="mb-0"><img src="https://img.icons8.com/office/80/000000/youtube-play.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"/><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                      
                    </path>Youtube</h6></a>
                    
                  </li>
        
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $tutor_name;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $tutor_email;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $tutor_contact;?> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">language</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php if(isset($language) && !empty($language)) { ?>
                      <?php echo $language;?>
                      <?php } else { ?>
                      <span class="text-secondary">N/A</span>
                      <?php } ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $tutor_address;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Classes</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                      <?php if(isset($tutor_classes) && !empty($tutor_classes)) { ?>
                      <?php echo $tutor_classes;?>
                      <?php } else { ?>
                      <span class="text-secondary">N/A</span>
                      <?php } ?>


                    </div>
                  </div>
                  <hr>
                  
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div> -->
                </div>
              </div>
              
              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Course</i>Course Name</h6>
                      <?php  
                      $sql = "Select * from tutor_tbl,course_tbl where tutor_tbl.tutor_id=course_tbl.tutor_id and tutor_tbl.tutor_id=$tutor_id";
                      $data = mysqli_query($conn,$sql);
                      while($row = mysqli_fetch_array($data))
                      {
                        $course_name=$row['course_name'];

                      ?>
                      <small><?php echo $course_name; ?></small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <?php 
                        }
                       ?>
                      <!-- <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <?php 
                     
                      $sql = "Select * from tutor_tbl,tutor_degree_tbl,degree_tbl where tutor_tbl.tutor_id=tutor_degree_tbl.tutor_id and tutor_degree_tbl.degree_id=degree_tbl.degree_id and tutor_tbl.tutor_id=$tutor_id";
                        $data = mysqli_query($conn,$sql);
                        $deg_count=mysqli_num_rows($data);
                        if($deg_count > 0 ) {
                 ?>

                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Degree</i>Certificate</h6>
                     
                      <?php 
                      while($row = mysqli_fetch_array($data))
                      {
                        $degree_name=$row['degree_name'];

                      ?>
                      <small><?php echo $degree_name; ?></small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <?php 
                        }
                       ?>

                      <?php  
                      $sql = "Select * from tutor_tbl,tutor_certificate_tbl,certificate_tbl where tutor_tbl.tutor_id=tutor_certificate_tbl.tutor_id and tutor_certificate_tbl.certificate_id=certificate_tbl.certificate_id and tutor_tbl.tutor_id=$tutor_id";
                      $data = mysqli_query($conn,$sql);

                      while($row = mysqli_fetch_array($data))
                      {

                        $certificate_name=$row['certificate_name'];

                      ?>
                      <small><?php echo $certificate_name; ?></small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <?php 
                        }
                       ?>
                      
                      <!-- <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> -->
                    </div>
                  </div>
                </div>

              <?php } ?>
              </div>



            </div>
          </div>

        </div>
    </div>
</html>    
