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

    <title>Gallery</title>

</head>
<body class="bg-white">

    <!-- NAVBAR
    ================================================== -->
    <?php include_once "header.php"; ?>


    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-11" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Gallery</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        Gallery
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="..." alt="...">
    </header>


    <!-- GALLERY
    ================================================== -->
    <div class="container">

        <div id="gallery" class="row row-cols-md-3 mb-8 mb-md-11" data-isotope='{"layoutMode": "masonry"}'>
            <?php 
                $str="select * from gallery_tbl,tutor_tbl where tutor_tbl.tutor_id=gallery_tbl.tutor_id and tutor_tbl.tutor_id='".$_GET['tutor_id']."'";
                $row=mysqli_query($cnn,$str);
                while($result=mysqli_fetch_array($row))
                {
            ?>
            
            <div class="col-md mb-6 business">
                <!-- Image -->

                <a class="card-hover-overlay rounded overflow-hidden d-block position-relative" href="assets/img/photos/photo-31.jpg" data-fancybox data-width="1110" data-height="810">
                    <img src="../edu/tutor/images/<?php echo $result['images'];?>" class="img-fluid rounded" alt="..." height="500px" width="500px">

                    <div class="center position-absolute hover-visible z-index-1">
                        <div class="mb-4 text-white">
                            <!-- Icon -->
                           <!--  <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                            </svg> -->

                        </div>
                    </div>
                </a>
            </div>

            <?php } ?>
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
