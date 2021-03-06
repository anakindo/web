<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <!-->
<html lang="en">
<!--
<![endif]-->


<!-- Mirrored from tidytheme.com/barry/html/index-onepage_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 13:38:29 GMT -->
<head>
    <!-- TITLE OF SITE -->
    <title>Berry - Multipage Business HTML Template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Berry - Multipage Business HTML Template" />
    <meta name="keywords" content="Berry, parallax, one page, multipage, responsive, landing, html template" />
    <meta name="author" content="TidyTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/images/apple-touch-icon-114x114.png">


    <!-- CSS Begins
================================================== -->
    <!-- FONT ICONS -->
    <!-- font-awesome -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Elegant Icons -->
    <link href="<?php echo base_url() ?>assets/icon/elegant-icons/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/icon/etlinefont-bower-master/style.css" rel="stylesheet">
    <!--/ FONT ICONS -->

    <!--Animate Effect-->
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/hover.css" rel="stylesheet">

    <!--Pretty Photo for Image Preview-->
    <link href="<?php echo base_url() ?>assets/css/prettyPhoto.css" rel="stylesheet">

    <!--Owl Carousel -->
    <link href="<?php echo base_url() ?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/owl.transitions.css" rel="stylesheet">

    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nivo-preview.css" type="text/css" media="screen" />

    <!--BootStrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/normalize.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">

	<!--Replace Your Color-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colors/default-color.css">
	<!--Replace Your Color Ends-->

	<!-- Switcher Styles-->
	<link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo base_url() ?>assets/css/switcher.css" media="all" />
	<!-- END Switcher Styles -->

	<!-- Template Color Demo Examples -->
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/colors/color_1.css" title="alternate" media="all" /><!--Moderate orangeColor-->	
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/colors/color_2.css" title="next" media="all" /><!--Green Color-->	
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/colors/color_3.css" title="bookmark" media="all" /><!--Yellow Color-->	
	<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/colors/color_4.css" title="colorfr" media="all" /><!--Yellow Color-->	
	<!-- END Template Color Demo Examples -->
	
        <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <!-- ::::::::::::::::::::::::::: Start: Preloader section ::::::::::::::::::::::::::: -->
  <!--  <div id="preloader"></div>-->
    <!-- ::::::::::::::::::::::::::: End: Preloader section ::::::::::::::::::::::::::: -->


<!-- Page Top    -->
    <header>        
        <?php $this->load->view('front/partial/nav'); ?>    
    </header>
  <!--  <section id="main-slider" class="navbar navbar-defau-->

        
<!--/<?php $this->load->view($main); ?>-->
    
    <footer>
        <?php $this->load->view('front/partial/footer'); ?>
    </footer>



    <!-- Start : Slider -->
    <div class="slider-area onepage_slider onepage_slider_v2" id="page-top">
        <div class="bend niceties preview-2">
            <div class="slides" id="ensign-nivoslider">
                <!-- slider image-->
                <img alt="image" src="images/slider/lp1.jpg" title="#slider-direction-1"> <img alt="image" src="images/slider/slider2.jpg" title="#slider-direction-1">
            </div>
            <!-- end : slider image-->
            <div class="t-cn slider-direction" id="slider-direction-1">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-1">
                    <!-- slider content-->
                    <div class="title-container s-tb-c title-compress">
                       
                        <div class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow fadeInDownBig">
                            <span> Creative  & Design </span>
                        </div>
						<div class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomInDown" data-wow-delay="0.2s" data-wow-duration="2s">
                            Printing and typesetting industry
                        </div>

                    </div>
                </div>
                <!-- End: slider content-->
            </div>
        </div>
    </div>
    <!-- End:  slider -->
    <!-- ::::::::::::::::::::::::::: End: Header Section::::::::::::::::::::::::::: -->



    <!-- ::::::::::::::::::::::::::: Start:Our About Section  ::::::::::::::::::::::::::: -->
    <section class="about_desc" id="about">
        <div class="container">
            <div class="base-header">
                <h3>Welcome to BERRY</h3>
                <div class="abt_separator"></div>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h3>Get all the Services</h3>
                    <h4>with BARRY theme</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. As doloribus ad dolore ipsum dolor sit amet quod ipsum eos aspernatur
                        <strong>quod ipsums aspernatur vero eum magnam</strong> Lorem ipsum dolor sit amconsectet adipisicing elit. As doloribus ad dolore qui pariatur.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit <strong>. As doloribus ad dolore qui pariatur </strong> quod ipsum eos aspernatur vero eum magna error non quasi repudiandae nostrum corrupti Lorem ipsum dolor sit a consectetur adipisicing elit. As doloribus ad dolore qui pariatur quod ipsum eos aspernatur
                    </p>
                </div>
                <div class="col-md-7">
                    <img src="images/about/img_1.jpg" alt="about">
                </div>
            </div>
        </div>
    </section>
    <!-- ::::::::::::::::::::::::::: End:Our About Section  ::::::::::::::::::::::::::: -->


    <!-- ::::::::::::::::::::::::::: Start: Achieve Section  ::::::::::::::::::::::::::: -->
    <div class="achieve-section">
        <div class="container">
            <div class="row waypoint">
                <div class="col-sm-3">
                    <div class="count-info">
                        <span class="number countto">70</span> <span class="text">HAPPY CLIENTS</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="count-info">
                        <span class="number countto">733</span> <span class="text">PROJECTS</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="count-info">
                        <span class="number">340</span> <span class="text">AWARDS</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="count-info">
                        <span class="number">935</span> <span class="text">CUPS OF COFFEE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ::::::::::::::::::::::::::: End: Achieve Section  ::::::::::::::::::::::::::: -->


    <!-- ::::::::::::::::::::::::::: Start:Our FEATURES Section  ::::::::::::::::::::::::::: -->
    <section class="feature-section" id="service">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>OUR SERVICES</h3>
                <div class="abt_separator"></div>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
            </div>
            <!-- End: Heading -->
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="services-box-2">
                        <div class="services_warp">
                            <img src="images/services/s1.jpg" alt="" />
                            <a href="service.html">View Service</a>
                        </div>
                        <div class="number">01.</div>
                        <h4>Digital Marketing</h4>
                        <div class="subtext">Creative branding Ipsum is simply the dummy text of the printing and typesetting indust on Lorem Ipsum has been the industry's standard</div>
                    </div>
                </div>
                <!-- End : Service Item One -->
                <div class="col-sm-4 col-xs-12">
                    <div class="services-box-2">
                        <div class="services_warp">
                            <img src="images/services/s2.jpg" alt="" />
                            <a href="service.html">View Service</a>
                        </div>
                        <div class="number">02.</div>
                        <h4>Software Service</h4>
                        <div class="subtext">Creative branding Ipsum is simply the dummy text of the printing and typesetting indust on Lorem Ipsum has been the industry's standard</div>
                    </div>
                </div>
                <!-- End : Service Item Two -->
                <div class="col-sm-4 col-xs-12">
                    <div class="services-box-2">
                        <div class="services_warp">
                            <img src="images/services/s3.jpg" alt="" />
                            <a href="service.html">View Service</a>
                        </div>
                        <div class="number">03.</div>
                        <h4>Bootstrap Theme</h4>
                        <div class="subtext">Creative branding Ipsum is simply the dummy text of the printing and typesetting indust on Lorem Ipsum has been the industry's standard</div>
                    </div>
                </div>
                <!-- End : Service Item Three -->
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </section>
    <!-- ::::::::::::::::::::::::::: End:Our Services Section  ::::::::::::::::::::::::::: -->


    <!-- ::::::::::::::::::::::::::: Start: Call to action Section   ::::::::::::::::::::::::::: -->
    <section class="calltoaction">
        <div class="container">
            <div class="widget-content">
                <div class="row">
                    <div class="col-lg-9 callto-pull-left">
                        <div class="callto-icon">
                            <span class="icon_cloud-download"></span>
                        </div>
                        <div class="callto-text">
                            <h4>
								want to repair <span class="callto-hover"> your  Smartphone?</span>
							</h4>
                            <p>
                                We're here to help you manage your problem.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 callto-link">
                        <a href="#" class="more-link">Send Request</a>
                    </div>
                </div>
                <!--/ row -->
            </div>
            <!--/ widget -->
        </div>
        <!--/ container -->
    </section>
    <!-- ::::::::::::::::::::::::::: End: Call to action Section   ::::::::::::::::::::::::::: -->



    <!-- ::::::::::::::::::::::::::: Start: Pricing Section  ::::::::::::::::::::::::::: -->
    <section class="pricing-section" id="pricing">
        <!-- container -->
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>Select Our plan</h3>
                <div class="abt_separator"></div>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
            </div>
            <!-- End: Heading -->

            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <!-- Start: pricing-box 1 -->
                    <div class="pricing-box">
                        <h3>FREE</h3>
                        <h2><span>$</span>40<sub>/Month</sub></h2>
                        <p>Save 50% Lorem For any</p>
                        <p> 24/7 CUSTOMER SUPPORT</p>
                        <p> 2 UNIQUE CONCEPTS</p>
                        <p> 3-5 BUSINESS DAYS</p>
                        <a href="#" class="more-link">Order Now</a>
                    </div>
                    <!-- End: pricing-box 1 -->
                </div>
                <div class="col-sm-3 col-xs-12">
                    <!-- Start: pricing-box 2 -->
                    <div class="pricing-box">
                        <h3>GOLD</h3>
                        <h2><span>$</span>30<sub>/Month</sub></h2>
                        <p>Save 50% Lorem For any</p>
                        <p> 24/7 CUSTOMER SUPPORT</p>
                        <p> 2 UNIQUE CONCEPTS</p>
                        <p> 3-5 BUSINESS DAYS</p>
                        <a href="#" class="more-link">Order Now</a>
                    </div>
                    <!-- End: pricing-box 2 -->
                </div>
                <div class="col-sm-3 col-xs-12 star">
                    <!-- Start: pricing-box 3 -->
                    <div class="pricing-box">
                        <h3>Silver</h3>
                        <h2><span>$</span>70<sub>/Month</sub></h2>
                        <p>Save 50% Lorem For any</p>
                        <p> 24/7 CUSTOMER SUPPORT</p>
                        <p> 2 UNIQUE CONCEPTS</p>
                        <p> 3-5 BUSINESS DAYS</p>
                        <a href="#" class="more-link">Order Now</a>
                    </div>
                    <!-- End: pricing-box 3 -->
                </div>
                <div class="col-sm-3 col-xs-12">
                    <!-- Start: pricing-box 4 -->
                    <div class="pricing-box">
                        <h3>DIAMOND</h3>
                        <h2><span>$</span>90<sub>/Month</sub></h2>
                        <p>Save 50% Lorem For any</p>
                        <p> 24/7 CUSTOMER SUPPORT</p>
                        <p> 2 UNIQUE CONCEPTS</p>
                        <p> 3-5 BUSINESS DAYS</p>
                        <a href="#" class="more-link">Order Now</a>
                    </div>
                    <!-- End: pricing-box 4 -->
                </div>
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </section>
    <!-- ::::::::::::::::::::::::::: End: Pricing Section  ::::::::::::::::::::::::::: -->


    <!-- ::::::::::::::::::::::::::: Start: Work Section  ::::::::::::::::::::::::::: -->
    <section class="work-section" id="work">
        <div class="container-fluid">
            <!-- Project Filter-->
            <div class="project-filter">
                <ul class="project_menu">
                    <li class="filter" data-filter="all"> All Latest Works</li>
                    <li class="filter" data-filter=".category-1">Web Design</li>
                    <li class="filter" data-filter=".category-2">Draphic</li>
                    <li class="filter" data-filter=".category-3">Marketing</li>
                    <li class="filter" data-filter=".category-4">Development</li>
                </ul>
            </div>
            <!-- Project Filter End-->
            <div class="row">
                <!-- col-lg-12 col-sm-6 -->
                <div class="col-sm-12">
                    <div class="project-list row">
                        <!-- Work Item 1 -->
                        <div class="col-sm-6 col-xs-12 mix category-2" data-myorder="1">
                            <div class="work-item">
                                <!-- Start: Heading -->
                                <div class="base-header">
                                    <h3>Our Gallery</h3>
                                    <div class="abt_separator"></div>
                                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>

                                    <a href="gallery.html" class="more-link">See More Work</a>
                                </div>
                                <!-- End: Heading -->
                            </div>
                        </div>
                        <!--/ End: Work Item 1 -->
                        <!-- Work Item 2 -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix category-3" data-myorder="2">
                            <div class="work-item">
                                <div class="items"><img alt="" class="" src="images/work/work-2.jpg">
                                </div>
                                <div class="mask2">
                                    <p>Personal, Work, Home Office</p>
                                    <a href="single-gallery.html"><h3>Design Workspace</h3></a>
                                    <a class="info2" data-rel="prettyPhoto[gallery_name]" href="images/work/work-2.jpg"><i class="icon_zoom-in_alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/ End: Work Item 2 -->
                        <!-- Work Item 3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix category-4" data-myorder="3">
                            <div class="work-item">
                                <div class="items"><img alt="" class="" src="images/work/work-3.jpg">
                                </div>
                                <div class="mask2">
                                    <p>Personal, Work, Home Office</p>
                                    <a href="single-gallery.html"><h3>Design Workspace</h3></a>
                                    <a class="info2" data-rel="prettyPhoto[gallery_name]" href="images/work/work-3.jpg"><i class="icon_zoom-in_alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/ End: Work Item 3 -->
                        <!-- Work Item 4 -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix category-1" data-myorder="4">
                            <div class="work-item">
                                <div class="items"><img alt="" class="" src="images/work/work-4.jpg">
                                </div>
                                <div class="mask2">
                                    <p>Personal, Work, Home Office</p>
                                    <a href="single-gallery.html"><h3>Design Workspace</h3></a>
                                    <a class="info2" data-rel="prettyPhoto[gallery_name]" href="images/work/work-4.jpg"><i class="icon_zoom-in_alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/ End: Work Item 4 -->
                        <!-- Work Item 5 -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix category-2" data-myorder="1">
                            <div class="work-item">
                                <div class="items"><img alt="" class="" src="images/work/work-5.jpg">
                                </div>
                                <div class="mask2">
                                    <p>Personal, Work, Home Office</p>
                                    <a href="single-gallery.html"><h3>Design Workspace</h3></a>
                                    <a class="info2" data-rel="prettyPhoto[gallery_name]" href="images/work/work-5.jpg"><i class="icon_zoom-in_alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/ End: Work Item 5 -->
                        <!-- Work Item 6 -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix category-3" data-myorder="2">
                            <div class="work-item">
                                <div class="items"><img alt="" class="" src="images/work/work-6.jpg">
                                </div>
                                <div class="mask2">
                                    <p>Personal, Work, Home Office</p>
                                    <a href="single-gallery.html"><h3>Design Workspace</h3></a>
                                    <a class="info2" data-rel="prettyPhoto[gallery_name]" href="images/work/work-6.jpg"><i class="icon_zoom-in_alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/ Work Item 6 -->
                        <!--/ End: Work Item 7 -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix category-2" data-myorder="1">
                            <div class="work-item">
                                <div class="items"><img alt="" class="" src="images/work/work-7.jpg">
                                </div>
                                <div class="mask2">
                                    <p>Personal, Work, Home Office</p>
                                    <a href="single-gallery.html"><h3>Design Workspace</h3></a>
                                    <a class="info2" data-rel="prettyPhoto[gallery_name]" href="images/work/work-7.jpg"><i class="icon_zoom-in_alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--/ End: Work Item 7 -->
                    </div>
                    <!--/project-list -->
                </div>
                <!--/.col-lg-12 col-sm-6-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!-- ::::::::::::::::::::::::::: End: Work Section  ::::::::::::::::::::::::::: -->



    <!-- ::::::::::::::::::::::::::: Start:Team Section ::::::::::::::::::::::::::: -->
    <section class="team-section" id="team">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3> Our team</h3>
                <div class="abt_separator"></div>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
            </div>
            <!-- End: Heading -->
            <div class="row">
                <!-- profile 1-->
                <div class="col-sm-3 col-xs-12">
                    <div class="member">
                        <div class="img">
                            <img alt="team" class="img-responsive" src="images/team/2.jpg">
                            <div class="info">
                                <h6>Ladia Park</h6>
                                <p>CEO & Founder</p>
                                <ul class="social list-inline">
                                    <li>
                                        <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End: profile 1-->
                <!-- profile 2-->
                <div class="col-sm-3 col-xs-12">
                    <div class="member">
                        <div class="img">
                            <img alt="team" class="img-responsive" src="images/team/3.jpg">
                            <div class="info">
                                <h6>Adam Smith</h6>
                                <p>Office Manager</p>
                                <ul class="social list-inline">
                                    <li>
                                        <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: profile 2-->
                <!-- profile 3-->
                <div class="col-sm-3 col-xs-12">
                    <div class="member">
                        <div class="img">
                            <img alt="team" class="img-responsive" src="images/team/1.jpg">
                            <div class="info">
                                <h6>Wilson Jon</h6>
                                <p>Technical Manager</p>
                                <ul class="social list-inline">
                                    <li>
                                        <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: profile 3 -->
                <!-- profile 3-->
                <div class="col-sm-3 col-xs-12">
                    <div class="member">
                        <div class="img">
                            <img alt="team" class="img-responsive" src="images/team/4.jpg">
                            <div class="info">
                                <h6>John Wilson</h6>
                                <p>Chief Engineer</p>
                                <ul class="social list-inline">
                                    <li>
                                        <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: profile 3 -->
            </div>
            <!---/.row -->
        </div>
        <!--/.container -->
    </section>
    <!-- ::::::::::::::::::::::::::: End:Team Section ::::::::::::::::::::::::::: -->


    <!-- ::::::::::::::::::::::::::: Start: Testimonial Section  ::::::::::::::::::::::::::: -->
    <section class="testimonial-section" id="testi">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>Clients Testimonial </h3>
                <div class="abt_separator"></div>
            </div>
            <!-- End: Heading -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="testimonial-left">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li class="" data-target="#quote-carousel" data-slide-to="0"><img class="img-responsive " src="images/testimonial/t1.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1" class="active"><img class="img-responsive" src="images/testimonial/t1.jpg" alt="">
                                </li>
                                <li class="" data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/testimonial/t1.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
                                <!-- Quote 1 -->
                                <div class="item">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                                    <h5> John Doe <br><span>Marketing manager<span></span></span></h5>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item active">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                                    <h5> John Doe <br><span>Marketing manager<span></span></span></h5>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                                    <h5> John Doe <br><span>Marketing manager<span></span></span></h5>
                                </div>
                            </div>
                            <!-- Carousel Buttons Next/Prev -->
                        </div>
                    </div>
                </div>
                <!-- col-lg-8 -->
            </div>
            <!-- end: row -->
        </div>
        <!-- end: container -->
    </section>
    <!-- ::::::::::::::::::::::::::: End: Testimonial Section  ::::::::::::::::::::::::::: -->


    <!-- ::::::::::::::::::::::::::: Start: Blog Section  ::::::::::::::::::::::::::: -->
    <section class="blog-section">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>Latest News</h3>
                <div class="abt_separator"></div>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
            </div>
            <!-- End: Heading -->
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="blog-warp-1">
                        <div class="blog_imgg">
                            <img src="images/blog/b1.jpg" alt="" />
                            <div class="blog_datee">
                                <p><i class="fa fa-calendar"></i> October 27, 2016 </p>
                            </div>
                        </div> 
                        <h5><a href="blog.html"> Operating System Updates</a></h5>
                        <a href="#" class="subtext"><i class="fa fa-tag"></i>  Marketing </a> 
						<a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 5 Comments </a>
                        <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typesetting industrydummy texat the dummy text ofthe anadthe printing </p>
                        <a href="single-blog.html" class="blog_btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                </div>
                <!--/ Blog Item 1 --> 
                <div class="col-sm-4 col-xs-12">
                    <div class="blog-warp-1">
                        <div class="blog_imgg">
                            <img src="images/blog/b2.jpg" alt="" />
                            <div class="blog_datee">
                                <p><i class="fa fa-calendar"></i> October 17, 2015 </p>
                            </div>
                        </div>
                        <h5><a href="blog.html">System Security Testing</a></h5>
                        <a href="#" class="subtext"><i class="fa fa-tag"></i>  Marketing </a> 
						<a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 5 Comments </a>
                        <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typesetting industrydummy texat the dummy text ofthe anadthe printing </p>
                        <a href="single-blog.html" class="blog_btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                </div>
                <!--/ Blog Item 2 -->
                <div class="col-sm-4 col-xs-12">
                    <div class="blog-warp-1">
                        <div class="blog_imgg">
                            <img src="images/blog/b3.jpg" alt="" />
                            <div class="blog_datee">
                                <p><i class="fa fa-calendar"></i> October 24, 2014 </p>
                            </div>
                        </div>
                        <h5><a href="blog.html">Operating System Updates</a></h5>
                        <a href="#" class="subtext"><i class="fa fa-tag"></i>  Marketing </a> 
						<a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 5 Comments </a>
                        <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typesetting industrydummy texat the dummy text ofthe anadthe printing </p>
                        <a href="single-blog.html" class="blog_btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                </div>
                <!--/ Blog Item 3 -->
                <div class="more_blog">
                    <a href="blog.html" class="more-link">See Blog</a>
                </div>
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </section>
    <!-- ::::::::::::::::::::::::::: End: Blog Section  ::::::::::::::::::::::::::: -->


    <!-- ::::::::::::::::::::::::::: Start: Client Section  ::::::::::::::::::::::::::: -->
    <div class="client-section" id="client-section">
        <!-- Container -->
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>OUR BEST PARTNER</h3>
                <div class="abt_separator"></div>
            </div>
            <!-- End: Heading -->
            <div class="row">
                <!-- client list  -->
                <div class="owl-carousel owl-theme col-md-12" id="client">
                    <!-- client 1 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client" src="images/client/client-1.png">
                            </div>
                        </div>
                    </div>
                    <!-- client 2 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client" src="images/client/client-2.png">
                            </div>
                        </div>
                    </div>
                    <!-- client 3 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client" src="images/client/client-3.png">
                            </div>
                        </div>
                    </div>
                    <!-- client 4 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client" src="images/client/client-4.png">
                            </div>
                        </div>
                    </div>
                    <!-- client 5 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client" src="images/client/client-5.png">
                            </div>
                        </div>
                    </div>
                    <!-- client 6 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client" src="images/client/client-6.png">
                            </div>
                        </div>
                    </div>
                    <!-- client 7 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client" src="images/client/client-7.png">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ client list  -->
            </div>
            <!--/ row - -->
        </div>
        <!--/ Container - -->
    </div>
    <!-- ::::::::::::::::::::::::::: End:Client Section   ::::::::::::::::::::::::::: -->


    <!-- :::::::::::::::::::::::::::Start: contact  Section    ::::::::::::::::::::::::::: -->
    <section class="contact-info contact-section-two">
        <!-- Start: Heading -->
        <div class="base-header">
            <h3>Contact Us</h3>
            <div class="abt_separator"></div>
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
        </div>
        <!-- End: Heading -->
        <div id="map" class="map-container"></div>
        <!-- Google Map -->
    </section>


    <section class="contact-section">
        <div class="container">
            <div class="row">

                <!--  Content  -->
                <div class="contact-form-warper col-lg-7 col-xs-8">
                    <!--  Contact Form  -->
                    <div class="contact-form">
                        <form class="form-group" action="http://tidytheme.com/barry/html/mailer.php" id="contactForm" method="post" name="contactForm">
                            <div class="col-lg-4">
                                <input class="form-control" id="Name" name="Name" placeholder="Name :" type="text">
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control" id="Email" name="Email" placeholder="Email :" type="text">
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control" id="Tel" name="Tel" placeholder="Number :" type="text">
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" id="Message" name="Message" placeholder="Message :"></textarea>
                            </div>
                            <input class="submit-button btn" name="submit" value="Submit" type="submit">
                        </form>
                    </div>
                    <!-- End:Contact Form  -->
                </div>

                <div class="col-lg-5 col-xs-4 contact-info">
                    <div class="row">
                        <!--  Contact Form  -->
                        <div class="contact-addrs col-lg-6 col-xs-12">
                            <h5>Get in Tuch</h5>
                            <p>Email :
                                <br> myemail@mail.com
                            </p>
                        </div>
                        <div class="contact-addrs col-lg-6 col-xs-12">
                            <h5>New York</h5>
                            <p>Address :
                                <br> New York, 56462</p>
                        </div>
                    </div>
                    <!-- End:contact-info  -->
                </div>
                <!-- End:contact-info  -->
            </div>
            <!-- row /- -->
        </div>
        <!-- container /- -->
    </section>
    <!-- ::::::::::::::::::::::::::: End Contact Section ::::::::::::::::::::::::::: -->





<!-- START : Switcher 
========================================-->
<div class="demo_changer">
  <div class="demo-icon"><i class="icon_cog"></i></div>
  <div class="form_holder">
	 <div class="layout_styles">
	 <p>LAYOUT STYLE</p>
		<ul>
		  <li><a href="index.html">Multipurpose v1</a></li>
		  <li><a href="index-two.html">Multipurpose v2</a></li>
		  <li> <a href="index-onepage.html">Landingpage v1</a></li>
		  <li> <a href="index-onepage_v2.html">Landingpage v2</a></li>
		  <li> <a href="index-onepage_v3.html">Landingpage v3</a></li>
		</ul> 
	  </div>
	  <p>CHOOSE YOUR COLOR</p>
	  <div class="predefined_styles"> 
		  <a href="#" rel="author" class="styleswitch"><img src="images/switcher/color_1.jpg" alt=""></a>
		  <a href="#" rel="alternate" class="styleswitch"><img src="images/switcher/color_2.jpg" alt=""></a>	
		  <a href="#" rel="next" class="styleswitch"><img src="images/switcher/color_3.jpg" alt=""></a>
		  <a href="#" rel="bookmark" class="styleswitch"><img src="images/switcher/color_0.jpg" alt=""></a>
		  <a href="#" rel="colorfr" class="styleswitch"><img src="images/switcher/color_4.jpg" alt=""></a>
	  </div>
	  <span><a rel="tag" class="styleswitch" href="index-onepage_v2c392.html?default=true">RESET STYLE</a></span>
  </div>
</div>
<!-- END Switcher 
========================================-->



    <!-- Scripts
========================================-->
    <!-- jquery -->
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- Modernizer -->
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.6.2.min.js" type="text/javascript"></script>
    <!-- plugins -->
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- Use For Animation -->
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <!-- Use For carousel -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- Use For Image Peview -->
    <script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
    <!-- Use For mixitup gallery -->
    <script src="<?php echo base_url() ?>assets/js/jquery.mixitup.min.js"></script>
    <!-- Use For nivo slider -->
    <script src="<?php echo base_url() ?>assets/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/nivo-home.js" type="text/javascript"></script>
    <!-- Use For jquery Easing -->
    <script src="<?php echo base_url() ?>assets/js/jquery.easing.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.easing.compatibility.js"></script>
    <!-- Use For Map -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <!-- Use For Map -->
    <script src="<?php echo base_url() ?>assets/js/maps.js"></script>
    <!-- Use For single Page Nav -->
    <script src="<?php echo base_url() ?>assets/js/jquery.singlePageNav.min.js"></script>
    <!--fswit Switcher   -->
    <script src="<?php echo base_url() ?>assets/js/fswit.js"></script>
	
    <!-- Custom Scripts
========================================-->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from tidytheme.com/barry/html/index-onepage_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 13:38:32 GMT -->
</html>