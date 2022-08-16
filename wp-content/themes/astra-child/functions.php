<?php

function wpr_add_style() {
    wp_enqueue_style('wpr-academy-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wpr_add_style');

function wpr_add_nav_sticky() {
    echo '
    <div class="sticky-nav">
	    <a href="tel:+40743078300" class="cta">Contact US NOW</a>
    </div>';
}
add_action('astra_head_top', 'wpr_add_nav_sticky');