<h2 class="sppb-addon-title ">
	<?php if(!empty(get_field('animated-heading-before-part'))) { ?><span class="animated-heading-before-part"><?php echo get_field('animated-heading-before-part'); ?></span><?php } ?>
	<span class="animated-heading-highlighted-wrap">
		<?php if(!empty(get_field('shape-underline'))) { ?><span class="animated-heading-highlighted-text shape-underline"><?php echo get_field('shape-underline'); ?></span><?php } ?>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
			<path d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7"/>
		</svg>
	</span>
	<?php if(!empty(get_field('animated-heading-after-part'))) { ?> <span class="animated-heading-after-part"><?php echo get_field('animated-heading-after-part'); ?></span><?php } ?>
</h2>