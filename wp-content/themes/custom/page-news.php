<?php
/**
 * Template Name: News Page Template
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>


<?php $month = (isset($_GET['month']))?$_GET['month']:'';
	$year = (isset($_GET['post_year']))?$_GET['post_year']:'';
	?>

<?php
	if ( have_posts() ):
		
        the_post();
?>
            
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
												<div class="sppb-col-md-6 sppb-col-sm-6">
                                       <h3 class="sppb-title-heading title-bold">Latest news</h3>
                                    </div>



                                    <div class="sppb-col-md-6 sppb-col-sm-6">
													

<ul class="filter_nav">
            <li class="block-xs">Sort by :</li>
			
            <li><a href="<?php echo get_site_url(); ?>/latest-news">All Years</a>
			<?php $tax_terms = get_terms('published_year', array('hide_empty' => true, 'parent' => 0,  'orderby' => 'name',
    )); ?>
              <ul class="filter-submenu list-unstyled">
			   <?php foreach ($tax_terms as $term_single) { ?>
			  <li><a href="<?php echo get_site_url(); ?>/latest-news/?post_year=<?php echo $term_single->name; ?>"><?php echo $term_single->name; ?></a></li>
							  <?php } ?>
                
              </ul>
            </li>	
 <li><a href="<?php echo get_site_url(); ?>/latest-news">All Months</a>
<?php $tax_terms = get_terms('published_month', array('hide_empty' => true, 'parent' => 0,  'orderby' => 'menu_order',
   )); ?>
   
  <?php //echo $_GET['post_year']; ?>
              <ul class="filter-submenu list-unstyled">
			  
			   <?php foreach ($tax_terms as $term_single) { ?>
			  <li><a href="<?php echo get_site_url(); ?>/latest-news/?month=<?php echo $term_single->name; ?><?php echo (isset($_GET['post_year']))?'&post_year='.$_GET['post_year']:''?>"><?php echo $term_single->name; ?></a></li>
							  <?php } ?>
              </ul>
            </li>			
          </ul>
</div>

<div class="activity-sec">

<?php //$counter = 0;
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$posts_per_page = 3;
			
			$args = array(
				'post_type'   => 'news',
				'post_status' => 'publish',
				'posts_per_page' => $posts_per_page,
				'paged' => $paged,
			);
			if($year){
				$args = array(
					'post_type'   => 'news',
					'post_status' => 'publish',
					'posts_per_page' => $posts_per_page,
					'published_year' => $year,
					'paged' => $paged,
					
				);
			}
			if($month){
				$args = array(
					'post_type'   => 'news',
					'post_status' => 'publish',
					'posts_per_page' => $posts_per_page,
					'published_month' => $month,
					'paged' => $paged,
					
				);
			}
			if($year && $month){
				$args = array(
					'post_type'   => 'news',
					'post_status' => 'publish',
					'posts_per_page' => $posts_per_page,
					'published_month' => $month,
					'published_year' => $year,
					'paged' => $paged,
					
				);
			}
			//var_dump($args);
			 $wp_query = new WP_Query($args);
					
					 
					
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post(); 
							
							?>

        <div class="col-md-4 col-sm-6">
      <div class="item">
        <figure class="figure-img ">
         <a class="clearfix" href="https://www.newindianexpress.com/cities/kochi/2018/feb/06/green-route-23-mwp-solar-plant-for-kochi-metro-rail-ltd-1768906.html"> 
          <div class="hover-effect clearfix"> 
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } else {?> <img src="https://newrepindia.reputationindia.in/ampsolar/wp-content/uploads/2021/03/300x300.png" alt="<?php the_title(); ?>"><?php } ?>
          </div>        
         <figcaption class="category-caption">
            <h4><?php
						$posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
							echo $tag->name . ' '; 
						  }
						}
						?><span><?php echo get_the_date( 'jS F, Y' ); ?></span> </h4>
            <h2><?php the_title(); ?></h2>
            <div class="black-para"> 
            <?php the_excerpt(); ?>
           </div>
           <div class="btn btn-read">Read More <i class="fa fa-long-arrow-right"></i></div>
          </figcaption>
        </a>
        </figure>
      </div>
       </div>     
					<?php }}; ?>
<div class="paginate">
                    <?php
$big = 999999999; // need an unlikely integer
 
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
) );
?>
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
<?php endif; ?>

<?php get_footer(); ?>