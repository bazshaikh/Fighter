<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fighter
 */

get_header();
?>

<div class="main-content">
  <section id="home">
    <div class="container-fluid p-0">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider rev_slider_default" data-version="5.0">
          <ul>
            
            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg13.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="<?php bloginfo('template_url'); ?>/images/bg/bg13.jpg"  alt=""  data-bgposition="top 30%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina> 
              <!-- LAYERS --> 
              
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white"
                  id="rs-1-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['80']"
                  data-lineheight="['120']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;">Martial Arts </div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white bg-theme-colored-transparent pl-20 pr-20"
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Train with best Legends </div>
              
              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white" 
                  id="rs-1-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35','35','40']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>
                hardest places as a sign of God's unconditional love. </div>
              
              <!-- LAYER NR. 4 -->
              <div class="tp-caption" 
                  id="rs-1-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['110','120','150']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#register">Book Now</a> </div>
            </li>
            
            <!-- SLIDE 2 -->
            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg14.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="<?php bloginfo('template_url'); ?>/images/bg/bg14.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina> 
              <!-- LAYERS --> 
              
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-6 text-white pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Fighter League Academy </div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">Train with best Legends </div>
              
              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>
                hardest places as a sign of God's unconditional love. </div>
              
              <!-- LAYER NR. 4 -->
              <div class="tp-caption" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['110','120','150']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-circled btn-theme-colored pl-20 pr-20" href="#register">Apply Now</a> </div>
            </li>
            
            <!-- SLIDE 3 -->
            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg12.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="<?php bloginfo('template_url'); ?>/images/bg/bg12.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina> 
              <!-- LAYERS --> 
              
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['70']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"> Martial Arts </div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Train with best Legends </div>
              
              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>
                hardest places as a sign of God's unconditional love. </div>
              
              <!-- LAYER NR. 4 -->
              <div class="tp-caption" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['110','120','150']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="#register">Book Now</a> </div>
            </li>
          </ul>
        </div>
      </div>
      <!--  Revolution slider scriopt --> 
      <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });
          });
        </script> 
      <!-- Slider Revolution Ends --> 
    </div>
  </section>
  
  <!-- Section: About -->
  <section id="about">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-6">
            <h5 class="">About us</h5>
            <h2 class="mt-0">Welcome To Our <span class="text-theme-colored">Fighter League</span></h2>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eveniet.</h5>
            <p>Ipsum dolor sit amet, consectetur adipisicing elit. Soluta doloremque assumenda reprehenderit architecto distinctio expedita nulla, quam laudantium dolor suscipit praesentium eveniet placeat quas, nisi asperiores nihil quibusdam dolorum.</p>
            <div class="row multi-row-clearfix mt-30">
              <div class="col-sm-6 col-md-6">
                <div class="icon-box mb-60"> <a href="#" class="icon icon-circled icon-bordered icon-gray icon-border-effect mb-0 mr-10 pull-left flip"> <i class="flaticon-people text-theme-colored"></i> </a>
                  <div class="pt-13">
                    <h4 class="icon-box-title mt-0 mb-0 text-theme-colored">Amerucan Karate</h4>
                    <p>Lorem ipsum dolor sit.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="icon-box mb-60 p-0"> <a href="#" class="icon icon-circled icon-bordered icon-gray icon-border-effect mb-0 mr-10 pull-left flip"> <i class="flaticon-sport text-theme-colored"></i> </a>
                  <div class="pt-13">
                    <h4 class="icon-box-title mt-0 mb-0 text-theme-colored">Shuri Ryu</h4>
                    <p>Lorem ipsum dolor sit.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-30"> <a href="#" class="icon icon-circled icon-bordered icon-gray icon-border-effect mb-0 mr-10 pull-left flip"> <i class="flaticon-sports-7 text-theme-colored"></i> </a>
                  <div class="pt-13">
                    <h4 class="icon-box-title mt-0 mb-0 text-theme-colored">Combatives</h4>
                    <p>Lorem ipsum dolor sit.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-30"> <a href="#" class="icon icon-circled icon-bordered icon-gray icon-border-effect mb-0 mr-10 pull-left flip"> <i class="flaticon-sports-9 text-theme-colored"></i> </a>
                  <div class="pt-13">
                    <h4 class="icon-box-title mt-0 mb-0 text-theme-colored">Oom Ynug Doe</h4>
                    <p>Lorem ipsum dolor sit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6"> <img src="<?php bloginfo('template_url'); ?>/images/about/3.png" alt=""> </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Classes -->
  <section id="classes" class="bg-lighter">
    <div class="container pb-40">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="title">Our <span class="text-theme-colored">Classes</span></h2>
            <p class="">Join our Fighter League club and be healthy.</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/classes/1.jpg" alt="">
                <div class="viewtime"> <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a> </div>
              </div>
              <h3 class=""> <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a></h3>
              <div class="class-date"><i class="fa fa-clock-o"></i> <em>01:00pm - 03:00 pm</em></div>
              <div class="class-date mb-10"><i class="fa fa-map-marker"></i> <em> 121 King Street, Mumbai.</em></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/classes/2.jpg" alt="">
                <div class="viewtime"> <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a> </div>
              </div>
              <h3 class=""> <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a></h3>
              <div class="class-date"><i class="fa fa-clock-o"></i> <em>01:00pm - 03:00 pm</em></div>
              <div class="class-date mb-10"><i class="fa fa-map-marker"></i> <em> 121 King Street, Mumbai.</em></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/classes/3.jpg" alt="">
                <div class="viewtime"> <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a> </div>
              </div>
              <h3 class=""> <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a></h3>
              <div class="class-date"><i class="fa fa-clock-o"></i> <em>01:00pm - 03:00 pm</em></div>
              <div class="class-date mb-10"><i class="fa fa-map-marker"></i> <em> 121 King Street, Mumbai.</em></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/classes/4.jpg" alt="">
                <div class="viewtime"> <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a> </div>
              </div>
              <h3 class=""> <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a></h3>
              <div class="class-date"><i class="fa fa-clock-o"></i> <em>01:00pm - 03:00 pm</em></div>
              <div class="class-date mb-10"><i class="fa fa-map-marker"></i> <em> 121 King Street, Mumbai.</em></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/classes/5.jpg" alt="">
                <div class="viewtime"> <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a> </div>
              </div>
              <h3 class=""> <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a></h3>
              <div class="class-date"><i class="fa fa-clock-o"></i> <em>01:00pm - 03:00 pm</em></div>
              <div class="class-date mb-10"><i class="fa fa-map-marker"></i> <em> 121 King Street, Mumbai.</em></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/classes/1.jpg" alt="">
                <div class="viewtime"> <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View Time</a> </div>
              </div>
              <h3 class=""> <a href="#"><span class="text-theme-colored">Private </span> | Group Lessons</a></h3>
              <div class="class-date"><i class="fa fa-clock-o"></i> <em>01:00pm - 03:00 pm</em></div>
              <div class="class-date mb-10"><i class="fa fa-map-marker"></i> <em> 121 King Street, Mumbai.</em></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Divider: Funfact -->
  <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg14.jpg" data-parallax-ratio="0.7">
    <div class="container pt-80 pb-80">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center"> <i class="pe-7s-smile mt-5 text-white"></i>
            <h2 data-animation-duration="2000" data-value="754" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
            <h5 class="text-white text-uppercase font-weight-600">Happy Student</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center"> <i class="pe-7s-rocket mt-5 text-white"></i>
            <h2 data-animation-duration="2000" data-value="375" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
            <h5 class="text-white text-uppercase font-weight-600">Success Sports</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center"> <i class="pe-7s-add-user mt-5 text-white"></i>
            <h2 data-animation-duration="2000" data-value="58" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
            <h5 class="text-white text-uppercase font-weight-600">Our Trainers</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center"> <i class="pe-7s-medal mt-5 text-white"></i>
            <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
            <h5 class="text-white text-uppercase font-weight-600">Award Won</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: trainer -->
  <section id="trainer" class="bg-lighter">
    <div class="container pt-70 pb-40">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="title">Our <span class="text-theme-colored"> Trainers</span></h2>
            <p class="">Join our martial art club and be healthy.</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel-3col">
              <div class="item">
                <div class="trainer-item style2">
                  <div class="trainer-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/team/1.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info pb-20">
                    <div class="trainer-biography">
                      <h3 class="text-white">Sara Pandey</h3>
                      <h5 class="text-white">Master</h5>
                    </div>
                    <div class="social-network pt-10">
                      <ul class="list-inline">
                        <li class="rotate"><a href=""><i class="fa fa-facebook bg-theme-colored no-rotate"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="trainer-item style2">
                  <div class="trainer-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/team/2.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info pb-20">
                    <div class="trainer-biography">
                      <h3 class="text-white">Prakash Kumar</h3>
                      <h5 class="text-white">Master</h5>
                    </div>
                    <div class="social-network pt-10">
                      <ul class="list-inline">
                        <li class="rotate"><a href=""><i class="fa fa-facebook bg-theme-colored no-rotate"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="trainer-item style2">
                  <div class="trainer-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/team/3.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info pb-20">
                    <div class="trainer-biography">
                      <h3 class="text-white">Manoj Despandey</h3>
                      <h5 class="text-white">Master</h5>
                    </div>
                    <div class="social-network pt-10">
                      <ul class="list-inline">
                        <li class="rotate"><a href=""><i class="fa fa-facebook bg-theme-colored no-rotate"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="trainer-item style2">
                  <div class="trainer-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/team/4.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info pb-20">
                    <div class="trainer-biography">
                      <h3 class="text-white">Subhash sharma</h3>
                      <h5 class="text-white">Master</h5>
                    </div>
                    <div class="social-network pt-10">
                      <ul class="list-inline">
                        <li class="rotate"><a href=""><i class="fa fa-facebook bg-theme-colored no-rotate"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Gallery -->
  <section id="gallery">
    <div class="container-fluid mb-0">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="title">Our <span class="text-theme-colored">gallery</span></h2>
            <p class="">Join our martial art club and be healthy.</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-12"> 
            <!-- Portfolio Filter -->
            <div class="portfolio-filter text-center"> <a href="#" class="active" data-filter="*">All</a> <a href="#branding" class="" data-filter=".branding">Martial Arts</a> <a href="#design" class="" data-filter=".design">Niruddh</a> <a href="#photography" class="" data-filter=".photography">Kick Boxing</a> </div>
            <!-- End Portfolio Filter --> 
            
            <!-- Portfolio Gallery Grid -->
            <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery"> 
              <!-- Portfolio Item Start -->
              <div class="gallery-item design">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/1.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item branding photography">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/2.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/2.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item design">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/3.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item branding">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/4.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item design photography">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/5.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item photography">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/6.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item branding">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/7.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item photography">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/8.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/8.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item branding">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/9.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item design photography">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/10.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item photography">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/11.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
              
              <!-- Portfolio Item Start -->
              <div class="gallery-item branding">
                <div class="thumb"> <img class="img-fullwidth" src="<?php bloginfo('template_url'); ?>/images/gallery/12.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">Sample Title</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="images/gallery/7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End --> 
            </div>
            <!-- End Portfolio Gallery Grid --> 
            
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: Divider  -->
  <section class="divider layer-overlay overlay-dark-4" id="register" data-stellar-background-ratio="0.4" data-bg-img="<?php bloginfo('template_url'); ?>/images/bg/bg12.jpg" >
    <div class="container pt-0 pb-0">
      <div class="section-content">
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6 bg-theme-colored p-50"> 
            <!-- Appilication Form Start-->
            <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="includes/reservation.php">
              <h2 class="text-white text-uppercase"> REGISTER NOW</h2>
              <h4 class="text-white mb-20">Family classes Now Available</h4>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group mb-20">
                    <div class="styled-select">
                      <select id="person_select" name="person_select" class="form-control" required="">
                        <option value="">Choose Subject</option>
                        <option value="Subject-1">Subject-1</option>
                        <option value="Subject-2">Subject-2</option>
                        <option value="Subject-3">Subject-3</option>
                        <option value="Subject-4">Subject-4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group mb-10">
                    <input id="form_appontment_date" name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Appoinment Date" aria-required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <textarea placeholder="Enter Message" rows="3" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group mb-0 mt-10">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                    <button type="submit" class="btn btn-default" data-loading-text="Please wait...">Send Mail</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- Application Form End--> 
            
            <!-- Application Form Validation Start--> 
            <script type="text/javascript">
                $("#reservation_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script> 
            <!-- Application Form Validation Start --> 
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section: video -->
  
  <section id="classes" class="bg-lighter">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb">
                <iframe width="100%" height="100px" src="https://www.youtube.com/embed/9_0aVFwOb6k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <!-- <div class="viewtime">
                    <a class="btn btn-theme-colored btn-flat mt-10" href="classes-details.html"> View Time</a>
                  </div>--> 
              </div>
              <h3 class="text-uppercase font-22"> <a href="#"><span class="text-theme-colored">Karate </span> Classes</a></h3>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb">
                <iframe width="100%" height="100px" src="https://www.youtube.com/embed/T9rnXS5kC7o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <!-- <div class="viewtime">
                    <a class="btn btn-theme-colored btn-flat mt-10" href="classes-details.html"> View Time</a>
                  </div>--> 
              </div>
              <h3 class="text-uppercase font-22"> <a href="#"><span class="text-theme-colored">Kick </span>Boxing</a></h3>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="class-items bg-white border-1px p-20">
              <div class="thumb">
                <iframe width="100%" height="100px" src="https://www.youtube.com/embed/S9TZNPmEBnk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <!-- <div class="viewtime">
                    <a class="btn btn-theme-colored btn-flat mt-10" href="classes-details.html"> View Time</a>
                  </div>--> 
              </div>
              <h3 class="text-uppercase font-22"> <a href="#"><span class="text-theme-colored">Niruddh </span>Classes</a></h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 view-more">
            <h3 class="text-uppercase font-22"> <a href="#" >View More <span>Videos</span></a></h3>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </section>
</div>
<!-- end main-content
  <div class="gap-b"></div> -->

<?php get_footer();?>
