<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
if ( function_exists('register_sidebar') )

register_sidebar(array(
	'name' => 'Left_Sidebar',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h5>',
	'after_title' => '</h5>',
));


register_sidebar(array(
	'name' => 'Right_Sidebar',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h5>',
	'after_title' => '</h5>',
));



function getTopParentPostName($myid) {
$mypage = get_page($myid);

if ($mypage->post_parent == 0){
return $mypage->post_name;
}
else{
return getTopParentPostName($mypage->post_parent);
}
}

function is_tree( $p_name ) {    // $p_name = The page we're looking for pages underneath
global $post;       // We load this as we're outside of the post
$top_post_name = getTopParentPostName($post);

if ( $p_name == $top_post_name ) return true;
else return false;
}



?>
