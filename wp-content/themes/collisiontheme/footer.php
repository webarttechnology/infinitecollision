<?php
$pageid = get_id_by_slug('site-general-settings');
 
 $socialrows = CFS()->get('social_loop',$pageid );


  $allclients = CFS()->get( 'clients_repeat',$pageid  ); 

  ?>

 <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <?php foreach($allclients as $eachclient){  ?>
                
    <li class="slide-item">
        <figure class="image-box">
            <a href="<?php echo $eachclient['client_link']; ?>">
              <img src="<?php echo $eachclient['client_logo']; ?>" alt="">
           </a>
       </figure>
     </li>
                <?php } ?>
                    
                </ul>
            </div>
        </div>
    </section>

<footer class="main-footer" style="background-image: url(<?php echo get_field('background_image_footer',$pageid); ?>);">
        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <figure>
                                    <h3><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_field('footer_logo',$pageid); ?>"></a></h3>
                                </figure>
                            </div>
                            <div class="widget-content">
                                <div class="text"><?php echo get_field('footer_below_logo_text',$pageid); ?></div>
                                <h4>Follow Us:</h4>
                                <ul class="social-icon">
                                    <li><a href="<?php echo get_field('facebook',$pageid); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo get_field('twitter',$pageid); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo get_field('pinterest',$pageid); ?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="<?php echo get_field('dribble',$pageid); ?>" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget services-widget">
                            <h2 class="widget-title">Our Services</h2>
                            <div class="widget-content">
                                <ul class="services-list">
                                    <?php $ourservices = new WP_Query(array('post_type'=>'ourservice','post_status'=>'publish','posts_per_page'=>5)); 
                                    while($ourservices->have_posts()):$ourservices->the_post();
                                    ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                   
                                      <?php endwhile;wp_reset_query(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!--Footer Column-->
                        <div class="footer-widget gallery-widget">
                            <h2 class="widget-title">Instragram</h2>
                             <!--Footer Column-->
                            <div class="widget-content">
                                <?php $allinstaimages = CFS()->get( 'instagram_images_repeat',$pageid);  ?>
                                <div class="outer clearfix">
                                    <?php foreach($allinstaimages as $eachinstagramimage){ ?>
                                    <figure class="image">
                            <a href="<?php echo $eachinstagramimage['instapopup']; ?>" class="lightbox-image" title="Image Title Here"><img src="<?php echo $eachinstagramimage['normal_image']; ?>" alt=""></a>
                                    </figure>
                                <?php } ?>

                                  
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!--Footer Column-->
                        <div class="footer-widget news-widget">
                            <h2 class="widget-title">Latest News</h2>
                             <!--Footer Column-->
                            <div class="widget-content">
                                <?php $posts = new WP_Query(array('post_type'=>'post','posts_per_page'=>2,'post_status'=>'publish'));
                                  while($posts->have_posts()):$posts->the_post();

                                 ?>
                                <div class="post">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <span class="date"><i class="far fa-calendar-check"></i><?php echo get_the_date(); ?></span>
                                </div>
                            <?php endwhile; ?>

                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <p>Copyrights © <?php echo date('Y'); ?> All Rights Reserved. by <a href="https://webart.technology/">WebArt Technology Pvt. Ltd.</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>




<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lightbox-plus-jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--Revolution Slider-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/addons/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/appear.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/mixitup.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/validate.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/map-script.js"></script>
<!--End Google Map APi-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/color-settings.js"></script>

<script>
    AOS.init();
</script>
<script>
    jQuery('document').ready(function(){
        jQuery("#servid").change( function(){
            

         var serv = jQuery(this).val(); /* this is number of assistants   */
            //alert(serv)
         var formid = jQuery("input[name=_wpcf7]").val();
                         
            jQuery.ajax({  
                 url:"<?php echo get_admin_url(); ?>/admin-ajax.php",  
                 method:"POST",
            
                data : 
                {
                action : 'update_price',
                service : serv,
                formid : formid
             
                },    
                 success:function(response)
                 {  
                    /*jQuery("#assiststatus").html(response);
                    jQuery('#assiststatus').delay(5000).fadeOut(400);*/
                    if(response=='success'){
                      //alert('Price updated')
                  }

                 }  
            });

        
        
      });

    });


    </script>
<?php wp_footer(); ?>
</body>

<!-- Mirrored from expert-themes.com/html/motor-expert/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 09:41:10 GMT -->
</html>
