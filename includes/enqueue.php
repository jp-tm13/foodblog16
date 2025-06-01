<?php

function fblgst_enqueue() {
  // register bootrstrap icons
  wp_register_style(
    'fblgst_icons_bootstrap',
    get_theme_file_uri('/assets/icons/bootstrap-icons.min.css')
  );

  // register stylesheet for general styles
  wp_register_style(
    'fblgst_style_front',
    get_theme_file_uri('/assets/css/front.css')
  );

  // enqueue registered files
  wp_enqueue_style('fblgst_icons_bootstrap');
  wp_enqueue_style('fblgst_style_front');
}