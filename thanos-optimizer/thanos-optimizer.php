<?php
/**
 * Plugin Name: Thanos Optimizer
 * Description: Makes your site faster by deactivating half of the plugins.
 * Version: 1.0
 * Author: teemusuoranta/wordpress-plugins-from-hell
 * Author URI: https://github.com/teemusuoranta/wordpress-plugins-from-hell
 */

/**
 * Deactivate half of the plugins
 */
function thanos_optimizer_snap() {

  // fetch list of activated plugins
  $plugins = (array) get_option('active_plugins');

  // randomize order
  shuffle($plugins);

  // select first half
  $plugins_to_remove = array_slice($plugins, 0, count($plugins) / 2);

  // deactivate plugins
  foreach ($plugins_to_remove as $i => $plugin) {
    deactivate_plugins(plugin_basename(trim($plugin)));
  }

}

register_activation_hook(__FILE__, 'thanos_optimizer_snap');
