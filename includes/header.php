<?php error_reporting(0);
session_start(); ?>

    <!-- header 2 -->
    <div id="home">
        <!-- navigation -->
        <div class="main-top py-1">
            <nav class="navbar navbar-expand-lg navbar-light fixed-navi">
                <div class="container">
                    <!-- logo -->
                    <h1>
                        <a class="navbar-brand font-weight-bold font-italic" href="index.php">
                            <span>Blood</span>Bridge
                            <i class="fas fa-syringe"></i>
                        </a>
                    </h1>
                    <!-- //logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item active mt-lg-0 mt-3">
                                <a class="nav-link" href="index.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                           
                            <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                <a class="nav-link" href="donor-list.php">Donor List</a>
                            </li>
                            
                            <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                <a class="nav-link" href="search-donor.php">Search Donor</a>
                            </li>
                             <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                            <?php if (strlen($_SESSION['bbdmsdid']!=0)) {?>
                            <!-- Bootstrap CSS -->
<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->

<!-- Navbar Item -->
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false"
    style="color:#fff !important;"> <!-- Force white text -->
    My Account
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown" 
       style="background:#2c3e50; border:none;"> <!-- dark bg -->
       
    <a class="dropdown-item" href="profile.php" style="color:#fff;">Profile</a>
    <div class="dropdown-divider" style="border-color:#7f8c8d;"></div>
    
    <a class="dropdown-item" href="change-password.php" style="color:#fff;">Change Password</a>
    <div class="dropdown-divider" style="border-color:#7f8c8d;"></div>
    
    <a class="dropdown-item" href="request-received.php" style="color:#fff;">Request Received</a>
    <div class="dropdown-divider" style="border-color:#7f8c8d;"></div>
    
    <a class="dropdown-item" href="logout.php" style="color:#fff;">Logout</a>
  </div>
</li>

<!-- Scripts (needed for dropdown) -->



                            <?php } ?>
                            <?php if (strlen($_SESSION['bbdmsdid']==0)) {?>
                            <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                <a class="nav-link" href="admin/index.php">Admin</a>
                            </li>
                        </ul>
                        <!-- login -->
                        <a href="login.php" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" >
                            <i class="fas fa-sign-in-alt mr-2"></i>Login</a><?php } ?>
                        <!-- //login -->
                    </div>
                </div>
            </nav>
        </div>
        <!-- //navigation -->
       
    </div>
    <!-- //header 2 -->