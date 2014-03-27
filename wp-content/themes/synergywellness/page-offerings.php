<?php get_header(); ?>


<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'posts_per_page' => 100 ));
	  if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>
	<a class="offering-box" href="<?php the_permalink(); ?>">	
		<h3><?php the_title(); ?></h3>
	</a>
<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>