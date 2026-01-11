<?php
/**
 * Bootstrap file to initiate core files.
 */
include 'block-patterns.php';

/**
 * Welcome Page.
*/
require get_template_directory() . '/core/welcome/welcome.php';

/**
 * Local Plugin Install
*/
require get_template_directory() . '/core/welcome/class-thim-plugin.php';