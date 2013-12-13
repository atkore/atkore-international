<?php function remove_footer_admin () {
  echo 'Just Maintain';
}
add_filter('admin_footer_text', 'remove_footer_admin');

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>

  </style>';
}
