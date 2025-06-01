<?php

function fblgst_setup_theme() {
  add_theme_support('editor-styles');
  add_editor_style([
    '/assets/icons/bootstrap-icons.css',
    '/assets/css/front.css',
    '/assets/css/editor.css'
  ]);
}