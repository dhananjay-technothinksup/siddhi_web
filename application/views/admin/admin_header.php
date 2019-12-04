<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/admin/vendors/feather/feather.css">
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/admin/vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/admin/vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/admin/vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon"  href="<?php echo base_url(); ?>assets/admin/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo"  href="<?php echo base_url(); ?>assets/admin/index.html"><img src="<?php echo base_url(); ?>assets/admin/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini"  href="<?php echo base_url(); ?>assets/admin/index.html"><img src="<?php echo base_url(); ?>assets/admin/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
                <button type="button" class="btn btn-info font-weight-bold">+ Create New</button>
            </li>
          <li class="nav-item dropdown d-flex">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown"  href="<?php echo base_url(); ?>assets/admin/#" data-toggle="dropdown">
              <i class="icon-air-play mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo base_url(); ?>assets/admin/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo base_url(); ?>assets/admin/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo base_url(); ?>assets/admin/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown"  href="<?php echo base_url(); ?>assets/admin/#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">
                  <i class="icon-head"></i> Profile
              </a>
              <a class="dropdown-item preview-item">
                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center"  href="<?php echo base_url(); ?>assets/admin/#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="<?php echo base_url(); ?>assets/admin/images/faces/face28.png">
          </div>
          <div class="user-name">
              Edward Spencer
          </div>
          <div class="user-designation">
              Developer
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url(); ?>admin">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse"  href="<?php echo base_url(); ?>assets/admin/#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url(); ?>Admin/make_name">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Add Make</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url(); ?>Admin/catagory_name">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Add Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url(); ?>Admin/product_name">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Add Product</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/pages/icons/feather-icons.html">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse"  href="<?php echo base_url(); ?>assets/admin/#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_url(); ?>assets/admin/docs/documentation.html">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>
