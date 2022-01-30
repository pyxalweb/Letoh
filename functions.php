<?php

// styles and scripts
function theme_files() {
    wp_enqueue_style('main-styles', get_theme_file_uri('/dist/styles.css'));
    wp_enqueue_script('flatpickr', '//cdn.jsdelivr.net/npm/flatpickr', NULL, '1.0', true);
    wp_enqueue_script('gallery-swiper', '//unpkg.com/swiper@7/swiper-bundle.min.js', NULL, '1.0', true);
    wp_enqueue_script('main-scripts', get_theme_file_uri('/dist/scripts.js'), NULL, '1.0', true);
}

// change type='text/javascript' to type='module' for scripts.js
add_filter( 'script_loader_tag', 'add_type_attribute', 10, 3 );
function add_type_attribute($tag, $handle, $src) {
    if ('main-scripts' === $handle) {
        $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    }
    return $tag;
}

// generate styles and scripts
add_action('wp_enqueue_scripts', 'theme_files');




// title tag
function theme_features() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_features');




// add icons
function theme_favicon(){ ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/icon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">
    <?php }
add_action('wp_head','theme_favicon');




// add class to body element
function class_name($classes) {
    $classes[] = 'preload';
    return $classes;
}
add_filter('body_class','class_name');




// hide admin bar
add_filter( 'show_admin_bar', '__return_false' );

?>