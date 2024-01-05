    <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/motor-expert/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 09:40:33 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Stylesheets -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="<?php echo get_stylesheet_directory_uri(); ?>/css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<!-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon"> -->

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <?php wp_head(); ?>
</head>

 <body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page-wrapper">
<?php
$pageid = get_id_by_slug('site-general-settings');

 ?>
    <!-- Preloader -->
  <!--  <div class="preloader"></div> -->

    <!-- Main Header-->
    <header class="main-header">

        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li><?php echo get_field('top_header_welcome_statement',$pageid); ?></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="social-icon-one clearfix">
                            <li><a href="<?php echo get_field('facebook',$pageid); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                               <li><a href="<?php echo get_field('instagram',$pageid); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                                          
                                    <li><a href="<?php echo get_field('youtube',$pageid); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>

                                  
                        </ul>
                        <div class="call-btn">
                            <a href="<?php echo get_site_url(); ?>/pay-online/">Pay Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->
<?php
$generalpageid = get_id_by_slug('site-general-settings');

 ?>
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="pull-left logo-outer">
                  <div class="logo"><h3><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_field('header_logo',$pageid); ?>"></a></h3></div>
                    </div>
                    <div class="pull-right upper-right clearfix">
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-home"></span></div>
                            <ul>
<!--                                 <li><strong>Address</strong></li> -->
                                <li><?php echo get_field('address',$generalpageid); ?></li>
                                
                            </ul>

                        </div>
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-mail-1"></span></div>
                            <ul>
<!--                                 <li><strong>Send your mail at</strong></li> -->
                                <li><a href="mailto:<?php echo get_field('email',$generalpageid); ?>"><?php echo get_field('email',$generalpageid); ?></a></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-clock"></span></div>
                            <ul>
<!--                                 <li><strong>Working Hours</strong></li> -->
                                <li> <?php echo get_field('workshop_timings',$generalpageid); ?></li>
                            </ul>
                        </div>
                               <div class="upper-column info-box showhiderepair">
                            <div class="icon-box"><span><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/12/1086581.png"  /></span></div>
                            <ul>
                               <li><a href="<?php echo get_site_url(); ?>/repair-authorization/" >Repair & authorization</a></li>
                               </ul>
                            </div>
						
						<div class="upper-column info-box showhidepayonl">
                            <div class="icon-box"><span><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/12/1086581.png"  /></span></div>
                            <ul>
                               <li><a href="<?php echo get_site_url(); ?>/pay-online/" >Pay Online</a></li>
                               </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">

            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                 
                           <?php
                                        wp_nav_menu(array(
                                            'menu' => 'main menu',
                                            'items_wrap' => '<ul class="navigation clearfix">%3$s</ul>',
                                            'container_class' =>'navbar-collapse collapse clearfix',
                                            'container_id' =>'navbarSupportedContent',
                                   
                                           
                                        ));   
                                        ?>

                    </nav>
                    <!-- Main Menu End-->


                  

                    <!--Search Box-->
                    <div class="search-box-outer">
                        <!--Search Box-->
                        <div class="dropdown dropdown-outer">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                       	<form action="<?php echo home_url(); ?>" id="search-form" method="get">
    <input type="text" name="s" id="s" value="type your search" onblur="if(this.value=='')this.value='type your search'"
    onfocus="if(this.value=='type your search')this.value=''" />
	<input type="hidden" name="post_type" value="ourservice" />										
    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
</form>
                           
										
									         </div>
                                </li>
                            </ul>
                        </div>
                    </div><!--End earch Box-->

                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container row clearfix align-items-center">
                <!--Logo-->
                <div class="logo pull-left col-md-2">
                    <a href="<?php echo get_site_url(); ?>" class="img-responsive">
                        <h5><img src="<?php echo get_field('header_logo',$pageid); ?>"></h5>
                    </a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right col-md-10">
                    <!-- Main Menu -->
                    <nav class="main-menu  navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                     
                         <?php
                                        wp_nav_menu(array(
                                            'menu' => 'main menu',
                                            'items_wrap' => '<ul class="navigation clearfix">%3$s</ul>',
                                            'container_class' =>'navbar-collapse collapse clearfix',
                                            'container_id' =>'navbarSupportedContent1',
                                   
                                           
                                        ));   
                                        ?>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->