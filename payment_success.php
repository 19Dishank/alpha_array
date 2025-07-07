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

    <title>My Courses</title>

</head>
<body class="bg-white right-sidebar woocommerce-cart">

    <!-- HEADER
    ================================================== -->
    <?php include_once "header.php"; ?>

    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-5" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">My Payment</h1>
            <nav aria-label="breadcrumb">
               
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="..." alt="...">
    </header>


    <!-- SHOP CART
    ================================================== -->
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
                                                <th  class="product-name">Courses</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Instructor</th>
                                                <th class="product-subtotal">Buying Date</th>
                                                <th class="product-subtotal">Expiring Date</th>
                                                <th class="product-subtotal">Status</th>
                                                
                                                <!-- <th class="product-remove">&nbsp;</th> -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                 $qry="select * from course_tbl,user_tbl,user_booking_tbl,tutor_tbl where tutor_tbl.tutor_id=course_tbl.tutor_id and user_booking_tbl.user_id=user_tbl.user_id and user_booking_tbl.course_id=course_tbl.course_id and user_tbl.user_id='".$_SESSION['uid']."'";
                                                 //echo $qry;die;
                                                 $test=mysqli_query($cnn,$qry);
                                                 $count=mysqli_num_rows($test); 
                                                
                                                 if($count>0)
                                                {

                                                 while($result=mysqli_fetch_array($test))
                                                 {
                     
                                             ?>
                                                <tr class="woocommerce-cart-form__cart-item cart_item">

                                                 
                                                    

                                                    <td  class="product-name" data-title="Product" style="width:450px;">
                                                        
                                                        <div class="d-flex align-items-center">

                                                            <a href="./course_list.php?course_id=<?php echo $result['course_id'];?>" class="d-flex"><img src="tutor/images/course/<?php echo $result['course_image'];?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""></a>

                                                            <div class="ms-4">

                                                             <a class="d-block"><?php echo $result['course_name'];?></a>
                                                            </div>
                                                        </div>
                                                           
                                                    </td>

                                             

                                                    <td class="product-price" data-title="Price">

                                                        <a class="d-block">₹<?php echo $result['course_fees'];?></a>
                                                       

                                                    </td>

                                                    <td class="product-quantity" data-title="Quantity">
                                                       
                                                       <a class="d-block"><?php echo $result['tutor_name'];?></a>

                                                        
                                                    </td>

                                                    <td class="product-subtotal" data-title="Total">
                                                       
                                                       <a class="d-block"><?php echo date("d-m-Y", strtotime($result['date']));?></a>
                                                      
                                                       

                                                        

                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <?php 
                                                        $duration=$result['available_duration'];
                                                        
                                                        $buy_date=$result['date'];
                                                         $effectiveDate = date('Y-m-d', strtotime("+".$duration."months", strtotime($buy_date)));
                                                         $newDate = date("d-m-Y", strtotime($effectiveDate));
                                                       ?>
                                                       <a class="d-block"><?php echo $newDate;?></a>

                                                        

                                                    </td>

                                                    <td class="product-remove">
                                                       <?php 
                                                            $date2 = date('y-m-d');
                                                            if(strtotime($date2) < strtotime($newDate))
                                                            {
                                                            
                                                                echo '<span class="p-2 bg-success">Active</span>';
                                                            } 
                                                            else
                                                            {
                                                                echo '<span class="p-2 bg-danger">Inactive</span>';
                                                            }?>
                                                
                                                    </td>

                                                  
                                        
                                                </tr>

                                            <?php }}
                                            else
                                            {
                                            ?>
                                                <!-- <tr><td></td></tr> -->
                                                <tr><td><label><?php  echo "No Records";?></label></td>
                                                <td><label><?php  echo "No Records";?></label></td>
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
