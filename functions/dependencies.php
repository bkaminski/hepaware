<?php 
//LOAD SCRIPTS
function enqueue_ha_scripts() {
    wp_enqueue_script('Ajax-Popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('Bootstrap-4.4.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/js/all.js', false, null, null, false);
    wp_enqueue_script('ha-scripts', get_template_directory_uri() . '/assets/js/haScripts.min.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_ha_scripts');
//LOAD CSS
function enqueue_ha_styles() {
    wp_enqueue_style('bootstrap-4.4.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('ha-styles', get_template_directory_uri() . '/assets/styles/haStyles.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_ha_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'hepaware' ),
));
// Nav Walker
