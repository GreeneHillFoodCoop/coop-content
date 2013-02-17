<?php
/*
Plugin Name: SubPages
Plugin URI: http://amplifiedprojects.com/projects/subpages-wordpress-widget/
Description: A plugin to display the current page's subpages. Nothing is displayed if there are no subpages
Version: 1.3
Author: Amanda Chappell
Author URI: http://amplifiedprojects.com
*/

/*  Copyright 2010  Amanda Chappell  (email : amanda@amplifiedprojects.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



function widget_SubPages($args) 
{
	extract($args);

	$options = get_option("widget_subpages");


	
	
	global $wp_query;
	$thePostID = $wp_query->post->ID;
	 $children = wp_list_pages('echo=0&title_li=&child_of='.$thePostID);
	if($children){
		
		if (!$options['title']) {			
			$options['title'] = $wp_query->post->post_title;
		}		
		
	echo $before_widget;
	echo $before_title;
	echo $options['title'];
	echo $after_title;
?>
<ul>
<?php
	
	$output = wp_list_pages ('echo=0&child_of=' . $thePostID . '&title_li=&depth='.$options['depth']);
  	echo $output;
?>
</ul><?php
	echo $after_widget;
	} else {
		$parentId = is_subpage($wp_query->post);
		if ($parentId) {

			// taken from http://mywordpress.com/get-post-title-outside-the-loop/
			$postdata = get_post($parentId);

			if (!$options['title']) {
				$options['title'] = $postdata->post_title;
			}			

		echo $before_widget;
		echo $before_title;
		echo $options['title'];
		echo $after_title;
?>
<ul>
<?php
		$output = wp_list_pages ('echo=0&child_of=' . $parentId. '&title_li=&depth='.$options['depth']);
		echo $output;
?>
</ul><?php
		echo $after_widget;
		}

	}
	
	?>
<?php
	
}

function is_subpage($currentpost) {
	// load details about this page
	if ( is_page() && $currentpost->post_parent ) { // test to see if the page has a parent
		$parentID = $currentpost->post_parent; // the ID of the parent is this
		return $parentID; // return the ID
	} else { // there is no parent soÉ
		return false; // Éthe answer to the question is false
	}
}

function subPages_control(){
	$options = get_option("widget_subpages");

	if(!is_array($options)){
		$options = array('title' => 'SubPages', 'depth' => '1');
	}
	if($_POST['subpages-Submit']){
		$options['title'] = htmlspecialchars($_POST['subpages-WidgetTitle']);
		$options['depth'] = htmlspecialchars($_POST['subpages-WidgetDepth']);
		update_option("widget_subpages",$options);
	}

	echo '<p>
			<label for="subpages-WidgetTitle">Widget Title: </label>
			<input type="text" id="subpages-WidgetTitle" name="subpages-WidgetTitle" value="';
	echo $options['title'];
	echo '" />
			<input type="hidden" id="subpages-Submit" name="subpages-Submit" value="1" />
		</p>';
	echo '<p>
			<label for="subpages-WidgetTitle">Widget Depth: </label>
			<select id="subpages-WidgetDepth" name="subpages-WidgetDepth">
			<option value="0" ';
	if($options['depth']=='0'){ echo 'selected';}
	echo '>0</option>
			<option value="1" ';
	if($options['depth']=='1'){ echo 'selected';}
	echo '>1</option>
			<option value="2"';
	if($options['depth']=='2'){ echo 'selected';}
	echo '>2</option>
			<option value="3"';
	if($options['depth']=='3'){ echo 'selected';}
	echo '>3</option>
			<option value="4"';
	if($options['depth']=='4'){ echo 'selected';}
	echo '>4</option>
			<option value="5"';
	if($options['depth']=='5'){ echo 'selected';}
	echo '>5</option>
			<option value="6"';
	if($options['depth']=='6'){ echo 'selected';}
	echo '>6</option>
			<option value="7"';
	if($options['depth']=='7'){ echo 'selected';}
	echo '>7</option>
			<option value="8"';
	if($options['depth']=='8'){ echo 'selected';}
	echo '>8</option>
			<option value="9"';
	if($options['depth']=='9'){ echo 'selected';}
	echo '>9</option>
			<option value="10"';
	if($options['depth']=='10'){ echo 'selected';}
	echo '>10</option>
			</select>
			<input type="hidden" id="subpages-Submit" name="subpages-Submit" value="1" />
		</p>';
}


function subPages_init()
{
  	register_sidebar_widget(__('SubPages Display'), 'widget_SubPages');
	register_widget_control('SubPages Display','subpages_control');
}

add_action("plugins_loaded", "subPages_init");

?>