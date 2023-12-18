<?php /* Template Name: about */ 
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

    <!-- Fact counter -->
    <section class="fun-fact-section" style="background-image:url(<?php the_field('fact_counter_background_image'); ?>);">
        <div class="auto-container">
            <?php the_field('fact_counter_text'); ?>
           
        </div>
    </section>
    <!-- End Fact counter -->

    <!-- Why Us Section -->
    <section class="why-us-section">
        <div class="auto-container">

            <!-- Features Tab -->
            <div class="feature-tabs tabs-box">
                <div class="row clearfix">
                    <div class="content-column pull-right col-lg-7 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">
                            <!--Tab / Active Tab-->
                   <?php 
                    $counter = 0;
                    $whychoose = CFS()->get('why_choose_repeat'); 
                   //echo '<pre>'; print_r($whychoose); echo '</pre>'; die();
              foreach($whychoose as $eachreasonset){
                $counter++;
                $textforreason =  $eachreasonset['why_choose_us_text']; 
                         if($counter==1){

                         ?>

                            <div class="tab active-tab" id="<?php echo $eachreasonset['tabid']; ?>">
                            <?php }
                            else{
                                ?>
                                 <div class="tab" id="<?php echo $eachreasonset['tabid']; ?>">
                            <?php }

                             ?>
                                <div class="inner-box">
                                    <span class="title"><?php echo $eachreasonset['why_choose_main_title']; ?></span>
                                    <h2><?php echo $eachreasonset['why_choose_us_sub_title']; ?></h2>
                                   <?php echo $textforreason; ?>
                                    
            <a href="<?php echo $eachreasonset['details_link']; ?>" class="theme-btn btn-style-one" target="_blank"><?php echo $eachreasonset['details_text']; ?></a>
                                </div>
                            </div>
                        <?php } ?>

                            <!--Tab -->
                                          
                        </div>
                    </div>


                    <div class="btn-column col-lg-5 col-md-12 col-sm-12">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
<?php $whychoose = CFS()->get('why_choose_repeat'); 
              foreach($whychoose as $eachreasonset){
                $textforreason =    $eachreasonset['why_choose_us_text']; 
                $nonhtmllreason = strip_tags($textforreason);
                $finaltrimmedtext = wp_trim_words($nonhtmllreason,11,'...');
?>

                            <li data-tab="#<?php echo $eachreasonset['tabid']; ?>" class="tab-btn">
                                <div class="icon-box"><span class="<?php echo $eachreasonset['flaticon']; ?>"></span></div>
                                <h3><?php echo $eachreasonset['why_choose_us_sub_title']; ?></h3>
                                <p><?php echo $finaltrimmedtext;  ?> </p>
                            </li>
                        <?php } ?>
                            


                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->

    <!--Clients Section-->

    <!--End Clients Section-->


<?php get_footer(); ?>

