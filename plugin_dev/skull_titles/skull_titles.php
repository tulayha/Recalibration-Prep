<?php
/**
 * Plugin Name: Skull Titles
 * Description: Adds a ☠️ prefix to all post titles.
 * Version: 1.0
 * Author: Talha Amjad
 */

add_filter('the_title', 'skull_prefix_title');

function skull_prefix_title($title) {
    if (is_admin()) return $title;
    return '☠️ ' . $title;
}
