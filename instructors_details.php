<?php
session_start();
require_once('connect.php');
if(isset($_GET['tutor_id']))
{
      $str="select * from tutor_tbl,tutor_prof_detail_tbl
       where tutor_tbl.tutor_id='".$_GET['tutor_id']."' and tutor_status='1' and 
      tutor_tbl.tutor_id=tutor_prof_detail_tbl.tutor_id";
      //echo $str;
      $data=mysqli_query($cnn,$str);
      $row=mysqli_fetch_array($data);
      $tutor_name=$row['tutor_name'];
      $tutor_profile_tagline=$row['tutor_profile_tagline'];
      $overview=$row['overview'];
      $tutor_image=$row['tutor_image'];
      $identity_doc=$row['identity_doc'];

}

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
    <style>
        #course_id-error{
            color: red;
        }
    </style>

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
    <link rel="stylesheet" href="./assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Instructor Detail</title>

</head>
<body class="bg-white">

    <!-- MODALS
    ================================================== -->
    <!-- Modal Sidebar account -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <!-- Close -->
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Heading -->
            <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
              Schedule a demo with us
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
              We can help you solve company communication.
            </p>

            <!-- Form -->
            <form>
              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- First name -->
                  <div class="form-label-group">
                    <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                    <label for="registrationFirstNameModal">First name</label>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Last name -->
                  <div class="form-label-group">
                    <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                    <label for="registrationLastNameModal">Last name</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- Email -->
                  <div class="form-label-group">
                    <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                    <label for="registrationEmailModal">Email</label>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Password -->
                  <div class="form-label-group">
                    <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                    <label for="registrationPasswordModal">Password</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-12">

                  <!-- Submit -->
                  <button class="btn btn-block btn-primary mt-3 lift">
                    Request a demo
                  </button>

                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-sidebar left fade-left fade" id="accountModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Signin -->
                <div class="collapse show" id="collapseSignin" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Log In to Your DreamEdu Account!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Signin -->
                        <form class="mb-5">

                            <!-- Email -->
                            <div class="form-group mb-5">
                                <label for="modalSigninEmail">
                                    Username or Email
                                </label>
                                <input type="email" class="form-control" id="modalSigninEmail" placeholder="creativelayers">
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-5">
                                <label for="modalSigninPassword">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="modalSigninPassword" placeholder="**********">
                            </div>

                            <div class="d-flex align-items-center mb-5 font-size-sm">
                                <div class="form-check">
                                    <input class="form-check-input text-gray-800" type="checkbox" id="autoSizingCheck">
                                    <label class="form-check-label text-gray-800" for="autoSizingCheck">
                                        Remember me
                                    </label>
                                </div>

                                <div class="ms-auto">
                                    <a class="text-gray-800" data-bs-toggle="collapse" href="#collapseForgotPassword" role="button" aria-expanded="false" aria-controls="collapseForgotPassword">Forgot Password</a>
                                </div>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                LOGIN
                            </button>
                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Don't have an account? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignup" role="button" aria-expanded="false" aria-controls="collapseSignup">Sign up</a>
                        </p>
                    </div>
                </div>

                <!-- Signup -->
                <div class="collapse" id="collapseSignup" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Sign Up and Start Learning!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Signup -->
                        <form class="mb-5">

                            <!-- Username -->
                            <div class="form-group mb-5">
                                <label for="modalSignupUsername">
                                    Username
                                </label>
                                <input type="text" class="form-control" id="modalSignupUsername" placeholder="John">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-5">
                                <label for="modalSignupEmail">
                                    Username or Email
                                </label>
                                <input type="email" class="form-control" id="modalSignupEmail" placeholder="johndoe@creativelayers.com">
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-5">
                                <label for="modalSignupPassword">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="modalSignupPassword" placeholder="**********">
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                SIGN UP
                            </button>

                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Already have an account? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignin" role="button" aria-expanded="true" aria-controls="collapseSignin">Log In</a>
                        </p>
                    </div>
                </div>

                <!-- Forgot Password -->
                <div class="collapse" id="collapseForgotPassword" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Recover password!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Recover Password -->
                        <form class="mb-5">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="modalForgotpasswordEmail">
                                    Email
                                </label>
                                <input type="email" class="form-control" id="modalForgotpasswordEmail" placeholder="johndoe@creativelayers.com">
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                RECOVER PASSWORD
                            </button>
                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Remember your password? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignin" role="button" aria-expanded="false" aria-controls="collapseSignin">Log In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sidebar cart -->
    <div class="modal modal-sidebar left fade-left fade" id="cartModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header mb-4">
                    <h5 class="modal-title">Your Shopping Cart</h5>
                    <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                        <!-- Icon -->
                        <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                            <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                        </svg>

                    </button>
                </div>

                <div class="modal-body">
                    <ul class="list-group list-group-flush mb-5">
                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Basic of Nature</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                        <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                        <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                        <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>
                        </li>

                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Color Harriet Tubman</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                        <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                        <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                        <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>
                        </li>

                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Digital Photography</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                        <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                        <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                        <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>
                        </li>
                    </ul>

                    <div class="d-flex mb-5">
                        <h5 class="mb-0 me-auto">Order Subtotal</h5>
                        <h5 class="mb-0">$121.87</h5>
                    </div>

                    <div class="d-md-flex justify-content-between">
                        <a href="#" class="d-block d-md-inline-block mb-4 mb-md-0 btn btn-primary btn-sm-wide">VIEW CART</a>
                        <a href="#" class="d-block d-md-inline-block btn btn-teal btn-sm-wide text-white">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- NAVBAR
    ================================================== -->
    <?php include_once "header.php"; ?>

    <!-- INSTRUCTORS SINGLE
    ================================================== -->
    <div class="container pt-8 pt-md-11">
        <div class="row">
            <div class="col-xl-8 mx-xl-auto">
                <div class="d-flex flex-wrap align-items-center justify-content-center mb-5 mb-md-3">
                    <!-- Social -->
                    <ul class="list-unstyled list-inline list-social mb-4 mb-md-0 mx-lg-4 order-1 order-md-0 font-size-sm">
                        <li class="list-inline-item list-social-item">
                            <a href="https://www.facebook.com/" class="text-secondary w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="https://twitter.com/" class="text-secondary w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="https://www.instagram.com/" class="text-secondary w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="https://in.linkedin.com/in/" class="text-secondary w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>


                    <div class="border rounded-circle d-inline-block mb-4 mb-md-0 mx-lg-4 order-0">

                    <?php  
                       // file_exists('http://www.mydomain.com/images/'.$filename))
                            if($tutor_image=="")
                            {
                                ?>
                                <!-- <img class="rounded shadow-light-lg img-fluid" src="../DreamEdu/tutor/images/avtar.png"> -->
                                <div class="p-4">
                                    <img src="tutor/images/avtar.png" alt="..." class="rounded-circle img-fluid" width="170" height="170">
                                </div>
                                <?php  
                            }
                            else
                            {?>
                               <!-- <img class="rounded shadow-light-lg img-fluid" src="../DreamEdu/tutor/images/<?php //echo $result['tutor_image'];?>">  -->
                               <div class="p-4">
                                    <img class="rounded-circle img-fluid" width="170" height="170" src="tutor/images/<?php echo $tutor_image;?>" alt="...">
                                </div>
                               <?php  
                            }
                        ?>


                        <!-- <div class="p-4">
                            <img src="../edu/tutor/images/<?php echo $tutor_image;?>" alt="..." class="rounded-circle img-fluid" width="170" height="170">
                        </div> -->
                    </div>

                    <a href="#" class="text-teal fw-medium d-flex align-items-center mx-lg-4 order-1 order-md-0">
                        <!-- Icon -->
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0283 6.25C14.3059 6.25 12.9033 4.84833 12.9033 3.125C12.9033 1.40167 14.3059 0 16.0283 0C17.7509 0 19.1533 1.40167 19.1533 3.125C19.1533 4.84833 17.7509 6.25 16.0283 6.25ZM16.0283 1.25C14.995 1.25 14.1533 2.09076 14.1533 3.125C14.1533 4.15924 14.995 5 16.0283 5C17.0616 5 17.9033 4.15924 17.9033 3.125C17.9033 2.09076 17.0616 1.25 16.0283 1.25Z" fill="currentColor"/>
                            <path d="M16.0283 20C14.3059 20 12.9033 18.5983 12.9033 16.875C12.9033 15.1517 14.3059 13.75 16.0283 13.75C17.7509 13.75 19.1533 15.1517 19.1533 16.875C19.1533 18.5983 17.7509 20 16.0283 20ZM16.0283 15C14.995 15 14.1533 15.8408 14.1533 16.875C14.1533 17.9092 14.995 18.75 16.0283 18.75C17.0616 18.75 17.9033 17.9092 17.9033 16.875C17.9033 15.8408 17.0616 15 16.0283 15Z" fill="currentColor"/>
                            <path d="M3.94531 13.125C2.22275 13.125 0.820312 11.7233 0.820312 10C0.820312 8.27667 2.22275 6.875 3.94531 6.875C5.66788 6.875 7.07031 8.27667 7.07031 10C7.07031 11.7233 5.66788 13.125 3.94531 13.125ZM3.94531 8.125C2.91199 8.125 2.07031 8.96576 2.07031 10C2.07031 11.0342 2.91199 11.875 3.94531 11.875C4.97864 11.875 5.82031 11.0342 5.82031 10C5.82031 8.96576 4.97864 8.125 3.94531 8.125Z" fill="currentColor"/>
                            <path d="M6.12066 9.39154C5.90307 9.39154 5.69143 9.27817 5.57729 9.0766C5.40639 8.77661 5.51061 8.39484 5.8106 8.22409L13.5431 3.81568C13.8422 3.64325 14.2247 3.74823 14.3947 4.04914C14.5656 4.34912 14.4614 4.73075 14.1614 4.90164L6.42888 9.30991C6.33138 9.36484 6.22564 9.39154 6.12066 9.39154Z" fill="currentColor"/>
                            <path d="M13.8524 16.2665C13.7475 16.2665 13.6416 16.2398 13.5441 16.1841L5.81151 11.7757C5.51152 11.6049 5.40745 11.2231 5.5782 10.9232C5.74818 10.6224 6.12996 10.5182 6.42994 10.6899L14.1623 15.0981C14.4623 15.269 14.5665 15.6506 14.3958 15.9506C14.2807 16.1531 14.0691 16.2665 13.8524 16.2665Z" fill="currentColor"/>
                        </svg>
                            <?php  
                            $blog_link = "localhost/DreamEdu/instructors_detail";
                            //echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                         ?>
                            <a target="_blank" href="https://wa.me/?text=<?php echo $blog_link;?>"><span class="ms-3">Share This Tutor</span></a>
                          
                    
                </div>
                <h1 class="text-center mb-1"><?php echo $tutor_name; ?>
                    <?php 
                          if($identity_doc=="") 
                          {
                            //echo '<img src="images/not_verify.png" style="width:35px;">';
                          } 
                          else
                          {
                            echo '<img src="images/verified.png" style="width:35px;">';
                          }
                        ?> 
                </h1>
                <div class="text-center mb-7"><?php echo $tutor_profile_tagline; ?></div>

                <div class="row mb-7 justify-content-center align-items-center">
                    <?php 
                    
                      $str="select COUNT(review_id) as Total_Review 
                      from review_tbl,tutor_tbl where review_tbl.tutor_id=tutor_tbl.tutor_id and review_tbl.tutor_id='".$_GET['tutor_id']."'";
                      $count=mysqli_query($cnn,$str);
                      $result_count=mysqli_fetch_array($count);
                    ?>

                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <div class="d-flex align-items-center">
                            
                            <div class="me-3 d-flex">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M26.791 23.5866C25.7884 22.6739 25.0512 21.7007 24.5092 20.7683C24.3178 20.439 24.4139 20.0207 24.7217 19.7962C27.3923 17.8486 29.126 14.6936 29.1199 11.1338C29.1097 5.21907 24.3432 0.461123 18.4285 0.461182C14.396 0.461182 10.8855 2.69408 9.06445 5.99051L20.6419 22.0673C22.6827 23.4597 24.9597 24.0686 26.4226 24.3314C26.8488 24.4081 27.1113 23.8781 26.791 23.5866Z" fill="#DFEBFA"/>
                                        <path d="M9.51953 6.62305L20.6414 22.0673C21.1802 22.4349 21.7354 22.7474 22.2878 23.0139C23.7299 21.1917 24.5912 18.8887 24.5912 16.3845C24.5912 10.4798 19.8046 5.69317 13.8999 5.69312C12.3374 5.69312 10.8552 6.02539 9.51953 6.62305Z" fill="#B1DBFC"/>
                                        <path d="M11.5839 5.69312C5.66928 5.69312 0.902727 10.451 0.892594 16.3657C0.886503 19.9255 2.6202 23.0806 5.29074 25.0282C5.59853 25.2526 5.69464 25.6709 5.50323 26.0003C4.96134 26.9326 4.22416 27.9058 3.22149 28.8185C2.90122 29.11 3.16374 29.64 3.59002 29.5634C5.09494 29.293 7.46179 28.6565 9.54644 27.1772C9.7604 27.0253 10.0249 26.9654 10.2854 26.9971C10.7111 27.0489 11.1444 27.0758 11.5839 27.0758C17.4886 27.0758 22.2753 22.2891 22.2753 16.3845C22.2752 10.4798 17.4886 5.69317 11.5839 5.69312Z" fill="#FEE55A"/>
                                        <path d="M5.53662 28.8185C6.53929 27.9058 7.27647 26.9326 7.81842 26.0002C8.00983 25.6709 7.91372 25.2526 7.60593 25.0281C4.93539 23.0805 3.20163 19.9254 3.20778 16.3657C3.21727 10.8431 7.37352 6.32961 12.7391 5.75538C12.3597 5.71461 11.9744 5.69312 11.5841 5.69312C5.66928 5.69306 0.902727 10.4509 0.892594 16.3657C0.886503 19.9254 2.6202 23.0805 5.29074 25.0281C5.59853 25.2526 5.69464 25.6709 5.50323 26.0002C4.96134 26.9326 4.22416 27.9058 3.22149 28.8185C2.90122 29.11 3.16374 29.6399 3.59002 29.5634C4.10562 29.4707 4.72248 29.3351 5.39441 29.1373C5.393 29.0249 5.43611 28.91 5.53662 28.8185Z" fill="#FFD301"/>
                                        <path d="M12.0742 27.0642C12.3009 27.054 12.5258 27.0367 12.7486 27.0126C12.6999 27.0073 12.651 27.0029 12.6026 26.9971C12.4222 26.9751 12.2403 26.9982 12.0742 27.0642Z" fill="#FFD301"/>
                                        <path d="M17.4635 18.2205H5.70498C5.25293 18.2205 4.94292 18.6812 5.11798 19.0981C6.17864 21.6231 8.67376 23.3968 11.5843 23.3968C14.4948 23.3968 16.9899 21.6231 18.0505 19.0981C18.2256 18.6813 17.9157 18.2205 17.4635 18.2205Z" fill="#DFEBFA"/>
                                        <path d="M7.63261 19.0981C7.45754 18.6812 7.7675 18.2205 8.2196 18.2205H5.70498C5.25293 18.2205 4.94292 18.6812 5.11798 19.0981C6.17864 21.6231 8.67376 23.3968 11.5843 23.3968C12.0136 23.3968 12.4335 23.3573 12.8416 23.2834C10.4838 22.8562 8.53683 21.2507 7.63261 19.0981Z" fill="#B1DBFC"/>
                                        <path d="M4.70725 19.2575C7.25907 25.3322 15.8946 25.3406 18.4499 19.2575C18.7467 18.551 18.2225 17.7705 17.4578 17.7705H5.69933C4.93293 17.7704 4.41106 18.5523 4.70725 19.2575ZM5.69933 18.649H17.4579C17.5947 18.649 17.694 18.7884 17.6399 18.9172C15.3889 24.276 7.77145 24.2835 5.51729 18.9172C5.46311 18.7882 5.56274 18.649 5.69933 18.649Z" fill="black"/>
                                        <path d="M6.15005 13.8513C6.15005 12.9804 6.85864 12.2719 7.72953 12.2719C8.60042 12.2719 9.30895 12.9804 9.30895 13.8513C9.30895 14.0939 9.50557 14.2906 9.74823 14.2906C9.99089 14.2906 10.1875 14.0939 10.1875 13.8513C10.1875 12.496 9.08486 11.3933 7.72953 11.3933C6.37414 11.3933 5.27148 12.496 5.27148 13.8513C5.27148 14.0939 5.46811 14.2906 5.71077 14.2906C5.95343 14.2906 6.15005 14.094 6.15005 13.8513Z" fill="black"/>
                                        <path d="M13.8454 13.8513C13.8454 12.9804 14.554 12.2719 15.4248 12.2719C16.2957 12.2719 17.0043 12.9804 17.0043 13.8513C17.0043 14.0939 17.2009 14.2906 17.4435 14.2906C17.6862 14.2906 17.8828 14.0939 17.8828 13.8513C17.8828 12.496 16.7802 11.3933 15.4248 11.3933C14.0695 11.3933 12.9668 12.496 12.9668 13.8513C12.9668 14.0939 13.1634 14.2906 13.4061 14.2906C13.6487 14.2906 13.8454 14.094 13.8454 13.8513Z" fill="black"/>
                                        <path d="M13.033 2.41998C13.2393 2.29224 13.3029 2.02152 13.1752 1.81523C13.0475 1.60901 12.7769 1.5454 12.5705 1.67308C10.9996 2.646 9.69006 4.00022 8.77073 5.59651C4.06977 6.80571 0.456302 11.0747 0.447282 16.3541C0.441074 19.9371 2.15158 23.276 5.02583 25.3723C5.15474 25.4663 5.19416 25.6367 5.11737 25.7687C4.53289 26.7744 3.79344 27.6876 2.91973 28.4828C2.27504 29.0697 2.80242 30.1394 3.66159 29.985C5.29021 29.6923 7.67622 29.028 9.79455 27.5247C9.91468 27.4395 10.0679 27.4032 10.2263 27.4224C12.242 27.6676 14.2982 27.3684 16.1886 26.507C16.4094 26.4063 16.5068 26.1458 16.4062 25.9251C16.3056 25.7043 16.0452 25.6069 15.8242 25.7075C14.0715 26.5062 12.1757 26.7745 10.3323 26.5502C9.95638 26.5047 9.58486 26.5962 9.28609 26.8082C7.31196 28.2091 5.07397 28.8359 3.52963 29.1157C4.46179 28.2638 5.25138 27.2865 5.87698 26.2102C6.18061 25.688 6.03723 25.0225 5.54353 24.6624C2.89689 22.7322 1.32028 19.6269 1.32585 16.3556C1.33551 10.7125 5.93461 6.12154 11.578 6.1216C17.2309 6.1216 21.8299 10.7206 21.8299 16.3736C21.8299 19.6792 20.2213 22.8008 17.5267 24.724C17.3293 24.8649 17.2835 25.1393 17.4244 25.3367C17.5653 25.5342 17.8396 25.58 18.0372 25.4391C19.1129 24.6713 20.0285 23.727 20.7571 22.662C22.7355 23.9113 24.863 24.4881 26.3376 24.753C27.1961 24.9072 27.7248 23.8383 27.0795 23.2509C26.2056 22.4555 25.4662 21.5423 24.8818 20.5367C24.805 20.4048 24.8444 20.2343 24.9734 20.1403C27.8405 18.0493 29.5582 14.7156 29.552 11.1221C29.5386 3.29678 21.7272 -2.00476 14.4927 0.726051C14.2657 0.811681 14.1512 1.06518 14.2369 1.29214C14.3226 1.5191 14.5762 1.63367 14.8029 1.54798C21.5092 -0.983281 28.6612 4.00637 28.6733 11.1236C28.679 14.3949 27.1023 17.5002 24.4557 19.4304C23.9619 19.7905 23.8186 20.4559 24.1222 20.9782C24.747 22.0531 25.5355 23.0295 26.4695 23.884C25.0738 23.6311 23.0733 23.0862 21.224 21.9178C22.1817 20.2509 22.7084 18.3426 22.7084 16.3736C22.7084 9.65301 16.7459 4.37982 9.95562 5.35912C10.7627 4.18103 11.8125 3.17584 13.033 2.41998Z" fill="black"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="30" height="30" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <!-- 533 Reviews -->
                            <?php echo $result_count['Total_Review'];?> Reviews
                        </div>
                    </div>

                    <?php 
                    
                      $str="select SUM(rating) as Rating,COUNT(tutor_tbl.tutor_id) as tid from review_tbl,tutor_tbl where review_tbl.tutor_id=tutor_tbl.tutor_id and review_tbl.tutor_id='".$_GET['tutor_id']."'";
                      //echo $str;die;
                      $count=mysqli_query($cnn,$str);
                      $review_count=mysqli_fetch_array($count);
                    ?>
                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <div class="d-flex align-items-center">
                            <div class="me-3 d-flex">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.4738 11.5819C29.2385 10.8577 28.5637 10.3674 27.8022 10.3674L19.2995 10.3673L16.6718 2.28068C16.4365 1.55651 15.7617 1.06616 15.0002 1.06616C14.812 1.06616 14.6292 1.09634 14.457 1.15235L15.0002 14.9993L23.2748 28.8936C23.5117 28.8437 23.7407 28.7455 23.9454 28.5968C24.5614 28.1492 24.8192 27.3559 24.5839 26.6316L21.9565 18.545L28.8353 13.5471C29.4514 13.0995 29.7092 12.3061 29.4738 11.5819Z" fill="#FFB820"/>
                                    <path d="M27.8013 12.1251L18.0215 12.125L14.4561 1.15234C13.9312 1.32302 13.5048 1.73544 13.3276 2.28074L10.7 10.3673L2.19724 10.3674C1.43574 10.3674 0.760899 10.8577 0.5256 11.5819C0.290301 12.3061 0.54804 13.0995 1.16412 13.5471L8.04293 18.545L5.41556 26.6316C5.1802 27.3558 5.438 28.1492 6.05408 28.5967C6.6701 29.0443 7.50431 29.0443 8.12038 28.5967L14.9993 23.5991L21.8782 28.5968C22.2896 28.8957 22.798 28.9938 23.274 28.8936L19.8894 17.8736L27.8013 12.1251Z" fill="#FFD06A"/>
                                    <path d="M22.9121 29.3731C22.4594 29.3731 22.0069 29.2328 21.6206 28.9521L15 24.1421L8.37932 28.9521C7.60692 29.5134 6.56887 29.5133 5.79642 28.9521C5.02396 28.3909 4.70318 27.4038 4.99824 26.4957L7.52694 18.7127L5.05695 16.9181C4.86061 16.7754 4.81708 16.5006 4.95975 16.3043C5.10236 16.1078 5.37709 16.0642 5.57354 16.2071L8.30192 18.1894C8.4559 18.3013 8.52035 18.4997 8.46152 18.6807L5.83415 26.7673C5.65715 27.3121 5.84962 27.9044 6.31307 28.2411C6.77652 28.5778 7.39934 28.578 7.86279 28.2411L14.7417 23.2435C14.8957 23.1316 15.1043 23.1316 15.2582 23.2435L22.1372 28.2412C22.6006 28.5779 23.2234 28.5779 23.6869 28.2412C24.1503 27.9044 24.3428 27.3121 24.1658 26.7673L21.5384 18.6807C21.4796 18.4997 21.5441 18.3013 21.698 18.1894L28.5769 13.1915C29.0404 12.8548 29.2328 12.2625 29.0558 11.7177C28.8788 11.1728 28.3749 10.8067 27.802 10.8067L19.2993 10.8066C19.109 10.8066 18.9402 10.684 18.8814 10.5029L16.2538 2.41641C16.0768 1.87158 15.5729 1.50557 15 1.50557C14.4272 1.50557 13.9233 1.87164 13.7463 2.41653L11.1187 10.503C11.0598 10.6841 10.8911 10.8067 10.7007 10.8067L2.19797 10.8068C1.62513 10.8068 1.12125 11.1729 0.944251 11.7177C0.767249 12.2626 0.959661 12.8548 1.42317 13.1916L4.15155 15.174C4.34789 15.3166 4.39142 15.5914 4.24875 15.7877C4.10614 15.984 3.83129 16.0277 3.63496 15.8849L0.906519 13.9026C0.134121 13.3412 -0.186661 12.3541 0.1084 11.4461C0.403462 10.538 1.24318 9.92788 2.19797 9.92788L10.3815 9.92776L12.9104 2.1449C13.2055 1.23681 14.0452 0.626709 15 0.626709C15.9549 0.626709 16.7946 1.23681 17.0896 2.14485L19.6186 9.92776L27.802 9.92788C28.7569 9.92788 29.5966 10.538 29.8916 11.4461C30.1867 12.3541 29.866 13.3413 29.0935 13.9025L22.473 18.7128L25.0017 26.4958C25.2968 27.4038 24.976 28.391 24.2035 28.9523C23.8173 29.2328 23.3646 29.3731 22.9121 29.3731Z" fill="black"/>
                                </svg>

                            </div>
                            <!-- 4.87 rating -->
                            <td>
                            <?php  
                                if($review_count['Rating']=="")
                                {
                                   echo "No" ;
                                }
                                else
                                {
                                    $t=$review_count['tid'];
                                    $a=$review_count['Rating']/$t;
                                    $a=number_format($a,1);
                                    echo $a;  
                                }

                            ?> rating
                            </td>
                        </div>

                    </div>

                    <?php 
                    $str="select SUM(rating) as Rating,COUNT(tutor_tbl.tutor_id) as tid from review_tbl,tutor_tbl where review_tbl.tutor_id=tutor_tbl.tutor_id and review_tbl.tutor_id='".$_GET['tutor_id']."'";
                      //echo $str;die;
                      $count=mysqli_query($cnn,$str);
                      $review_count=mysqli_fetch_array($count);
                      if($review_count['Rating']=="")
                        {
                           // echo "No" ;
                        }   
                        else
                        {?>
                            <div class="col-12 col-md-auto mb-3 mb-md-0">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 d-flex">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1894 16.9448L10.7189 15.4507L4.08109 26.4266C3.95588 26.6335 4.11385 26.8961 4.35537 26.8825L7.07353 26.7294C7.19746 26.7224 7.31289 26.7923 7.36422 26.9052L8.49086 29.3835C8.59099 29.6037 8.89685 29.6216 9.02201 29.4147L15.6599 18.4388L13.1894 16.9448Z" fill="#68C4FB"/>
                                            <path d="M16.8104 16.9448L19.2809 15.4507L25.9187 26.4266C26.0439 26.6335 25.886 26.8961 25.6445 26.8825L22.9263 26.7294C22.8024 26.7224 22.6869 26.7923 22.6356 26.9052L21.5089 29.3835C21.4088 29.6037 21.1029 29.6216 20.9778 29.4147L14.3398 18.4388L16.8104 16.9448Z" fill="#68C4FB"/>
                                            <path d="M25.6432 26.8821L23.8924 26.7841L17.6387 16.443L19.2797 15.4504L25.9173 26.4266C26.0429 26.6332 25.8844 26.8962 25.6432 26.8821Z" fill="#42A7F9"/>
                                            <path d="M4.35535 26.8821L6.10613 26.7841L12.3598 16.443L10.7188 15.4504L4.08125 26.4266C3.95562 26.6332 4.11412 26.8962 4.35535 26.8821Z" fill="#42A7F9"/>
                                            <path d="M24.9679 10.4076C24.9679 11.2684 24.1624 12.0119 23.9502 12.8059C23.7306 13.6275 24.05 14.6729 23.6339 15.3922C23.2117 16.1218 22.1426 16.3654 21.5505 16.9575C20.9583 17.5497 20.7148 18.6187 19.9852 19.0409C19.2659 19.457 18.2204 19.1376 17.3989 19.3572C16.6049 19.5694 15.8614 20.3749 15.0005 20.3749C14.1397 20.3749 13.3962 19.5694 12.6022 19.3572C11.7806 19.1376 10.7352 19.457 10.0159 19.0408C9.28629 18.6187 9.04266 17.5496 8.45057 16.9575C7.85842 16.3653 6.78937 16.1217 6.36721 15.3921C5.95107 14.6728 6.27047 13.6274 6.05092 12.8059C5.83869 12.0119 5.0332 11.2684 5.0332 10.4075C5.0332 9.54665 5.83869 8.80315 6.05092 8.00915C6.27047 7.18761 5.95113 6.14218 6.36727 5.42288C6.78937 4.69327 7.85848 4.44964 8.45063 3.85755C9.04277 3.2654 9.28635 2.19636 10.016 1.77419C10.7353 1.35806 11.7807 1.67745 12.6022 1.4579C13.3962 1.24567 14.1397 0.440186 15.0005 0.440186C15.8614 0.440186 16.6049 1.24567 17.3989 1.4579C18.2204 1.67745 19.2659 1.35812 19.9852 1.77425C20.7148 2.19636 20.9584 3.26546 21.5505 3.85761C22.1426 4.44976 23.2117 4.69333 23.6339 5.42294C24.05 6.14224 23.7306 7.18767 23.9501 8.00915C24.1624 8.80315 24.9679 9.54665 24.9679 10.4076Z" fill="#F45151"/>
                                            <path d="M23.95 12.806C23.7305 13.6277 24.0498 14.673 23.6337 15.3926C23.2117 16.1221 22.1429 16.3657 21.5506 16.9579C20.9584 17.5496 20.7149 18.6189 19.9853 19.0409C19.2657 19.4571 18.2204 19.1378 17.3987 19.3573C16.6052 19.5697 15.8615 20.375 15.0005 20.375C14.3537 20.375 13.7727 19.9201 13.1875 19.6044C13.9088 19.3913 14.5668 18.7797 15.2611 18.5943C16.1362 18.3601 17.2502 18.7005 18.0162 18.2568C18.7938 17.8072 19.0533 16.6685 19.6842 16.0376C20.3146 15.4067 21.4538 15.1472 21.9034 14.3701C22.3465 13.6036 22.0067 12.4902 22.2403 11.6151C22.4663 10.7694 23.3243 9.97701 23.3243 9.0602C23.3243 8.14285 22.4662 7.35107 22.2403 6.50527C22.0548 5.81035 22.2309 4.9652 22.0895 4.26318C22.6547 4.60947 23.3215 4.88299 23.6337 5.42293C24.0498 6.14252 23.7306 7.18783 23.9501 8.00955C24.1625 8.80309 24.9678 9.5467 24.9678 10.4077C24.9678 11.2688 24.1625 12.0119 23.95 12.806Z" fill="#F42F2F"/>
                                            <path d="M26.2958 26.1987L21.3494 18.0196C21.5127 17.7299 21.6707 17.4596 21.8615 17.2688C22.0677 17.0626 22.3664 16.8947 22.6824 16.7171C23.1874 16.4333 23.7097 16.1396 24.0146 15.6126C24.315 15.0934 24.3096 14.4983 24.3043 13.9228C24.301 13.5558 24.2978 13.2091 24.3752 12.9196C24.4477 12.6481 24.6191 12.3595 24.8005 12.054C25.0852 11.5746 25.4079 11.0312 25.4079 10.4076C25.4079 9.78393 25.0852 9.24047 24.8005 8.76111C24.6191 8.45561 24.4478 8.16703 24.3753 7.89557C24.2979 7.60594 24.301 7.25936 24.3044 6.89232C24.3096 6.31682 24.3151 5.72174 24.0147 5.20254C23.7098 4.67549 23.1875 4.38193 22.6825 4.09805C22.3664 3.92039 22.0678 3.75252 21.8616 3.54633C21.6554 3.34008 21.4875 3.04148 21.3099 2.72537C21.026 2.22035 20.7325 1.69811 20.2054 1.39324C19.6862 1.09277 19.0912 1.09811 18.5156 1.10355C18.1487 1.10678 17.8019 1.11006 17.5124 1.03266C17.2409 0.960117 16.9524 0.788731 16.6469 0.607383C16.1674 0.322676 15.624 0 15.0003 0C14.3767 0 13.8333 0.322676 13.3538 0.607383C13.0483 0.788789 12.7598 0.960117 12.4883 1.03271C12.1987 1.11012 11.852 1.10701 11.485 1.10361C10.9094 1.0984 10.3145 1.09295 9.79526 1.3933C9.26827 1.69822 8.97472 2.22041 8.69083 2.72543C8.51311 3.04154 8.3453 3.3402 8.13905 3.54639C7.93286 3.75258 7.63421 3.92045 7.31815 4.09811C6.81313 4.38193 6.29089 4.67555 5.98597 5.2026C5.68556 5.7218 5.69095 6.31687 5.69628 6.89244C5.69962 7.25941 5.70278 7.60605 5.62538 7.89563C5.55284 8.16709 5.38146 8.45566 5.20005 8.76117C4.9154 9.24059 4.59267 9.78398 4.59267 10.4077C4.59267 11.0313 4.91534 11.5747 5.20005 12.0541C5.3814 12.3596 5.55278 12.6482 5.62532 12.9196C5.70272 13.2093 5.69956 13.5558 5.69622 13.9229C5.69095 14.4984 5.6855 15.0935 5.98591 15.6127C6.29083 16.1397 6.81308 16.4333 7.3181 16.7171C7.63421 16.8948 7.9328 17.0627 8.13899 17.2689C8.32983 17.4598 8.48786 17.7299 8.65122 18.0197L3.70491 26.1987C3.56224 26.4346 3.56189 26.7278 3.70398 26.9641C3.84606 27.2003 4.10569 27.3369 4.38062 27.3219L7.00351 27.1741L8.09071 29.5656C8.20474 29.8166 8.44655 29.9825 8.72183 29.9987C8.73647 29.9995 8.75118 29.9999 8.76577 29.9999C9.0244 29.9999 9.26423 29.8657 9.39923 29.6425L14.7484 20.7974C14.8309 20.8086 14.9149 20.8153 15.0004 20.8153C15.0859 20.8153 15.1698 20.8087 15.2523 20.7974L18.0296 25.3896C18.1554 25.5976 18.4259 25.6643 18.634 25.5384C18.842 25.4126 18.9087 25.1421 18.7828 24.934L16.1078 20.5107C16.2961 20.4158 16.4757 20.3095 16.6469 20.2078C16.9524 20.0264 17.2409 19.8551 17.5124 19.7825C17.802 19.7051 18.1487 19.7083 18.5157 19.7116C19.091 19.7167 19.6862 19.7222 20.2054 19.4219C20.4585 19.2755 20.6574 19.0787 20.8276 18.858L25.4057 26.428L22.9516 26.2897C22.6445 26.2724 22.3629 26.4425 22.2354 26.7229L21.2181 28.9605L20.3887 27.589C20.2629 27.3811 19.9923 27.3144 19.7842 27.4402C19.5762 27.566 19.5095 27.8366 19.6354 28.0447L20.6016 29.6424C20.7366 29.8657 20.9764 29.9999 21.235 29.9999C21.2496 29.9999 21.2643 29.9995 21.279 29.9987C21.5542 29.9825 21.7961 29.8165 21.9101 29.5656L22.9973 27.1741L25.6202 27.3219C25.8955 27.3369 26.1546 27.2002 26.2968 26.964C26.4389 26.7279 26.4385 26.4346 26.2958 26.1987ZM8.78265 28.9606L7.7654 26.7229C7.64382 26.4555 7.38267 26.2885 7.09204 26.2885C7.07786 26.2885 7.06356 26.2889 7.04927 26.2897L4.59513 26.428L9.17317 18.858C9.34333 19.0787 9.54226 19.2755 9.79532 19.4218C10.3146 19.7223 10.9097 19.7169 11.4852 19.7115C11.8521 19.7082 12.1988 19.705 12.4884 19.7824C12.7599 19.855 13.0484 20.0263 13.3539 20.2077C13.5251 20.3094 13.7047 20.4157 13.893 20.5106L8.78265 28.9606ZM19.7645 18.6599C19.4536 18.8398 19.0018 18.8355 18.5237 18.8313C18.1139 18.8274 17.6904 18.8237 17.2851 18.932C16.8961 19.0359 16.5409 19.2469 16.1974 19.4508C15.7783 19.6997 15.3824 19.9348 15.0003 19.9348C14.6183 19.9348 14.2225 19.6997 13.8033 19.4508C13.4597 19.2469 13.1046 19.036 12.7156 18.932C12.3848 18.8436 12.0418 18.8299 11.7041 18.8299C11.6281 18.8299 11.5523 18.8306 11.4769 18.8313C10.9986 18.8356 10.5469 18.8398 10.236 18.6599C9.91749 18.4756 9.69431 18.0786 9.45817 17.6583C9.25913 17.3043 9.05335 16.9381 8.76149 16.6462C8.4697 16.3545 8.10355 16.1486 7.74946 15.9496C7.32917 15.7134 6.9322 15.4903 6.74792 15.1717C6.5681 14.8608 6.5722 14.4091 6.57659 13.9309C6.58028 13.5212 6.58421 13.0976 6.47587 12.6923C6.37192 12.3033 6.16099 11.9481 5.95702 11.6046C5.70817 11.1855 5.47304 10.7896 5.47304 10.4075C5.47304 10.0255 5.70812 9.62971 5.95702 9.21047C6.16099 8.86693 6.37187 8.5118 6.47587 8.12279C6.58421 7.7175 6.58028 7.29387 6.57659 6.88418C6.5722 6.40594 6.5681 5.95418 6.74798 5.64328C6.93226 5.32477 7.32929 5.10158 7.74952 4.86539C8.1036 4.66635 8.46976 4.46057 8.76155 4.16877C9.05335 3.87697 9.25919 3.51082 9.45823 3.15668C9.69448 2.73639 9.91755 2.33941 10.2361 2.1552C10.547 1.97531 10.9988 1.97947 11.4769 1.98381C11.8865 1.98744 12.3102 1.99143 12.7155 1.88309C13.1045 1.77914 13.4597 1.5682 13.8032 1.36424C14.2224 1.11545 14.6184 0.880371 15.0003 0.880371C15.3822 0.880371 15.7782 1.11545 16.1974 1.36436C16.5409 1.56832 16.8961 1.7792 17.2851 1.8832C17.6903 1.99154 18.1138 1.98756 18.5237 1.98393C19.0019 1.9793 19.4537 1.97543 19.7646 2.15531C20.0832 2.33959 20.3063 2.73656 20.5425 3.1568C20.7415 3.51088 20.9473 3.87709 21.2391 4.16889C21.5309 4.46068 21.8971 4.66652 22.2512 4.86557C22.6715 5.10182 23.0684 5.32488 23.2527 5.6434C23.4325 5.9543 23.4284 6.406 23.4241 6.88424C23.4204 7.29393 23.4164 7.71756 23.5248 8.12285C23.6287 8.51186 23.8397 8.86699 24.0436 9.21053C24.2925 9.62971 24.5276 10.0256 24.5276 10.4076C24.5276 10.7895 24.2925 11.1854 24.0436 11.6046C23.8397 11.9481 23.6288 12.3033 23.5248 12.6923C23.4164 13.0976 23.4204 13.5212 23.4241 13.9309C23.4284 14.4091 23.4325 14.8609 23.2527 15.1718C23.0684 15.4903 22.6714 15.7135 22.2511 15.9497C21.897 16.1487 21.5309 16.3545 21.2391 16.6463C20.9473 16.9381 20.7415 17.3043 20.5424 17.6584C20.3062 18.0786 20.083 18.4756 19.7645 18.6599Z" fill="black"/>
                                            <path d="M15.001 16.3458C18.2808 16.3458 20.9396 13.687 20.9396 10.4073C20.9396 7.12752 18.2808 4.46875 15.001 4.46875C11.7213 4.46875 9.0625 7.12752 9.0625 10.4073C9.0625 13.687 11.7213 16.3458 15.001 16.3458Z" fill="#F5CA26"/>
                                            <path d="M20.9377 10.4079C20.9377 13.6876 18.279 16.3461 14.9983 16.3461C12.4749 16.3461 10.3196 14.7723 9.45898 12.5522C10.4504 13.2962 11.6824 13.737 13.0189 13.737C16.2986 13.737 18.9571 11.0772 18.9571 7.79762C18.9571 7.04146 18.8154 6.31824 18.5582 5.65332C20.0035 6.73695 20.9377 8.46365 20.9377 10.4079Z" fill="#EAAF13"/>
                                            <path d="M15.0003 16.7864C13.4777 16.7864 12.0034 16.2411 10.8492 15.251C9.70757 14.2717 8.94608 12.9192 8.70503 11.4424C8.66589 11.2025 8.8286 10.9763 9.06855 10.9371C9.30831 10.8976 9.53466 11.0606 9.57392 11.3005C9.78157 12.5727 10.4381 13.7383 11.4223 14.5827C12.4171 15.436 13.6877 15.9059 15.0003 15.9059C18.0322 15.9059 20.4988 13.4393 20.4988 10.4074C20.4988 7.37544 18.0322 4.90894 15.0003 4.90894C13.8721 4.90894 12.7881 5.24796 11.8655 5.88939C10.9634 6.51663 10.2759 7.38669 9.87749 8.40558C9.7889 8.63204 9.5336 8.74384 9.30726 8.65519C9.08079 8.56659 8.96905 8.3113 9.05765 8.08495C9.51989 6.90294 10.3171 5.89378 11.363 5.16657C12.4339 4.42208 13.6917 4.02856 15.0004 4.02856C18.5177 4.02856 21.3793 6.89017 21.3793 10.4075C21.3793 13.9248 18.5177 16.7864 15.0003 16.7864Z" fill="black"/>
                                        </svg>

                                    </div>
                                    Top teacher
                                </div>
                            </div>
                            <?php 
                        }
                     ?>
                    

                    <?php 
                    
                      $course_str="select COUNT(course_id) as Total_Course,tutor_contact from course_tbl,tutor_tbl where course_tbl.tutor_id=tutor_tbl.tutor_id and course_tbl.tutor_id='".$_GET['tutor_id']."'";
                      $course_count=mysqli_query($cnn,$course_str);
                      $course_count=mysqli_fetch_array($course_count);

                    ?>
                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <div class="d-flex align-items-center">
                            <div class="me-3 d-flex">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.8101 29.5605H6.18945C5.21861 29.5605 4.43164 28.7736 4.43164 27.8027V2.19727C4.43164 1.22643 5.21861 0.439453 6.18945 0.439453H23.8101C24.781 0.439453 25.5679 1.22643 25.5679 2.19727V27.8027C25.5679 28.7736 24.781 29.5605 23.8101 29.5605Z" fill="#F9F7F8"/>
                                    <path d="M23.8105 0.439453H22.0527C23.0235 0.439453 23.8105 1.22643 23.8105 2.19727V27.8027C23.8105 28.7736 23.0235 29.5605 22.0527 29.5605H23.8105C24.7813 29.5605 25.5684 28.7736 25.5684 27.8027V2.19727C25.5684 1.22643 24.7814 0.439453 23.8105 0.439453Z" fill="#E5E1E5"/>
                                    <path d="M20.8871 8.08541C20.8871 11.3374 18.2509 13.973 14.9989 13.973C13.0137 13.973 11.2577 12.9904 10.1911 11.4848C9.51076 10.5247 9.11133 9.35203 9.11133 8.08541C9.11133 7.67332 9.15387 7.27125 9.23414 6.8833C9.78902 4.20773 12.1591 2.19727 14.9989 2.19727C18.2509 2.19727 20.8871 4.83346 20.8871 8.08541Z" fill="#D7D0D6"/>
                                    <path d="M11.6348 12.9172C12.5886 13.5826 13.7483 13.9731 14.9994 13.9731C16.2507 13.9731 17.4106 13.5825 18.3645 12.9171C18.3076 11.1071 16.8235 9.65698 14.9996 9.65698C13.1758 9.65692 11.6915 11.1071 11.6348 12.9172Z" fill="#FD8087"/>
                                    <path d="M15.4398 10.9476C16.0271 10.9476 16.5485 10.6658 16.8764 10.2301C16.3399 9.86856 15.6939 9.65698 14.998 9.65698C14.5746 9.65698 14.1701 9.73597 13.7969 9.87864C14.0764 10.5082 14.7065 10.9476 15.4398 10.9476Z" fill="#FE646F"/>
                                    <path d="M14.9982 10.124C14.0057 10.124 13.2012 9.31942 13.2012 8.32696V6.13433C13.2012 5.55249 13.6729 5.08081 14.2547 5.08081H15.7419C16.3237 5.08081 16.7954 5.55249 16.7954 6.13433V8.32696C16.7953 9.31948 15.9908 10.124 14.9982 10.124Z" fill="#FFCEBF"/>
                                    <path d="M15.7418 5.08081H14.2547C13.6729 5.08081 13.2012 5.55249 13.2012 6.13433V7.47478L14.7241 6.97304C15.2856 6.78806 15.9012 6.87296 16.3917 7.20308L16.7954 7.47472V6.13427C16.7953 5.55249 16.3236 5.08081 15.7418 5.08081Z" fill="#C59191"/>
                                    <path d="M15.1586 16.9027L15.5756 17.7475C15.6012 17.7993 15.6507 17.8353 15.7079 17.8436L16.6402 17.9791C16.7844 18.0001 16.842 18.1772 16.7377 18.2789L16.063 18.9365C16.0216 18.9769 16.0027 19.0351 16.0124 19.0921L16.1717 20.0206C16.1963 20.1642 16.0456 20.2738 15.9166 20.206L15.0827 19.7676C15.0315 19.7407 14.9704 19.7407 14.9191 19.7676L14.0852 20.206C13.9563 20.2738 13.8056 20.1642 13.8302 20.0206L13.9894 19.0921C13.9992 19.0351 13.9803 18.9769 13.9389 18.9365L13.2642 18.2789C13.1599 18.1772 13.2175 18 13.3617 17.9791L14.2939 17.8436C14.3512 17.8353 14.4007 17.7993 14.4263 17.7475L14.8433 16.9027C14.9078 16.772 15.0942 16.772 15.1586 16.9027Z" fill="#FEE45A"/>
                                    <path d="M20.4965 16.9027L20.9135 17.7475C20.9391 17.7993 20.9886 17.8353 21.0458 17.8436L21.9781 17.9791C22.1223 18.0001 22.1799 18.1772 22.0756 18.2789L21.4009 18.9365C21.3595 18.9769 21.3406 19.0351 21.3503 19.0921L21.5096 20.0206C21.5342 20.1642 21.3835 20.2738 21.2545 20.206L20.4206 19.7676C20.3694 19.7407 20.3083 19.7407 20.257 19.7676L19.4231 20.206C19.2942 20.2738 19.1435 20.1642 19.1681 20.0206L19.3273 19.0921C19.3371 19.0351 19.3182 18.9769 19.2768 18.9365L18.6021 18.2789C18.4978 18.1772 18.5554 18 18.6996 17.9791L19.6318 17.8436C19.6891 17.8353 19.7386 17.7993 19.7642 17.7475L20.1812 16.9027C20.2458 16.772 20.4321 16.772 20.4965 16.9027Z" fill="#FEE45A"/>
                                    <path d="M9.82073 16.9027L10.2377 17.7475C10.2633 17.7993 10.3128 17.8353 10.37 17.8436L11.3023 17.9791C11.4465 18.0001 11.5041 18.1772 11.3998 18.2789L10.7251 18.9365C10.6837 18.9769 10.6648 19.0351 10.6746 19.0921L10.8338 20.0206C10.8584 20.1642 10.7077 20.2738 10.5788 20.206L9.74485 19.7676C9.69364 19.7407 9.63247 19.7407 9.58126 19.7676L8.74735 20.206C8.61838 20.2738 8.46768 20.1642 8.49229 20.0206L8.65155 19.0921C8.66133 19.0351 8.64241 18.9769 8.60098 18.9365L7.92633 18.2789C7.82198 18.1772 7.87958 18 8.02377 17.9791L8.95606 17.8436C9.01331 17.8353 9.06282 17.7993 9.08842 17.7475L9.50538 16.9027C9.56995 16.772 9.75622 16.772 9.82073 16.9027Z" fill="#FEE45A"/>
                                    <path d="M22.9312 25.9863H9.82707C9.58432 25.9863 9.38762 26.183 9.38762 26.4258C9.38762 26.6685 9.58432 26.8652 9.82707 26.8652H22.9313C23.174 26.8652 23.3707 26.6685 23.3707 26.4258C23.3707 26.183 23.174 25.9863 22.9312 25.9863ZM17.1989 17.963C17.126 17.7386 16.9357 17.5782 16.7022 17.5443L15.9071 17.4287L15.5515 16.7082C15.4471 16.4967 15.2357 16.3652 14.9998 16.3652C14.7639 16.3652 14.5524 16.4967 14.4481 16.7082L14.0925 17.4287L13.2974 17.5443C13.0639 17.5782 12.8737 17.7387 12.8007 17.9631C12.7278 18.1875 12.7875 18.4291 12.9564 18.5937L13.5317 19.1545L13.3959 19.9465C13.3561 20.179 13.4499 20.4096 13.6408 20.5483C13.7486 20.6266 13.8748 20.6664 14.0018 20.6664C14.0995 20.6664 14.1978 20.6428 14.2886 20.5951L14.9998 20.2211L15.7109 20.5949C15.9197 20.7047 16.168 20.6867 16.3588 20.5482C16.5497 20.4095 16.6435 20.1789 16.6037 19.9464L16.4679 19.1544L17.0431 18.5937C17.212 18.4291 17.2718 18.1874 17.1989 17.963ZM15.755 18.6219C15.61 18.7633 15.5439 18.9669 15.5781 19.1664L15.6471 19.5684L15.2863 19.3787C15.107 19.2844 14.8928 19.2843 14.7135 19.3786L14.3526 19.5684L14.4215 19.1665C14.4557 18.9669 14.3896 18.7633 14.2446 18.6218L13.9525 18.3371L14.356 18.2786C14.5563 18.2495 14.7295 18.1237 14.8194 17.942L14.9998 17.5763L15.1805 17.9423C15.2702 18.1238 15.4433 18.2495 15.6435 18.2785L16.0471 18.3371L15.755 18.6219ZM23.8101 0H6.18945C4.97785 0 3.99219 0.985664 3.99219 2.19727V21.1436C3.99219 21.3863 4.18889 21.583 4.43164 21.583C4.67439 21.583 4.87109 21.3863 4.87109 21.1436V2.19727C4.87109 1.47029 5.46254 0.878906 6.18945 0.878906H23.8102C24.5371 0.878906 25.1285 1.47029 25.1285 2.19727V27.8027C25.1285 28.5296 24.5371 29.1211 23.8102 29.1211H6.18945C5.46254 29.1211 4.87109 28.5296 4.87109 27.8027V22.8312C4.87109 22.5884 4.67439 22.3917 4.43164 22.3917C4.18889 22.3917 3.99219 22.5884 3.99219 22.8312V27.8027C3.99219 29.0143 4.97785 30 6.18945 30H23.8102C25.0218 30 26.0074 29.0143 26.0074 27.8027V2.19727C26.0074 0.985664 25.0217 0 23.8101 0ZM22.9312 23.3496H9.82707C9.58432 23.3496 9.38762 23.5463 9.38762 23.7891C9.38762 24.0318 9.58432 24.2285 9.82707 24.2285H22.9313C23.174 24.2285 23.3707 24.0318 23.3707 23.7891C23.3707 23.5463 23.174 23.3496 22.9312 23.3496ZM7.50781 26.8652C7.75051 26.8652 7.94726 26.6685 7.94726 26.4258C7.94726 26.1831 7.75051 25.9863 7.50781 25.9863C7.26512 25.9863 7.06836 26.1831 7.06836 26.4258C7.06836 26.6685 7.26512 26.8652 7.50781 26.8652ZM7.46305 17.9629C7.39016 18.1873 7.44975 18.429 7.61867 18.5937L8.19406 19.1545L8.05818 19.9465C8.01834 20.179 8.11215 20.4095 8.30305 20.5482C8.49389 20.6868 8.74221 20.7047 8.95098 20.595L9.66219 20.2211L10.3733 20.595C10.4642 20.6427 10.5625 20.6664 10.6602 20.6663C10.7872 20.6663 10.9135 20.6265 11.0213 20.5481C11.2122 20.4094 11.3059 20.1788 11.266 19.9464L11.1302 19.1545L11.7056 18.5937C11.8745 18.429 11.9341 18.1873 11.8612 17.9629C11.7883 17.7386 11.598 17.5781 11.3646 17.5442L10.5694 17.4286L10.2138 16.7082C10.1095 16.4966 9.89803 16.3652 9.66213 16.3652C9.66213 16.3652 9.66207 16.3652 9.66201 16.3652C9.42611 16.3652 9.21471 16.4967 9.11047 16.7082L8.75492 17.4287L7.9598 17.5443C7.72625 17.5781 7.53594 17.7386 7.46305 17.9629ZM9.01818 18.2786C9.21875 18.2495 9.39195 18.1236 9.4816 17.942L9.66207 17.5763L9.8426 17.9419C9.93225 18.1237 10.1054 18.2495 10.3058 18.2785L10.7094 18.3371L10.4173 18.6219C10.2723 18.7633 10.2062 18.9669 10.2404 19.1664L10.3094 19.5684L9.94859 19.3787C9.76912 19.2843 9.55502 19.2843 9.37584 19.3786L9.01484 19.5684L9.08381 19.1665C9.11809 18.9669 9.05193 18.7633 8.90686 18.6218L8.61482 18.3371L9.01818 18.2786ZM22.0399 17.5443L21.2447 17.4287L20.8892 16.7082C20.7848 16.4967 20.5735 16.3652 20.3376 16.3652C20.3376 16.3652 20.3376 16.3652 20.3375 16.3652C20.1016 16.3652 19.8901 16.4966 19.7858 16.7082L19.4302 17.4287L18.6351 17.5443C18.4017 17.5781 18.2114 17.7386 18.1384 17.963C18.0655 18.1874 18.1251 18.429 18.294 18.5937L18.8694 19.1545L18.7337 19.9464C18.6937 20.1789 18.7875 20.4094 18.9783 20.5482C19.0862 20.6266 19.2124 20.6664 19.3394 20.6664C19.4372 20.6664 19.5355 20.6428 19.6263 20.5951L20.3375 20.2212L21.0487 20.5951C21.2574 20.7047 21.5058 20.6869 21.6966 20.5482C21.8875 20.4096 21.9812 20.179 21.9414 19.9464L21.8056 19.1545L22.381 18.5937C22.5499 18.429 22.6095 18.1873 22.5366 17.963C22.4637 17.7386 22.2733 17.5781 22.0399 17.5443ZM21.0927 18.6219C20.9476 18.7633 20.8815 18.9669 20.9158 19.1664L20.9847 19.5684L20.6239 19.3787C20.5342 19.3315 20.4358 19.3079 20.3374 19.3079C20.239 19.3079 20.1407 19.3314 20.0511 19.3786L19.6902 19.5684L19.7591 19.1665C19.7933 18.9669 19.7272 18.7633 19.5821 18.6218L19.2901 18.3371L19.6935 18.2786C19.8941 18.2495 20.0673 18.1236 20.1569 17.942L20.3374 17.5763L20.5179 17.9419C20.6076 18.1237 20.7808 18.2495 20.9811 18.2785L21.3847 18.3371L21.0927 18.6219ZM7.06836 23.7891C7.06836 24.0318 7.26512 24.2285 7.50781 24.2285C7.75051 24.2285 7.94726 24.0318 7.94726 23.7891C7.94726 23.5464 7.75051 23.3496 7.50781 23.3496C7.26512 23.3496 7.06836 23.5464 7.06836 23.7891ZM14.9996 1.75781C11.5118 1.75781 8.67248 4.61725 8.67248 8.08541C8.67248 11.4894 11.5335 14.4125 14.9996 14.4125C18.4886 14.4125 21.3271 11.5741 21.3271 8.08541C21.3271 4.59639 18.4886 1.75781 14.9996 1.75781ZM14.9996 13.5336C13.958 13.5336 12.9519 13.2335 12.092 12.6911C12.168 12.02 12.4711 11.3994 12.9611 10.9236C13.2421 10.6506 13.5774 10.4361 13.9389 10.2954C14.2548 10.4663 14.6162 10.5635 14.9998 10.5635C15.3833 10.5635 15.7446 10.4664 16.0604 10.2955C16.6551 10.5265 17.1609 10.9472 17.4977 11.4968C17.5806 11.6321 17.7249 11.7067 17.8728 11.7067C17.951 11.7067 18.0303 11.6858 18.102 11.6419C18.3089 11.5151 18.3738 11.2446 18.2471 11.0377C17.8896 10.4542 17.3853 9.98221 16.7908 9.66504C17.0705 9.29162 17.2363 8.82832 17.2363 8.32699V6.13436C17.2363 5.31111 16.5666 4.64139 15.7434 4.64139H14.2562C13.433 4.64139 12.7633 5.31111 12.7633 6.13436V8.32699C12.7633 8.82873 12.9294 9.29238 13.2095 9.66592C12.8961 9.8335 12.6048 10.0444 12.3488 10.2932C11.8351 10.792 11.48 11.4135 11.3095 12.0929C10.193 11.0679 9.55145 9.60662 9.55145 8.08559C9.55145 7.71152 9.58965 7.33705 9.66506 6.97271C10.186 4.46021 12.4296 2.63672 14.9996 2.63672C18.0039 2.63672 20.4482 5.08102 20.4482 8.08541C20.4482 11.0896 18.0039 13.5336 14.9996 13.5336ZM14.8631 7.39043C15.2989 7.24687 15.7672 7.31145 16.1479 7.56762L16.3574 7.70865V8.32687C16.3574 9.07547 15.7484 9.68449 14.9998 9.68449C14.2512 9.68449 13.6422 9.07547 13.6422 8.32687V7.79262L14.8631 7.39043ZM13.6422 6.8673V6.1343C13.6422 5.79568 13.9176 5.52023 14.2562 5.52023H15.7433C16.0819 5.52023 16.3573 5.79568 16.3573 6.1343V6.67676C15.8086 6.40711 15.1796 6.36076 14.588 6.55564L13.6422 6.8673Z" fill="black"/>
                                </svg>

                            </div>
                            <!-- 29 courses -->
                            <?php echo $course_count['Total_Course']; ?> courses
                        </div>
                    </div>

                </div>

                <div class="text-center mb-7">
                    <a href="https://api.WhatsApp.com/send?phone=+91<?php echo $course_count['tutor_contact'];?>" class="btn btn-teal btn-wide text-white" target="new">SEND MESSAGE</a>
                </div>
            </div>

            <div class="col-12">
                <!-- COURSE INFO TAB
                ================================================== -->
                <div id="Overview" class="mb-8">
               
                    <?php  
                    $str_gallery="select * from tutor_tbl where tutor_tbl.tutor_id='".$_GET['tutor_id']."'";
                    $row_gallery=mysqli_query($cnn,$str_gallery);
                    while($result_gallery=mysqli_fetch_array($row_gallery))
                    {
                    ?>

                    <ul class="nav course-tab-v1 border-bottom h4 mb-8">
                        <li class="nav-item">
                            <a class="nav-link active" href="#Overview" data-bs-toggle="smooth-scroll" data-bs-offset="0">Overview</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#Curriculum" data-bs-toggle="smooth-scroll" data-bs-offset="0">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Gallery" data-bs-toggle="smooth-scroll" data-bs-offset="0">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Degree" data-bs-toggle="smooth-scroll" data-bs-offset="0">Degree</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Certificate" data-bs-toggle="smooth-scroll" data-bs-offset="0">Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Review" data-bs-toggle="smooth-scroll" data-bs-offset="0">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Inquiry" data-bs-toggle="smooth-scroll" data-bs-offset="0">Inquiry</a>
                        </li>

                    </ul>

                    <?php } ?>

                    <!-- <h3 class="">Overview</h3> -->
                   
                     <!--    <p class="mb-6 line-height-md">

                            <?php echo $overview;?>  
                        </p>  -->  
                    

                     <?php  
                            if($overview=="")
                            {
                                ?>
                                <!-- <img class="rounded shadow-light-lg img-fluid" src="../DreamEdu/tutor/images/avtar.png"> -->
                                <p class="mb-6 line-height-md">

                                    <!-- <?php //echo "No Overview";?> -->
                                    <tr><td><label><?php  echo "No Overview";?></label></td></tr>


                                </p>
                                <?php  
                            }
                            else
                            {?>
                               <!-- <img class="rounded shadow-light-lg img-fluid" src="../DreamEdu/tutor/images/<?php echo $result['tutor_image'];?>">  -->
                               <p class="mb-6 line-height-md">
                                    <?php echo $overview;?>
                                </p>
                               <?php  
                            }
                        ?>
                    
                    
                </div>

                 <!-- course -->
                <div id="Curriculum" class="mb-8">
                    <ul class="nav course-tab-v1 border-bottom h4 mb-8">
                        <li class="nav-item">
                            <a class="nav-link" href="#Overview" data-bs-toggle="smooth-scroll" data-bs-offset="0">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#Curriculum" data-bs-toggle="smooth-scroll" data-bs-offset="0">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Gallery" data-bs-toggle="smooth-scroll" data-bs-offset="0">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Degree" data-bs-toggle="smooth-scroll" data-bs-offset="0">Degree</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Certificate" data-bs-toggle="smooth-scroll" data-bs-offset="0">Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Review" data-bs-toggle="smooth-scroll" data-bs-offset="0">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Inquiry" data-bs-toggle="smooth-scroll" data-bs-offset="0">Inquiry</a>
                        </li>
                    </ul>
               
                <div class="mx-n4 mb-12" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>

                <?php
                    if(isset($_GET['tutor_id']))
                    {
                          $str_course="select * from tutor_tbl,course_tbl
                           where tutor_tbl.tutor_id='".$_GET['tutor_id']."' and tutor_status='1' and
                           course_tbl.tutor_id=tutor_tbl.tutor_id";
                          //echo $str_course;
                          $data_course=mysqli_query($cnn,$str_course);
                          $count_course=mysqli_num_rows($data_course);
                          if($count_course>0)
                          {
                          while($row_course=mysqli_fetch_array($data_course))
                          {  
                    ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5" style="padding-right:15px;padding-left:15px;">
                        <!-- Card -->
                        <div class="card border shadow p-2 lift sk-fade">
                            <!-- Image -->
                            <div class="card-zoom position-relative">
                                <a href="./course_detail.php?course_id=<?php echo $row_course['course_id'];?>" class="card-img sk-thumbnail img-ratio-3 d-block">
                                    <img class="rounded shadow-light-lg" 
                                    src="tutor/images/course/<?php echo $row_course['course_image'];?>"alt="..."></a>

                                <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                                    <ins class="h5 mb-0 text-white">
                                        ₹<?php echo $row_course['course_fees'];?></ins>
                                </span>
                            </div>

                            <!-- Footer -->
                            <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                <!-- Preheading -->
                                <a href="./course_detail.php?course_id=<?php echo $row_course['course_id'];?>"><span class="mb-1 d-inline-block text-gray-800"><?php echo $row_course['course_name'];?></span></a>

                                <!-- Heading -->
                                <div class="position-relative">
                                    <a href="./course_detail.php?course_id=<?php echo $row_course['course_id'];?>" class="d-block stretched-link"><h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2"><?php echo $row_course['course_details'];?></h5></a>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } }
                else
                {
                ?>
                    <!-- <tr><td></td></tr> -->
                    <td><label><?php  echo "No Course Available";?></label></td>
                    
               <?php   }} ?>
        

                </div>

                  <!-- gallery -->
                <div id="Gallery" class="mb-8">
                    <ul class="nav course-tab-v1 border-bottom h4 mb-8">
                        <li class="nav-item">
                            <a class="nav-link" href="#Overview" data-bs-toggle="smooth-scroll" data-bs-offset="0">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Curriculum" data-bs-toggle="smooth-scroll" data-bs-offset="0">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#Gallery" data-bs-toggle="smooth-scroll" data-bs-offset="0">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Degree" data-bs-toggle="smooth-scroll" data-bs-offset="0">Degree</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Certificate" data-bs-toggle="smooth-scroll" data-bs-offset="0">Certificate</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#Review" data-bs-toggle="smooth-scroll" data-bs-offset="0">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Inquiry" data-bs-toggle="smooth-scroll" data-bs-offset="0">Inquiry</a>
                        </li>
                    </ul>
                  
                    <div class="container">

                        <div id="gallery" class="row row-cols-md-3 mb-8 mb-md-11" data-isotope='{"layoutMode": "masonry"}'>
                        <?php 
                            $str="select * from gallery_tbl,tutor_tbl where tutor_tbl.tutor_id=gallery_tbl.tutor_id and tutor_tbl.tutor_id='".$_GET['tutor_id']."'";
                            $row=mysqli_query($cnn,$str);
                            $count=mysqli_num_rows($row);
                            if($count>0)
                            {
                            while($result=mysqli_fetch_array($row))
                            {
                        ?>
                        
                        <div class="col-md mb-6 business">
                            <!-- Image -->

                            <a class="card-hover-overlay rounded overflow-hidden d-block " href="tutor/images/<?php echo $result['images'];?>" data-fancybox data-width="1110" data-height="810">
                                <img src="tutor/images/<?php echo $result['images'];?>" class="img-fluid rounded" alt="..." height="500px" width="500px">
                        </div>

                        <?php }}
                        else
                        {
                        ?>
                            <!-- <tr><td></td></tr> -->
                            <td><label><?php  echo "No Images Available";?></label></td>
                            
                       <?php } ?>

                    </div>
                    </div>
                </div>

                  <!-- Degree -->
                <div id="Degree" class="mb-8">
                    <ul class="nav course-tab-v1 border-bottom h4 mb-8">
                        <li class="nav-item">
                            <a class="nav-link" href="#Overview" data-bs-toggle="smooth-scroll" data-bs-offset="0">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Curriculum" data-bs-toggle="smooth-scroll" data-bs-offset="0">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Gallery" data-bs-toggle="smooth-scroll" data-bs-offset="0">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#Degree" data-bs-toggle="smooth-scroll" data-bs-offset="0">Degree</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Certificate" data-bs-toggle="smooth-scroll" data-bs-offset="0">Certificate</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#Review" data-bs-toggle="smooth-scroll" data-bs-offset="0">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Inquiry" data-bs-toggle="smooth-scroll" data-bs-offset="0">Inquiry</a>
                        </li>
                    </ul>
                  
                    <div class="col-lg-8" data-aos="fade-left">
                    <div class="row row-cols-md-2">
                     
                        <?php 
                            $degree_str="select * from tutor_tbl,tutor_degree_tbl,degree_tbl where tutor_tbl.tutor_id=tutor_degree_tbl.tutor_id and degree_tbl.degree_id=tutor_degree_tbl.degree_id and tutor_tbl.tutor_id='".$_GET['tutor_id']."' and tutor_degree_tbl.tutor_degree_status='1'";
                            $degree_row=mysqli_query($cnn,$degree_str);
                            $degree_count=mysqli_num_rows($degree_row);
                            if ($degree_count>0) 
                            {
                                
                            while($degree_result=mysqli_fetch_array($degree_row))
                            {
                        ?>
                        <div class="col-md mb-5 mb-lg-0">
                            <!-- Card -->
                            <div class="card border shadow p-2 lift sk-fade">
                                <!-- Image -->
                                <div class="card-zoom position-relative">
                                    <a class="card-img d-block sk-thumbnail img-ratio-8"><img class="rounded shadow-light-lg img-fluid" src="tutor/images/Degree/<?php echo $degree_result['degree_image']; ?>" alt="..."></a>

                                    <a class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                        <span class="text-white fw-normal font-size-sm">Degree</span>
                                    </a>
                                </div>

                                <!-- Footer -->
                                <div class="card-footer px-2 pb-0 pt-4">
                                    <ul class="nav mx-n3 mb-3">
                                        <li class="nav-item px-3">
                                            <a href="#" class="d-flex align-items-center text-gray-800">
                                                <div class="me-3 d-flex">
                                                    <!-- Icon -->
                                                    <!-- <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                                    </svg> -->
                                                    <i class="fa fa-graduation-cap"></i>

                                                </div>
                                                <div class="font-size-sm"><?php echo $degree_result['college_or_university']; ?></div>
                                            </a>
                                        </li>
                                        <li class="nav-item px-3">
                                            <a href="#" class="d-flex align-items-center text-gray-800">
                                                <div class="me-2 d-flex">
                                                    <!-- Icon -->
                                                    <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm"><?php echo $degree_result['passing_year']; ?></div>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Heading -->
                                    <a href="#" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52 mb-2"><?php echo $degree_result['degree_name']; ?></h5></a>
                                </div>
                            </div>
                        </div>
                        <?php }} 
                        else
                        {
                        ?>
                            <!-- <tr><td></td></tr> -->
                            <td><label><?php  echo "No Degree Available";?></label></td>
                            
                       <?php } ?>
                    </div>
                </div>

                    </div>
                </div>

                 <!-- Certificate -->
                <div id="Certificate" class="mb-8">
                    <ul class="nav course-tab-v1 border-bottom h4 mb-8">
                        <li class="nav-item">
                            <a class="nav-link" href="#Overview" data-bs-toggle="smooth-scroll" data-bs-offset="0">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Curriculum" data-bs-toggle="smooth-scroll" data-bs-offset="0">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Gallery" data-bs-toggle="smooth-scroll" data-bs-offset="0">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Degree" data-bs-toggle="smooth-scroll" data-bs-offset="0">Degree</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#Certificate" data-bs-toggle="smooth-scroll" data-bs-offset="0">Certificate</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#Review" data-bs-toggle="smooth-scroll" data-bs-offset="0">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Inquiry" data-bs-toggle="smooth-scroll" data-bs-offset="0">Inquiry</a>
                        </li>
                    </ul>
                    
                    <div class="col-lg-8" data-aos="fade-left">
                    <div class="row row-cols-md-2">
                     
                        <?php 
                            $certificate_str="select * from tutor_tbl,tutor_certificate_tbl,certificate_tbl where tutor_tbl.tutor_id=tutor_certificate_tbl.tutor_id and certificate_tbl.certificate_id=tutor_certificate_tbl.certificate_id and tutor_tbl.tutor_id='".$_GET['tutor_id']."' and tutor_certificate_tbl.tutor_certificate_status='1'";
                          // echo $certificate_str;
                            $certificate_row=mysqli_query($cnn,$certificate_str);
                            $count_certificate=mysqli_num_rows($certificate_row);
                            if ($count_certificate) 
                            {
                               
                         
                            while($certificate_result=mysqli_fetch_array($certificate_row))
                            {
                        ?>
                        <div class="col-md mb-5 mb-lg-0">
                            <!-- Card -->
                            <div class="card border shadow p-2 lift sk-fade">
                                <!-- Image -->
                                <div class="card-zoom position-relative">
                                    <a class="card-img d-block sk-thumbnail img-ratio-8"><img class="rounded shadow-light-lg img-fluid" src="tutor/images/Certificate/<?php echo $certificate_result['certificate_image']; ?>" alt="..."></a>

                                    <a class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                        <span class="text-white fw-normal font-size-sm">Certificate</span>
                                    </a>
                                </div>

                                <!-- Footer -->
                                <div class="card-footer px-2 pb-0 pt-4">
                                    <ul class="nav mx-n3 mb-3">
                                        <li class="nav-item px-3">
                                            <a href="#" class="d-flex align-items-center text-gray-800">
                                                <div class="me-3 d-flex">
                                                    <!-- Icon -->
                                                    <!-- <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"/>
                                                    </svg> -->
                                                    <i class="fa fa-institution"></i>

                                                </div>
                                                <div class="font-size-sm"><?php echo $certificate_result['institute_agency']; ?></div>
                                            </a>
                                        </li>
                                        <li class="nav-item px-3">
                                            <a href="#" class="d-flex align-items-center text-gray-800">
                                                <div class="me-2 d-flex">
                                                    <!-- Icon -->
                                                    <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm"><?php echo $certificate_result['passing_year']; ?></div>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Heading -->
                                    <a href="#" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52 mb-2"><?php echo $certificate_result['certificate_name']; ?></h5></a>
                                </div>
                            </div>
                        </div>
                        <?php }} 
                        else
                        {
                        ?>
                            <!-- <tr><td></td></tr> -->
                            <td><label><?php  echo "No Certificate Available";?></label></td>
                            
                       <?php } ?>
                    </div>
                </div>


                  <!-- Reviews -->
                <div id="Review" class="mb-8">

                    <ul class="nav course-tab-v1 border-bottom h4 mb-8">
                        <li class="nav-item">
                            <a class="nav-link" href="#Overview" data-bs-toggle="smooth-scroll" data-bs-offset="0">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Curriculum" data-bs-toggle="smooth-scroll" data-bs-offset="0">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Gallery" data-bs-toggle="smooth-scroll" data-bs-offset="0">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Degree" data-bs-toggle="smooth-scroll" data-bs-offset="0">Degree</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Certificate" data-bs-toggle="smooth-scroll" data-bs-offset="0">Certificate</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link active" href="#Review" data-bs-toggle="smooth-scroll" data-bs-offset="0">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Inquiry" data-bs-toggle="smooth-scroll" data-bs-offset="0">Inquiry</a>
                        </li>
                    </ul>
                    
                    <div class="col-lg-8" data-aos="fade-left">
                        <h3 class="mb-6">Student feedback</h3>
                        
                        <div class="row align-items-center mb-8">
                            <div class="col-md-auto mb-5 mb-md-0">
                                <div class="border rounded shadow d-flex align-items-center justify-content-center px-9 py-8">
                                    <div class="m-2 text-center">
                                        <?php 
                    
                                          $str="select SUM(rating) as Rating,COUNT(tutor_tbl.tutor_id) as tid from review_tbl,tutor_tbl where review_tbl.tutor_id=tutor_tbl.tutor_id and review_tbl.tutor_id='".$_GET['tutor_id']."'";
                                          //echo $str;die;
                                          $count=mysqli_query($cnn,$str);
                                          $review_count=mysqli_fetch_array($count);
                                        ?>
                                        <h1 class="display-2 mb-0 fw-medium mb-n1">
                                            <?php  
                                                if($review_count['Rating']=="")
                                                {
                                                   echo "No" ;
                                                }
                                                else
                                                {
                                                    $t=$review_count['tid'];
                                                    $a=$review_count['Rating']/$t;
                                                    $a=number_format($a,1);
                                                    echo $a;  
                                                }
                                            ?>
                                        </h1>
                                        <h5 class="mb-0">Instructor rating</h5>
                                        <div class="star-rating">
                                            <div class="rating" style="width:100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                            
                            <div class="col-md">
                             
                           
                                <?php 
                                    $bty=mysqli_query($cnn,"SELECT rating,count(rating) as 'num_of_rate' 
                                      FROM `review_tbl` WHERE true and tutor_id='".$_GET['tutor_id']."'
                                        group By (rating)");
                                        while($row=mysqli_fetch_array($bty))
                                        {
                                        ?>

                                <div class="d-md-flex align-items-center my-md-4">
                                    <div class="bg-gray-200 position-relative rounded-pill flex-grow-1 me-md-5 mb-2 mb-md-0 mw-md-260p" style="height: 10px;">
                                        <div class="bg-teal rounded-pill position-absolute top-0 left-0 bottom-0" style="width: 90%;"></div>
                                    </div>
                                      <div class="side">
                                           <div><?php //echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row['rating'];?>
                                        <?php for($i=0;$i<$row['rating'];$i++) { ?>
                                      <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i>
                                    <?php } ?>
                                           </div>
                                      </div>
                                    <div class="d-flex align-items-center">
                                      <!--   <div class="star-rating star-rating-lg secondary me-4"> -->
                                          <div class="bar-container">
                                              <div class="bar-<?php echo $row['rating'];?>" style="width: <?php echo $row['num_of_rate']*10;?>%; height: 18px;background-color: #4CAF50;">
                                                
                                              </div>
                                        </div>
                                       <!--  </div> -->
                                        <span>  &nbsp;&nbsp;<?php echo $row['num_of_rate'];?></span>
                                     <?php } ?>

                                    </div>
                                </div>
                                

                               
                            </div>
                            <br>
                        
                        
                        </div>
                        <?php  
                        $qry="select * from review_tbl,user_tbl,tutor_tbl where review_tbl.user_id=user_tbl.user_id and review_tbl.tutor_id=tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_GET['tutor_id']."'";
                            $test=mysqli_query($cnn,$qry);
                            while($result=mysqli_fetch_array($test))
                            {
                        ?>
                        <ul class="list-unstyled pt-2">
                            <li class="media d-flex">
                                <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
                                    <img src="images/Student/<?php echo $result['user_image']; ?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body flex-grow-1">
                                    <div class="d-md-flex align-items-center mb-5">
                                        <div class="me-auto mb-4 mb-md-0">
                                            <h5 class="mb-0"><?php echo $result['user_name']; ?></h5>
                                            <p class="font-size-sm font-italic"><?php echo date("d-M-Y", strtotime($result['created_date']) );?></p>
                                        </div>

                                        <?php for($i=0;$i<$result['rating'];$i++) { ?>
                                            <i class="fa fa-star" aria-hidden="true" style="color:orange;"></i> &nbsp;
                                         <?php } ?>
                                    </div>
                                    <p class="mb-6 line-height-md"><?php echo $result['description']; ?></p>
                                </div>
                            </li>
                        </ul>
                        <?php } ?>

                        <?php 
                        if(isset($_POST['sbtn']))
                        {
                            $review_status="1";
                            $created_date=date("Y-m-d");
                            $rate="insert into review_tbl values(NULL,'".$_SESSION['uid']."','".$_GET['tutor_id']."','".$_POST['description']."','".$_POST['rating']."','".$created_date."','".$review_status."')";
                            // echo $str;
                            $test=mysqli_query($cnn,$rate);
                            // header('location:instructors_details.php');
                            //echo "hii";
                        }
                        // header('location:instructors_details.php');
                        ?>
                        <?php 
                        if(isset($_SESSION['uid'])!='')
                        {
                        ?>
                            <div class="border shadow rounded p-6 p-md-9">
                                <h3 class="mb-2">Add Reviews & Rate</h3>
                                <div class="">What is it like to Course?</div>
                                <form id="custom_val" method="POST" onSubmit="window.location.reload()">
                                    <div class="clearfix">
                                        <fieldset class="slect-rating mb-3">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label class = "full" for="star5" title="Awesome - 5 stars"></label>

                                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label class = "full" for="star4" title="Pretty good - 4 stars"></label>

                                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label class = "full" for="star3" title="Meh - 3 stars"></label>

                                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>

                                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label class = "full" for="star1" title="Sucks big time - 1 star"></label>

                                            <input type="radio" id="starhalf" name="rating" value="half" />
                                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                        </fieldset>
                                    </div>

                                   <!--  <div class="form-group mb-6">
                                        <label for="exampleInputTitle1">Review Title</label>
                                        <input type="text" class="form-control placeholder-1" id="exampleInputTitle1" placeholder="Courses">
                                    </div> -->

                                    <div class="form-group mb-6">
                                        <label for="exampleFormControlTextarea1">Review Content</label>
                                        <textarea class="form-control placeholder-1" id="exampleFormControlTextarea1" rows="6" placeholder="Content" name="description"></textarea>
                                        <label id="modalSigninPassword1-error" class="error" for="exampleFormControlTextarea1" style="color: red;"></label>
                                    </div>
                                        <button type="submit" class="btn btn-primary btn-block mw-md-300p" name="sbtn" value="refresh">SUBMIT REVIEW</button>
                                </form>
                            </div> 
                            <?php   
                        }

                        
                        ?>
                    </div>      
                </div>

                <?php 
                if(isset($_SESSION['uid'])!='')
                {
                ?>
                 <!-- Inquiry -->
                <div id="Inquiry" class="mb-8">
                    <ul class="nav course-tab-v1 border-bottom h4 mb-8">
                        <li class="nav-item">
                            <a class="nav-link" href="#Overview" data-bs-toggle="smooth-scroll" data-bs-offset="0">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Curriculum" data-bs-toggle="smooth-scroll" data-bs-offset="0">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Gallery" data-bs-toggle="smooth-scroll" data-bs-offset="0">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#Degree" data-bs-toggle="smooth-scroll" data-bs-offset="0">Degree</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Certificate" data-bs-toggle="smooth-scroll" data-bs-offset="0">Certificate</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#Review" data-bs-toggle="smooth-scroll" data-bs-offset="0">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#Inquiry" data-bs-toggle="smooth-scroll" data-bs-offset="0">Inquiry</a>
                        </li>
                    </ul>
                    
                    <div class="col-lg-8" data-aos="fade-left">
                        <?php 
                        
                        if(isset($_POST['inq_sbtn']))
                        {
                            // $review_status="1";

                            $inquiry_date=date("Y-m-d");
                            $inq="insert into inquiry_tbl values(NULL,'".$_SESSION['uid']."','".$_GET['tutor_id']."','".$_POST['course_id']."','".$_POST['description']."','".$inquiry_date."')";
                            //echo $inq;
                            $test=mysqli_query($cnn,$inq);
                            // header('location:instructors_details.php');
                            //echo "hii";
                        }
                        
                        ?>
                        <div class="border shadow rounded p-6 p-md-9">
                            <h3 class="mb-2">Add Inquiry</h3>
                            <br>
                            <!-- <div class="">What is it like to Course?</div> -->
                            <form id="custom_vall" method="POST">
                                

                               <!--  <div class="form-group mb-6">
                                    <label for="exampleInputTitle1">Review Title</label>
                                    <input type="text" class="form-control placeholder-1" id="exampleInputTitle1" placeholder="Courses">
                                </div> -->
                          <label for="select-country">Course Name</label>

                                <select class="form-control select2" name="course_id">
                                   <option disabled selected>Select Course</option>   
                                    <?php $data=mysqli_query($cnn,"select * from course_tbl,tutor_tbl where course_tbl.tutor_id=tutor_tbl.tutor_id and course_tbl.tutor_id='".$_GET['tutor_id']."'");
                                    while($row=mysqli_fetch_array($data)){
                                    ?>
                                    <option value="<?php echo $row['course_id'];?>">
                                      <?php echo $row['course_name'];?>
                                      </option>   
                                    <?php } ?>
                               </select>
                               
                               <br>
                                <div class="form-group mb-6">
                                    <label for="exampleFormControlTextarea1">Inquiry Content</label>
                                    <textarea class="form-control placeholder-1" id="exampleFormControlTextarea1" rows="6" placeholder="Content" name="description"></textarea>
                                    <label id="modalSigninPassword1-error" class="error" for="exampleFormControlTextarea1" style="color: red;"></label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mw-md-300p" name="inq_sbtn">SUBMIT INQUIRY</button>
                            </form>
                        </div>
                    </div>      
                </div>
                <?php } ?>
                    
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
      <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
     <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>

<script>
      $('#custom_val').validate({
        rules: {
         

          description: {
            required: true,
          minlength: 3,
          lettersonly: true 
        },
      },
      messages: {
         description: {
         required:"Description is Required",
     },
   },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9 & , .' " $ ]+$/i.test(value);
      }, "Please Enter Name in Characters Only"); 
    </script>

<script>
      $('#custom_vall').validate({
        rules: {

          course_id:{
            required: true,
            //minlength:3,
            lettersonly:true,
          },
          description:{
            required: true,
            minlength:3,
          },
      },
      messages: {

          course_id: {
            required:"Course Name is Required",
          },
          description: {
            required:"Description is Required",
          },
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9 ,.$&@'" ]+$/i.test(value);
      }, "Please Enter Email Name in Characters Only"); 
     
</script>

</body>
</html>
