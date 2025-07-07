<?php
session_start();
//echo "<pre>";
//print_r($_SESSION);
//die;
?>
<!doctype html>
<?php
 require_once("connect.php");
  if(!isset($_SESSION['umail']))
 {
  header('location:login.php');
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

    <title>Payment Success</title>

</head>
<body class="bg-white woocommerce-order-received">

    <!-- HEADER
    ================================================== -->
    <?php include_once "header.php"; ?>


    <!-- SHOP ORDER COMPLETED
    ================================================== -->
    <div class="container py-8 py-lg-11">
        <div class="row">
            <div class="col-xl-8 mx-xl-auto">
                <header class="entry-header">
                    <h1 class="entry-title">Payment Success</h1>
                </header>

                <div class="entry-content">
                    <div class="woocommerce">
                        <div class="woocommerce-order">
                            <?php
                                $sql="select * from tutor_payment_tbl,user_booking_tbl,user_tbl,course_tbl where tutor_payment_tbl.booking_id=user_booking_tbl.booking_id and user_booking_tbl.course_id=course_tbl.course_id and user_booking_tbl.user_id=user_tbl.user_id and user_tbl.user_id='".$_SESSION['uid']."' order by tutor_payment_tbl.tutor_payment_id desc limit 1 ";
                               //echo $sql;die;
                                $data=mysqli_query($cnn,$sql);
                                while($row=mysqli_fetch_array($data))
                                {
                            ?>
                            <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Thank you. Your payment has been success.</p>

                            <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
                                <li class="woocommerce-order-overview__order order">
                                    Order number:
                                    <strong><?php echo $row['order_id'];?></strong>
                                </li>

                                <li class="woocommerce-order-overview__date date">
                                    Date:
                                    <strong><?php echo $row['payment_date'];?></strong>
                                </li>

                                <li class="woocommerce-order-overview__total total">
                                    Total:
                                    <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $row['course_fees'];?></span></strong>
                                </li>

                                <li class="woocommerce-order-overview__payment-method method">
                                    Payment method:
                                    <strong><?php echo $row['payment_mode'];?></strong>
                                </li>
                            </ul>

                            <section class="woocommerce-order-details">
                                <h2 class="woocommerce-order-details__title">Payment Details</h2>
                                <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                    <thead>
                                        <tr>
                                            <th class="woocommerce-table__product-name product-name">Product</th>
                                            <th class="woocommerce-table__product-table product-total">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="woocommerce-table__line-item order_item">
                                            <td class="woocommerce-table__product-name product-name">
                                                <a><?php echo $row['course_name'];?></a>
                                                <!-- <strong class="product-quantity">× 2</strong> -->
                                            </td>

                                            <td class="woocommerce-table__product-total product-total">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $row['course_fees'];?></span>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th scope="row">Payment method:</th>
                                            <td ><?php echo $row['payment_mode'];?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total:</th>
                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $row['course_fees'];?></span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </section>
                            <?php } ?>
                        </div>
                    </div>
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
