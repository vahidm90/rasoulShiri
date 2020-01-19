<?php

// Constants and global variables
define( 'VM_LIVE_ADDRESS', 'rasoulshiri.com' );
define( 'VM_DEV_ADDRESS', 'rasoulshiri.test' );
define( 'VM_IS_DEV', ( false === strpos( $_SERVER['SERVER_NAME'], VM_DEV_ADDRESS ) ? false : true ) );
define( 'VM_TD', 'VM-TD' );

// Files
require get_template_directory() . '/inc/markup.php';
require get_template_directory() . '/inc/js_css.php';