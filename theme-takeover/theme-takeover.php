<?php
/**
 * Plugin Name: Theme Takeover
 * Description: I am the theme now. All your templates are belong to me.
 * Version: 1.0
 * Author: teemusuoranta/wordpress-plugins-from-hell
 * Author URI: https://github.com/teemusuoranta/wordpress-plugins-from-hell
 */

add_action('template_include', function ($template) {

  return dirname(__FILE__) . '/template.php';

}, 9000);
