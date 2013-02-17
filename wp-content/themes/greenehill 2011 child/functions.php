<?php
/**
 * Greene Hill TwentyEleven child theme functions and definitions
 *
 */

 add_action( 'after_setup_theme', 'greenehill_child_theme_setup' );
 function greenehill_child_theme_setup() {
 
  } 
 
function greenehill_header_height($size){
   return 145;
}
add_filter('twentyeleven_header_image_height','greenehill_header_height');

add_filter('body_class', 'fix_body_class_for_sidebar', 20, 2);
function fix_body_class_for_sidebar($wp_classes, $extra_classes) {
    if( is_single() || is_page() ){
       if (in_array('singular',$wp_classes)){
            foreach($wp_classes as $key => $value) {
                if ($value == 'singular')
                    unset($wp_classes[$key]);
            }
        }
    }
 
     return array_merge($wp_classes, (array) $extra_classes);
}
?>