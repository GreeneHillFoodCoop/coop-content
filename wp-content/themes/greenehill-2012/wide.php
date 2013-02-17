<?php
/*
Template Name: Wide No Sidebar
*/
?>
<?php get_header(); ?>
<div id="section"><div class="content"><h1 class="entry-title"> <?php the_title(); ?> </h1></div></div>

<div id="main" class="wide">
	<div class="content">
		<div id="primary">
	
			<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
						
					</div>
				</div>
		
		</div>

		<div class="clear"></div>
		
		
	</div>
</div>
<?php get_footer(); ?>