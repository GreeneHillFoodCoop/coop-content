<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 * Template Name: Frontpage
*/

  get_header();
?>

<div id="content">

	<div id="sidebarL" class="sidebar">
		<?php dynamic_sidebar("Left_Sidebar"); ?>		
	</div>


<div id="center">
<div id="frontpage" class="posts">

<div class="blog-excerpts">
    <?php
        global $query_string;
        query_posts('pagename=frontpage'); if (have_posts()): while (have_posts()): the_post();
    ?>

    <div class="hentry excerpt selfclear">
<!--
            <div class="head selfclear">
                <h4><a class="entry-title" href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                <?php if(!is_page()): ?>
                <div class="source">
                    by  
                    <a class="author" href="<?php the_author_url(); ?>"><?php the_author() ?></a>
                </div>
                <?php endif; ?>
            </div>--><!-- end .head -->


			<?php the_content(__('(more...)')); ?>

    </div>
    <?php
        endwhile; endif;
    ?>


</div>
</div> <!-- end frontpage div -->

</div> <!-- end #center div -->


<div id="sidebarR" class="sidebar">
	<?php dynamic_sidebar("Right_Sidebar"); ?>
</div>

</div> <!-- end #content -->



<?php get_footer(); ?>
