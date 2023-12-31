<?php /* Template Name: services */ 
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
<?php endwhile; wp_reset_query();


//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$allservices = new WP_Query(array('post_type'=>'ourservice','post_status'=>'publish','posts_per_page'=>-1));


 ?>
    <!--End Page Title-->

    <!-- Services Section -->
    <section class="services-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Service Block -->
                <?php while($allservices->have_posts()):$allservices->the_post(); ?>
                <div class="service-block col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></figure>
                            <div class="title"><h4><?php the_title(); ?></h4></div>
                        </div>
                        <div class="caption-box">
                            <div class="title-box">
                                <span class="icon flaticon-electrical"></span>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>
                            <p><?php echo wp_trim_words(get_the_content(),12,'...'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile;wp_reset_query(); ?>

				<div class="col-12">
					<ul class="certificates d-flex justify-content-center">
						<li><img src="https://dwstaging.link/cms/infinitecollision/wp-content/uploads/2023/12/certificate2.jpg" alt="" class="img-fluid"/></li><li><img src="https://dwstaging.link/cms/infinitecollision/wp-content/uploads/2023/12/certificate1.jpg" alt="" class="img-fluid"/></li>
						<li></li>
					</ul>
				</div>
            
            </div>

             <?php //wp_pagenavi(array('query'=>$allservices)); ?>
          
        </div>
    </section>
    <!-- End Services Section -->
  
    <!--End Clients Section-->

 <?php get_footer(); ?>
