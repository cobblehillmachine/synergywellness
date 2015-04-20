<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	</div>
	<?php if (is_front_page()) : ?>
	<a id="site-credit" href="http://cobblehilldigital.com" target="_blank">Site by Cobble Hill</a>
	<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>