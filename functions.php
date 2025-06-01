<?php

// variables


// includes
include(get_theme_file_path('/includes/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));


// hooks
add_action('wp_enqueue_scripts', 'fblgst_enqueue');
add_action('after_setup_theme', 'fblgst_setup_theme');