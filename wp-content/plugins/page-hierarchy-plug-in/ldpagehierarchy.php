<?php
/*
Plugin Name: Sub page hierarchy
Description: Adds a sidebar widget to let you show the list of pages beneath a particular page on your site
Author: Martin Tod
Version: 1.3

*/

/*
Version 1.0 (August 27, 2006) Original public version
Version 1.1 (September 12, 2006) Fixes a bug which means that page number isn't remembered.
Version 1.2 (November 26, 2007) Update by Will Howells for v2 change in DB structure for pages.
Version 1.3 (June 22, 2012) Fixing the invisible drop-down box problem.
*/

// Put functions into one big function we'll call at the plugins_loaded
// action. This ensures that all required plugin functions are defined.
function widget_subpagehierarchy_init() {

	// Check for the required plugin functions. This will prevent fatal
	// errors occurring when you deactivate the dynamic-sidebar plugin.
	if ( !function_exists('register_sidebar_widget') )
		return;

	// This is the function that outputs the list of sub-pages.
	function widget_subpagehierarchy($args) {
		
		// $args is an array of strings that help widgets to conform to
		// the active theme: before_widget, before_title, after_widget,
		// and after_title are the array keys. Default tags: li and h2.
		extract($args);

		// Each widget can store its own options. We keep strings here.
		$options = get_option('widget_subpagehierarchy');
		$title = $options['title'];
		$headpage = $options['headpage'];
		settype($headpage,"integer");
		// These lines generate our output. Widgets can be very complex
		// but as you can see here, they can also be very, very simple.
		global $wp_query;
		$post_obj = $wp_query->get_queried_object();
		 $my_pages = wp_list_pages("sort_column=menu_order&child_of=$post_obj->ID&echo=0&title_li=" );
		 
		if( $my_pages ) {
		echo $before_widget . $before_title . $title . $after_title."<ul>";
		wp_list_pages("sort_column=menu_order&child_of=$post_obj->ID&title_li=" );
		echo $after_widget."</ul>";
		}
	}

	// This is the function that outputs the form to let the users edit
	// the widget's title. It's an optional feature that users cry for.
	function widget_subpagehierarchy_control() {

		// Get our options and see if we're handling a form submission.
		$options = get_option('widget_subpagehierarchy');
		if ( !is_array($options) )
			$options = array('title'=>'Pages', 'headpage'=>'0');
		if ( $_POST['subpagehierarchy-submit'] ) {

			// Remember to sanitize and format use input appropriately.
			$options['title'] = strip_tags(stripslashes($_POST['subpagehierarchy-title']));
			$options['headpage'] = strip_tags(stripslashes($_POST['subpagehierarchy-headpage']));
			update_option('widget_subpagehierarchy', $options);
		}

		// Be sure you format your options to be valid HTML attributes.
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		$headpage = intval($options['headpage']);
		// Here is our little form segment. Notice that we don't need a
		// complete form. This will be embedded into the existing form.
		echo '<p style="text-align:right;"><label for="subpagehierarchy-title">Title: <input style="width: 200px;" id="subpagehierarchy-title" name="subpagehierarchy-title" type="text" value="'.$title.'" /></label></p>';
		// Get the details for the drop down box
		$dropargs = array(
			'selected'           => $headpage,
			'name'               => "subpagehierarchy-headpage",
			'id'                 => "subpagehierarchy-headpage"
		);
		$pages = get_pages();
		if(!empty($pages)):
			echo '<p style="text-align:right;"><label for="subpagehierarchy-headpage">Head page:';
			wp_dropdown_pages( $dropargs );
			echo '</label></p>';
		else:
			echo '<p style="text-align:right;"><em>To use this widget, please add some pages to your site.</em></p>';
		endif;
		echo '<input type="hidden" id="subpagehierarchy-submit" name="subpagehierarchy-submit" value="1" />';
	}	
	// This registers our widget so it appears with the other available
	// widgets and can be dragged and dropped into any active sidebars.
	register_sidebar_widget('Sub page hierarchy', 'widget_subpagehierarchy');

	// This registers our optional widget control form. Because of this
	// our widget will have a button that reveals a 300x100 pixel form.
	register_widget_control('Sub page hierarchy', 'widget_subpagehierarchy_control', 400, 200);
}

// Run our code later in case this loads prior to any required plugins.
add_action('plugins_loaded', 'widget_subpagehierarchy_init');

?>