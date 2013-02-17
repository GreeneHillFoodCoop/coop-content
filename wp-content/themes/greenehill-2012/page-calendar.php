<?php get_header(); ?>
<div id="section"><div class="content"><h1 class="entry-title"> <?php the_title(); ?> </h1></div></div>

<div id="main" class="wide">
	<div class="content">
		<div id="primary">
			
		
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id="wp-calendar"><?php ec3_get_calendar(); ?></div>
				</div>
			
		</div>

		<div class="clear"></div>
		
		
	</div>
</div>
<?php get_footer(); ?>