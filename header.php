<?php
require_once('connect.php');
 
?> 
    <header class="navbar navbar-expand-xl navbar-light" style="color:rgb(78 56 225) !important;">
        <div class="container-fluid">

            <!-- Brand -->  
            <a class="navbar-brand" href="./index.php">
                <img src="./assets/img/Purple.png" class="navbar-brand-img" alt="..." height="50px">
            </a>

            <!-- Brand -->  
            <!-- <a class="navbar-brand" href="./index.php">
                <img src="./assets/img/de1.png" class="navbar-brand-img" alt="..." style="height: 220px;margin: -133px;">
            </a> -->

            <!-- Brand -->  
           <!--  <a class="navbar-brand" href="./index.php">
                <img src="./assets/img/de2.png" class="navbar-brand-img" alt="..." style="height: 18px;margin: 13px;">
            </a> -->


            <!-- Vertical Menu -->
            <ul class="navbar-nav navbar-vertical ms-xl-4 d-none d-xl-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pb-4 mb-n4 px-0 pt-0" id="navbarVerticalMenu" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                        <div class="py-3 px-5 d-flex align-items-center">
                            <div class="me-3 ms-1 text-gigas d-flex">
                                <!-- Icon -->
                                <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="25" height="1" fill="currentColor"/>
                                    <rect y="8" width="15" height="1" fill="currentColor"/>
                                    <rect y="16" width="20" height="1" fill="currentColor"/>
                                </svg>

                            </div>
                            <span class="text-gigas fw-medium me-1">Categories</span>
                        </div> 
                    </a>
                    

            <ul class="dropdown-menu dropdown-menu-md bg-dark rounded py-4 mt-4" aria-labelledby="navbarVerticalMenu"> 
              <?php
                    $sql="select * from categories_tbl";
                    $data=mysqli_query($cnn,$sql);
                    while($row=mysqli_fetch_array($data))
                    {
               ?>
                          <li class="dropdown-item dropright">
                                <a href="category.php?categories_id=<?php echo $row['categories_id'];?>" >
                                    <?php echo $row['categories_name'];?>
                                <i class="bi bi-chevron-right"></i>
                                </a>
                            <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                <div class="dropdown-menu-md bg-dark rounded dropdown-menu-inner">
                            <ul>
                                <?php
                                    $sql_sub="select * from sub_categories_tbl where sub_categories_tbl.categories_id='".$row['categories_id']."'";
                                    
                                    $subcatdata=mysqli_query($cnn,$sql_sub);
                                    while($subcatrow=mysqli_fetch_array($subcatdata)){?>
                                        <li class="dropdown-item dropright">
                                                <a href="sub_category.php?sub_cat_id=<?php echo $subcatrow['sub_cat_id'];?>" >
                                                        <?php echo $subcatrow['sub_cat_name'];?> <i class="bi bi-chevron-right"></i>
                                                </a>
                                                 <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                            <!--<div class="dropdown-menu-md bg-dark rounded dropdown-menu-inner">
                                            <ul>
                                                <?php
                                                        $sql_sub="select * from topic_tbl where sub_cat_id='".$subcatrow['sub_cat_id']."'";
                                                        $topic_data=mysqli_query($cnn,$sql_sub);
                                                        while($topic_trow=mysqli_fetch_array($topic_data)){?>
                                                        <li class="dropdown-item dropright"><a href="" ><?php echo $topic_trow['topic_name'];?></a></li>
                                                <?php  } ?>
                                            </ul>
                                        </div>-->
                                    </div>
                                        </li>
                                <?php } ?>
                            </ul>
                                </div>
                            </div>
                            <?php }  ?> 
                          </li>
                        </ul>   



                  
                </li>
            </ul>

            <!-- Collapse -->
            <div class="collapse navbar-collapse z-index-lg" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler outline-0 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Icon -->
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                        <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                    </svg>

                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link px-xl-4 text-gigas" id="navbarLandings" href="index.php" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-xl-4 text-gigas" id="navbarCourses"  href="./course_list.php" aria-haspopup="true" aria-expanded="false">
                            Courses
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link px-xl-4 text-gigas" id="navbarLandings" href="./instructors_list.php">
                            Instructors
                        </a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link px-xl-4 text-gigas" id="navbarLandings" href="contact_us.php">
                            Contact us
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link px-xl-4 text-gigas" id="navbarShop" href="faq.php">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-xl-4 text-gigas" id="navbarShop" href="tutor/registration.php">
                            Become an Instructor
                        </a>
                        
                    </li>  
                </ul>
            </div>

            <!-- Search, Account & Cart -->
            <ul class="navbar-nav flex-row ms-n4 ms-sm-auto ms-xl-0 me-n2 me-md-n4">

               

               

                <?php 
                if(!isset($_SESSION['uid']))
                {
                ?>
                <!-- <a href="login.php"><button type="button" class="btn btn-primary btn-sm">Login</button></a> -->

                <a class="nav-link px-xl-4 text-gigas" id="navbarShop" href="login.php">Login/Register</a>
                <!-- <a href="register.php" ><button type="button" class="btn btn-info btn-sm">Register</button></a> -->
                 <!-- <a class="nav-link px-xl-4 text-gigas" id="navbarShop" href="register.php">Register</a> -->

                <?php
                }

                else
                {
                $qry="select * from user_tbl where user_tbl.user_id='".$_SESSION['uid']."'";
                    //echo $qry,die;
                    $test=mysqli_query($cnn,$qry);
                    $result=mysqli_fetch_array($test);
                    $user_image=$result['user_image'];
                
                ?>

                <li class="nav-item dropdown">

                    <!-- Button trigger account modal -->
                    <a class="nav-link d-flex p-3 text-gigas icon-xs"  style="width: 200px;">
                    
                    Welcome <?php echo $_SESSION['uname']; } ?>
                        

                    </a>

                    <ul class="dropdown-menu border-lg shadow-none" aria-labelledby="navbarBlog">
                        <li class="dropdown-item dropright">
                            <a class="dropdown-link" href="user_profile.php">
                                My Profile                                    
                            </a>
                        </li>
                        <li class="dropdown-item dropright">
                            <a class="dropdown-link" href="user_profile.php">
                                Change Password
                            </a>
                        </li>
                        
                        <li class="dropdown-item dropright">
                            <a class="dropdown-link" href="my_courses.php">
                                My Courses
                            </a>
                        </li>

                        <li class="dropdown-item dropright">
                            <a class="dropdown-link" href="inquiry.php">
                                Inquiry
                            </a>
                        </li>

                        <li class="dropdown-item dropright">
                            <a class="dropdown-link" href="response.php">
                                Response
                            </a>
                        </li>

                        <li class="dropdown-item dropright">
                            <a class="dropdown-link" href="payment_success.php">
                                Payment History
                            </a>
                        </li>
                        
                        <li class="dropdown-item dropright">
                            <a class="dropdown-link" href="logout.php">
                                Logout
                            </a>
                        </li>
                    </ul>

                </li>

            </ul>
       
            <!-- Toggler -->
            <button class="navbar-toggler ms-4 ms-md-5 shadow-none bg-teal text-white icon-xs p-0 outline-0 h-40p w-40p d-flex d-xl-none place-flex-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Icon -->
                <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                    <rect width="25" height="1" fill="currentColor"/>
                    <rect y="8" width="15" height="1" fill="currentColor"/>
                    <rect y="16" width="20" height="1" fill="currentColor"/>
                </svg>

            </button>
        </div>
    </header>