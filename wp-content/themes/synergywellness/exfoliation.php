<?php

// Template Name: Exfoliation

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="content">
	<div class="treat-links-cont">
		<?php wp_nav_menu( array('menu' => 'treatments' )); ?>
    </div>
    <h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>