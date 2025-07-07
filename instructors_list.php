<!doctype html>
<?php
session_start();
require_once('connect.php');
?> 
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

    <title>Instructor List</title>

</head>
<body class="bg-white">

    <!-- NAVBAR
    ================================================== -->
    <?php include_once "header.php"; ?>


    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-11" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Instructors</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        Instructors
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="..." alt="...">
    </header>


    <!-- CONTROL BAR
    ================================================== -->
    <div class="container mb-6 mb-xl-8 z-index-2">
        <div class="d-xl-flex align-items-center">
            <div class="mx-xl-auto d-xl-flex flex-wrap">
                <div class="mb-4 mb-xl-0 ms-xl-6">
                    <!-- Search -->
                    <form class="" method="POST">
                        <div class="input-group input-group-filter">
                            <input class="form-control form-control-sm placeholder-dark shadow-none border-end-0" type="search" name="search_name" placeholder="Search Tutor" aria-label="Search" >

                            <div class="input-group-append">
                                <button class="btn btn-sm btn-outline-white border-start-0 text-dark bg-transparent" name="sbtn" type="submit">
                                    <!-- Icon -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                                        <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                                    </svg>

                                </button>
                            </div>

                            <!-- <div class="mb-4 mb-xl-0 ms-xl-6">
                                <select class="form-select form-select-sm text-dark dropdown-menu-end" data-choices>
                                    <option>All Categories</option>
                                    <option>Another option</option>
                                    <option>Something else here</option>
                                </select>
                            </div>

                            <div class="mb-4 mb-xl-0 ms-xl-6">
                                <div class="border rounded d-flex align-items-center choices-label h-50p">
                                    <span class="ps-5">Sort by:</span>
                                    <select class="form-select form-select-sm text-dark border-0 ps-1 bg-transparent flex-grow-1 dropdown-menu-end" data-choices>
                                        <option>Default</option>
                                        <option>New Courses</option>
                                        <option>Price Low to High</option>
                                        <option>Price High to low</option>
                                    </select>
                                </div>
                            </div> -->
                            
                            
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>


    <!-- COURSE
    ================================================== -->
    
    <?php  
    if(isset($_POST['sbtn'])) 
    {
    ?>
        <h1 align="center">You Search "<?php echo $_POST['search_name']?>"</h1>
    <?php }
    ?>
    <div class="container pb-4 pb-xl-7">
        <div class="row row-cols-md-3 row-cols-lg-4 mb-6 mb-xl-3">


            <?php

                if(isset($_POST['sbtn'])) { 
                    $s=$_POST['search_name'];
                     $qry="select * from tutor_tbl,tutor_prof_detail_tbl,package_detail_tbl,package_tbl where tutor_tbl.tutor_id=tutor_prof_detail_tbl.tutor_id and package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id=tutor_tbl.tutor_id  and  (tutor_profile_tagline like '%$s%' or tutor_name like '%$s%') and tutor_tbl.tutor_status='1' group by tutor_tbl.tutor_id";
                  //  echo $qry;die;
                 }
                 else{
                 $qry="select * from tutor_tbl,tutor_prof_detail_tbl,package_detail_tbl,package_tbl where tutor_tbl.tutor_id=tutor_prof_detail_tbl.tutor_id and package_detail_tbl.package_id=package_tbl.package_id and package_detail_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_status='1'";
                 }
                // echo $qry;die;
                    $test=mysqli_query($cnn,$qry);
                    if(mysqli_num_rows($test) > 0)
                    {
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
            <div class="col-md pb-4 pb-md-7">
                <div class="card border shadow p-2 lift">
                    <!-- Image -->
                    <div class="card-zoom position-relative" >
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

                        <!-- <a href="./instructors_details.php?tutor_id=<?php echo $result['tutor_id']; ?>" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="../edu/tutor/images/<?php echo $result['tutor_image'];?>" alt="..."></a> -->

                        <?php  
                       // file_exists('http://www.mydomain.com/images/'.$filename))
                            if($result['tutor_image']=="" || (!file_exists('tutor/images/'.$result['tutor_image'])))
                            {
                                ?>
                                <!-- <img class="rounded shadow-light-lg img-fluid" src="../DreamEdu/tutor/images/avtar.png"> -->
                                <a href="./instructors_details.php?tutor_id=<?php echo $result['tutor_id']; ?>" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="tutor/images/avtar.png" alt="..."></a>
                                <?php  
                            }
                            else
                            {?>
                               <!-- <img class="rounded shadow-light-lg img-fluid" src="../DreamEdu/tutor/images/<?php //echo $result['tutor_image'];?>">  -->
                               <a href="./instructors_details.php?tutor_id=<?php echo $result['tutor_id']; ?>" class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img class="rounded shadow-light-lg img-fluid" src="tutor/images/<?php echo $result['tutor_image'];?>" alt="..."></a>
                               
                               <?php  
                            }
                        ?>


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

            <?php } ?>
        <?php }}else{
            ?>
            <h2 align="center">No result for "<?php echo $_POST['search_name']?>"</h2>
            <?php 
        } ?>
           
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
