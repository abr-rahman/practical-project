<?php
  session_start();
  if(!isset($_SESSION['login_status'])){
    header("location: not_allowed.php");
  }
?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Poor Developed Fund</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
  </head>

  <body>

    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> P D F</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="dachbord.php" class="sl-menu-link <?= (isset($dachbord))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="experiance.php" class="sl-menu-link <?= (isset($experiance))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon fas fa-box tx-20"></i>
            <span class="menu-item-label">Experiance</span>
          </div><!-- menu-item -->
          <a href="skil.php" class="sl-menu-link <?= (isset($skill))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon fas fa-briefcase tx-20"></i>
            <span class="menu-item-label">Skill</span>
          </div><!-- menu-item -->
          <a href="message_skill.php" class="sl-menu-link <?= (isset($message_skill))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon fas fa-chalkboard-teacher"></i>
            <span class="menu-item-label">Qualification Skill</span>
          </div><!-- menu-item -->
          <a href="sel_manager.php" class="sl-menu-link <?= (isset($manager))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon <tx-20 fas fa-id-card tx-20"></i>
            <span class="menu-item-label">Maneger</span>
          </div><!-- menu-item -->
          <a href="news.php" class="sl-menu-link <?= (isset($news))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon <tx-20 fas fa-newspaper tx-20"></i>
            <span class="menu-item-label">News</span>
          </div><!-- menu-item -->
          <a href="fetured_project.php" class="sl-menu-link <?= (isset($fetured_project))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon <tx-20 fas fa-project-diagram tx-20"></i>
            <span class="menu-item-label">Fetured Project</span>
          </div><!-- menu-item -->
          <a href="partner.php" class="sl-menu-link <?= (isset($img_icon))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon <tx-20 fab fa-fonticons-fi tx-20"></i>
            <span class="menu-item-label">Partners</span>
          </div><!-- menu-item -->
          <a href="setup.php" class="sl-menu-link <?= (isset($setup))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon <tx-20 fas fa-id-card tx-20"></i>
            <span class="menu-item-label">Setup</span>
          </div><!-- menu-item -->
          <a href="background_pic.php" class="sl-menu-link <?= (isset($background))?'active': ''?>">
          <div class="sl-menu-item">
            <i class="Emenu-item-icon icon <tx-20 fas fa-id-card tx-20"></i>
            <span class="menu-item-label">Background Image</span>
          </div><!-- menu-item -->


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Pages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
          <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
          <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
          <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
        </ul>
      </div><!-- sl-sideleft-menu -->
      
      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link ion-android-contact" data-toggle="dropdown">
              <span class="logged-name"><?= $_SESSION['login_name'] ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i>Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href="index.php"><i class="icon ion-android-train"></i> Visite Website</a></li>
                <li><a href="signout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
  
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img7.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->     
      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
