<?php
/**
 * Template Name: Core Values Page Template
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
                     <div id="sp-page-builder" class="sp-page-builder  page-89">
                        <div class="page-content">
                           <div id="section-id-1574084571881" class="sppb-section sppb-section-content-center" >
                              <div class="sppb-shape-container sppb-bottom-shape ">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                    <path d="M0 0h1000v100L0 0z"/>
                                 </svg>
                              </div>
                              <div class="sppb-row-overlay"></div>
                              <div class="sppb-container-inner">
                                 <div class="sppb-row sppb-align-center">
                                    <div class="sppb-col-md-12" id="column-wrap-id-1574084571899">
                                       <div id="column-id-1574084571899" class="sppb-column" >
                                          <div class="sppb-column-addons">
                                             <div id="sppb-addon-wrapper-1574084571900" class="sppb-addon-wrapper">
                                                <div id="sppb-addon-1574084571900" class="clearfix "     >
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
                           <section id="section-id-1574093560833" class="sppb-section" >
                              <div class="sppb-row-container">
                                 <div class="sppb-row">
								 
								 		  <?php //$counter = 0;
						   $args = array(
				'post_type'   => 'core_values',
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
                                    <div class="sppb-col-md-4" id="column-wrap-id-1574093560827">
                                       <div id="column-id-1574093560827" class="sppb-column" >
                                          <div class="sppb-column-addons">
                                             <div id="sppb-addon-wrapper-1574093560836" class="sppb-addon-wrapper">
                                                <div id="sppb-addon-1574093560836" class="clearfix "     >
                                                   <div class="sppb-addon sppb-addon-sppb-flibox  rotate_style flip_right flipon-hover sppb-text-center">
                                                      <div class="sppb-flipbox-panel">
                                                         <div class="sppb-flipbox-front flip-box">
                                                            <div class="flip-box-inner">
                                                               <h3><?php the_title(); ?></h3>
                                                               <?php the_content(); ?>
                                                            </div>
                                                         </div>
                                                         <div class="sppb-flipbox-back flip-box">
                                                            <div class="flip-box-inner">
                                                               <h3><?php the_title(); ?></h3>
                                                               <?php the_content(); ?>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                                                      <?php //$counter++; 
						
						}
                    }?>
                                                   

                                    <div class="sppb-col-md-4" id="column-wrap-id-1574097124650">
                                       <div id="column-id-1574097124650" class="sppb-column" >
                                          <div class="sppb-column-addons">
                                             <div id="sppb-addon-wrapper-1574097124653" class="sppb-addon-wrapper">
                                                <div id="sppb-addon-1574097124653" class="clearfix "     >
                                                   <div class="sppb-addon sppb-addon-sppb-flibox  rotate_style flip_right flipon-hover sppb-text-center">
                                                      <div class="sppb-flipbox-panel">
                                                         <div class="sppb-flipbox-front flip-box" style="background-image: url(https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/values-amp.jpg);">
                                                            <div class="flip-box-inner"></div>
                                                         </div>
                                                         <div class="sppb-flipbox-back flip-box">
                                                            <div class="flip-box-inner">
                                                               <h3>Powering change</h3>
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
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

<?php get_footer();