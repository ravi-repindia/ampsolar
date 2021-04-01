<?php
/**
 * Template Name: About Page Template
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
                                 <div id="section-id-1587912285303" class="sppb-section sppb-hidden-xs sppb-section-content-center"  data-sppb-parallax="on" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                    <div class="sppb-shape-container sppb-bottom-shape ">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 99" preserveAspectRatio="none">
                                          <path d="M526.35,17.11C607.41,28.38,687,48.17,768.06,59.5A1149.19,1149.19,0,0,0,1000,68.07V0H0V99C155.18,13.84,347.42-7.77,526.35,17.11Z" transform="translate(0 0.04)"/>
                                       </svg>
                                    </div>
                                    <div class="sppb-row-overlay"></div>
                                    <div class="sppb-container-inner">
                                       <div class="sppb-row sppb-align-center">
                                          <div class="sppb-col-md-12" id="column-wrap-id-1587912285374">
                                             <div id="column-id-1587912285374" class="sppb-column" >
                                                <div class="sppb-column-addons">
                                                   <div id="sppb-addon-wrapper-1587912285375" class="sppb-addon-wrapper">
                                                      <div id="sppb-addon-1587912285375" class="clearfix "     >
                                                         <div class="sppb-addon sppb-addon-animated-heading sppb-text-center">
                                                             <?php get_template_part('addontitle'); ?>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="section-id-1575711321745" class="sppb-section sppb-hidden-md sppb-hidden-lg sppb-hidden-sm sppb-section-content-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                    <div class="sppb-shape-container sppb-bottom-shape ">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 99" preserveAspectRatio="none">
                                          <path d="M526.35,17.11C607.41,28.38,687,48.17,768.06,59.5A1149.19,1149.19,0,0,0,1000,68.07V0H0V99C155.18,13.84,347.42-7.77,526.35,17.11Z" transform="translate(0 0.04)"/>
                                       </svg>
                                    </div>
                                    <div class="sppb-row-overlay"></div>
                                    <div class="sppb-container-inner">
                                       <div class="sppb-row sppb-align-center">
                                          <div class="sppb-col-md-12" id="column-wrap-id-1575711321746">
                                             <div id="column-id-1575711321746" class="sppb-column" >
                                                <div class="sppb-column-addons">
                                                   <div id="sppb-addon-wrapper-1575711321747" class="sppb-addon-wrapper">
                                                      <div id="sppb-addon-1575711321747" class="clearfix "     >
                                                         <div class="sppb-addon sppb-addon-animated-heading sppb-text-center">
                                                            <?php get_template_part('addontitle'); ?>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <section class="padd-80">
                                    <div class="container">
                                       <div class="row">
                                          <div class="sppb-section-title sppb-text-center one-stop-destination">
                                            <?php the_content(); ?>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <section class="feature-product black-bg  marg-top">
                                    <div class="container">
                                       <div class="row  white-txt  text-center">
                                          <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-duration="1000ms">
                                             <div class="row">
                                                <div class="sppb-section-title sppb-text-center one-stop-destination">
                                                   <h3 class="sppb-title-heading">The Amp Edge</h3>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
									    <div class="mt-5 about-listing">
									   
								 		  <?php //$counter = 0;
						   $args = array(
				'post_type'   => 'about_features',
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
                                      
                                          <div class="row no-gutters about-row">
                                             <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="rght-content">
                                                   <div class="wow fadeInUp" data-wow-duration="1000ms">
                                                      <h4 class="sub-blog_title"><?php the_title(); ?></h4>
                                                      <div class="proj-sec">
                                                        <?php the_content(); ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-sm-6 col-md-6 col-lg-6">
                                                <figure class="img-caption wow fadeInUp" data-wow-duration="500ms">
                                                   <a href="javascript:void(0);" class="fancylight popup-btn">
                                                   <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                   </a>
                                                </figure>
                                             </div>
                                          </div>
										  
										  
                                       
									                                                   <?php //$counter++; 
						
						}
                    } wp_reset_query(); ?>
                                    </div></div>
                                 </section>
                                 <section id="section-id-1588153766550" class="sppb-section sppb-hidden-sm sppb-hidden-xs sppb-section-content-center"  style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/white-grid-v2.jpg);" >
                                    <div class="sppb-shape-container sppb-top-shape  sppb-shape-flip">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 99" preserveAspectRatio="none">
                                          <path d="M526.35,17.11C607.41,28.38,687,48.17,768.06,59.5A1149.19,1149.19,0,0,0,1000,68.07V0H0V99C155.18,13.84,347.42-7.77,526.35,17.11Z" transform="translate(0 0.04)"/>
                                       </svg>
                                    </div>
                                    <div class="sppb-shape-container sppb-bottom-shape ">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 99" preserveAspectRatio="none">
                                          <path d="M526.35,17.11C607.41,28.38,687,48.17,768.06,59.5A1149.19,1149.19,0,0,0,1000,68.07V0H0V99C155.18,13.84,347.42-7.77,526.35,17.11Z" transform="translate(0 0.04)"/>
                                       </svg>
                                    </div>
                                    <div class="sppb-row-overlay"></div>
                                    <div class="sppb-row-container">
                                       <div class="sppb-row sppb-align-center">
                                          <div class="sppb-col-md-12" id="column-wrap-id-1588153766605">
                                             <div class="overlay-description">
                                                <?php echo get_field('additional_content'); ?> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <!--Find Out More-->
                                 <section id="section-id-1609939398910" class="sppb-section floox-home-cta mrg-top100" >
                                    <div class="sppb-shape-container sppb-top-shape ">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                          <path d="M0 0h1000v100L0 0z"/>
                                       </svg>
                                    </div>
                                    <div class="sppb-row-overlay"></div>
                                    <div class="sppb-row-container">
                                       <div class="sppb-section-title sppb-text-left">
                                          <h3 class="sppb-title-heading">Find out more</h3>
                                       </div>
                                       <div class="sppb-row">
                                          <div class="sppb-col-md-6" id="column-wrap-id-1609939398917">
                                             <div id="column-id-1609939398917" class="sppb-column" >
                                                <div class="sppb-column-addons">
                                                   <div id="sppb-addon-wrapper-1609939398918" class="sppb-addon-wrapper">
                                                      <div id="sppb-addon-1609939398918" class="clearfix "     >
                                                         <div class="sppb-addon sppb-addon-overlay-image  image-effect-slide-left ">
                                                            <div class="sppb-addon-overlay-image-content title-subtitle-center-center">
                                                               <div class="overlay-image-title">
                                                                  <h4 class="sppb-addon-title"><a href="<?php the_field('link_1'); ?>"target="_blank"><?php echo get_field('find_out_more_1'); ?></a></h4>
                                                                  <div class="overlay-image-button-wrap"><a rel="noopener noreferrer" target="_blank" href="<?php the_field('link_1'); ?>" id="btn-1609939398918" class="sppb-btn  sppb-btn-custom sppb-btn-rounded"> Read More</a></div>
                                                               </div>
                                                               <div class="overlay-background-image-wrapper">
                                                                  <div class="overlay-background-image" style="background-image:url(<?php echo get_field('background_image_1')['url']; ?>)"></div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="sppb-col-md-6" id="column-wrap-id-1609939398919">
                                             <div id="column-id-1609939398919" class="sppb-column" >
                                                <div class="sppb-column-addons">
                                                   <div id="sppb-addon-wrapper-1609939398920" class="sppb-addon-wrapper">
                                                      <div id="sppb-addon-1609939398920" class="clearfix "     >
                                                         <div class="sppb-addon sppb-addon-overlay-image  image-effect-slide-left ">
                                                            <div class="sppb-addon-overlay-image-content title-subtitle-center-center">
                                                               <div class="overlay-image-title">
                                                                  <h4 class="sppb-addon-title"><a href="<?php the_field('link_2'); ?>"><?php echo get_field('find_out_more_2'); ?></a></h4>
                                                                  <div class="overlay-image-button-wrap"><a href="<?php the_field('link_2'); ?>" id="btn-1609939398920" class="sppb-btn  sppb-btn-custom sppb-btn-rounded">Read More</a></div>
                                                               </div>
                                                               <div class="overlay-background-image-wrapper">
                                                                  <div class="overlay-background-image" style="background-image:url(<?php echo get_field('background_image_2')['url']; ?>)"></div>
                                                               </div>
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
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>

<?php get_footer();