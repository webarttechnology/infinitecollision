<?php /* Template Name: Home */ 
get_header();
?>

 <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
         <?php        $homeslides = CFS()->get( 'sliderepeat' ); ?>
  
                <ul>
                 <?php    foreach ( $homeslides as $eachslide ) {  ?>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo $eachslide['home_slide_image']; ?>">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['550','600','550','550']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-120','-120','-120','-120']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h4><?php echo $eachslide['top_text']; ?></h4>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','700','700']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-65','-65','-65','-65']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2><?php echo $eachslide['big_text']; ?></h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['700','700','450','450']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['5','5','5','5']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text"><?php echo $eachslide['short_desc']; ?></div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="auto"
                        data-whitespace="nowrap"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['105','105','105','105']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <a href="<?php echo $eachslide['book_now_link']; ?>" class="theme-btn btn-style-one"><?php echo $eachslide['book_now_text']; ?></a>
                        </div>
                    </li>

                <?php } ?>

                   

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                  
                    <?php echo CFS()->get( 'about_text' ); ?>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <a href="about.php"><img src="images/resource/about-img.jpg" alt=""></a>
                    </div>
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <h3><a href="about.php">Our Mission</a></h3>
                            <p>Our most popular service is our Virtual Receptionist. We know that sometimes it’s difficult to get to the phone</p>
                            <a href="about.php" class="read-more">Read More</a>
                        </div>

                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <h3><a href="about.php">Our History</a></h3>
                            <p>If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting</p>
                            <a href="about.php" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Fact counter -->
    <section class="fun-fact-section" style="background-image:url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-avatar-1"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1035">0</span>
                        <div class="counter-title"><h5>Total experts</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-transport"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1035">0</span>
                        <div class="counter-title"><h5>Service Done</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-boy-broad-smile"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1226">0</span>
                        <div class="counter-title"><h5>Happy Client</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-car-1"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1035">0</span>
                        <div class="counter-title"><h5>Total Service</h5></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fact counter -->

    <!-- Feature Section -->
    <section class="feature-section" style="background-image:url(images/background/2.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h2>Our Services</h2>
            </div>

            <div class="features-carousel owl-carousel owl-theme">
                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.php"><img src="images/resource/feature-1.jpg" alt=""></a>
                            <span class="price">65<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.php">Suspension Repair</a></h3>
                            <a href="service-detail.php" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.php"><img src="images/resource/feature-2.jpg" alt=""></a>
                            <span class="price">45<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.php">Engine Overhaul</a></h3>
                            <a href="service-detail.php" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.php"><img src="images/resource/feature-3.jpg" alt=""></a>
                            <span class="price">25<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.php">Wheel Alignment</a></h3>
                            <a href="service-detail.php" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.php"><img src="images/resource/feature-4.jpg" alt=""></a>
                            <span class="price">85<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.php">Suspension Repair</a></h3>
                            <a href="service-detail.php" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.php"><img src="images/resource/feature-1.jpg" alt=""></a>
                            <span class="price">65<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.php">Suspension Repair</a></h3>
                            <a href="service-detail.php" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="images/resource/feature-2.jpg" alt=""></a>
                            <span class="price">45<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Engine Overhaul</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="images/resource/feature-3.jpg" alt=""></a>
                            <span class="price">25<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Wheel Alignment</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="images/resource/feature-4.jpg" alt=""></a>
                            <span class="price">85<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Suspension Repair</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Latest Works</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

             <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">View All</li>
                        <li class="filter" data-role="button" data-filter=".diagnostics">Diagnostics</li>
                        <li class="filter" data-role="button" data-filter=".engine">Engine</li>
                        <li class="filter" data-role="button" data-filter=".repair">Repairs</li>
                        <li class="filter" data-role="button" data-filter=".wheel">Wheel Service</li>
                        <li class="filter" data-role="button" data-filter=".conditioner">Air Conditioner</li>
                    </ul>
                </div>

                <div class="filter-list row clearfix">
                    <!-- Project item -->
                    <div class="gallery-item mix all engine wheel conditioner col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="images/gallery/1.jpg" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all diagnostics repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="images/gallery/2.jpg" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all engine repair conditioner col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="images/gallery/3.jpg" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all wheel repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="images/gallery/4.jpg" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all diagnostics conditioner engine col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="images/gallery/5.jpg" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all wheel repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="images/gallery/6.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="images/gallery/6.jpg" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box text-center">
                    <a href="#" class="theme-btn btn-style-two">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery section -->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h3>Check out our repair service for your car and get a free clean</h3>
                <a href="#" class="call-btn">Order Now</a>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

    <!-- News section -->
    <section class="news-section" style="background-image: url(images/background/pattern.png);">
        <div class="auto-container">
            <div class="title-box">
                <h2>Our Latest News</h2>
            </div>

            <!-- News Carousel -->
            <div class="news-carousel owl-carousel owl-theme">
                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt=""></a></div>
                            <div class="label">
                                <div class="date"><span>17</span> oct</div>
                                <div class="likes"><i class="far fa-heart"></i> 02</div>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="blog-detail.html">Tips for car maintanence</a></h3>
                            <ul class="info">
                                <li><a href="blog-detail.html"><i class="far fa-user"></i> Admin</a></li>
                                <li><a href="blog-detail.html"><i class="far fa-comments"></i> comment 02</a></li>
                            </ul>
                            <p>A lot of auto repair customerss questions the importance of wheel alignment.</p>
                            <a href="blog-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt=""></a></div>
                            <div class="label">
                                <div class="date"><span>17</span> oct</div>
                                <div class="likes"><i class="far fa-heart"></i> 02</div>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="blog-detail.html">Tips for car maintanence</a></h3>
                            <ul class="info">
                                <li><a href="blog-detail.html"><i class="far fa-user"></i> Admin</a></li>
                                <li><a href="blog-detail.html"><i class="far fa-comments"></i> comment 02</a></li>
                            </ul>
                            <p>A lot of auto repair customerss questions the importance of wheel alignment.</p>
                            <a href="blog-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt=""></a></div>
                            <div class="label">
                                <div class="date"><span>17</span> oct</div>
                                <div class="likes"><i class="far fa-heart"></i> 02</div>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="blog-detail.html">Tips for car maintanence</a></h3>
                            <ul class="info">
                                <li><a href="blog-detail.html"><i class="far fa-user"></i> Admin</a></li>
                                <li><a href="blog-detail.html"><i class="far fa-comments"></i> comment 02</a></li>
                            </ul>
                            <p>A lot of auto repair customerss questions the importance of wheel alignment.</p>
                            <a href="blog-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt=""></a></div>
                            <div class="label">
                                <div class="date"><span>17</span> oct</div>
                                <div class="likes"><i class="far fa-heart"></i> 02</div>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="blog-detail.html">Tips for car maintanence</a></h3>
                            <ul class="info">
                                <li><a href="blog-detail.html"><i class="far fa-user"></i> Admin</a></li>
                                <li><a href="blog-detail.html"><i class="far fa-comments"></i> comment 02</a></li>
                            </ul>
                            <p>A lot of auto repair customerss questions the importance of wheel alignment.</p>
                            <a href="blog-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News section -->

    <!-- Tesm Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Expert Workers</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/team-1.png" alt=""></figure>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <div class="inner-box">
                                <h3 class="name"><a href="team-single.html">HARKUS HARVING</a></h3>
                                <span class="designation">Mechanic Worker</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/team-2.png" alt=""></figure>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <div class="inner-box">
                                <h3 class="name"><a href="team-single.html">Hackson willingham</a></h3>
                                <span class="designation">Project Manager</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="images/resource/team-3.png" alt=""></figure>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <div class="inner-box">
                                <h3 class="name"><a href="team-single.html">HARKUS HARVING</a></h3>
                                <span class="designation">Mechanic Worker</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tesm Section -->

    <!-- Testimonial Seectin -->
    <section class="testimonial-section" style="background-image: url(images/background/3.jpg);">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>What Client Says</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-carousel owl-carousel owl-theme">

                <div class="testimonial-block even">
                    <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                    <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    <div class="name">DAVID MATIN / <span class="designation">Manager</span></div>
                    <span class="icon fa fa-quote-left"></span>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block even">
                    <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                    <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    <div class="name">DAVID MATIN / <span class="designation">Manager</span></div>
                    <span class="icon fa fa-quote-left"></span>
                </div>

                <div class="testimonial-block even">
                    <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                    <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    <div class="name">DAVID MATIN / <span class="designation">Manager</span></div>
                    <span class="icon fa fa-quote-left"></span>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block even">
                    <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                    <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    <div class="name">DAVID MATIN / <span class="designation">Manager</span></div>
                    <span class="icon fa fa-quote-left"></span>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Seectin -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Contact US</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

             <div class="contact-form">
                <form method="post" action="https://expert-themes.com/html/motor-expert/index.html" id="contact-form">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group pull-right">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="tel" name="phone" placeholder="Phone No" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button type="submit" name="submit-form">send Massage</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="contact-info">
                <div class="row clearfix">
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                        <figure><img src="images/resource/car-image.png" alt=""></figure>
                    </div>

                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <span class="icon flaticon-placeholder"></span>
                                <p><strong>Address:</strong><br>13005 Greenville Avenue California.</p>
                            </li>

                            <li>
                                <span class="icon flaticon-phone"></span>
                                <p><strong>Phone:</strong>+1 800125 6524</p>
                                <p><span>Email:</span><a href="#">mail@autowork.com</a></p>
                            </li>

                            <li>
                                <span class="icon flaticon-stopwatch"></span>
                                <p><strong>Workshop Timeing :</strong><br>  10:00am to 6:00pm  Sunday Closed</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1598513355690!5m2!1sen!2s" height="400" style="border:0;"></iframe>
        </div>
    </section>
    <!-- End Map Section -->

     <!--Clients Section-->
 

<?php get_footer(); ?>