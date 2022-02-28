<?php
/**
 * Plugin Name: Posts on the Run
 * Description: Puts your content out of your reach. Where did the posts go?
 * Version: 1.0
 * Author: teemusuoranta/wordpress-plugins-from-hell
 * Author URI: https://github.com/teemusuoranta/wordpress-plugins-from-hell
 */

add_action('pre_get_posts', function($wp_query) {

  $wp_query->set('post_type', '🙅');
  $wp_query->set('post__in', [0]);

}, 9000);
