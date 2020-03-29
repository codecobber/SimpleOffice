<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }


 $homeCheck = return_page_slug();
 $userOnline = get_cookie('GS_ADMIN_USERNAME'); //get user name


?>



 <!doctype html>

<!--
=============================================
  Developed by Code Cobber for your enjoyment
  http://www.codecobber.co.uk
  Licened under the Code Cobber paid-licence:  
  (see www.codecobber.co.uk/paid-terms.php)
=============================================
-->

<html class="no-js" lang="en">

  <head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php get_page_clean_title(); ?> &mdash;  <?php get_site_name(); ?></title> 
  
    <?php get_header(); ?>

    <!-- CSS Files -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/push.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/app.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/myCss.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/rowData.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" />


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis%7cUbuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/cssFonts.css" />



    <!-- Javascript -->
    <script src="<?php get_theme_url(); ?>/js/vendor/jquery.js"></script>

    <?php 

   //Include javascript file if session is set

   if(isset($userOnline) && !empty($userOnline)){
    if($userOnline === "debbie9754"){
        if($homeCheck == "index" || $homeCheck == "home"){?>
        <script src="<?php get_theme_url(); ?>/js/editGS.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/editGS.css" />
    
      <?php }
      }
    }
    
    ?>
    
    <!-- Google Analytics below -->
    <link rel="canonical" href="http://www.yoursite.co.uk/" >


    <!-- Facebook og settings -->
    <meta property="og:title" content="<?php get_page_slug(); ?>" />
    <meta property="og:url" content="<?php get_site_url(); ?>" />
    <meta property="og:image" content="<?php get_theme_url(); ?>/images/logo.png" />
    <meta property="og:type" content="company" />



  </head>
  <body id="<?php get_page_slug(); ?>">


<!-- SideNav content -->

      <div id="mySidenav" class="sidenav">
        <ul><?php get_navigation(return_page_slug()); ?></ul>
      </div>

      <div id="main" class="hide-for-medium">
            <span class="burgerBar" onclick="openNav()">&#9776; open</span><span class="sideNavLogo"> <a href="<?php get_site_name(); ?>"><?php get_site_name(); ?> <i class="fa fa-bookmark-o" aria-hidden="true"></i></a></span> 
      </div>

<!-- ==================================================================================== -->


        <!-- show for medium up -->
      <div id="greyTB" class="show-for-medium">
        <div class="row column">
          <div id="widemenu" class="top-bar">
            <div class="top-bar-left">
                <ul class="menu">
                  <li><a class="blockSec logo" id="cblocks" href="<?php get_site_url();?>"><?php get_site_name(); ?> <i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="top-bar-right">
                  <ul class="menu">
                    <?php get_navigation(return_page_slug()); ?>
                  </ul>
              </div>
          </div>
          </div>
      </div>
