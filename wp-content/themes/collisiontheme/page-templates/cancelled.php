<?php /* Template Name: Cancelled */ 
get_header();

while(have_posts()):the_post();
?>

 <!--Page Title-->
    <!--<section class="page-title" style="background-image:url(<?php //echo get_field('inner_banner'); ?>);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1><?php //the_title(); ?></h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php //echo get_site_url(); ?>">Home</a></li>
                    <li><?php //the_title(); ?></li>
                </ul>
            </div>
        </div>
    </section> -->
    <!--End Page Title-->

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                    <!-- Image Column -->
                <div class="image-column col-lg-12 col-md-12 col-sm-12">
                    <?php if( get_the_post_thumbnail_url(get_the_ID()) !='')
                    { ?>
                    <div class="image-box">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 thankImg">
                     <?php the_content(); ?>
                         </div>
                    </div>
                <?php 
                    }
                else{
                    ?>
                   
                    <div class="row clearfix">
                        <div class="col-md-12 thankImg">
                     <?php the_content(); ?>
                    </div>
                    </div>

              <?php 
                    }


                 ?>
                </div>
            </div>
        </div>
    </section>

<?php 
  endwhile;
  unset($_SESSION['payonline']);

get_footer();
