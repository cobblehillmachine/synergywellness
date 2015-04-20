<?php

// Template Name: Homepage

get_header(); ?>
<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
		if ($post_image_id) {
			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		} ?>
<!-- <div class="home-img" style="background: url('<?php //echo $thumbnail; ?>') no-repeat;"></div> -->

<!-- <?php the_post_thumbnail(); ?> -->


<?php get_footer(); ?>