<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>  
<script src="https://raw.github.com/timrwood/moment/1.6.2/min/moment.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/jquery.fitvids.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/script.js" type="text/javascript"></script> 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/smallest.css" media="screen and (max-width: 960px)" />
  	
</head>
<body <?php body_class(); ?>><a name="top"></a>
<div id="nav">
	<div class="content">

		 	
		<div id="logo"><a href="<?=bloginfo("home")?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/greenhill-logo.png" /></a></div>
		<div id="navtop"></div>
		 
			 <?	wp_nav_menu(array( 'after' => '<span class="navright"></span>', 'before'=>'<span class="navleft"></span>' )); ?>

		<div id="subnav">
				
				<div id="workcycle">CURRENTLY ON WORK CYCLE <a href="<? bloginfo("wpurl")?>/member-info/work-shift-process-help/weekly-rotation-schedule/"><span id="weekLetter"></span></a></div>
				<div id="newsletter"><a href="<? bloginfo("wpurl")?>/about-us/newsletters/">SIGN UP</a> FOR OUR NEWSLETTER</div>
				<div id="searchbox">
					<form method="get" action="v/search" id="search">
					  <input name="q" type="text" size="40" placeholder="Search..." />
					</form>
				</div>
				<div id="social">
					<a href="http://www.facebook.com/greenehillfoodcoop" target="_new"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/white_facebook.png" alt="Facebook"/></a>
					<a href="http://vimeo.com/greenehillfoodcoop" target="_new"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/white_vimeo.png" alt="Vimeo" /></a>
					<a href="http://www.flickr.com/photos/greenehillfoodco-op/" target="_new"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/white_flickr.png"  alt="Flickr"/></a>
					<a href="https://twitter.com/greenehill" target="_new"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/white_twitter_bird.png" alt="Twitter" /></a>
				</div>
		</div>
		
		

	</div>
</div>


