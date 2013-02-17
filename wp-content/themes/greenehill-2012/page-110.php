<?php get_header(); ?>
<div id="slider">
	<div class="content">
		<div id="featured" >
			<ul class="ui-tabs-nav">
<?php
	$my_query = new WP_Query('showposts=3&cat=4');
	if (have_posts()) :
		while ($my_query->have_posts()) : $my_query->the_post();
		$do_not_duplicate = $post->ID;
		$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
?>
	        	<li class="ui-tabs-nav-item ui-tabs-selected" style="background-image:url(<?=$img[0]?>);" id="nav-fragment-<?php echo $post->ID;?>">
	        		<a href="#fragment-<?php echo $post->ID;?>"><span><strong><? the_title() ?></strong><br /><? the_excerpt() ?></span></a>
	        	</li>
<?php endwhile; endif; ?>
     	 </ul>

	    <!-- First Lorem ipsum dolor sit amet. -->
	<?
	$my_query = new WP_Query('showposts=3&cat=4');
	if (have_posts()) :
		while ($my_query->have_posts()) : $my_query->the_post();
		$do_not_duplicate = $post->ID;
		$vid_arr = get_post_custom_values("vimeo_id", $post_id);
		$vid = $vid_arr[0];
	
	?>
			<div id="fragment-<?php echo $post->ID;?>" class="ui-tabs-panel ui-tabs-hide" style="">
				<? 	if($vid){  ?>
				<iframe src="http://player.vimeo.com/video/<?=$vid?>" width="620" height="348" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<? } else { the_post_thumbnail(); } ?>
			</div>
<?php endwhile; endif; ?>
		</div>

</div></div>

<div id="main">
	<div class="content">
		<div id="primary">
<?php the_post(); ?>

	<div id="post-<?php the_ID(); ?>" class="post">
		<h2 class="entry-title"><?php the_title(); ?></h2>
			<div class="entry-content">
				<?php the_content( __( 'continue reading <span class="meta-nav">&raquo;</span>', 'blankslate' )  ); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
			</div>
	</div>

		</div>
		<?php get_sidebar(); ?>

		<div class="clear"></div>


	</div>
</div><?php get_footer(); ?>