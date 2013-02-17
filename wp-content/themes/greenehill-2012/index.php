<?php get_header(); ?>
<div id="slider">
	<div class="content">
		<div id="featured" >
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item ui-tabs-selected" style="background-image:url(images/chicken.png);" id="nav-fragment-1"><a href="#fragment-1"><span><strong>Co-Op Cooking: Minestrone Soup</strong><br />Lorem ipsum lorem.</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2" style="background-image:url(images/food.png);"><a href="#fragment-2"><span><strong>NYTimes Video</strong><br />Lorem ipsum lorem.</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3" style="background-image:url(images/code.png);"><a href="#fragment-3"><span><strong>Web Designers and Developers Needed</strong><br />Lorem ipsum lorem.</span></a></li>
	      </ul>

	    <!-- First Lorem ipsum dolor sit amet. -->
	    <div id="fragment-1" class="ui-tabs-panel" style="">
			<iframe src="http://player.vimeo.com/video/43993396" width="620" height="348" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>	    </div>

	    <!-- Second Lorem ipsum dolor sit amet. -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide"><img src="images/slider2.jpg" />
	    </div>

	    <!-- Third Lorem ipsum dolor sit amet. -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style=""><img src="images/codebig.png" />
			<img src="images/image3.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >35 Amazing Logo Designs</a></h2>
				<p>liquam erat volutpat. Proin id volutpat nisi. Nulla facilisi. Curabitur facilisis sollicitudin ornare....<a href="#" >read more</a></p>
	         </div>
	    </div>
		

		</div>

</div></div>

<div id="main">
	<div class="content">
		<div id="primary">
<? query_posts('page_id=2263'); ?>
<?php while ( have_posts() ) : the_post() ?>
	<div id="post-<?php the_ID(); ?>" class="post">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="entry-content">
				<?php the_content( __( 'continue reading <span class="meta-nav">&raquo;</span>', 'blankslate' )  ); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
			</div>
			
	</div>
<?php endwhile; ?>
		</div>
		<?php get_sidebar(); ?>

		<div class="clear"></div>
		
		
	</div>
</div><?php get_footer(); ?>