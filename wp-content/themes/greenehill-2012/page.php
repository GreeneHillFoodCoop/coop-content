<?php get_header(); ?>

<div id="section"><? if($post->post_parent==0){ ?><h1><?php the_title(); ?></h1><? } ?></div>

<div id="main">
	<div class="content">
		<div id="primary">
			
		<?php the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php if($post->post_parent!=0){ ?><h1 class="entry-title"><? the_title(); ?></h1><?php  } ?>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
						<?php edit_post_link( __( 'Edit', 'blankslate' ), '<span class="edit-link">', '</span>' ) ?>
					</div>
				</div>
			
		</div>
		
		<?php get_sidebar(); ?>

		<div class="clear"></div>
		
		
	</div>
</div>
<?php get_footer(); ?>