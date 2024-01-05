<?php /* Template Name: contact */ 
get_header();

$page_slug = 'site-general-settings';
$generalpageid = get_id_by_slug($page_slug);
while(have_posts()):the_post();
?>



  <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php the_field('inner_banner'); ?>);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1><?php the_title(); ?></h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <h5 class="text-center my-5"><?php the_field('contact_page_heading_text'); ?></h5>
            <div class="sec-title text-center">
                <h2><?php the_title(); ?></h2>

            <?php endwhile; ?>

                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

             <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="f50744d" title="Contact page form" html_id="contact-form"]'); ?>
               
            </div>

            <div class="contact-info">
                <div class="row clearfix">
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                        <figure><img src="<?php the_field('beside_form_image'); ?>" alt=""></figure>
                    </div>

                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <span class="icon flaticon-placeholder"></span>
                                <p><strong>Address:</strong><br><?php echo get_field('address',$generalpageid); ?></p>
                            </li>

                            <li>
                                <span class="icon flaticon-phone"></span>
                                <p><strong>Phone:</strong><?php echo get_field('phone',$generalpageid); ?></p>
                                <p><span>Email:</span><a href="#"><?php echo get_field('email',$generalpageid); ?></a></p>
                            </li>

                            <li>
                                <span class="icon flaticon-stopwatch"></span>
                                <p><strong>Working Hours:</strong><br>  <?php echo get_field('workshop_timings',$generalpageid); ?></p>
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
            <iframe src="<?php echo get_field('google_map_iframe_link',$generalpageid); ?>" height="400" style="border:0;"></iframe>
        </div>
    </section>
    <!-- End Map Section -->

    
    <!--End Clients Section-->

  <?php get_footer();  ?>