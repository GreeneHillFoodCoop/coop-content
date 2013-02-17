<?php get_header(); ?>

<div id="section"><h1><?php single_cat_title() ?></h1></div>

<div id="main">
	<div class="content">
		<div id="primary">
			<article id="content">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><h1 class="entry-title"><a href="<? the_permalink()?>"><?php the_title(); ?></a></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
						<?php edit_post_link( __( 'Edit', 'blankslate' ), '<span class="edit-link">', '</span>' ) ?>
					</div>
				</div>
			<? endwhile; ?>
			</article>
			
			<? if($paged){ ?>
 <div class="post">
  <div class="align left"><?php previous_posts_link('&laquo; Previous') ?></div>
  <div class="align right"><?php next_posts_link('More &raquo;') ?></div>
  <div class="clear"></div>
</div><? } ?> 
		</div>
		
		<?php get_sidebar(); ?>

		<div class="clear"></div>
		
		
	</div>
</div>
<?php get_footer(); ?>