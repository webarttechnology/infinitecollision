<?php /* Template Name: general */ 
get_header();

$pageid = get_id_by_slug('site-general-settings');

while(have_posts()):the_post();
?>


 <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo get_field('inner_banner'); ?>);">
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

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <?php the_field('about_welcome_text'); ?>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    </div>
                    <div class="row clearfix">
                     <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->
<?php endwhile; ?>

   


<?php get_footer(); ?>

