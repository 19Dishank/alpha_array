<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head> 
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard.php">
              <div class="brand-logo">
                <img src="images/blue_logo.png" alt="" width="95%">
              </div>
              <h2 class="brand-text mb-0" style="padding-top:10px;">TUTOR</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i></a></li><!-- <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i>--->
        </ul>
      </div>

      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
          <li class=" nav-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span><span class="badge badge-light-danger badge-pill badge-round float-right mr-50 ml-auto"></span></a>
          </li>

        <!-- Profile Module -->
         <!-- <li class=" nav-item"><a href="#"><i class="fa fa-user"></i><span class="menu-title text-truncate" data-i18n="Invoice">Profile</span></a>
            <ul class="menu-content">
               <li><a class="d-flex align-items-center" href="personal_information.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Personal Information">Personal Information</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="comp_prof_add.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Complete Profile">Complete Profile</span></a>
              </li>
               <li><a class="d-flex align-items-center" href="tutor_prof_detail_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Professional Information">Professional Information</span></a>
              </li>
            </ul>
          </li> -->
        <!-- End Profile -->

        <!--   Qualification Module -->
           <li class=" nav-item"><a href="#"><i class="fa-solid fa-book-open-reader"></i><span class="menu-title text-truncate" data-i18n="Invoice">Qualification</span></a>
            <ul class="menu-content">

              <!-- <li><a class="d-flex align-items-center" href="degree_add.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Add New Degree">Add New Degree</span></a>
              </li>
 -->
               <li><a class="d-flex align-items-center" href="tutor_degree_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Degree List">Degree List</span></a>
              </li>

              <!-- <li><a class="d-flex align-items-center" href="certificate_add.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Add New Certificate">Add New Certificate</span></a>
              </li> -->

               <li><a class="d-flex align-items-center" href="tutor_certificate_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Certificate List"> Certificate List</span></a>
              </li>
              
              
            </ul>
          </li>
         <!-- End Qualification -->

          <!--   Course Module -->
           <li class=" nav-item"><a href="#"><i class="bx bxs-book"></i><span class="menu-title text-truncate" data-i18n="Invoice">Course</span></a>
            <ul class="menu-content">
            
              <!-- <li><a class="d-flex align-items-center" href="course_add.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Add Course">Add Course</span></a>
              </li> -->
               <li><a class="d-flex align-items-center" href="course_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Course List">Course List</span></a>
              </li>
            </ul>
          </li>
         <!--  End Course-->

         <!--   Video Module -->
         <li class=" nav-item"><a href="#"><i class="fa fa-video-camera"></i><span class="menu-title text-truncate" data-i18n="Invoice">Video</span></a>
            <ul class="menu-content">
            
              <!-- <li><a class="d-flex align-items-center" href="course_add.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Add Course">Add Course</span></a>
              </li> -->
               <li><a class="d-flex align-items-center" href="video_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Video List">Video List</span></a>
              </li>
            </ul>
          </li>
         <!--  End Video-->

          <!--   Gallery Module -->
           <li class=" nav-item"><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Invoice">Gallery</span></a>
            <ul class="menu-content">

              <!-- <li><a class="d-flex align-items-center" href="gallery_add.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Add Photos">Add Photos</span></a>
              </li> -->

               <li><a class="d-flex align-items-center" href="gallery_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Gallery List">Gallery List</span></a>
              </li>
            </ul>
          </li>
         <!--  End Gallery-->
         
         <!--   Inquiry Module -->

           <li class=" nav-item"><a href="#"><i class="fa fa-question-circle"></i><span class="menu-title text-truncate" data-i18n="Invoice">Inquiry</span></a>
            <ul class="menu-content">
              
               <li><a class="d-flex align-items-center" href="inquiry_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Inquiry List">Inquiry List</span></a>
              </li>
            </ul>
          </li>
         <!--  End Inquiry-->

         <!--  Response Module -->

           <li class=" nav-item"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span class="menu-title text-truncate" data-i18n="Invoice">Response</span></a>
            <ul class="menu-content">
              
               <li><a class="d-flex align-items-center" href="response_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Response List">Response List</span></a>
              </li>
            </ul>
          </li>
         <!--  End Response-->

         <!--   Review Module -->
           <li class=" nav-item"><a href="#"><i class="bx bx-star"></i><span class="menu-title text-truncate" data-i18n="Invoice">Review</span></a>
            <ul class="menu-content">
               <li><a class="d-flex align-items-center" href="review_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Review List">Review List</span></a>
              </li>
            </ul>
          </li>

         <!--  End Review -->

          <!--   Package Module -->
         <!--  <li class=" nav-item"><a href="#"><i class="bx bxs-package"></i><span class="menu-title text-truncate" data-i18n="Invoice">Package</span></a>
            <ul class="menu-content">
               <li><a class="d-flex align-items-center" href="package_detail_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="My Package List">My Package List</span></a>
              </li>
            </ul>
          </li> -->
         <!-- End Package -->

         <!--   Payment Module -->
          <!-- <li class=" nav-item"><a href="#"><i class="fa fa-credit-card" style='font-size:20px'></i><span class="menu-title text-truncate" data-i18n="Invoice">Payment</span></a>
            <ul class="menu-content">
               <li><a class="d-flex align-items-center" href="payment_details_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Payment List">Payment List</span></a>
              </li>
            </ul>
          </li>-->
         <!-- End Payment -->

         <!--   Student Module -->
           <li class=" nav-item"><a href="#"><i class="fa fa-user" style='font-size:20px'></i><span class="menu-title text-truncate" data-i18n="Invoice">Student</span></a>
            <ul class="menu-content">
               <li><a class="d-flex align-items-center" href="user_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Student List">Student List</span></a>
              </li>
            </ul>
          </li>
         <!-- End Student -->

          <!--   Topic Module -->
           <!-- <li class=" nav-item"><a href="#"><i class="bx bx-help-circle"></i><span class="menu-title text-truncate" data-i18n="Invoice">Topic</span></a>
            <ul class="menu-content">
               <li><a class="d-flex align-items-center" href="topic_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Topic List">Topic List</span></a>
              </li>
            </ul>
          </li> -->
         <!--  End Topic -->

          <!--   Tutor Module -->
          <!--  <li class=" nav-item"><a href="#"><i class='fas fa-chalkboard-teacher' style='font-size:15px'></i><span class="menu-title text-truncate" data-i18n="Invoice">Tutor</span></a>
            <ul class="menu-content">
               <li><a class="d-flex align-items-center" href="tutor_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Tutor List">Tutor List</span></a>
              </li>
               <li><a class="d-flex align-items-center" href="tutor_certificate_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Tutor Certificate List">Tutor Certificate List</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="tutor_degree_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Tutor Degree List">Tutor Degree List</span></a>
              </li>
               <li><a class="d-flex align-items-center" href="tutor_payment_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Tutor Payment List">Tutor Payment List</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="tutor_prof_detail_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Tutor Prof Detail List">Tutor Prof Detail List</span></a>
              </li>
            </ul>
          </li> -->
         <!--  End Tutor -->

          

          <!--Feedback Module -->
          <!--  <li class=" nav-item"><a href="#"><i class="fas fa-comments"></i><span class="menu-title text-truncate" data-i18n="Invoice">Feedback</span></a>
            <ul class="menu-content">
               <li><a class="d-flex align-items-center" href="feedback_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Feedback List">Feedback List</span></a>
              </li>
            </ul>
          </li> -->
         <!--  End Feedback -->



         <!--   Certificate Module -->
          <!--  <li class=" nav-item"><a href="#"><i class="fa fa-certificate"></i><span class="menu-title text-truncate" data-i18n="Invoice">Certificate</span></a>
            <ul class="menu-content">

               <li><a class="d-flex align-items-center" href="certificate_list.php"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Certificate List">Certificate List</span></a>
              </li>
            </ul>
          </li> -->
         <!--  End Certificate-->



         

         




          
      </div>
    </div>