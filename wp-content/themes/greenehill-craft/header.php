<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
global $topp_section;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title>
        <?php if ($topp_section == 'blog'): ?>OpenMuni<?php else: ?>
        <?php wp_title('&laquo;', true, 'right'); ?> 
        <?php bloginfo('name'); ?>
        <?php endif; ?>
        </title>

		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
		<link rel="shortcut icon" type="image/ico"  href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	
	<!--[if IE]><link href="<?php bloginfo('template_directory'); ?>/css/tripoli.base.ie.css" rel="stylesheet" type="text/css" media="all"><![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/tripoli.visual.css" />  
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/tripoli.type.css" />    
	<link href="<?php bloginfo('template_directory'); ?>/css/tripoli.base.css" rel="stylesheet" media="all" />	

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?>?v=5 );
	</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>

	<div id="main" class="content">
		
    	<div id="head">
    		<h1><a id="logo" href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.gif"></a></h1>
    		<ul id="nav">
    				<li id="nav-about"><a href="<?php bloginfo('siteurl'); ?>/about">        About      </a></li>
    				<li id="nav-community"><a href="<?php bloginfo('siteurl'); ?>/community">    Community      </a></li>
    				<li id="nav-food"><a href="<?php bloginfo('siteurl'); ?>/food">         Food      </a></li>
    				<li id="nav-joinus"><a href="<?php bloginfo('siteurl'); ?>/join-us">Join Us      </a></li>
    				<li id="nav-news"><a href="<?php bloginfo('siteurl'); ?>/news">   News      </a></li>
    		</ul>

			<ul id="subnav">
				<li><a href="http://members.greenehillfood.coop/user">Member Login</a></li>
				<li><a href="<?php bloginfo('siteurl'); ?>/about/contact-us/">Contact Us</a></li>				
			</ul>								
    		<div id="forms">
				<form id="searchform" class="search" method="get" action="<?php bloginfo('home'); ?>">
					<label for="s">Search:</label>
					<input type="text" name="s" id="s" size="15" />
					<input type="submit" class="submit" value="<?php _e('Go'); ?>" />
    			</form>
    		</div>
    		<!-- close forms -->
    	</div>
    	<!-- close head -->

