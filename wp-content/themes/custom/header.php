<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<!--<script src="<?php // bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>-->

  <!--Style sheet-->
     
      <!--Font Family-->
      <link href="<?php bloginfo('template_directory'); ?>/css/poppins-font.css" rel="stylesheet">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">

      <!-- Owl Carousel-->
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">



  
    <link href="<?php bloginfo('template_directory'); ?>/css/amp-style.css" rel="stylesheet" type="text/css" />
	 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.min.css" rel="stylesheet" type="text/css" />
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body <?php body_class('site com-sppagebuilder view-page no-layout no-task itemid-712 en-gb ltr  sticky-header layout-fluid header-transparent-black off-canvas-menu-init'); ?>>
 <div class="body-wrapper">
         <div class="body-innerwrapper">
    <header  id="sp-header">
      
		<div class="row">

           <div id="sp-logo" class="col-xs-8 col-sm-2 col-md-2">
            <div class="sp-column ">
               <div class="sp-module ">
                <div class="sp-module-content">
                 <div class="custom">
                  <p><a href="<?php echo home_url(); ?>"><img style="margin-top: 10px;" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/02/amp-energy.svg" alt="" width="100" /></a>
				   <span class="flag-txt"><img class="img-fluid" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/flag.png"><small>India</small></span></p>
                 </div>
                </div>
               </div>
            </div>
           </div>

           <div id="sp-menu" class="col-xs-4 col-sm-7 col-md-7">
            <div class="sp-column  centermenu">
               <div class='sp-megamenu-wrapper'>
                <a id="offcanvas-toggler" class="visible-sm visible-xs" href="#"><i class="fa fa-bars"></i></a>
                <ul class="sp-megamenu-parent menu-slide-down hidden-sm hidden-xs">
                <li class="sp-menu-item"><a  href="<?php echo home_url(); ?>"  >HOME</a></li>
        
                      <li class="sp-menu-item sp-has-child">
                                 <a  href="<?php echo get_site_url(); ?>/about-us"  >ABOUT US</a>
                                 <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                                    <div class="sp-dropdown-inner">
                                      <ul class="sp-dropdown-items">
                                          <li class="sp-menu-item"><a  href="<?php echo get_site_url(); ?>/about-us/our-history">OUR HISTORY</a></li>
                                          <li class="sp-menu-item"><a  href="<?php echo get_site_url(); ?>/about-us/leadership">LEADERSHIP</a></li>
                                          <li class="sp-menu-item"><a  href="<?php echo get_site_url(); ?>/about-us/investors">INVESTORS</a></li>
                                          <li class="sp-menu-item"><a  href="<?php echo get_site_url(); ?>/about-us/core-values">CORE VALUES</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                 <li class="sp-menu-item"><a  href="<?php echo get_site_url(); ?>/solution"  >SOLUTIONS</a></li>
                 <li class="sp-menu-item"><a  href="<?php echo get_site_url(); ?>/project"  >PROJECTS</a></li>
                 <li class="sp-menu-item sp-has-child">
                  <a  href=""  >GLOBAL</a>
                  <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                     <div class="sp-dropdown-inner">
                      <ul class="sp-dropdown-items">
                       <li class="sp-menu-item"><a  href="javascript:void(0);"  >US</a></li>
                       <li class="sp-menu-item"><a  href="javascript:void(0);"  >JAPAN</a></li>
                       <li class="sp-menu-item"><a  href="javascript:void(0);"  >CANADA</a></li>
                      </ul>
                     </div>
                  </div>
                </li>
                 
                </ul>
               </div>
            </div>
           </div>

           <div id="sp-top3" class="col-sm-3 col-md-3 hidden-sm hidden-xs">
            <div class="sp-column pull-right">
               <div class="sp-module  pull-right floox-top-search hidden-xs">
            <div class="sp-module-content">
               <div class="top-search-wrapper">
                  <div class="icon-top-wrapper">
                     <i class="fas fa-search floox-search search-open-icon" aria-hidden="true"></i>
                     <i class="search-close-icon" aria-hidden="true"></i>
                  </div>
               </div>
               <!-- /.top-search-wrapper -->
               <div class="top-search-input-wrap">
                  <div class="top-search-overlay"></div>
                  <?php get_search_form(); ?>
               </div>
               <!-- /.top-search-input-wrap -->
            </div>
         </div>
               <ul class="nav menu nav-pills">
                <li class="item-708"><a href="<?php echo get_site_url(); ?>/careers" > CAREERS</a></li>
                <li class="item-709"><a href="<?php echo get_site_url(); ?>/contact" > CONTACT</a></li>
                <li class="sp-menu-item"><a  href="<?php echo get_site_url(); ?>/latest-news"  >NEWS</a></li>
               </ul>
            </div>
           </div>

          </div>

    </header>