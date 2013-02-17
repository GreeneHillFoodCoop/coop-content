<?php
/**
 * Template Name: Full Width, No Sidebars 
 *
 * A custom page template which displays content at full width, removing the sidebar section.
 *
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" class="one-column">

			<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			</div><!-- #content -->
		</div><!-- #primary -->
		
<?php get_footer(); ?>
