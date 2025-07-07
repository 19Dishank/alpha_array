
<div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-dark">
      <div class="navbar-wrapper" style="background-color:rgb(26 35 58);">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="ficon bx bx-menu"></i></a></li>
              </ul>
             <!--  <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
              </ul> -->
              <!-- <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a> -->
                  <div class="bookmark-input search-input">
                    <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                    <ul class="search-list"></ul>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="nav navbar-nav float-right">
              <!-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
              </li> -->
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
              
             
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                  <div class="user-nav d-sm-flex d-none"><span class="user-name"><?php echo $_SESSION['tname']; ?></span><span class="user-status text-muted">Available</span></div><span> 

                    <?php 
       
                        //$qry="select * from tutor_prof_detail_tbl,tutor_degree_tbl,tutor_tbl where tutor_prof_detail_tbl.tutor_id=tutor_tbl.tutor_id and tutor_degree_tbl.tutor_id = tutor_tbl.tutor_id and tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                    $qry="select * from tutor_tbl where tutor_tbl.tutor_id='".$_SESSION['tid']."'";
                       // echo $qry;
                        $test=mysqli_query($cnn,$qry);
                        $result=mysqli_fetch_array($test);
                    ?>
                    

                    <!-- <img class="round" src="images/tutor.jpg" alt="avatar" height="45" width="45"> -->
                    <!-- <img src="images/<?php //echo $result['tutor_image'];?>" class="round" height="45" width="45"> -->
					
                    <?php if (isset($_SESSION['prof_doc']) and !empty($result['tutor_image']))  { ?>
                      <td><img src="images/<?php echo $_SESSION['prof_doc'];?>" class="round" height="45" width="45"></td>
                      <?php } else { ?>
                      <td><img src="images/guest-user.jpg" class="round" height="45" width="45"></td>
                    <?php } ?>

                    <!-- <img class="round" src="images/<?php echo $_SESSION['img'];?>" alt="avatar" height="45" width="45"> -->
                  </span></a>
                <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="tutor_profile.php?upid=<?php echo $_SESSION['tid']; ?>"><i class="bx bx-user mr-50"></i> edit profile</a><a class="dropdown-item" href="change_password.php"><i class="bx bx-key mr-50"></i> change password</a><!-- <a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a> -->
                  <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="logout.php"><i class="bx bx-power-off mr-50"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>