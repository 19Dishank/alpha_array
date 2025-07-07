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

    <title>My Inquiry</title>

</head>
<body class="bg-white right-sidebar woocommerce-cart">

    <!-- HEADER
    ================================================== -->
    <?php include_once "header.php"; ?>

    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-5" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">My Inquiry</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        My Inquiry
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="..." alt="...">
    </header>


    

        <!-- main -->
        <div class="container">
        <div class="row">
            <div id="" class="content-area">
                <main id="main" class="site-main ">
                    <div class="page type-page status-publish hentry">
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form class="woocommerce-cart-form table-responsive" action="#" method="post">
                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                        <thead>
                                            <tr>
                                                <!-- <th  class="product-name" style="width: 180px;">Student Name</th> -->
                                                <th class="product-price">Course Name</th>
                                                <th class="product-price" style="width: 180px;">Tutor Name</th>
                                                <th class="product-quantity" style="width: 280px;">Inquiry Description</th>
                                                <th class="product-subtotal" style="width: 180px;">Inquiry Date</th>
                                                <!-- <th class="product-remove">&nbsp;</th> -->

                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php 

                                                $str="select * from tutor_tbl";
                                                      //echo $str;die;
                                                      $result=mysqli_query($cnn,$str);
                                                      $row=mysqli_fetch_array($result);
                                                    $_SESSION['tid']=$row['tutor_id'];

                                             ?>
                                            <?php 
                                                   $qry="select * from user_tbl,course_tbl,inquiry_tbl,tutor_tbl where inquiry_tbl.user_id=user_tbl.user_id and inquiry_tbl.course_id=course_tbl.course_id and 
                                                     inquiry_tbl.tutor_id=tutor_tbl.tutor_id  and inquiry_tbl.user_id='".$_SESSION['uid']."'"; 
                                                      



                                                 // $qry="select * from inquiry_tbl,user_tbl,tutor_tbl,course_tbl where inquiry_tbl.user_id=user_tbl.user_id and inquiry_tbl.tutor_id=tutor_tbl.tutor_id and inquiry_tbl.course_id=course_tbl.course_id and inquiry_tbl.tutor_id='".$_SESSION['tid']."'";  

                                                 // echo $qry;
                                                $test=mysqli_query($cnn,$qry);
                                                $count=mysqli_num_rows($test);
                                                if($count>0)
                                                {

                                                    while($result=mysqli_fetch_array($test))
                                                    {
                                                    
                                            ?>
                                                <tr class="woocommerce-cart-form__cart-item cart_item">

                                                 
<!-- 
                                                    <td  class="product-name" data-title="Product">
                                                        
                                                        <div class="d-flex align-items-center">

                                                            <a href="./course_list.php?course_id=<?php echo $result['course_id'];?>" class="d-flex"><img src="../edu/tutor/images/course/<?php echo $result['course_image'];?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""></a>

                                                            <div class="ms-6">

                                                             <a href="./course_list.php?course_id=<?php echo $result['course_id'];?>" class="d-block"><?php echo $result['user_name']?></a>
                                                            </div>
                                                        </div>
                                                           
                                                    </td> -->

                                             

                                                    <td class="product-price" data-title="Price">

                                                        <a href="./course_list.php?course_id=<?php echo $result['course_fees'];?>" class="d-block"><?php echo $result['course_name']?></a>
                                                       

                                                    </td>

                                                    <td class="product-price" data-title="Price" >

                                                        <a href="./course_list.php?course_id=<?php echo $result['course_fees'];?>" class="d-block"><?php echo $result['tutor_name']?></a>
                                                       

                                                    </td>


                                                    <td class="product-quantity" data-title="Quantity">
                                                       
                                                       <a href="./course_list.php?course_id=<?php echo $result['tutor_name'];?>" class="d-block"><?php echo $result['inquiry_description']?></a>

                                                        
                                                    </td>

                                                    <td class="product-subtotal" data-title="Total">
                                                       
                                                       <a href="./course_list.php?course_id=<?php echo $result['inquiry_date'];?>" class="d-block"><?php echo date("d-M-Y", strtotime($result['inquiry_date']) );?></a>

                                                        

                                                    </td>
                                                </tr>

                                            <?php }}
                                            else
                                            {
                                            ?> 
                                           
                                                <tr><td><label><?php  echo "No Records";?></label></td>
                                                <td><label><?php  echo "No Records";?></label></td>
                                                <td><label><?php  echo "No Records";?></label></td>
                                                <td><label><?php  echo "No Records";?></label></td></tr> 
                                                
                                           <?php   } ?>
                                        </tbody>

                                    </table>
                                </form>
                            </div>
                        </div>
                        <!-- .entry-content -->
                    </div>
                </main>
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
