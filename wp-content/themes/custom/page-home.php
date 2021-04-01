<?php
/**
 * Template Name: Home Page Template
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

			   <!--Till PRI-->
			   <section id="sp-main-body">
				  <div class="row">
					 <div id="sp-component" class="col-sm-12 col-md-12">
						<div class="sp-column ">
						   <div id="system-message-container">
						   </div>
						   <div id="sp-page-builder" class="sp-page-builder  page-1">
							  <div class="page-content">

								<!--Hero banner content-->

								<div id="section-id-1609940025069" class="sppb-section" >
   <div class="sppb-container-inner">
      <div class="sppb-row">
         <div class="sppb-col-md-12" id="column-wrap-id-1609940025073">
            <div id="column-id-1609940025073" class="sppb-column" >
               <div class="sppb-column-addons">
                  <div id="sppb-addon-wrapper-1609940025074" class="sppb-addon-wrapper">
                     <div id="sppb-addon-1609940025074" class="clearfix "     >
                        <div id="sppb-sp-slider-1609940025074" class="sppb-addon-sp-slider sp-slider  dot-controller-line dot-controller-position-bottom_center  " data-height="full" data-height-sm="full" data-height-xs="full" data-slider-animation="clip"   data-autoplay="true" data-interval="5000" data-timer="false" data-speed="1000" data-dot-control="true" data-arrow-control="false" data-indecator="true" data-arrow-content="icon_only" data-slide-count="false" data-dot-style="line" data-pause-hover="false">
														  <?php //$counter = 0;
						   $args = array(
				'post_type'   => 'home_slider',
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
                                       

															<div id="sp-slider-item-1609940025074-num-0-key" class="sp-item slider-content-vercally-center">
															   <div class="sppb-container">
																  <div class="sppb-row">
																	 <div class="sppb-col-sm-12">
																		<div class="sp-slider-content-align-center">
																		   <h1 id="sp-slider-inner-item-1609940025075-num-0-key" class="sppb-sp-slider-title"  data-layer="true" data-animation='{"type":"slide","direction":"right","from":"100%", "to":"0%","duration":"800","after":"600", "timing_function":"ease"}'><?php the_title(); ?></h1>
																		   		<?php $thecontent = get_the_content(); if(!empty($thecontent)){ ?>							   
																				<div class="sppb-sp-slider-text pan-india"  data-layer="true" data-animation='{"type":"slide","direction":"right","from":"100%", "to":"0%","duration":"800","after":"600", "timing_function":"ease"}'><br /><?php echo $thecontent; ?></div><?php } ?>
																		</div>
																	 </div>
																  </div>
															   </div>
															   
															  
															   <div class="sp-background" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
															  
															</div>
															
									                                                   <?php //$counter++; 
						 
						}
                    } wp_reset_query(); ?>
															
															
															
															
															
															
														 </div>
													  </div>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
									</div>
								 </div>

								 <!-- 2nd section Amp is a global renewable energy infrastructure manager -->
								  
								 <section id="section-id-1587905064343" class="sppb-section sppb-section-content-center" >
									<div class="sppb-row-container">
									   <div class="sppb-row sppb-align-center">
										  <div class="sppb-col-md-6 sppp-column-vertical-align" id="column-wrap-id-1587905064383">
											 <div id="column-id-1587905064383" class="sppb-column sppb-align-items-center" >
												<div class="sppb-column-addons">
												   
                                                  	   <div id="sppb-addon-1594803900630" class="clearfix sppb-positioned-addon">
													  <div id="sppb-addon-1594803900630" class="clearfix sppb-positioned-addon"  data-zindex="1" data-col-zindex="1" data-rowid="1587905064343" data-colid="1587905064383" style="will-change: transform; transition-timing-function: ease; transition-duration: 0.1s; transform-origin: center center; transform-style: preserve-3d; filter: blur(0px); opacity: 0.639618; transform:perspective(1000px) translate3d(-170.5963px, -40.892px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);">
														 <div class="sppb-addon sppb-addon-raw-html position-energy">
															<div class="sppb-addon-content">
															   <p><a href="index.html"><img  src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/amp-infinity.svg" alt="amp infinity" width="400"  /></a></p>
															</div>
														 </div>
													  </div>
												   </div>

												   <div id="sppb-addon-wrapper-1594804483053" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1594804483053" class="sppb-wow bounceInLeft clearfix sppb-positioned-addon"  data-sppb-wow-duration="1000ms"  data-zindex="242" data-col-zindex="321" data-rowid="1587905064343" data-colid="1587905064383">
														 <div class="sppb-addon sppb-addon-header">
															<h3 class="sppb-addon-title"><?php echo get_field('title'); ?></h3>
														 </div>
														 		 <div class="home-page-video">
									<div class="container-fluid">
										<div class="row">
											<iframe width="100%" height="300" src="https://www.youtube.com/embed/x9iSqBcgNyo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								 </div>
													  </div>
												   </div>
											
												   
												   
												   
												   
												   
												   
												</div>
											 </div>
										  </div>
										  <div class="sppb-col-md-6" id="column-wrap-id-1587905064386">
											 <div id="column-id-1587905064386" class="sppb-column" >
												<div class="sppb-column-addons">
												   <div id="section-id-1587905064387" class="sppb-section" >
													  <div class="sppb-row-overlay"></div>
													  <div class="sppb-container-inner">

														 <!--AMP specification starts-->
														<div class="sppb-row">
															<div class="sppb-col-md-6 sppb-col-xs-6" id="column-wrap-id-1587905064388">
															   <div id="column-id-1587905064388" class="sppb-column " >
																  <div class="sppb-column-addons">
																	 <div id="sppb-addon-wrapper-1587905064389" class="sppb-addon-wrapper">
																		<div id="sppb-addon-1587905064389" class="clearfix "     >
																		   <div class="sppb-addon sppb-addon-animated-number sppb-text-center  ">
																			  <div class="sppb-addon-content">
																				 <div class="sppb-animated-number title-feature" data-digit="1+" data-duration="1000">0</div>
																				 <div class="sppb-animated-number-title">Portfolio</div><br><br>
																			  </div>
																		   </div>
																		</div>
																	 </div>
																	 <div id="sppb-addon-wrapper-1587905064390" class="sppb-addon-wrapper">
																		<div id="sppb-addon-1587905064390" class="clearfix "     >
																		   <div class="sppb-addon sppb-addon-animated-number sppb-text-center  ">
																			  <div class="sppb-addon-content">
																				 <div class="sppb-animated-number title-feature" data-digit="2 GW" data-duration="1400">0</div>
																				 <div class="sppb-animated-number-title">Late-stage<br> pipeline</div>
																			  </div>
																		   </div>
																		</div>
																	 </div>
																  </div>
															   </div>
															</div>
															<div class="sppb-col-md-6 sppb-col-xs-6" id="column-wrap-id-1587905064391">
															   <div id="column-id-1587905064391" class="sppb-column " >
																  <div class="sppb-column-addons">
																	 <div id="sppb-addon-wrapper-1587905064392" class="sppb-addon-wrapper">
																		<div id="sppb-addon-1587905064392" class="clearfix "     >
																		   <div class="sppb-addon sppb-addon-animated-number sppb-text-center  ">
																			  <div class="sppb-addon-content">
																				 <div class="sppb-animated-number title-feature" data-digit="45+" data-duration="400">0</div>
																				 <div class="sppb-animated-number-title">Customers across<br> 8 sectors</div>
																			  </div>
																		   </div>
																		</div>
																	 </div>
																	 <div id="sppb-addon-wrapper-1587905064393" class="sppb-addon-wrapper">
																		<div id="sppb-addon-1587905064393" class="clearfix "     >
																		   <div class="sppb-addon sppb-addon-animated-number sppb-text-center  ">
																			  <div class="sppb-addon-content">
																				 <div class="sppb-animated-number title-feature" data-digit="15 States" data-duration="1000">0</div>
																				 <div class="sppb-animated-number-title">Pan India<br> Presence</div>
																			  </div>
																		   </div>
																		</div>
																	 </div>
																  </div>
															   </div>
															</div>
														 </div>
														<!--AMP specification ends-->

													  </div>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
									</div>
								</section>
								

								 <!--Section 2nd ends-->

								 <!--Section 3rd starts-->

								 <div id="section-id-1587903589789" class="sppb-section sppb-hidden-xs" style="background-image: url(https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/background.svg);">
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
									<div class="sppb-container-inner">
									   <div class="sppb-container">
										  <div class="sppb-section-title sppb-text-center">
											 <h2 class="sppb-title-heading">Founded in 2016, India’s First Balanced and Complete<br class="hidden-xs" />
												<span class="floox-title"> <strong>Renewable Energy solution provider for C&I and Utility customers.</strong></span> 
											 </h2>
										  </div>
									   </div>
									   <div class="sppb-row">
										<div class="sppb-col-md-3 sppb-col-sm-3 amp-feature-india" id="column-wrap-id-1587903589843">
											<div id="column-id-1587903589843" class="sppb-column " >
											   <div class="sppb-column-addons">
												  <div id="sppb-addon-wrapper-1587903589844" class="sppb-addon-wrapper">
													 <div id="sppb-addon-1587903589844" class="clearfix "     >
														<div class="sppb-addon sppb-addon-raw-html  centersvg">
														   <div class="sppb-addon-content"><img src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/earth-globe-design.png" alt=""/></div>
														</div>
													 </div>
												  </div>
												  <div id="sppb-addon-wrapper-1587903589845" class="sppb-addon-wrapper">
													 <div id="sppb-addon-1587903589845" class="clearfix "     >
														<div class="sppb-addon sppb-addon-feature sppb-text-center ">
														   <div class="sppb-addon-content">
															  <h3 class="sppb-addon-title sppb-feature-box-title">Pan India Footprint</h3>
															  <div class="sppb-addon-text">
																Ability to deliver<br> solutions Pan India
															  </div>
														   </div>
														</div>
													 </div>
												  </div>
											   </div>
											</div>
										 </div>
										  <div class="sppb-col-md-3 sppb-col-sm-3 amp-feature-india" id="column-wrap-id-1587903589843">
											 <div id="column-id-1587903589843" class="sppb-column " >
												<div class="sppb-column-addons">
												   <div id="sppb-addon-wrapper-1587903589844" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1587903589844" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-raw-html  centersvg">
															<div class="sppb-addon-content"><img src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/target-dart.png" alt=""/></div>
														 </div>
													  </div>
												   </div>
												   <div id="sppb-addon-wrapper-1587903589845" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1587903589845" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-feature sppb-text-center ">
															<div class="sppb-addon-content">
															   <h3 class="sppb-addon-title sppb-feature-box-title">Programmatic Strategy</h3>
															   <div class="sppb-addon-text">
																	Ability to deliver solutions<br> both onsite as well as offsite
															   </div>
															</div>
														 </div>
													  </div>
												   </div>
												</div>
											 </div>
										  </div>
										  <div class="sppb-col-md-3 sppb-col-sm-3 amp-feature-india" id="column-wrap-id-1587903589846">
											 <div id="column-id-1587903589846" class="sppb-column " >
												<div class="sppb-column-addons">
												   <div id="sppb-addon-wrapper-1587903589847" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1587903589847" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-raw-html  centersvg">
															<div class="sppb-addon-content"><img src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/assets-v2.svg" alt=""/></div>
														 </div>
													  </div>
												   </div>
												   <div id="sppb-addon-wrapper-1587903589848" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1587903589848" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-feature sppb-text-center ">
															<div class="sppb-addon-content">
															   <h3 class="sppb-addon-title sppb-feature-box-title">Multi Technology</h3>
															   <div class="sppb-addon-text">
																  <p>Ability to deliver solutions<br> across technologies (Solar/<br> Wind/ Storage/ Hybrid)</p>
															   </div>
															</div>
														 </div>
													  </div>
												   </div>
												</div>
											 </div>
										  </div>


										  <div class="sppb-col-md-3 sppb-col-sm-3 amp-feature-india" id="column-wrap-id-1587903589846">
											<div id="column-id-1587903589846" class="sppb-column " >
											   <div class="sppb-column-addons">
												  <div id="sppb-addon-wrapper-1587903589847" class="sppb-addon-wrapper">
													 <div id="sppb-addon-1587903589847" class="clearfix "     >
														<div class="sppb-addon sppb-addon-raw-html  centersvg">
														   <div class="sppb-addon-content"><img src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/triple-play-icon.png" alt=""/></div>
														</div>
													 </div>
												  </div>
												  <div id="sppb-addon-wrapper-1587903589848" class="sppb-addon-wrapper">
													 <div id="sppb-addon-1587903589848" class="clearfix "     >
														<div class="sppb-addon sppb-addon-feature sppb-text-center ">
														   <div class="sppb-addon-content">
															  <h3 class="sppb-addon-title sppb-feature-box-title">Triple Play</h3>
															  <div class="sppb-addon-text">
																 <p>Ability to deliver solutions to<br> both C&I (Open Access &<br> DG) and Utility customers</p>
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
								 
								 <section class="why-amp">
									<div class="container-fluid why-amp-globe-animate">
										<div class="row why-amp-title">
											<h2 class="why-amp-title"><strong>Why Amp?</strong></h2>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="why-amp-description">
												<!-- <div class="overlay"></div> -->
													  <?php echo get_field('why_us_content'); ?>
												</div>
											</div>
									<!-- 		<div class="col-md-6">
												<div class="why-amp-img">
													<img src="images/homepage-slides/about.jpg" alt="" class="img-fluid">
												</div>
											</div> -->
										</div>
									</div>
								 </section>
								 

								 <!-- Map -->

								 <div id="section-id-1573720646865" class="sppb-section" >
									<div class="sppb-container-inner">
									   <div class="sppb-container">
										  <div class="sppb-section-title sppb-text-center">
											 <h3 class="sppb-title-heading">Firmly Established with Pan India Presence<br> and Customer Base</h3>
										  </div>
									   </div>
									   <div class="sppb-row">
										  <div class="sppb-col-md-12" id="column-wrap-id-1573720646864">
											 <div id="column-id-1573720646864" class="sppb-column" >
												<div class="sppb-column-addons">
												   <div id="sppb-addon-wrapper-1573720646868" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1573720646868" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-module ">
															<div class="sppb-addon-content">
															   <div class="jai-map-wrap" id="ja-imagesmap135">
																  <div class="jai-map-container hover-popup">
																	 <div class="jai-map-container-scale">
																		<img id="ja-hotspot-image-135" src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/india.svg" alt="india map"/>
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
									</div>
								 </div>

								 <!--Map ends-->
								 
								<!--Video-->
								 
								<!-- <section class="home-page-video">
									<div class="container-fluid">
										<div class="row">
											<iframe width="100%" height="700" src="https://www.youtube.com/embed/x9iSqBcgNyo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								 </section>
								 -->
								 
						<?php $args = array(
								'taxonomy' => 'customer_category',
								'orderby' => 'name',
								'order'   => 'ASC',
								'hide_empty' => true,
								);
								$cats = get_categories($args);
								?>
     <section class="tabs section tabscontent_main customer bg-greyteam clearfix">
                           <div class="tabscontent active ">
                              <div class="logoslider bg_gray">
                                 <div class="owl-carousel_main">
                                    <div class="sppb-container">
                                       <div class="sppb-section-title sppb-text-center one-stop-destination">
                                          <h3 class="sppb-title-heading">Leading customers across<br> segments</h3>
                                          <p>Our customers include some of the leading corporates across such diverse sectors<br> such as Automobiles, Heavy Engineering, FMCG, Cement & Steel, Pharma & Healthcare,<br> Data Centres and Govt institutions.</p>
                                       </div>
                                    </div>
                                    <div class="filter-tab">
                                       <span class="select">All </span>
                                       <div id="project-terms">
                                          <a onclick="showhide('filter-slider0');" class="btn btn-default active"  href="javascript:void(0);">All</a>
										  <?php foreach($cats as $cat) { ?>
                                          <a onclick="showhide('filter-slider<?php echo $cat->term_id; ?>');" class="btn btn-default"  href="javascript:void(0);"> <?php echo $cat->name; ?></a>
										  <?php } ?>
                                       </div>
                                    </div>
                                    <div class="items-filter">
                                       <div id="filter-slider0" class="owl-carousel owl-theme hide-filter" style="display: block;">
											<?php //$counter = 0;
											$args = array(
											'post_type'   => 'our_customers',
											'post_status' => 'publish',
											'posts_per_page' => -1,
											);
											$wp_query = new WP_Query($args);
											if ($wp_query->have_posts()) {
											while ($wp_query->have_posts()) {
											$wp_query->the_post();
											
											$featured_img_url = get_the_post_thumbnail_url($wp_query->ID, 'leadership-team-images');
											?>
                                          <div class="item project">
                                             <div class="inner_logos_div">
                                              <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                             </div>
                                          </div>
										  <?php }} wp_reset_query(); ?>
                                          
                                       </div>
                                        <?php foreach($cats as $cat) { ?>
										 <div id="filter-slider<?php echo $cat->term_id; ?>" class="owl-carousel owl-theme hide-filter" style="display:none;">
										<?php
									
											   $pst = array(
												'post_type'   => 'our_customers',
												'post_status' => 'publish',
												'posts_per_page' => -1,
												'tax_query' => array(
																	array(
																		'taxonomy' => 'customer_category',
																		'field' => 'ID', //can be set to ID
																		'terms' => $cat->term_id //if field is ID you can reference by cat/term number
																	)
																)
												);
												
												 $wp_query = new WP_Query($pst);
												 if ($wp_query->have_posts()) {
													 while ($wp_query->have_posts()) {
														$wp_query->the_post();
													   $featured_img_url = get_the_post_thumbnail_url($wp_query->ID, 'leadership-team-images');
										   ?>
                                          <div class="item project">
                                             <div class="inner_logos_div">
                                              <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                             </div>
                                          </div>
										  <?php } ?>
                                        
                                      
										<?php }  ?>  
										</div>
										<?php wp_reset_query(); } ?>
                                       <!--  -->
                                    </div>
                                 </div>
                                 <!--  -->
                              </div>
                              <!-- End Bussiness -->
                              <div class="clearfix"></div>
                        </section>
							
								
								
								
								
								 <!--Find Out More-->

								 <section id="section-id-1609939398910" class="sppb-section floox-home-cta" >
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
										  <div class="sppb-col-md-4" id="column-wrap-id-1609939398917">
											 <div id="column-id-1609939398917" class="sppb-column" >
												<div class="sppb-column-addons">
												   <div id="sppb-addon-wrapper-1609939398918" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1609939398918" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-overlay-image  image-effect-slide-left ">
															<div class="sppb-addon-overlay-image-content title-subtitle-center-center">
															   <div class="overlay-image-title">
																  <h4 class="sppb-addon-title"><a href="/about-us/"target="_blank">About us</a></h4>
																  <div class="overlay-image-button-wrap"><a rel="noopener noreferrer" target="_blank" href="/about-us/" id="btn-1609939398918" class="sppb-btn  sppb-btn-custom sppb-btn-rounded"> Read More</a></div>
															   </div>
															   <div class="overlay-background-image-wrapper">
																  <div class="overlay-background-image" style="background-image:url(https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/flip-about-us.png);"></div>
															   </div>
															</div>
														 </div>
													  </div>
												   </div>
												</div>
											 </div>
										  </div>
										  <div class="sppb-col-md-4" id="column-wrap-id-1609939398919">
											 <div id="column-id-1609939398919" class="sppb-column" >
												<div class="sppb-column-addons">
												   <div id="sppb-addon-wrapper-1609939398920" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1609939398920" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-overlay-image  image-effect-slide-left ">
															<div class="sppb-addon-overlay-image-content title-subtitle-center-center">
															   <div class="overlay-image-title">
																  <h4 class="sppb-addon-title"><a href="/latest-news/">Latest News</a></h4>
																  <div class="overlay-image-button-wrap"><a href="/latest-news/" id="btn-1609939398920" class="sppb-btn  sppb-btn-custom sppb-btn-rounded">Read More</a></div>
															   </div>
															   <div class="overlay-background-image-wrapper">
																  <div class="overlay-background-image" style="background-image:url(https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/flip-strategy.png);"></div>
															   </div>
															</div>
														 </div>
													  </div>
												   </div>
												</div>
											 </div>
										  </div>
										  <div class="sppb-col-md-4" id="column-wrap-id-1609939398921">
											 <div id="column-id-1609939398921" class="sppb-column" >
												<div class="sppb-column-addons">
												   <div id="sppb-addon-wrapper-1609939398922" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1609939398922" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-overlay-image  image-effect-slide-left ">
															<div class="sppb-addon-overlay-image-content title-subtitle-center-center">
															   <div class="overlay-image-title">
																  <h4 class="sppb-addon-title"><a href="projects/">Portfolio</a></h4>
																  <div class="overlay-image-button-wrap"><a href="projects/" id="btn-1609939398922" class="sppb-btn  sppb-btn-custom sppb-btn-rounded">Read More</a></div>
															   </div>
															   <div class="overlay-background-image-wrapper">
																  <div class="overlay-background-image" style="background-image:url(https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/flip-ampx.png);"></div>
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

								 <!--PRI-->

								<!-- <section id="section-id-1584622957646" class="sppb-section" >
									<div class="sppb-row-container">
									   <div class="sppb-row">
										  <div class="sppb-col-md-12" id="column-wrap-id-1584622957673">
											 <div id="column-id-1584622957673" class="sppb-column" >
												<div class="sppb-column-addons">
												   <div id="sppb-addon-wrapper-1584622957674" class="sppb-addon-wrapper">
													  <div id="sppb-addon-1584622957674" class="clearfix "     >
														 <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
															<h3 class="sppb-addon-title">Amp is a proud signatory of the Environmental, Social, and Corporate Governance <a href="assets/ppt/ESG Slide for Amp Energy India Web-page.pptx" target="_blank">(ESG)</a></h3>
															<div class="sppb-addon-content"></div>
														 </div>
													  </div>
												   </div>
												</div>
											 </div>
										  </div>
										
									   </div>
									</div>
								 </section>-->

							  </div>
						   </div>
						</div>
					 </div>
				  </div>
			   </section>

<?php get_footer();
?>
 <script type="text/javascript">
      function showhide(id){ 
           if (document.getElementById) {
             var divid = document.getElementById(id);
             var divs = document.getElementsByClassName("hide-filter");
             for(var i=0;i<divs.length;i++) {
                divs[i].style.display = "none";
             }
             divid.style.display = "block";
           } 
           return false;
      }
      
      jQuery(document).ready(function(){
      jQuery('#project-terms a').click(function(){
       jQuery('#project-terms a').removeClass("active");
       jQuery(this).addClass("active");
      });
      });
      
   </script>
	


		<script type="text/javascript">
$('.owl-carousel').owlCarousel({
      loop:( $('.item').length > 3 ),
      margin:10,
      autoplay:true,
      nav:false,
      dots:false,
      navText: ['<i class="ion-ios-arrow-left fa-4x"></i>', '<i class="ion-ios-arrow-right fa-4x"></i>'],
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