<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fighter
 */

?>

	<!-- Footer -->
  <footer id="footer" class="footer layer-overlay overlay-dark-9" data-bg-img="images/bg/bg19.jpg">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-5"><?php  echo get_theme_mod('text_setting1'); ?>
          <!--<div class="widget dark"> 
            <img class="mt-10 mb-20" alt="" src="<?php bloginfo('template_url'); ?>/images/logo-wide-white.png"> 
				<p>About the institutions About the institutions About the institutions About the institutions About the institutions About the institutions About the institutions</p>
            <p>203, Fighter Labs, Behind Alis Steet, Mumbai, Maharastra.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">022-4562-7829</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@fighterleague.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.fighterleague.com</a> </li>
            </ul>            
          </div>-->
        </div>
        
        <div class="col-sm-6 col-md-4"><?php  echo get_theme_mod('text_setting2'); ?>
          <!--<div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="#">Classes</a></li>
              <li><a href="#">Trainers</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Blog</a></li>         
            </ul>
          </div>-->
        </div>
        <div class="col-sm-6 col-md-3"><?php  echo get_theme_mod('text_setting3'); ?>
           <!--<div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>-->
        </div>
      </div>
      
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0"><?php  echo get_theme_mod('text_setting4'); ?></p>
          </div>
          <div class="col-md-6 text-right flip">
            <div class="widget no-border m-0"><?php  echo get_theme_mod('text_setting5'); ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>