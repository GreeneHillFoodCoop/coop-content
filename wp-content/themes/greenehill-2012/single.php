<?php get_header(); ?>
<?php the_post(); $category = get_the_category(); 

?>

<div id="section"><div class="content"></div></div>
<div id="main">
	<div class="content">
		<div id="primary">

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><?php the_title(); ?></h2>
<div class="entry-meta">
<span class="meta-prep meta-prep-author"><?php _e('By ', 'blankslate'); ?></span>
<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s', 'blankslate' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
<span class="meta-sep"> | </span>
<span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'blankslate'); ?></span>
<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
| <em>in</em> <span><? the_category(", ") ?></span>
<?php edit_post_link( __( 'Edit', 'blankslate' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
</div>
<div class="entry-content">

<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
</div>
</div>
<div id="nav-below" class="navigation">
<div class="left"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
<div class="right"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
<div class="clear"></div><br />
</div>
<?php  //comments_template('', true); ?>

</div>
		
		<?php get_sidebar(); ?>

		<div class="clear"></div>
		
		
	</div>
</div>
<?php get_footer(); ?>