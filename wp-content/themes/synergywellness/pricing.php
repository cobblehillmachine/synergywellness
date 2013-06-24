<?php

// Template Name: Pricing

get_header(); ?>

<div class="content">
	<div class="page-title"><?php the_title(); ?></div>
	<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 20 ));
	    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>

			<div id="<?php echo  strtolower(str_replace(' ','-',get_the_title())); ?>" class="pricing-cont">
				<h2><?php the_title(); ?></h2>
				<div class="pricing-info"><?php the_content(); ?></div>
			</div>


	<?php endwhile; endif; wp_reset_postdata(); ?>
	<!-- <div id="form-cont"><?php //echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]'); ?></div> -->
</div>

<?php get_footer(); ?>