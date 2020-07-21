<?php

function custom_menu() {
  register_nav_menus(
    array(
      'custom-menu' => __( 'Custom Menu' )
    )
  );
}
add_action( 'init', 'custom_menu' );

?>
