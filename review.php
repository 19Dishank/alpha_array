<!DOCTYPE html>
<html lang="en"> 
<?php
session_start();
include_once('conn.php');	
include_once('site.php');
date_default_timezone_set("Asia/Kolkata");
/*
if(!isset($_SESSION['customer_Id']))
	{
		header("location:login.php"); 
		//to redirect back to "index.php"
	}
	*/
?>
<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:47:37 GMT -->
<head>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Review</title>

	<style>
	
	.mobile-arrow
	{
		display:none !important;
	}
	.img-responsive{
		border-radius: 100%;
	    display: inline-block;
	    max-width: 100%;
	    padding: 10px;
	    line-height: 1.42857143;
	    background-color: #fff;
	    border: 2px solid #59bacc;
	    transition: all .2s ease-in-out;
	    width: 150px;
	    height: 150px;
	    
	}
	.row_div1{
		margin-top: 50px;
	    margin-bottom: 50px;
	    padding: 20px;
	    border: 3px solid #59bacc;
	    border-radius: 150px 10px 10px 150px;
	}

	.row_div2{
		margin-top: 50px;
	    margin-bottom: 50px;
	    padding: 20px;
	    border: 3px solid #59bacc;
	    border-radius: 10px 150px 150px 10px;
	}
	
	</style>
<style>
/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

* {
  box-sizing: border-box;
}



.heading {
  font-size: 25px;
  margin-right: 25px;
}



.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
</head> 

<body>

<?php
			
			if(isset($_POST['send']))
			{
				
				$ser_date=date("Y-m-d");
				//echo $ser_date;die;
				$str="insert into review_rating_table values(NULL,'".$_SESSION['customer_Id']."','".$_POST['service']."','".$_POST['msg']."','".$_POST['rating']."','$ser_date','1')";
				//echo $str;die;
				$success=mysqli_query($link,$str);
				//echo $success;
				if($success)
				{
			
					$_SESSION['success']="Success ";
					//header('location:succes.php');
					//echo "hii";
				}
				else
				{
					$_SESSION['success']="Something went wrong!";
				}
			}
		?>
	<div id="wrapper" class="innerPage">
    	<!-- Style Box Start -->
    
      <!-- Header Start -->
		<?php 
			include_once('header.php');
		?>
		<!-- Header End -->
        <!-- Banner Section -->
		
		
        <section id="banner" class="banner-slider" >
			<div class="banner-img-slider">
				<div>
					<div class="banner-thumb"><img src="assets/images/banner-img/abt-us-banner.jpg" alt="" class="hide" /></div>
				</div>
			</div>
			<div class="blue-overlay"></div>
			<div class="banner-text-wrapper">
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                        	<div class="col-md-6 col-md-offset-3">
                            	<h1>Rate Us</h1>
                        		
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
		
        
        <!-- Content Start -->
        <div id="content">
        	<!-- Our Story -->
            <section id="our-story" class="section-block">
            	<div class="container">
					<center>
					<!-- Our Customers Section -->
						<section id="our-customers" class="section-block">
						<div class="container">
							<div style="border: 3px solid #59bacc;border-left: 15px solid #59bacc;margin-bottom: 61px;padding: 10px 0px 0px 20px;border-radius: 0px 0px 120px 120px;border-right: 15px solid #59bacc;">
		                        <h2>All Rate & Review</h2>
		                        <p class="sub-heading"></p>
		                    </div>
							<!-- <div class="top-desc">
								<h2>All Rate & Review</h2>
							</div> -->
								
						<!-------end the ------->
						<!-------start the all rate section ------->
				<div>
					<center>
		
					<?php  $q=mysqli_query($link,"select * from review_rating_table");
						$row = mysqli_num_rows($q); ?>
					<?php  
						$wrq=mysqli_query($link,"select AVG(rating) as AVGRATE from review_rating_table"); 
						$roww= mysqli_fetch_array($wrq);
						$AVGRATE=$roww['AVGRATE'];
					?>
							<span class="heading">User Rating</span>
							<?php
						$x=0;
						while ($x<$AVGRATE) {
							echo '<span class="fa fa-star checked"></span>';
							$x++;
						}
					?>
					<p><?php echo round($AVGRATE,1);?>&nbsp;  average based on <?php echo $row; ?> reviews.</p>
					
					<div class="row">
					
					<?php 
					$bty=mysqli_query($link,"SELECT rating,count(rating) as 'num_of_rate' FROM `review_rating_table` WHERE true
							group By (rating)");
							while($row=mysqli_fetch_array($bty))
							{
							?>
							
					  <div class="side">
						<div><?php echo $row['rating'];?> star</div>
					  </div>
					  <div class="middle">
						<div class="bar-container">
						  <div class="bar-<?php echo $row['rating'];?>" style="width: <?php echo $row['num_of_rate']*10;?>%; height: 18px;background-color: #4CAF50;"></div>
						</div>
					  </div>
					  <div class="side left">
				<div><?php echo $row['num_of_rate'];?></div>
			  </div>
			  <?php }  ?>
			 
			</center>
		</div>
		<br><br>
		<hr>
	
		</div>
		<!-------end the all rate section ------->
				
				
            </section>
           <div>
           <div>
            <!-- Our services Section -->
				</center>
    
            </section>
			
			
		</div>
		 <div id="demo">
		        <div class="container">
		          <div class="row">
		          	<div style="border: 3px solid #59bacc;border-left: 15px solid #59bacc;margin-bottom: 61px;padding: 10px 0px 0px 20px;border-radius: 0px 0px 120px 120px;border-right: 15px solid #59bacc;text-align: center;margin-top: -61px;">
			            <h2>Happy Customers</h2>
			            <p class="sub-heading"></p>
			        </div>
				
		              <div id="owl-demo" class="owl-carousel">
		              	<?php  
							$str="SELECT * FROM `review_rating_table`,customer_table,service_table where review_rating_table.customer_id=customer_table.customer_Id and
							service_table.service_id= review_rating_table.service_id and rating_status='1' limit 10 ";
							$res=mysqli_query($link,$str);
							while($row=mysqli_fetch_array($res))
							{	
						?>		
								
									
			                  	
						
			                  <div class="item" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;margin:20px;padding:30px;background-color:rgb(243,244,248);border-radius: 20px;">
			                  	
									
			                  		<?php  if(isset($row['customer_image']) && !empty($row['customer_image'])){?>
								        <img class="img-responsive" src="assets/images/customers-img/<?php echo $row['customer_image']?>" style="height:80px;width:80px;float: right;vertical-align: center">
                                    <?php }else{?>
                                        <img class="img-responsive" src="assets/images/noimage.jpg" style="height:80px;width:80px;float: right;vertical-align: center">
                                    <?php } ?>
								
								<p class="description" style="color: #777777;font-size: 15px;line-height: 24px;font-weight: 400;">
						            <strong>Customer Name</strong> : <?php echo $row['customer_Name']; ?>
						        </p>
								
								<p class="description" style="color: #777777;font-size: 15px;line-height: 24px;font-weight: 400;">
 									<div class="name"><strong>Service Name</strong> : <?php echo $row['service_name'];?></div>
						        </p>
								
						        <p class="description" style="color: #777777;font-size: 15px;line-height: 24px;font-weight: 400;">
						            <strong>Review</strong> : <?php echo $row['rating_description']; ?>
						        </p>
						       
						        <h8 style="color: #777777;font-size: 12px;line-height: 24px;font-weight: 400;font-weight:bold;">
						           <span style="font-size: 20px;">
										<?php 
											$rate=$row["rating"]."<i class='fa fa-star checked '></i>"; 
											$i=1;
											while($i<=$rate)
											{
											echo "<i class='fa fa-star checked'></i>";
												$i++;
											}
										?>
									</span>
						        </h8>
						       <!--  <p>
						            <i class="fa fa-quote-right" style="color: #59bacc;font-size: 24px;line-height: 28px;margin-left: 18px;position: relative;top: 19px;"></i>
						        </p> -->
						    </div>
		            	<?php } ?>
		              </div>
		              
		          
		          </div>
		        </div>

		    </div><br><br><br>

            <!-- Our info section -->
            <section id="our-info" class="section-block">
            	<div class="blue-overlay"></div>
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-4">
                        	<i class="icon icon-empowered" aria-hidden="true"></i>
                            <h3><span class="counter">150,000</span>+</h3>
                            <p>Empowered</p>
                        </div>
                        <div class="col-sm-4">
                        	<i class="icon icon-borrowed" aria-hidden="true"></i>
                            <h3>$<span class="counter">5</span> billion+</h3>
                            <p>Borrowed</p>
                        </div>
                        <div class="col-sm-4">
                        	<i class="icon icon-rating" aria-hidden="true"></i>
                            <h3>Customer</h3>
                            <p>Rating</p>
                        </div>
                    </div>
                </div>
            </section>
			
        	<!-- Our team section -->
            
		<div id="content">
		<?php 
		if(isset($_SESSION['customer_Id'])) 
			{
			?>
        	<!-- Contact Us Section -->
            <section id="contact-us" class="section-block"> 
            	<div class="container">
	            	<div style="border: 3px solid #59bacc;border-left: 15px solid #59bacc;margin-bottom: 61px;padding: 10px 0px 0px 20px;border-radius: 0px 0px 120px 120px;border-right: 15px solid #59bacc;text-align: center;">
			            <h2>Leave Rate For Perticular Vendor</h2>
			            <p class="sub-heading"></p>
			        </div>
			        <div class="row">
			        	<div class="col-md-8">
			        		<h3 style="font-family: system-ui;">Rate Us</h3>
			        		<form id="contact_form" name="contct" method="post">
				        		<div class="form-group">
	                            	<!-- <label>Your Star Rate </label> -->
									<fieldset class="rating" style="font-size: 30px;margin-top:10px;margin-bottom: 30px;">
										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Best - 3 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Good - 2 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Avg - 1 star"></label>
										
									</fieldset>
	                            </div>
								<br>
	                            <div class="form-group">
	                            	
	                                <select class="form-control" name="service" required >
	                                    <option>Select Your Service</option>
										<?php 
											$str="select * from service_table,service_request_table where
												service_request_table.customer_id='".$_SESSION['customer_Id']."' and
												service_request_table.service_id=service_table.service_id";
										//echo $str;
											$res=mysqli_query($link,$str);
											while($row=mysqli_fetch_array($res))
											{
												print_r($row);
										?>
	                                    <option name="dropdown" value="<?php echo $row['service_id']?> "> <?php echo $row['service_name'];?></option>
										<?php } ?>
	                                </select>
	                            </div>
	                                
	                            <div class="form-group">
	                                <!-- <label>Message</label> -->
	                                <textarea name="msg" class="form-control"  required placeholder="Give us your valuable review.."></textarea>
	                            </div>

	                            <div class="form-group">
	                            	<input type="submit" class="btn btn-info" value="SEND" name="send" id="attending_btn"/>
	                            </div>
                        	</form>
			        	</div>

			        	<div class="col-md-4">
			        		<h3 style="font-family: system-ui;">Our Office Address</h3>
                            <address>
                            	<p><i class="fa fa-map-marker" aria-hidden="true"></i>Serviceasy 22, Ganganagar,ayodhyanagari road,adajan,surat </p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i>8758185789</p>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:Serviceasy@Services.com">Serviceasy.com</a></p>
                            </address>
			        	</div>
			        	
			        </div>
               
                </div>
            </section>
			<?php } ?>
		  
        
      	</div>

		 <!-- Our services Section -->
         <section id="our-services" class="section-block">
            	<div class="container">
                    <div class="row">
                    	<div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-verifiedprofessionals" aria-hidden="true"></i></div>
                            <div class="name">Verified Professionals</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-insuredwork" aria-hidden="true"></i></div>
                            <div class="name">Insured Work</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-satisfactionguaranteed" aria-hidden="true"></i></div>
                            <div class="name">Satisfaction Guaranteed</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-easypayment" aria-hidden="true"></i></div>
                            <div class="name">Easy Payment</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </section>
          <!-- Footer Start -->
		<?php 
				include_once('footer.php');
		?>
        <!-- Footer End -->
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

    <!-- Demo -->

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 2,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>
</body>

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:48:32 GMT -->
</html>

