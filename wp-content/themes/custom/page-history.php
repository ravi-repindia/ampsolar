<?php
/**
 * Template Name: History Page Template
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
                        <div id="sp-page-builder" class="sp-page-builder  page-127">
                           <div class="page-content">
                              <section id="section-id-1587634256878" class="sppb-section" >
                                 <div class="sppb-row-container">
                                    <div class="sppb-row">
                                       <div class="sppb-col-md-12" id="column-wrap-id-1587634256876">
                                          <div id="column-id-1587634256876" class="sppb-column" >
                                             <div class="sppb-column-addons"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <section id="section-id-1574078487823" class="sppb-section" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                 <div class="sppb-shape-container sppb-top-shape  sppb-shape-flip">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 99" preserveAspectRatio="none">
                                       <path d="M526.35,17.11C607.41,28.38,687,48.17,768.06,59.5A1149.19,1149.19,0,0,0,1000,68.07V0H0V99C155.18,13.84,347.42-7.77,526.35,17.11Z" transform="translate(0 0.04)"/>
                                    </svg>
                                 </div>
                           <!--       <div class="sppb-shape-container sppb-bottom-shape ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                       <path d="M0 0h1000v100L0 0z"/>
                                    </svg>
                                 </div> -->
                                 <div class="sppb-row-overlay"></div>
                                 <div class="sppb-row-container">
                                    <div class="sppb-section-title sppb-text-center">
                                      <?php the_content(); ?>
                                    </div>
                                    <div class="sppb-row">
                                       <div class="sppb-col-md-12" id="column-wrap-id-1574078487822">
                                          <div id="column-id-1574078487822" class="sppb-column" >
                                             <div class="sppb-column-addons">
                                                <div id="sppb-addon-wrapper-1574079400215" class="sppb-addon-wrapper">
                                                   <div id="sppb-addon-1574079400215" class="clearfix "     >
                                                      <div class="sppb-addon sppb-addon-timeline ">
                                                         <div class="sppb-addon-timeline-text-wrap"></div>
                                                         <div class="sppb-addon-timeline-wrapper">
														 
														  <?php $counter = 0;
						   $args = array(
				'post_type'   => 'history_timeline',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'orderby' => 'name',
								'order'   => 'ASC',
				);
				 $wp_query = new WP_Query($args);
					
					 
					
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
							/* echo "<pre>";
							print_r($books); */
                           // $featured_img_url = get_the_post_thumbnail_url($wp_query->ID, 'leadership-team-images');
			
						   ?>
                                                            <div class="sppb-row timeline-movement <?php if($counter%2==0){ ?>even<?php }else{ ?>odd<?php } ?>">
                                                               <div class="timeline-badge"></div>
                                                               <div class="sppb-col-xs-12 sppb-col-sm-6 timeline-item <?php if($counter%2==0){ ?>mobile-block<?php } ?>">
                                                                  <p class="timeline-date <?php if($counter%2==0){ ?> text-left<?php }else{ ?>text-right<?php } ?>"><?php the_title(); ?></p>
                                                               </div>
                                                               <div class="sppb-col-xs-12 sppb-col-sm-6 timeline-item">
                                                                  <div class="timeline-panel <?php if($counter%2==0){ ?>left-part<?php } ?>">
                                                                     <div class="details"><?php the_content(); ?></div>
                                                                  </div>
                                                               </div>
															   <?php if($counter%2==0){ ?>
                                                               <div class="sppb-col-xs-12 sppb-col-sm-6 timeline-item">
                                                                  <p class="timeline-date text-left"><?php the_title(); ?></p>
                                                               </div>
															   <?php } ?>
                                                            </div>
                                                            
                                                            
                                                           <?php $counter++; 
						
						}
                    }?>
                                                   
                                              
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