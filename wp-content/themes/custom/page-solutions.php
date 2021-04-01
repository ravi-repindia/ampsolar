<?php
/**
 * Template Name: Solutions Page Template
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */ 

get_header(); ?>

<section id="sp-page-title">
   <div class="row">
      <div id="sp-title" class="col-sm-12 col-md-12">
         <div class="sp-column "></div>
      </div>
   </div>
</section>
<section id="sp-main-body">
   <div class="row">
      <div id="sp-component" class="col-sm-12 col-md-12">
         <div class="sp-column ">
            <div id="system-message-container">
            </div>
            <div id="sp-page-builder" class="sp-page-builder  page-72">
               <div class="page-content">
			    <div class="sppb-section  sppb-section-content-center solution-bg" 
                              style="background:url(<?php the_post_thumbnail_url(); ?>)">
                              <div class="sppb-row-overlay"></div>
                           </div>
                  <section class="shop-for-energy">
                     <div class="container">
                        <div class="row">
                           <div class="sppb-container">
                              <div class="sppb-section-title sppb-text-center one-stop-destination">
                                 <!-- <h3 class="sppb-title-heading">One Stop Shop<br> for Energy</h3> -->
                                 <div class="sppb-addon sppb-addon-animated-heading sppb-text-center sppb-text-center">
                                    <?php get_template_part('addontitle'); ?>
                                 </div>
                                 <div class="text-para">
                                   <?php the_content(); ?>
                                 </div>
                              </div>
                              <div class="tabular-img">
                                 <img src="<?php echo get_field('second_image')['url']; ?>" alt="" class="img-fluid">
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
				     <section class="padd-80">
                              <div class="container">
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                       <h3 class="sppb-title-heading  color-red font-solution">Solutions for C&I Customers</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="experience-team">
                                          <div class="solution-sppp">
                                             <p><strong>Off-site Solutions (OPEX & CAPEX)</strong></p>
                                             <ul class="list-unstyled">
                                                <li>- 3rd party sale</li>
                                                <li>- Captive/ Group Captive Projects</li>
                                                <li>- Wind/BESS/Hybrid Projects</li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="icons-listing ">
                                          <ul class="list-unstyled">
                                             <li><img class="img-fluid" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/solar-price.svg">  
                                                <span>Solar Project bus bar to s/s of Transmission / Distribution Company</span>
                                             </li>
                                             <li><img class="img-fluid" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/Outline.svg">  
                                                <span>Transmission, Wheeling & Banking through Utility network</span>
                                             </li>
                                             <li><img class="img-fluid" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/surface1.svg">  
                                                <span>DISCOM to Customer as per existing arrangement</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="experience-team">
                                          <div class="solution-sppp">
                                             <p><strong>Off-site Solutions (OPEX & CAPEX)</strong></p>
                                             <ul class="list-unstyled">
                                                <li>- 3rd party sale</li>
                                                <li>- Captive/ Group Captive Projects</li>
                                                <li>- Wind/BESS/Hybrid Projects</li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="icons-listing">
                                          <ul class="list-unstyled two-listing">
                                             <li><img class="img-fluid" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/solar-price.svg">  
                                                <span>Solar Project bus bar to s/s of Transmission / Distribution Company</span>
                                             </li>
                                             <li><img class="img-fluid" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/surface1.svg">  
                                                <span>DISCOM to Customer as per existing arrangement</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                                <div class="bg-content">
                                <div class="container">
                                 <div class="row"style="background: url(https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/sololution-bg.png) no-repeat; background-size:cover;margin:0px";>
                                    <div class="d-flex value-preposition">
                                       <div class="col-sm-4 col-md-4">
                                          <div class="value-certified">
                                             <h2 class="title-value">Value <br> Proposition</h2>
                                          </div>
                                       </div>
                                       <div class="col-sm-8 col-md-8">
                                          <div class="content-fld">
                                             <ul class="list-unstyled">
                                                <li> Lower power cost </li>
                                                <li> Minimal to no investment</li>
                                                <li> Meet their sustainability targets</li>
                                                <li> Long term predictable pricing</li>
                                                <li> Efficient use of unused/ vacant space on roofs</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              </div>

                                <div class="container">
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                       <h3 class="sppb-title-heading  color-red font-solution">Solutions for C&amp;I Customers</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="experience-team">
                                          <div class="solution-sppp">
                                             <p><strong>Off-site Solutions (OPEX &amp; CAPEX)</strong></p>
                                             <ul class="list-unstyled">
                                                <li>- 3rd party sale</li>
                                                <li>- Captive/ Group Captive Projects</li>
                                                <li>- Wind/BESS/Hybrid Projects</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="icons-listing">
                                          <ul class="list-unstyled list-solutiontwo  two-listing">
                                             <li><img class="img-fluid" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/solar-price.svg">  </li>
                                             <li><img class="img-fluid" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/surface1.svg">  
                                                <span>Customer enjoys benefits of solar/ solar-wind power on CAPEX/ OPEX basis</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                                <div class="bg-content">
                                <div class="container">
                                 <div class="row"style="background: url(https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/solution-bg2.png) no-repeat; background-size:cover;margin:0px";>
                                    <div class="d-flex value-preposition">
                                       <div class="col-sm-4 col-md-4">
                                          <div class="value-certified">
                                             <h2 class="title-value">Value <br> Proposition</h2>
                                          </div>
                                       </div>
                                       <div class="col-sm-8 col-md-8">
                                          <div class="content-fld">
                                             <ul class="list-unstyled">
                                                <li> Lower power cost </li>
                                                <li> Minimal to no investment</li>
                                                <li> Meet their sustainability targets</li>
                                                <li> Long term predictable pricing</li>
                                                <li> Efficient use of unused/ vacant space on roofs</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              </div>

                           </section>
                  <div class="dffsdf">
                     <div class="mb-tab_gallery clearfix">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <ul class="clearfix">
                                    <li class="active-btn" id="showapprove"><a href="javascript:void(0);">C&I Customers</a></li>
                                    <li id="showatable" class=""><a href="javascript:void(0);">Utility Customers</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="solution-listing" id="show_table">
				    <?php $counter = 0;
						   $args = array(
								'post_type'   => 'post',
								'cat' => 14,
								'post_status' => 'publish',
								'posts_per_page' => -1,
								);
								 $wp_query = new WP_Query($args);
									
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
							/* echo "<pre>";
							print_r($books); */
                          // $featured_img_url = get_the_post_thumbnail_url($wp_query->ID, 'leadership-team-images');
			
						   ?>
                     <section class="padd-80 <?php if($counter%2==0){ ?>bg-greyteam<?php } ?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="listing-team">
                                    <ul class="list-unstyled">
                                       <li>
                                          <div class="row">
                                             <div class="col-md-4 col-sm-4">
                                                <div class="img-tm">
												<?php 
												// Load value.
												$iframe = get_field('video_link');

												// Use preg_match to find iframe src.
												preg_match('/src="(.+?)"/', $iframe, $matches);
												//var_dump( $matches);
												$src = $matches[1];

												// Add extra parameters to src and replcae HTML.
												$params = array(
													'controls'  => 0,
													'hd'        => 0,
													'autohide'  => 0
												);
												$new_src = add_query_arg($params, $src);
												$iframe = str_replace($src, $new_src, $iframe);

												// Add extra attributes to iframe HTML.
												$attributes = 'frameborder="0"';
												$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

												// Display customized HTML.
												echo $iframe; ?>
												</div>
                                             </div>
                                             <div class="col-md-8 col-sm-8">
                                                <div class="abt-tm">
                                                   <h3 class="title-red"><?php the_title(); ?></h3>
                                                   <?php the_content(); ?>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
								 <?php if(!empty(get_post_meta($post->ID, 'additional_content', true))){ ?>
								 <div id="logo-solution" class="owl-carousel owl-theme col-flex">
								  <?php
$counter = true;
$gallery = get_post_meta($post->ID, 'additional_content', true);



preg_match('/\[gallery.*ids=.(.*).\]/', $gallery, $ids);

$images_id = explode(",", $ids[1]);

if ($images_id[0] != "") {

    if (is_array($images_id) || is_object($images_id)) {

        foreach ($images_id as $image) {

            $image_url = wp_get_attachment_image_src($image, 'full');
			//print_r($image_url);exit;

            ?>
                                             <div class="item logorow <?php if($counter==true){ ?>active-logo<?php } ?>"><img src="<?php echo $image_url[0]; ?>" alt=""></div>
											 
                                           <?php /*  <div class="item logorow"><img src="images/client/hero.jpg" alt=""></div>
											 
											  <div class="item">
               
                  <a data-fancybox="gallerycompslider" href="<?php echo $image_url[0]; ?>">
                   <?php echo wp_get_attachment_image($image, '', 'true', array("class" => "img-responsive")); ?>
                  </a>
               
            </div> */ ?>
											 <?php $counter=false; }

    }

} ?>
                                             
								 </div><?php } ?>
                              </div>
                           </div>
                        </div>
                     </section>
					 <?php $counter++; 
						
						}
                    } wp_reset_query(); ?>
                    
                  </div>
                  <div class="solution-listing" id="hidden_table">
				   <?php //$counter = 0;
						   $args = array(
								'post_type'   => 'post',
								'cat' => 15,
								'post_status' => 'publish',
								'posts_per_page' => -1,
								);
								 $wp_query = new WP_Query($args);
									
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
							/* echo "<pre>";
							print_r($books); */
                          // $featured_img_url = get_the_post_thumbnail_url($wp_query->ID, 'leadership-team-images');
			
						   ?>
                     <section class="padd-80 <?php if($counter%2==0){ ?>bg-greyteam<?php } ?>">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="listing-team">
                                    <ul class="list-unstyled">
                                       <li>
                                          <div class="row">
                                             <div class="col-md-4 col-sm-4">
                                                <div class="img-tm">
												<?php 
												// Load value.
												$iframe = get_field('video_link');

												// Use preg_match to find iframe src.
												preg_match('/src="(.+?)"/', $iframe, $matches);
												//var_dump( $matches);
												$src = $matches[1];

												// Add extra parameters to src and replcae HTML.
												$params = array(
													'controls'  => 0,
													'hd'        => 0,
													'autohide'  => 0
												);
												$new_src = add_query_arg($params, $src);
												$iframe = str_replace($src, $new_src, $iframe);

												// Add extra attributes to iframe HTML.
												$attributes = 'frameborder="0"';
												$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

												// Display customized HTML.
												echo $iframe; ?>
												</div>
                                             </div>
                                             <div class="col-md-8 col-sm-8">
                                                <div class="abt-tm">
                                                   <h3 class="title-red"><?php the_title(); ?></h3>
                                                   <?php the_content(); ?>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
								  <?php if(!empty(get_post_meta($post->ID, 'additional_content', true))){ ?>
								 <div id="logo-solution" class="owl-carousel owl-theme col-flex">
								  <?php
$counter = true;
$gallery = get_post_meta($post->ID, 'additional_content', true);



preg_match('/\[gallery.*ids=.(.*).\]/', $gallery, $ids);

$images_id = explode(",", $ids[1]);

if ($images_id[0] != "") {

    if (is_array($images_id) || is_object($images_id)) {

        foreach ($images_id as $image) {

            $image_url = wp_get_attachment_image_src($image, 'full');
			//print_r($image_url);exit;

            ?>
                                             <div class="item logorow <?php if($counter==true){ ?>active-logo<?php } ?>"><img src="<?php echo $image_url[0]; ?>" alt=""></div>
											 
                                           <?php /*  <div class="item logorow"><img src="images/client/hero.jpg" alt=""></div>
											 
											  <div class="item">
               
                  <a data-fancybox="gallerycompslider" href="<?php echo $image_url[0]; ?>">
                   <?php echo wp_get_attachment_image($image, '', 'true', array("class" => "img-responsive")); ?>
                  </a>
               
            </div> */ ?>
											 <?php $counter=false; }

    }

} ?>
                                             
								 </div><?php } ?>
                              </div>
                           </div>
                        </div>
                     </section>
					  <?php $counter++; 
						
						}
                    } wp_reset_query(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<?php get_footer();?>
 <script type="text/javascript">
      $('#logo-solution').owlCarousel({
         // loop:( $('.item').length > 3 ),
         margin:20,
         autoplay:false,
         nav:true,
         dots:false,
           navText:['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
         autoplayTimeout:1000,
         autoplayHoverPause:true,
         responsive:{
            0:{
               items:1
            },
            600:{
               items:1
            },
            1000:{
               items:5
            }
         },
      
      
      });
      
   </script>
   <script type="text/javascript">
      $('#logo-solution3').owlCarousel({
         loop:( $('.item').length > 2 ),
            margin:20,
         autoplay:false,
         nav:true,
         dots:false,
           navText:['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
         autoplayTimeout:1000,
         autoplayHoverPause:true,
         responsive:{
            0:{
               items:1
            },
            600:{
               items:1
            },
            1000:{
               items:6
            }
         },
      
      
      });
      
   </script>