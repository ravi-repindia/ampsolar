<?php
/**
 * The template for displaying Search Results pages.
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
<?php if ( have_posts() ) : ?>
		<h1><?php printf( __( 'Search Results for: %s', 'starkers' ), '' . get_search_query() . '' ); ?></h1>
			<?php
				get_template_part( 'loop', 'search' );
			?>
<?php else : ?>
		<h2><?php _e( 'Nothing Found', 'starkers' ); ?></h2>
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'starkers' ); ?></p>
			<?php get_search_form(); ?>
<?php endif; ?>
 </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); 