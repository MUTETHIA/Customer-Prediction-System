<?php
  session_start();
  require_once('db/dbconn.php');
  require_once('db/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Online Consumer Decision Support</title>
<meta name="description" content="best consumer support system, new and fashion mobile phones in the house">
<meta name="keywords" content="customer, support system"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="<?php  echo url; ?>images/logo.png">

<!-- CSS Style -->
<link rel="stylesheet" href="<?php  echo url; ?>style.css">
</head>

<body class="cms-index-index cms-home-page">

<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<div id="page">

    <!-- Header -->
    <header id="header">
        <div class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-6 hidden-xs"> <span class="phone hidden-xs"><i class="fa fa-phone fa-lg"></i> <span class="hidden-sm">Any question? Call Us </span> +254 708843466</span> </div>
                        <!-- top links -->
                        <div class="headerlinkmenu col-md-7 col-sm-7 col-xs-12">
                            <!-- Default Welcome Message -->
                            <div class="welcome-msg hidden-xs">Welcome to msg! </div>
                            <ul class="links">
                                <li><a href="">We provide the best consumer decision support in the globe</a></li>
                              <!--  <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="register_page.html">Sign Up</a></li>
                                <li><a href="account_page.html">Log In</a></li>-->
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Header Logo -->
                    <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
                        <div class="logo"><a title="e-commerce" href="index.php"><img alt="e-commerce" src="images/logo.png"></a> </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 col-md-5 top-search">
                        <!-- Search -->
                        <div id="search">
                            <form action="search_results" method="get" autocomplete="off">
                                <div class="input-group">
                                    <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                                        <option value="all">All Categories</option>
                                         <?php
                                              $category=$connect->query("SELECT * FROM category");
                                              foreach($category as $list){
                                                  ?>
                                        <option value="<?php echo $list['type_name']; ?>"><?php echo $list['type_name']; ?></option>
                                                  <?php
                                              }
                                            ?>
                                    </select>
                                    <input type="text" class="form-control" required="required" placeholder="Search" name="search">
                                    <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <!-- End Search -->
                    </div>

                </div>
            </div>
        </div>
        <!-- End Header Logo -->

        <nav>
            <!-- Start Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-menu">
                                <div class="mm-toggle-wrap hidden-lg hidden-md hidden-sm">
                                    <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                                </div>
                                <ul class="hidden-xs">
                                    <li class="active custom-menu"><a href="index.php">Home</a>
                                    </li>

                                    <li class="custom-menu"><a href="">Phones by Category</a>
                                        <ul class="dropdown">
                                            <?php
                                              $category=$connect->query("SELECT * FROM category");
                                              foreach($category as $list){
                                                  ?>
                                                <li> <a href="mobile-category?category=<?php echo $list['type_name']; ?>"> <?php echo $list['type_name']; ?></a></li><br><br>
                                                  <?php
                                              }
                                            ?>


                                        </ul>
                                    </li>
                                     <li><a href="account_page">Login</a></li>
                                    <li><a href="contact_us">Contact</a></li>
                                </ul>
                                <a href="#" class="buy-theme">
                                <p class="text-color">HINTS: &nbsp;900</p>
                                </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->