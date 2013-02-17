<div id="secondary">

<?php wp_reset_query(); ?>
	<div class="widget-area">
		<ul class="sid">
			<? 
				if(is_page(2263))
					dynamic_sidebar('home-widget-area'); 
			 	else if(is_page()) 
					dynamic_sidebar('page-widget-area'); 
				else 
					dynamic_sidebar('post-widget-area'); 
			?>
		</ul>
	</div>

</div>