<?php
/**
 * Template Name: Leadership Page Template
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
                           <?php get_template_part('banner'); ?>
                           <section class="padd-80">
                              <div class="container">
                                 <div class="row">
                                    <div class="sppb-section-title sppb-text-center one-stop-destination">
                                      <?php the_content(); ?>
                                    </div>
                                 </div>
                              </div>
                           </section>
						    <section>
                              <div class="container-fluid">
                                 <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                       <div class="experience-team">
                                          <h3 class="sppb-title-heading sppb-text-center color-red">Industry Leading Team</h3>
                                          <div class="team-sppp">
                                             <p><strong>Instrumental in building leading renewable IPPs with GWs of operating projects</strong></p>
                                          </div>
                                          <div class="team-sppp">
                                             <p>Key members in the management team with experience across the entire project life cycle</p>
                                             <p>including</p>
                                             <ul class="list-unstyled">
                                                <li>BD,</li>
                                                <li>Land,</li>
                                                <li>Transmission/Evacuation,</li>
                                                <li>Procurement,</li>
                                                <li>Engineering,</li>
                                                <li>Financing,</li>
                                                <li>Project</li>
                                                <li>and Asset Management;</li>
                                             </ul>
                                          </div>
                                                   <div class="team-sppp">
                                          <p><strong>Team developed in-line with Amp’s Business Strategy</strong></p>
                                          <ul class="list-unstyled">
                                             <li>- Delivered first open access project in India</li>
                                             <li> - Built a leading rooftop & C&I business</li>
                                             <li> - Led some of the largest asset acquisitions</li>
                                             <li> - High success in Bidding at the highest closing tariffs/</li>
                                          </ul>
                                       </div>
                                       </div>
                              
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                       <div class="experience-team">
                                          <h3 class="sppb-title-heading sppb-text-center color-red">Team Experience Across <br class="d-none d-lg-block d-xl-block">all Key Functions</h3>
                                          <div class="team-sppp key-functionp">
                                             <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                   <div class="sppb-text-center key-title">
                                                      <p>Business<br>  Development</p>
                                                   </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                   <div class="listingteam">
                                                      <ul class="list-unstyled">
                                                         <li><strong>Off-Site C&I (Open Access):</strong></li>
                                                         <li>1GW+ pan India</li>
                                                         <li><strong>On-Site C&I (Distributed Generation):</strong></li>
                                                         <li> 250MW+ pan India</li>
                                                         <li><strong> Utility:</strong></li>
                                                         <li>5GW+ of wind and solar</li>
                                                         <li><strong>Investments:</strong></li>
                                                         <li> 2GW+ opportunities processed</li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="team-sppp key-functionp">
                                             <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                   <div class="sppb-text-center key-title">
                                                      <p>Operations</p>
                                                   </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                   <div class="listingteam">
                                                      <ul class="list-unstyled">
                                                         <li><strong>Delivered MW: >10 GW </strong></li>
                                                         <li><strong>Delivered Land: >5 GW</strong> </li>
                                                         <li>-Expertise across the entire project life cycle including: Land, Transmission / Evacuation, Procurement, Engineering, Project</li>
                                                         <li>Management and Asset Management -Technological Expertise in Solar, Wind, Storage and Energy Trading.</li>
                                                      </ul>
                                                   </div>
                                                </div> 
                                             </div>
                                          </div>
                                          <div class="team-sppp key-functionp">
                                             <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                   <div class="sppb-text-center key-title">
                                                      <p>Finance</p>
                                                   </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                   <div class="listingteam">
                                                      <ul class="list-unstyled">
                                                         <li><strong>Raised financing for 6.5 GW of power assets </strong></li>
                                                         <li>-Raised US$1Bn+ of Debt Capital</li>
                                                         <li>-Raised US$500Mn+ of Equity Capital</li>
                                                         <li>-Key expertise include: Project Finance, Corporate Funding (working capital, construction and BG lines), Refinancing, Acquisition Financing.</li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                  <div class="col-md-12">
                                  <div class="txt-leader">
                                  <div class="sppb-text-center">
                                 <h3 class="sppb-title-heading">Our Leadership Team</h3> 
                                  </div>
                                  </div>
                                  </div>

                                 </div>
                              </div>
                           </section>
						   <?php $counter = 0;
						   $args = array(
						'post_type'   => 'leadership_team',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						);
						 $wp_query = new WP_Query($args);
							
							 
							
							if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
							/* echo "<pre>";
							print_r($books); */
                            $featured_img_url = get_the_post_thumbnail_url($wp_query->ID, 'leadership-team-images');
			
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
                                                      <div class="img-tm"><img class="sppb-img-responsive" src="<?php echo $featured_img_url; ?>" alt="Image" title=""></div>
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
                                    </div>
                                 </div>
                              </div>
                           </section>
						   <?php $counter++; 
						
						}
                    }?>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
<?php get_footer();