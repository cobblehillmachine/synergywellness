<?php

// Template Name: Colon Hydrotherapy

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="content">
	<div class="treat-links-cont">
		<?php wp_nav_menu( array('menu' => 'treatments' )); ?>
    </div>
    <h2><?php the_title(); ?></h2>
	<?php if ( get_post_meta($post->ID, 'quote', true) ) { ?>
		<div id="quote-cont"><?php echo get_post_meta($post->ID, 'quote', true); ?></div>
	<?php } ?>
	<?php the_content(); ?>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>