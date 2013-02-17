<?php
/*
Template Name: Blog Parent
*/
?>
<?php get_header(); ?>
<div id="section"></div>
<div id="main">
	<div class="content">
		<div id="primary">
						<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="entry-title"> <?php the_title(); ?> </h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
						
					</div>
					
				</div>
				
			</article>
	
				<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('showposts=3'.'&paged='.$paged."&category_name=".$post->post_name);

while ($wp_query->have_posts()) : $wp_query->the_post();
?>		<div class="post">


<h2><a href="<? the_permalink()?>"><? the_title()?></a></h2>

<?
	if ( has_post_thumbnail() ) {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
?> <img src="<?=$large_image_url[0]?>" class="alignright" style="margin-top:-45px;"	/><?
} 
?><?php the_excerpt('read more...'); ?>
<div class="clear"></div>
</div>
<?php endwhile; ?>

 <div class="post"><br />
  <div class="left"><?php previous_posts_link('&laquo; Previous') ?></div>
  <div class="right"><?php next_posts_link('More &raquo;') ?></div><br />
  <div class="clear"></div>
</div>  <?php $wp_query = null; $wp_query = $temp;?>					
		</div>
	<?php get_sidebar(); ?>
		<div class="clear"></div>
		
		    
	</div>
</div>
<?php get_footer(); ?>