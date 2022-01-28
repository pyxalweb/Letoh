<?php

function theme_files() {
    wp_enqueue_style('main-styles', get_theme_file_uri('/dist/styles.css'));
    wp_enqueue_script('flatpickr', '//cdn.jsdelivr.net/npm/flatpickr', NULL, '1.0', true);
    wp_enqueue_script('gallery-swiper', '//unpkg.com/swiper@7/swiper-bundle.min.js', NULL, '1.0', true);
    wp_enqueue_script('main-scripts', get_theme_file_uri('/dist/scripts.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');

function theme_features() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_features');

function theme_favicon(){ ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/icon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">
    <?php }
add_action('wp_head','theme_favicon');

add_filter( 'show_admin_bar', '__return_false' );

?>