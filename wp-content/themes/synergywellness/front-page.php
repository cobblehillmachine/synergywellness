<?php get_header(); ?>
<div id="home-slider" class="cont">
	<div class="flexslider">
		<ul class="slides">
	<?php query_posts(array('post_type' => 'Home Slides', 'orderby'=> 'title',  'order' => 'ASC', 'posts_per_page' => 4)); ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
			
				<li  class="banner" >
					<?php the_post_thumbnail('full'); ?>
				</li>
				<?php $count++; ?>
			<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div>	
</div>
	
<?php get_footer(); ?>