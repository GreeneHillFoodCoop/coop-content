<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 * Template Name: Data
*/
get_header();
?>

<div class="posts">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="hentry selfclear" id="post-<?php the_ID(); ?>">

    <div class="entry-summary">
        <?php the_content(__('(more...)')); ?>
    </div><!-- end .entry-summary -->

    </div><!-- end .hentry -->
    <?php edit_post_link(); ?>


    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div><!-- end .posts -->

<?php 
    get_sidebar();
    get_footer();
?>
