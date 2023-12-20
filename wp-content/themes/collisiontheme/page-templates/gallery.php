<?php /* Template Name: gallery */ 
get_header();
while(have_posts()):the_post();
?>
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
<?php endwhile; ?>

<section class="gallery-box">
    <div class="container">
     <?php    $allgalimg = CFS()->get('gallery_images_repeat');   ?>

        <div class="row">
            <?php foreach($allgalimg as $eachgalimg){ ?>
            <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up"
     data-aos-duration="3000">
                <div class="image-box ">
                <a class="example-image-link" href="<?php echo $eachgalimg['gallery_image'] ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo $eachgalimg['gallery_image'] ?>" alt=""/></a>
                </div>

            </div>
        <?php } ?>

       
        </div>
    </div>
    </div>
</section>

  <?php 
  

get_footer();
