<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<!-- <div class="page-img" ><?php //the_post_thumbnail('full'); ?></div> -->
	<div class="content-bios">
		<header class="entry-header">
			<h1><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</div>
