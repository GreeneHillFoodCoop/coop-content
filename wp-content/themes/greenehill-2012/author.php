<?php get_header(); ?>
<? the_post(); ?>
<div id="section"><h1>Articles by <?=$authordata->display_name;?> </h1></div>

<div id="main">
	<div class="content">
		<div id="primary">
			<article id="content">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="entry-title"> <?php the_title(); ?> </h2>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
						<?php edit_post_link( __( 'Edit', 'blankslate' ), '<span class="edit-link">', '</span>' ) ?>
					</div>
				</div>
			<? endwhile; ?>
			</article>
		</div>
		
		<?php get_sidebar(); ?>

		<div class="clear"></div>
		
		
	</div>
</div>
<?php get_footer(); ?>