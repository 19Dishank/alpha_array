<!doctype html>
<?php
session_start();
 require_once("connect.php");
 if(isset($_GET['user_id']))
{
      $str="select * from user_tbl
       where user_tbl.user_id='".$_GET['user_id']."'";
      //echo $str;
      $data=mysqli_query($cnn,$str);
      $row=mysqli_fetch_array($data);
      // $tutor_name=$row['tutor_name'];
      // $tutor_profile_tagline=$row['tutor_profile_tagline'];
      // $overview=$row['overview'];
      // $tutor_image=$row['tutor_image'];
      // $identity_doc=$row['identity_doc'];
}
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/icon.png">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lora:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Libs CSS --->
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

    <title>My Courses</title>

</head>
<style>
.rest{
	margin-left: calc(5% - 70px);
    margin-right: calc(5% - 70px);
}  
.tablegrid{
    padding: 0px;
    list-style: none;
    margin-block-end: 0px;
    display: grid;
    -webkit-box-align: start;
    align-items: start;
    grid-template-columns: repeat(4, 1fr);
    gap: 32px;
    margin: 32px 16px;
}

.rest2{
    text-decoration: none;
    color: inherit;
    outline: 0px;
    cursor: pointer;
}
.hPIMEg {
    display: grid;
    transition: all 0.05s ease 0s;
    cursor: pointer;
    gap: 12px;
    grid-auto-flow: row;
    justify-content: stretch;
    -webkit-box-align: center;
    align-items: center;
    padding: 0px;
}
.hPIMEg:hover {
    transform: scale(0.95, 0.95);
    transform-origin: center center;
    transition: all 0.1s ease-in 0s;
}
.HWqHB{
    position: relative;
}
.HWqHB::before {
    content: "";
    height: 0px;
    display: block;
    padding-top: calc(66.6667%);
}
.etcYRf {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
}
.hAXvKc{
	position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
	filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px 2px 8px);
}
.fAqgqV {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.cHWThC {
    margin: 0px;
    -webkit-font-smoothing: antialiased;
    text-transform:uppercase;
    font-weight: 700;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: -0.3px;
    color: rgba(2, 6, 12, 0.75);
    overflow: hidden;
    width: 100%;
    display: -webkit-box;
    overflow-wrap: break-word;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
}
.hPIMEg .sw-restaurant-card-subtext-container {
    display: grid;
    -webkit-box-align: center;
    align-items: center;
    margin-top: 2px;
    gap: 2px;
    grid-auto-flow: column;
    -webkit-box-pack: start;
    justify-content: start;
}
.bUjCLt {
    -webkit-font-smoothing: antialiased;
    font-family: Basis_Grotesque_Pro_Bold;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    letter-spacing: -0.3px;
    color: rgba(2, 6, 12, 0.75);
    overflow: hidden;
    width: 100%;
    display: -webkit-box;
    overflow-wrap: break-word;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
}
.gnOsqr {
    -webkit-font-smoothing: antialiased;
    font-family: Basis_Grotesque_Pro_Bold;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    letter-spacing: -0.3px;
    color: rgba(2, 6, 12, 0.75);
}
.hPIMEg .sw-restaurant-card-descriptions-container {
    display: grid;
    -webkit-box-align: center;
    align-items: center;
    margin-top: 2px;
    gap: 2px;
}
.dnXOKm {
    -webkit-font-smoothing: antialiased;
    font-weight: 200;
    font-size: 16px;
    color: rgb(122, 139, 148);
    font-family: monospace;
    line-height: 19px;
    letter-spacing: -0.3px;
    overflow: hidden;
    width: 100%;
    display: -webkit-box;
    overflow-wrap: break-word;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
}
</style>

<body class="bg-white right-sidebar woocommerce-cart">

    <!-- HEADER
    ================================================== -->
    <?php include_once "header.php"; ?>

    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-5" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">My Courses</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        My Course
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="..." alt="...">
    </header>


    <!-- SHOP CART
    ================================================== -->
    <div class="container">
                        <!-- .entry-header -->
                        <div class="rest">
                            <div class="tablegrid">
                                    <?php
                                        $qry="select * from course_tbl,user_tbl,
                                        user_booking_tbl,tutor_tbl where tutor_tbl.tutor_id=course_tbl.tutor_id and 
                                        user_booking_tbl.user_id=user_tbl.user_id and user_booking_tbl.course_id=course_tbl.course_id 
                                        and user_tbl.user_id='".$_SESSION['uid']."'";
                                        //echo $qry;
                                        $test=mysqli_query($cnn,$qry);
                                        $count=mysqli_num_rows($test); 
                                        if($count>0)
                                        {
                                            while($result=mysqli_fetch_array($test))
                                            {
                                                $duration=$result['available_duration'];
                                                $date2 = date('y-m-d');
                                                $buy_date=$result['date'];
                                                            
                                                $effectiveDate = date('Y-m-d', strtotime("+".$duration."months", strtotime($buy_date)));
                                                $newDate = date("d-m-Y", strtotime($effectiveDate));
                                                if(strtotime($date2) < strtotime($newDate))
                                                {
                                    ?>
                                    <div class="rest2">
                                        <div class="hPIMEg">
                                            <div class="HWqHB">
                                                <div class="etcYRf">
                                                    <div width="100%" height="100%" class="hAXvKc">
                                                        <a href="./video.php?course_id=<?php echo $result['course_id'];?>" itemprop="url"><img style="object-fit:cover;" class="fAqgqV" src="tutor/images/course/<?php echo $result['course_image'];?>" alt="" itemprop="image"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-left:0px;">
                                                <div>
                                                    <div><a style="color:#09a0d9;" class="cHWThC" href="./video.php?course_id=<?php echo $result['course_id'];?>" itemprop="url"><?php echo $result['course_name'];?></a></div>
                                                </div>
                                                <div class="sw-restaurant-card-descriptions-container ">
                                                    <div class="dnXOKm"><a style="color:#999;" href="./video.php?course_id=<?php echo $result['course_id'];?>" itemprop="url"><?php echo $result['tutor_name']; ?></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } }  ?>
                            </div>
                        </div>
                        <!-- .entry-content -->
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
