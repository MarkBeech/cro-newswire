<?php add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
remove_filter('term_description','wpautop');
register_sidebars( 1,
array(
'name' => 'AddBar',
'before_widget' => '
<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>
',
'before_title' => '
<h2 class="widgettitle">',
'after_title' => '</h2>
'
)
);
?>
