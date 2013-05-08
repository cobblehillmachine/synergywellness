<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<script type="text/javascript" src="//use.typekit.net/kcy3ghq.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.anystretch.min.js"></script>
	
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="format-detection" content="telephone=no">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/synergywellness.css" />
<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/synergywellness.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?> id="<?php echo  strtolower(str_replace(' ','-',get_the_title())); ?>">
	<?php if (is_front_page()) : ?><div id="loader"></div><?php endif; ?>
	<div id="header">
		<div id="gift-link" onclick="showGiftform();">gift certificates</div>
		<div class="mid-cont">
			<a href="/" id="logo"></a>
			<div id="nav"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
		</div>
	</div>
	<div id="main-cont">
		<?php if (is_front_page()) : ?>
			<div class="home_slide"></div>
		
		<?php elseif (is_page(11)) : ?>	
			<div class="treat_left_bg"><a href="/swedish-massage">Swedish Massage</a></div>
			<div class="treat_right_bg"><a href="/thai-massage">Thai Massage</a></div>
			<div class="treat_bottom_left_bg"><a href="/sugaring">Sugaring and Facials</a></div>
			<div class="treat_bottom_right_bg"><a href="/colon-hydrotherapy">Colon Hydrotherapy</a></div>
		<?php else: ?>
			<div class="page-img" ><!-- <?php// the_post_thumbnail('full'); ?> --></div>			
		<?php endif; ?>

				
<div id="gift-form">
	<div id="close" onclick="hideGiftform();" >X</div>
	<div class="info">
		Please fill out the information below and Jennifer will get in touch with you within 24 hours to deliver the gift certificate.
	</div>
	<?php echo do_shortcode('[contact-form-7 id="97" title="Gift certificate"]'); ?>
</div>
<div class="overlay"></div>
