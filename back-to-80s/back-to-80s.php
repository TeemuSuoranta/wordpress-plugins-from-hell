<?php
/**
 * Plugin Name: Back to 80s
 * Description: Takes you back to arguably the best decade. Literally.
 * Version: 1.0
 * Author: teemusuoranta/wordpress-plugins-from-hell
 * Author URI: https://github.com/teemusuoranta/wordpress-plugins-from-hell
 */

function back_to_80s_if_i_could_turn_back_time() {

  global $wpdb;

  // get posts that are not in the 1980s (50 rows at a time)
  $posts = $wpdb->get_results("
    SELECT ID AS post_id
    FROM $wpdb->posts
    WHERE post_date NOT BETWEEN '1980-01-01 00:00:00' AND '1989-12-31 23:59:59'
    LIMIT 100", ARRAY_A);

  if (!empty($posts)) {

    foreach ($posts as $post_arr) {

      // get random date from 1980s
      $new_date = date('Y-m-d H:i:s', rand(strtotime('1980-01-01 00:00:00'), strtotime('1989-12-31 23:59:59')));

      // updaet dates
      $wpdb->update(
        "$wpdb->posts",
        [
          'post_date'     => $new_date,
          'post_date_gmt' => get_gmt_from_date($new_date),
        ],
        [
          'ID' => $post_arr['post_id']
        ],
        [
          '%s',
          '%s'
        ],
        [
          '%d'
        ]
      );

    }

  }

}

add_action('wp', 'back_to_80s_if_i_could_turn_back_time');
register_activation_hook(__FILE__, 'back_to_80s_if_i_could_turn_back_time');
