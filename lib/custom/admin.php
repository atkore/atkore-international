<?php function remove_footer_admin () {
  echo 'Just Maintain';
}
add_filter('admin_footer_text', 'remove_footer_admin');

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>

  </style>';
}

/*
 * Plugin Name: Mini Admin Bar
 * Plugin URI: http://www.netyou.co.il/
 * Description: Makes the admin bar a small button on the left and expands on hover.
 * Version: 1.0
 * Author: NetYou
 * Author URI: http://www.netyou.co.il/
 * License: MIT
 * Copyright: NetYou
*/
 
add_action('get_header', 'my_filter_head');
function my_filter_head() { remove_action('wp_head', '_admin_bar_bump_cb'); }
 
function my_admin_css() {
        if ( is_user_logged_in() ) {
        ?>
        <style type="text/css">

        </style>
        <?php }
}
add_action('wp_head', 'my_admin_css');

?>