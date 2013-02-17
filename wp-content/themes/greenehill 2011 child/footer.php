<?php
/**
 * The template for displaying the footer for our child theme.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

		<div id="site-menu">
			<ul class="navmenu">
			<li><?php wp_nav_menu( 'footer menu' ); ?></li>
			</ul>
		</div><!-- #site-menu -->

			<div id="site-generator">
				<?php get_sidebar( 'footer' ); ?>
				<a href="/">&copy; <?php echo date('Y')?> Greene Hill Food Co-op</a>
			</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
