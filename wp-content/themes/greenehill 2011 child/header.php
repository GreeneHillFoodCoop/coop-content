<?php
/**
 * The Header for our child theme.
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
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
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
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
	<div id="head">
		<div id="logo"><a href="<?php bloginfo( 'siteurl' ); ?>" title="home"></a></div>
			<div id="Searchbar">	
				<div id="Search-title"> Search:</div>
				<div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
					<?php get_search_form(); ?></div>
				</div>

		<ul id="topnav">
				<li id="Contact"><a href="<?php echo home_url( '/' );?>contact-us/" title="Contact Us"></a></li>				
				<li id="Member"><a href="<?php echo home_url( '/' );?>community" title="Member Area"></a></li>
		</ul><!-- topnav -->								
	</div><!-- #header -->
</header><!-- #branding -->
	
<div id="main">
	
	<div id="sidenav" role="navigation">
		<ul id="menu">
			<li><a href="<?php echo home_url( '/' );?>About/" title="About Us" class="About"></a></li>
			<li><a href="<?php echo home_url( '/' );?>join-us/" title="Join Us" class="Join"></a></li>
			<li><a href="<?php echo home_url( '/' );?>category/food/" title="Food" class="Food"></a></li>
			<li><a href="<?php echo home_url( '/' );?>?cat=4/" title="Bulletin Board" class="News"></a></li>
			<li><a href="<?php echo home_url( '/' );?>faqs/" title="FAQs" class="FAQs"></a></li>
		</ul></div>
	<div id="Counter"></div>
		
	</div><!-- #access -->

	