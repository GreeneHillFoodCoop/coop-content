<?php get_header(); ?>
<div id="section"><h1><?php the_title(); ?></h1></div>
<div id="main">
	<div class="content">
		<div id="primary">
				
				<?php
				
				$pages = get_pages(array('sort_order'=>'ASC', "sort_column" => "menu_order", "child_of" =>$post->ID));
foreach($pages as $child) {
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('showposts=1'.'&paged='.$paged."&category_name=".$child->post_name);


 $wp_query->the_post();
?>		<div class="post">
<h1 class="entry-title"><em>Latest from </em><a href="<?php echo get_page_link($child->ID); ?>"><?=$child->post_title?></a></h1><hr />
<h2><a href="<? the_permalink()?>"><? the_title()?></a></h2>
<?
	if ( has_post_thumbnail() ) {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
?> <img src="<?=$large_image_url[0]?>" class="alignright" style="margin-top:-40px;"	/><?
} 
?><?php the_excerpt('read more...'); ?>
</div>
<?
}
?>
  
 <?php $wp_query = null; $wp_query = $temp;?>					
		</div>
	<?php get_sidebar(); ?>
		<div class="clear"></div>
		
		    
	</div>
</div>
<?php get_footer(); ?>