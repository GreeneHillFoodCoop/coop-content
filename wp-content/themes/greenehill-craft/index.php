<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
get_header();
?>
<div id="content">

	<div id="sidebarL" class="sidebar">
		<?php dynamic_sidebar("Left_Sidebar"); ?>
	</div>


<div id="center">
	
<div class="posts<?php if(is_single()) echo ' post'; if(current_user_can( 'edit_page', $post->ID )) echo ' editable';?>">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="hentry selfclear" id="post-<?php the_ID(); ?>">

				<div class="head selfclear">
					<?php if (!is_page()): ?>
					<?php echo get_avatar(get_the_author_id(), 40); ?>
					<?php endif; ?>
					<h4><a class="entry-title" href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
					<?php if(!is_page()): ?>
					<div class="source">
						by  
						<a class="author" href="<?php the_author_url(); ?>"><?php the_author() ?></a>
					</div>								
					<?php endif; ?>
				</div><!-- end .head -->

			
				<div class="entry-summary">
					<?php the_content(); ?>
				</div><!-- end .entry-summary -->
				
				<?php if (!is_page()) { ?>
				<div class="entry-footer">
					<div class="comment-count">			
						<?php if(comments_open() || pings_open()) { 
								comments_number('','1','%'); ?> <a href="#"><?php comments_popup_link('Leave a Comment &#187;', 'Comment &#187;', 'Comments &#187;'); ?></a>
						<?php } ?>								
					</div>
					<div class="entry-category">
						Filed Under:
						<?php the_category(', ') ?>
						<!--<a href="#" class="tag">Something Silly</a>
						<?php the_tags('Tags: ', ', ', '<br />'); ?>-->
					</div>
					<a href="<?php the_permalink() ?>" class="continue-reading">
						Continue Reading »
					</a>
					<?php edit_post_link('Edit', '', ''); ?>

				</div><!-- end .foot -->
				<? } ?>
      
</div><!-- end .hentry -->

<?php if(comments_open() || pings_open()) { ?>
<div class="comments">
	
    <?php comments_template(); // Get wp-comments.php template ?>

</div>	
<?php
}
?>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<div class="pagination">
<?php posts_nav_link(' &#8212; ', __('Newer Posts &raquo;'), __('&laquo; Older Posts')); ?>
</div>

</div><!-- end .posts -->

</div> <!-- end #center div -->


<div id="sidebarR" class="sidebar">
<?php dynamic_sidebar("Right_Sidebar"); ?>
</div>

</div> <!-- end #content -->



<?php get_footer(); ?>
