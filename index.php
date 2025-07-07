<?php
session_start();
 require_once("connect.php");
 //  if(!isset($_SESSION['umail']))
 // {
 //  header('location:login.php');
 //  }

?>

<!doctype html>
<html lang="en">
<head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/icon.png">

    <!-- Font -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>DreamEdu</title>
    <style>
           #loading{
              position:fixed;
              width:100%;
              height:100%;
              background:#fff url("images/Preloader.gif") no-repeat center;
              z-index:99999;
           }
    </style>
</head>
<body onload="loadFun()">
<div id="loading"></div>
    <script>
        const myTimeout = setTimeout(loadFun, 1000);
        var load = document.getElementById("loading");
        function loadFun()
        {
          load.style.display='none';
        }
    </script>       
    <!-- HEADER
    ================================================== -->
    <?php include_once "header.php"; ?>


    <!-- HERO
    ================================================== -->
    <section class="py-13 pt-xl-14 mt-n13 pb-lg-12 bg-cover position-relative" style="">
        <div class="container">
            <div class="row align-items-center" style="padding:0px 0px 40px 40px">
                <div class="col-5 col-md-5 col-lg-5 order-md-2" data-aos="fade-in">

                    <!-- Image -->
                    <img style="max-width:100%;"src="assets/img/illustrations/illustration-5.svg" class="img-fluid mb-6 mb-md-0" alt="...">

                </div>

                <div class="col-7 col-md-7 col-lg-7 order-md-1">
                    <!-- Heading -->
                    <h1 class="display-2 text-gradient-1 text-capitalize" data-aos="fade-left" data-aos-duration="150">
                        Learn on your <span class="fw-bold">Schedule</span>
                    </h1>

                    <!-- Text -->
                    <p class="lead pe-md-8 pe-xl-12 text-capitalize" data-aos="fade-up" data-aos-duration="200">
                        Technology is bringing a massive wave of evolution on learning things in different ways.
                    </p>

                    <!-- Buttons -->
                    <a href="./course_list.php" class="btn btn-tangerine btn-wide rounded-lg mb-4 mb-md-0 me-md-5 text-w" data-aos="fade-up" data-aos-duration="200">GET STARTED</a>
                    <a href="./course_list.php" class="btn btn-gigas btn-wide rounded-lg d-none d-lg-inline-block" data-aos="fade-up" data-aos-duration="200">VIEW COURSES</a>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        <!-- Shape -->
        
    </section>

    <!-- FEATURED PRODUCT
    ================================================== -->
    <section class="pt-5 pb-9 py-md-11 bg-white">
        <div class="container">
            <div class="text-center mb-5 mb-md-8">
                <h1 class="mb-1">Featured Courses</h1>
                <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
            </div>

               
            <div class="row mb-3">
                <?php 
            $str_course="select * from course_tbl,topic_tbl,tutor_tbl,tutor_prof_detail_tbl,package_detail_tbl,package_tbl where course_tbl.tutor_id=tutor_tbl.tutor_id and course_tbl.topic_id=topic_tbl.topic_id and tutor_tbl.tutor_id=tutor_prof_detail_tbl.tutor_id and package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id=tutor_tbl.tutor_id order by course_tbl.course_id desc limit 6";
            //echo $str_course;
            $data_course=mysqli_query($cnn,$str_course);
            while($row_course=mysqli_fetch_array($data_course))
            {
                $datestr=$row_course['package_exp_date'];//Your date
                    $date=strtotime($datestr);//Converted to a PHP date (a second count)

                    //Calculate difference
                    $diff=$date-time();//time returns current time in seconds
                    $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
                    $hours=round(($diff-$days*60*60*24)/(60*60));
            
                if($days>0)
                {
            ?>
                <div class="col-lg-6 pb-4 pb-md-6">
                    <!-- Card -->
                    <div class="card border rounded-lg shadow p-2 lift sk-fade">
                        <div class="row">
                            <div class="col-md-5 col-lg-auto rounded-lg d-flex">
                                <!-- Image -->
                                <div class="card-zoom d-flex position-relative mw-lg-200p mw-xl-260p">
                                    

                                    <a href="./course_detail.php?course_id=<?php echo $row_course['course_id'];?>" class="d-flex"><img class="card-img-top img-fluid o-f-c" src="tutor/images/course/<?php echo $row_course['course_image'];?>" alt="..."></a>

                                    <span class="badge sk-fade-bottom badge-lg badge-tangerine badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                        <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-7 col-lg">
                                <!-- Footer -->
                                <div class="card-body px-md-0 px-3 py-5">
                                    <!-- Preheading -->
                                    <a href="./course_detail.php?course_id=<?php echo $row_course['course_id'];?>"><span class="mb-1 d-inline-block text-gray-800"><?php echo $row_course['topic_name'];?></span></a>

                                    <!-- Heading -->
                                    <a href="./course_detail.php?course_id=<?php echo $row_course['course_id'];?>" class="d-block"><h4 class="line-clamp-2 h-48 h-lg-58 me-xl-3"><?php echo $row_course['course_name'];?></h4></a>

                                    <ul class="nav mx-n3 mb-4 mb-4">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">5 lessons</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"/>
                                                        <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8h 12m</div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="d-flex align-items-center">
                                   
                                        <ins class="h4 mb-0">₹<?php echo $row_course['course_fees'];?></ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php } } ?>
            </div>
          
       

            <div class="text-center">
                <a href="./course_list.php" class="btn btn-gigas btn-x-wide rounded-lg lift">VIEW ALL COURSES</a>
            </div>
        </div>
    </section>

    <!-- FEATURE GENERAL
    ================================================== -->
    <section class="py-6 py-md-12 position-relative" style="background:linear-gradient(90deg,#ccf1ff.78%,#e9e2fe 71.02%);">
        <div class="container">
            <div class="text-center text-capitalize">
                <h1 class="mb-1">Know why we are best</h1>
                <p class="font-size-lg mb-md-7 mb-4">Discover your perfect program in our courses.</p>
            </div>

            <ul class="nav mx-md-n5 justify-content-md-center text-capitalize mb-5 mb-md-9">
                <li class="nav-item px-md-5 mb-4 mb-md-0">
                    <a href="#" class="nav-link fw-medium p-0 opacity-hover"><span class="font-size-xxl me-3">01</span><span class="font-size-lg">Creating a Better Future for you</span></a>
                </li>

                <li class="nav-item px-md-5 mb-4 mb-md-0">
                    <a href="#" class="nav-link fw-medium p-0 opacity-hover"><span class="font-size-xxl me-3">02</span><span class="font-size-lg">Learn why eLearny is Best</span></a>
                </li>

                <li class="nav-item px-md-5 mb-4 mb-md-0">
                    <a href="#" class="nav-link fw-medium p-0 opacity-hover"><span class="font-size-xxl me-3">03</span><span class="font-size-lg">Our Simple & Effective Process</span></a>
                </li>
            </ul>

            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-6 mb-lg-0">
                    <!-- Image -->
                    <img src="assets/img/photos/photo-1.jpg" class="img-fluid rounded-lg" alt="...">
                </div>

                <div class="col-lg-6 order-lg-1">
                    <h3 class="font-size-xxl text-black mb-4">The Prodigious eLearning Courses for you</h3>

                    <p class="mb-5 me-lg-6 line-height-lg">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                    <ul class="mb-6 ps-4">
                        <li class="mb-5">Creative Study Pattern</li>
                        <li class="mb-5">Quick Crash Courses</li>
                        <li class="mb-5">Certification Awarded</li>
                        <li class="mb-5">Provided with Experimental Examples</li>
                    </ul>

                    <a href="./course_list.php" class="btn btn-gigas btn-wide rounded-lg lift">NEW COURSES</a>
                </div>
            </div>
        </div>

        <!-- Shape -->
        
    </section>


    <!-- INSTRUCTORS
    ================================================== -->
    <section class="pt-5 pb-9 py-md-11 bg-white">
        <div class="container">
            <div class="text-center mb-4 mb-md-7 text-capitalize" data-aos="fade-up">
                <h1 class="mb-1">Top Rating Instructors</h1>
                <p class="font-size-lg mb-0">Discover your perfect program in our courses.</p>
            </div>

            <div class="mx-n3 mx-md-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>

                <?php
                $qry="select * from tutor_tbl,tutor_prof_detail_tbl,package_detail_tbl,package_tbl where tutor_tbl.tutor_id=tutor_prof_detail_tbl.tutor_id and package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_status='1' group by tutor_tbl.tutor_id";
                // echo $qry;die;
                $test=mysqli_query($cnn,$qry);
                while($result=mysqli_fetch_array($test))
                {
                    $datestr=$result['package_exp_date'];//Your date
                    $date=strtotime($datestr);//Converted to a PHP date (a second count)

                    //Calculate difference
                    $diff=$date-time();//time returns current time in seconds
                    $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
                    $hours=round(($diff-$days*60*60*24)/(60*60));
            
                if($days>0)
                {
                    // echo $qry;die;
            ?>
                <div class="col-6 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="card rounded-lg border shadow p-2 lift">
                        <!-- Image -->
                        <div class="card-zoom position-relative" style="max-width: 250px;">
                            <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                <ul class="nav mx-n4 justify-content-center">
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        <a href="./instructors_details.php?tutor_id=<?php echo $result['tutor_id']; ?>" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block">
                        <?php  
                       // file_exists('http://www.mydomain.com/images/'.$filename))
                            if($result['tutor_image']=="" || (!file_exists('tutor/images/'.$result['tutor_image'])))
                            {
                                ?>
                                <!-- <img class="rounded shadow-light-lg img-fluid" src="../DreamEdu/tutor/images/avtar.png"> -->
                               <img class="rounded shadow-light-lg img-fluid" src="tutor/images/avtar.png" alt="...">
                                <?php  
                            }
                            else
                            {?>
                               <!-- <img class="rounded shadow-light-lg img-fluid" src="../DreamEdu/tutor/images/<?php //echo $result['tutor_image'];?>">  -->
                               <img class="rounded shadow-light-lg img-fluid" src="tutor/images/<?php echo $result['tutor_image'];?>" alt="...">
                               
                               <?php  
                            }
                        ?>
                        
                        </a>
                        </div>


                        <!-- Footer -->
                        <div class="card-footer px-3 pt-4 pb-1">
                            <a href="./instructors_details.php?tutor_id=<?php echo $result['tutor_id']; ?>" class="d-block"><h5 class="mb-0"><?php echo $result['tutor_name']?>
                                 <?php 
                                  if($result['identity_doc']=="") 
                                  {
                                    //echo '<img src="images/not_verify.png" style="width:35px;">';
                                  } 
                                  else
                                  {
                                    echo '<img src="images/verified.png" style="width:25px;">';
                                  }
                                ?>
                            </h5></a>
                            <span class="font-size-d-sm"><?php echo $result['tutor_profile_tagline']?></span>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>

        </div>
    </section>

    <!-- TESTIMONIAL 
    ================================================== -->
    <section class="py-5 py-md-11 bg-white">
        <div class="container container-wd">
            <div class="text-center mb-8">
                <h1 class="mb-1">What Our Students Have To Say</h1>
                <p class="font-size-lg text-capitalize mb-0">Discover your perfect program in our courses.</p>
            </div>

            <div class="mx-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "center", "wrapAround": true, "imagesLoaded": true}'>

                <?php
                    $qry="select * from feedback_tbl,user_tbl where user_tbl.user_id=feedback_tbl.user_id";
                    $test=mysqli_query($cnn,$qry);
                    while($result=mysqli_fetch_array($test))
                    {
                ?>

                <div class="col-12 d-flex mb-4">
                    <div class="w-xl-28 mx-auto">
                        <!-- Card -->
                        <div class="card text-center bg-transparent">
                            <!-- Image -->
                            <div class="position-relative">
                                <div class="avatar avatar-size-110 border border-white border-w-xl border rounded-circle shadow-custom mb-5">
                                    <img src="images/Student/<?php echo $result['user_image']; ?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0"><?php echo $result['user_name']; ?></h5>
                                    <!-- <span>Designer</span> -->
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-0 pb-0 pt-4">
                                <p class="mb-0 text-capitalize"><?php echo $result['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                `<?php } ?>

            </div>
        </div>
    </section>

    <!-- COUNTUP
    ================================================== -->

    <div class="py-5 pt-md-11 bg-white">
        <div class="container">
            <div class="row w-xl-96 mx-xl-auto text-center">
                <?php 
                    $user_str="SELECT count(user_id) as Total_User FROM user_tbl";
                    $user_count=mysqli_query($cnn,$user_str);
                    $user_result=mysqli_fetch_array($user_count);
                ?>
                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="<?php echo $user_result['Total_User'];?>" data-aos data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Learners</p>
                </div>

                <?php 
                    $tutor_str="SELECT count(tutor_id) as Total_Tutor FROM tutor_tbl";
                    $tutor_count=mysqli_query($cnn,$tutor_str);
                    $tutor_result=mysqli_fetch_array($tutor_count);
                ?>
                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="<?php echo $tutor_result['Total_Tutor'];?>" data-aos data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Instructors</p>
                </div>

                <?php 
                    $course_str="SELECT count(course_id) as Total_Course FROM course_tbl";
                    $course_count=mysqli_query($cnn,$course_str);
                    $course_result=mysqli_fetch_array($course_count);
                ?>
                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="<?php echo $course_result['Total_Course'];?>" data-aos="" data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Courses</p>
                </div>

                <?php 
                    $topic_str="SELECT count(topic_id) as Total_Topic FROM topic_tbl";
                    $topic_count=mysqli_query($cnn,$topic_str);
                    $topic_result=mysqli_fetch_array($topic_count);
                ?>
                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="<?php echo $topic_result['Total_Topic'];?>" data-aos="" data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Topics</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER
    ================================================== -->
    <?php include_once "footer.php"; ?>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
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

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
    

</body>
</html>
